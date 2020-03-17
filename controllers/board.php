<?php
require 'vendor/autoload.php';
require 'header.php';

if (isset($_POST['name'])) {
    $_SESSION['name'] = $_POST['name'];
}
$posts = Post::orderBy('created_at', 'desc')->with('user')->get();

require 'views/board.view.php';
