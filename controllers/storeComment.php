<?php
require 'vendor/autoload.php';
if (isset($_SESSION['name']) && isset($_POST['submit']) ) {
    $_SESSION['post_id'] = $_POST['post_id'];
    if($_POST['content']){
        $comment = Comment::create([
            'content' => $_POST['content'],
            'post_id' => $_POST['post_id'],
            'user_id' => $_SESSION['user_id'],
            'created_at' => date("Y-m-d H:i:s"),
        ]);

        Redirect::setTimeoutString('showComments',10);

    }else{
        Redirect::setTimeoutString('board',10);

    }

}else{
    Redirect::setTimeoutString('/',10);

}