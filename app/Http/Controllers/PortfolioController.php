<?php

namespace App\Http\Controllers;

use App\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function store(Request $request)
    {
        $project = Portfolio::create([
            'title'      =>  $request->title,
            'intro'       =>  $request->intro,
            'client'     =>  $request->client,
            'website_url'        => $request->website_url,
            'description' =>   $request->description,
            'workdate'   => $request->workdate,
            'linkedin_url'     => $request->linkedin_url,
            'twitter_url'     => $request->twitter_url,
            'facebook_url'     => $request->facebook_url,
            'category_id' => $request->category_id,
            'user_id' => $request->user_id,
            'order' => $request->order
        ]);

        $data = [
            'data' => $project,
            'status' => (bool) $project,
            'message' => $project ? 'Task Created!' : 'Error Creating Task',
        ];

        return response()->json($data);
    }
}
