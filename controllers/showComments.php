<?php
require 'vendor/autoload.php';
if (isset($_POST['submit'])) {
    $_SESSION['post_id'] = $_POST['post_id'];
}

$comments = Comment::where('post_id', $_SESSION['post_id'])->with('user')->orderBy('created_at', 'desc')->get();

require 'views/showComments.view.php';
