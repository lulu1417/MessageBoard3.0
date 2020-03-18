<?php

use Illuminate\Database\Eloquent\Model;

class User extends Model {

    protected $guarded = [];
    protected $hidden = ['password'];

    public function posts () {
        return $this->hasMany(Post::class);
    }

    public function comments () {
        return $this->hasMany(Comment::class);
    }

    public function replies () {
        return $this->hasMany(Reply::class);
    }

    public function likes () {
        return $this->hasMany(Like::class);
    }

}