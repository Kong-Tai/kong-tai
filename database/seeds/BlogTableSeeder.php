<?php

use App\Post;
use App\Reply;
use App\Comment;
use App\PostImage;
use Illuminate\Database\Seeder;

class BlogTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $posts = factory(Post::class, 8)->create();
        $post_images = factory(PostImage::class, 16)->create();
        $comments = factory(Comment::class, 16)->create();
        $comments = factory(Reply::class, 32)->create();
    }
}
