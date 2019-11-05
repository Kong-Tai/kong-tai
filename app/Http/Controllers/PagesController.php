<?php

namespace App\Http\Controllers;

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
        return view('home');
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
