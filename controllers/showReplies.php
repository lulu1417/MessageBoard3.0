<?php
require 'vendor/autoload.php';
require 'header.php';
if (isset($_POST['submit'])) {
    $_SESSION['comment_id'] = $_POST['comment_id'];
}
$replies = Reply::orderBy('created_at', 'desc')->with('user')->where('comment_id', $_SESSION['comment_id'])->get();

require 'views/showReplies.view.php';
