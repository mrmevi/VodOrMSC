<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    protected $fillable = [
        'title',
        'description',
        'content',
        'is_moderate',
        'place',
        'date',
        'thumbnail',
    ];

    use HasFactory;
    use Sluggable;
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function getPostDate(){
        return Carbon::createFromFormat('Y-m-d H:i:s', $this->date)->format('d F, Y');
    }

    public function images(){
        return $this->hasMany(Image::class);
    }
}
