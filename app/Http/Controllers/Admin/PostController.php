<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Image;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Inertia\Inertia;
use function PHPUnit\Framework\isFalse;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){

        $posts = Post::paginate(10);
        return Inertia::render('Admin/PostsShowPage', [
            'posts' => $posts,
        ]);
    }

    /**
     * Вывести один пост.
     */
    public function show(string $slug)
    {

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        return Inertia::render('Admin/PostsCreatePage', []);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request){

        $data = $request->all();
        $files = [];

        if ($request->hasFile('files')){
            $files = $data['files'];
            unset($data['$files']);
        }


        if ($request->hasFile('thumbnail')){
            $name = md5(Carbon::now() . '_' . $data['thumbnail']->getClientOriginalName()) . '.' . $data['thumbnail']->getClientOriginalExtension();
            $filePath = Storage::disk('public')->putFileAs('/images/posts/thumbnails', $data['thumbnail'], $name);
            $data['thumbnail'] = $filePath;
        }

        $post = Post::create($data);

        if ($files){
            Image::uploadImg($files, $post->id);
        }
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function edit(string $slug){

        $post = Post::where('slug', $slug)->firstOrFail();
        $postImageUrl = '/public/storage/uploads/' . $post->thumbnail;
        return Inertia::render('Admin/PostsEditPage', [
            'post' => $post,
            'postImageUrl' => $postImageUrl,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PostRequest $request, string $id){

        $post = Post::find($id);
        $post->update($request->all());
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id){
        $post = Post::find($id);

        if ($post->thumbnail) {
            Storage::delete($post->thumbnail);
        }

        if ($post->images){
            $images = $post->images;
            foreach ($images as $image){
                $image->delete();
            }
            Storage::deleteDirectory('images/posts/' . $post->id);
        }

        $post->delete();
        return redirect()->route('posts.index');
    }
}
