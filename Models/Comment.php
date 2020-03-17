<?php
use Illuminate\Database\Eloquent\Model;
class Comment extends Model {

    protected $guarded = [];

    public function replies () {
        return $this->hasMany(Reply::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function post() {
        return $this->belongsTo(Post::class);
    }

}