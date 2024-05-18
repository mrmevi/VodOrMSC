<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Image extends Model
{
    use HasFactory;

    protected $fillable = [
        'path',
        'url',
        'post_id',
    ];

    public static function uploadImg($images, $post_id){
        foreach ($images as $image){
            $name = md5(Carbon::now() . '_' . $image->getClientOriginalName()) . '.' . $image->getClientOriginalExtension();
            $filePath = Storage::disk('public')->putFileAs('/images/posts/' . $post_id, $image, $name);
            Image::create([
                'path' => $filePath,
                'url' => url('/public/storage/uploads/' . $filePath),
                'post_id' => $post_id,
            ]);
        }
    }

    public function post(){
        return $this->belongsTo(Post::class);
    }
}
