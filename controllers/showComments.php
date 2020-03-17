<?php
require 'vendor/autoload.php';
require 'header.php';
if (isset($_POST['submit'])) {
    $_SESSION['post_id'] = $_POST['post_id'];
}
$comments = Comment::orderBy('created_at', 'desc')->with('user')->where('post_id', $_SESSION['post_id'])->get();

require 'views/showComments.view.php';
