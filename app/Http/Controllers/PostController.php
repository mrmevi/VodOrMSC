<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResource;
use App\Http\Resources\PostResourceNotImages;
use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class PostController extends Controller{

    public function index(){
        $posts = Post::orderBy('date', 'desc')->paginate(5);
        return Inertia::render('Front/PostsListPage', [
            'posts' => PostResource::collection($posts)
        ]);
    }

    public function viewPost($slug){

        $post = Post::where('slug', $slug)->firstOrFail();

        $images = $post->images;


        return Inertia::render('Front/SinglePostViewPage', [
            'post' => new PostResourceNotImages($post),
            'images' => $images
        ]);
    }
}
