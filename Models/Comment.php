<?php
class Comment extends Model {

    protected $guarded = [];

    public function replies () {
        return $this->hasMany(Reply::class);
    }

    public function user() {
        return $this->belongTo(User::class);
    }

    public function post() {
        return $this->belongTo(Post::class);
    }

}