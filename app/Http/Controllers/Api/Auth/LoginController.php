<?php

namespace App\Http\Controllers\Api\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;

class LoginController extends Controller
{
    // Login
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);
        $request->request->add([
            'grant_type' => 'password',
            'client_id' => 2,
            'client_secret' => 'PlfVRd9dD9TI0FK3SFUw8tmMlyavAIJSAJBnvpfF',
            'username' => $request->name,
            'password' => $request->password,
        ]);
        $requestToken = Request::create(env('APP_URL') . '/oauth/token', 'post');
        $response = Route::dispatch($requestToken);
        return $response;
    }

    // Log Out
    public function destroy(Request $request)
    {
        $request->user()->token()->revoke();

        return response()->noContent();
    }
}
