<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes; // Importing the database class "SoftDeletes"

class Post extends Model // The post model inherits functionality from it's parent class which is Model.
{                          // This Post model manages everything to do with the posts table in the database

    protected $fillable = [ // Creating a variable where we tell Laravel that the columns title and body in the posts database table
                            // Is safe to be updated. This is used for mass assigning.
        'title',
        'body'

    ];

    use SoftDeletes; // Allow the database table posts use the class SoftDeletes

    protected $dates = ['deleted_at']; // Letting Laravel know to treat this column as a timestamp column

    public function user(){ // This function allows me to target which post belongs to a user.

        return $this->belongsTo('App\User');

    }

    public function photos(){

        return $this->morphMany('App\Photo', 'imageable');

    }
}
