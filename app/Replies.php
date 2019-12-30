<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Comment;

class Replies extends Model
{
    public function commentReply(){
        return $this->belongsTo('App\Comment');
    }
}
