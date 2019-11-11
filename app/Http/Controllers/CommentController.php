<?php

namespace App\Http\Controllers;

use App\Post;
use App\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function store(Comment $comment)
    {

        $this->validate(request(), ['body' => 'required']);
        // $id = Auth::user();
        $comment->create([
            'body' => request('body'),
            'post_id' => request('post_id'),
            'user_id'  => Auth::id(),
        ]);
        $post_id = request('post_id');

        $post = Post::with(['post_images', 'user', 'comments', 'comments.user', 'comments.replies', 'comments.replies.user'])->orderBy('created_at', 'desc')->findOrFail($post_id);
        return response()->json([
            'post'    => $post,
        ]);
    }

    public function replyStore(Request $request)
    {
        $reply = new Comment();
        $reply->body = $request->get('comment_body');
        $reply->user()->associate($request->user());
        $reply->parent_id = $request->get('comment_id');
        $post = Post::find($request->get('post_id'));

        $post->comments()->save($reply);

        return back();
    }
}
