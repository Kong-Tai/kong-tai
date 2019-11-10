<?php

namespace App\Http\Controllers;

use App\Portfolio;
use App\PortfolioCategory;
use Illuminate\Http\Request;

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
    public function singlePost()
    {
        return view('pages.blog.viewPost');
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
