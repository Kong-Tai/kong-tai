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
        $portfolio = Portfolio::with('category')->get();
        $categories = PortfolioCategory::get();
        return view('home', [
            'portfolio' => $portfolio,
            'categories' => $categories
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
     * Display Work View.
     *
     * @return \Illuminate\Http\Response
     */
    public function singlework()
    {
        return view('pages.single-work');
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
