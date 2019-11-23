<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersRolesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() // This migration is a pivot table. It takes both the user and role database tables and relate them to each other.
                        // To make this table, you need to follow a Laravel convention which is as follows
                        // php artisan make:migration create_users_roles_table --create=role_user
                        // The command above is creating the pivot table and Laravel knows it is this kind of table because we added --create=role_user
                        // It includes both names of the tables we want to relate to in singular sense ("user" instead of "users") and has them in alphabetical order. This is the convent that must be followed for creating pivot tables in Laravel.
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('role_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('role_user');
    }
}
