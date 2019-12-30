<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Picture extends Model
{

    protected $upload= "/images/";
    protected $filable=['path'];

    protected $table='pictures';

    public function getPathAttribute($photo){
        return $this->upload.$photo;
    }


}
