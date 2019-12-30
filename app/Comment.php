<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Replies;

class Comment extends Model
{
    
    public function commentReply(){
        return $this->hasMany('App\Replies');
    }
}
