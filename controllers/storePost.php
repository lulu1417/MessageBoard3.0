<?php
require 'vendor/autoload.php';
if (isset($_POST['submit'])) {
    if($_POST['subject'] && $_POST['content']) {
        $post = Post::create([
            'subject' => $_POST['subject'],
            'content' => $_POST['content'],
            'user_id' => $_SESSION['user_id'],
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        Redirect::setTimeoutString('board',10);
    }else{
        Redirect::setTimeoutString('addPost', 10);
    }
}


