<?php
class Like extends Model {

    protected $guarded = [];

    public function user() {
        return $this->belongTo(User::class);
    }

    public function post() {
        return $this->belongTo(Post::class);
    }

}