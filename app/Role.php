<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    public function users(){ // If I want to return the owner of a specific role, this is the function that I would have to create.
                                // This function is called an inverse relationship.

        return $this->belongsToMany('App\User');

    }
}
