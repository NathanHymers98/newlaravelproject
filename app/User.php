<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function post(){

        return $this->hasOne('App\Post'); // Go to the posts table since we gave it the namespace for that table.
                                                // By default it will look for user_id column.
                                                // If named differently, the namespace would have a parameter.
                                                // If I named the column the_user_id then the code would look like this: hasOne('App\Post', 'the_user_id');

    }

    public function posts(){ // Creating another Eloquent database relationship.

        return $this->hasMany('App\Post'); // Using the hasMany method to indicate that something can have multiple posts.
                                                    // For example a user can have multiple posts.
    }

    public function roles(){

        return $this->belongsToMany('App\Role')->withPivot('created_at'); // withPivot method allows us to show the data of another column in the pivot table.

//        return $this->belongsToMany('App\Role', 'user_roles', 'user_id', 'role_id'); // This is an example of if I do not follow the convention of creating a pivot table.
                                                                                        // The 'user_roles' is the name of the pivot table.
                                                                                        // 'user_id' is the foreign key for a user.
                                                                                        // 'role_id' is the foreign key for the role.
                                                                                        // These only need to be defined if the Laravel convention for creating a pivot table has not been followed.

    }

    public function photos(){

        return $this->morphMany('App\Photo', 'imageable');

    }
}
