<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    public function posts(){ // This method is relating the posts and user tables

        // This method uses 2 tables, in this case it is using the posts and users tables.
        // The first table is what it is going to be looking through in order to get the country_id. i.e posts
        // However, since the posts table does not store any users with country_id.
        // It only relates posts and users together, we have to use the pivot table which can get the country_id from the users table.
        return $this->hasManyThrough('App\Post', 'App\User');


        // The code below would be user if the id's I was looking for were not following Laravel convention e.g country_id and user_id.
        // I do not need to use this because my id's follow the convention, however if I had custom names for the id's such as the examples below, this is how I would do it.
        //return $this->hasManyThrough('App\Post', 'App\User', 'the_country_id', 'the_user_id');
    }
}
