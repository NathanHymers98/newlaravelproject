<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{

    //Creating a polymorphic relationship
    public function imageable(){

        return $this->morphTo();

    }
}
