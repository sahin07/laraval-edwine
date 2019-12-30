<?php

namespace App;

use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;
use Illuminate\Database\Eloquent\Model;

use App\Picture;
use App\Comment;

class Post extends Model
{

    use HasSlug;
    protected $filable = [
        'category_id',
        'user_id',
        'photo_id',
        'title',
        'content'
    ];

    public function getSlugOptions() : SlugOptions
    {
        return SlugOptions::create()
            ->generateSlugsFrom('title')
            ->saveSlugsTo('slug');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function photo(){
        return $this->belongsTo('App\Picture');
    }

    public function comments(){
        return $this->hasMany('App\Comment');
    }
}
