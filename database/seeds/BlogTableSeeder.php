<?php

use App\Post;
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
        $post_images = factory(PostImage::class, 8)->create();
    }
}
