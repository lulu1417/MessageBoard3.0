<?php
require 'vendor/autoload.php';

$likes = Like::orderBy('created_at', 'desc')->with('user')->where('post_id', $_SESSION['post_id'])->get();

require 'views/showLikes.view.php';