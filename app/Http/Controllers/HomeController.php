<?php

namespace App\Http\Controllers;

use App\Http\Resources\PostResourceNotImages;
use App\Models\Post;
use Illuminate\Http\Request;
use Inertia\Inertia;

class HomeController extends Controller
{
    public function index(){
        $posts = Post::orderBy('date', 'desc')->paginate(5);

        if ($posts->count()){
            $arr = $posts;
            $firstPost = $arr[0];
            $postsList = $posts->skip(1);

            return Inertia::render('Front/HomePage', [
                'posts' => PostResourceNotImages::collection($postsList),
                'firstPost' => new PostResourceNotImages($firstPost),
            ]);
        }
        return Inertia::render('Front/HomePage', [
            'posts' => null,
            'firstPost' => null,
        ]);
    }

    public function test(){

    }
}
