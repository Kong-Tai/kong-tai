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
    public function blog()
    {
        return view('pages.blog');
    }

    /**
     * Display Post View.
     *
     * @return \Illuminate\Http\Response
     */
    public function post()
    {
        return view('pages.blog.view');
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
