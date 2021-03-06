<?php

namespace App\Http\Controllers;

use App\Post;
use App\Portfolio;
use App\PortfolioCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    /**
     * Display Home View.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        $portfolio = Portfolio::with(['category'])->get();
        $categories = PortfolioCategory::get();
        return view('home', [
            'portfolio' => $portfolio,
            'categories' => $categories
        ]);
    }

    /**
     * Display Work View.
     *
     * @return \Illuminate\Http\Response
     */
    public function singlework()
    {
        $portfolioList = Portfolio::with(['category', 'portfolio_carousels', 'portfolio_galleries'])->get();
        $portfolio = $portfolioList[0];
        return view('pages.single-work', [
            'portfolio' => $portfolio
        ]);
    }

    /**
     * Display Blog View.
     *
     * @return \Illuminate\Http\Response
     */
    public function postList()
    {
        return view('pages.blog.postList');
    }

    /**
     * Display Post View.
     *
     * @return \Illuminate\Http\Response
     */
    public function singlePost($post)
    {
        $post = Post::with(['post_images', 'user', 'comments', 'comments.user', 'comments.replies', 'comments.replies.user'])->orderBy('created_at', 'desc')->findOrFail($post);

        return view('pages.blog.singlePost', [
            'post' => $post
        ]);
    }

    /**
     * Display About View.
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('pages.about');
    }
}
