<?php
class Reply extends Model {

    protected $guarded = [];

    public function user() {
        return $this->belongTo(User::class);
    }

    public function comment() {
        return $this->belongTo(User::class);
    }

}