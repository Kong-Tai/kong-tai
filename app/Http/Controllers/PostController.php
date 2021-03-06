<?php

namespace App\Http\Controllers;

use App\Post;
use App\PostImage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    public function getAllPosts()
    {
        $posts = Post::with(['post_images', 'user'])->orderBy('created_at', 'desc')->get();
        return response()->json(['data' => $posts]);
    }

    public function createPost(Request $request)
    {
        DB::transaction(function () use ($request) {
            $user = Auth::user();
            $title = $request->title;
            $body = $request->body;
            $images = $request->images;
            $post = Post::create([
                'title' => $title,
                'body' => $body,
                'user_id' => $user->id,
            ]);
            // store each image
            foreach ($images as $image) {
                $imagePath = Storage::disk('uploads')->put($user->email . '/posts/' . $post->id, $image);
                PostImage::create([
                    'post_image_caption' => $title,
                    'post_image_path' => '/uploads/' . $imagePath,
                    'post_id' => $post->id
                ]);
            }
        });
        return response()->json(200);
    }
}
