<?php
use Illuminate\Database\Eloquent\Model;
class Reply extends Model {

    protected $guarded = [];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function comment() {
        return $this->belongsTo(User::class);
    }

}