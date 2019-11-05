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
        return view('blog');
    }

    // public function packages()
    // {
    //     $packages = Package::all();
    //     $packageLabels = config('packages.labels');

    //     return view('packages', compact('packageLabels', 'packages'));
    // }

    // /**
    //  * Show the page.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function showPage($slug)
    // {
    //     $page = Page::where('slug', $slug)->first();
    //     return view('page')->withPage($page);
    // }

    // /**
    //  * Show FAQ page
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function faq()
    // {
    //     return view('faq');
    // }
    // public function privacyPolicy()
    // {
    //     // $client = new Client();
    //     // $res = $client->get('https://www.iubenda.com/api/privacy-policy/74652035');
    //     // $content = json_decode($res->getBody()->getContents());

    //     return view('privacy_policy');
    //     // ->withContent($content->content)
    // }
    // public function cookiePolicy()
    // {
    //     // $client = new Client();
    //     // $res = $client->get('https://www.iubenda.com/api/privacy-policy/74652035/cookie-policy');
    //     // $content = json_decode($res->getBody()->getContents());

    //     return view('cookie_policy');
    //     // ->withContent($content->content);
    // }

    // /**
    //  * Show about page
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function about()
    // {
    //     return view('about');
    // }
    // public function localGuide()
    // {
    //     return view('local_guide');
    // }
    // public function propertyAdvice()
    // {
    //     return view('property_advice');
    // }
    // public function news()
    // {
    //     return view('news');
    // }

    // /**
    //  * Show about page
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function contact()
    // {
    //     return view('contact');
    // }

    // /**
    //  * Send contact message
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function sendMessage(Request $request)
    // {
    //     $this->validate($request, [
    //         'first_name' => 'required|string',
    //         'last_name' => 'required|string',
    //         'email' => 'required|email',
    //         'phone_number' => 'required',
    //         'subject' => 'required',
    //         'message' => 'required'
    //     ]);

    //     $message = (new ContactMessage(
    //         $request->email,
    //         $request->first_name,
    //         $request->last_name,
    //         $request->message,
    //         $request->subject
    //     ));

    //     Mail::send($message);

    //     return response()->json([
    //         'status' => 'success',
    //         'status_code' => '200',
    //         'message' => 'Your message has been submitted. We will get back to you shortly.'
    //     ], 200);
    // }

    // public function bookValuation()
    // {
    //     $parish = Parish::all();

    //     return view('seller.book_valuation', compact('parish'));
    // }
    // public function virtualTours()
    // {
    //     return view('seller.virtual_tours');
    // }
}
