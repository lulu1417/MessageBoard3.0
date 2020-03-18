<?php
require 'vendor/autoload.php';
if (isset($_SESSION['name']) && isset($_POST['submit'])) {
    if ($_POST['content']) {
        $reply = Reply::create([
            'content' => $_POST['content'],
            'comment_id' => $_POST['comment_id'],
            'user_id' => $_SESSION['user_id'],
            'created_at' => date("Y-m-d H:i:s"),
        ]);
        $_SESSION['comment_id'] = $_POST['comment_id'];
        Redirect::setTimeoutString('showReplies',10);
    }else{
        Redirect::setTimeoutString('showComments',10);
    }
} else {

    Redirect::setTimeoutString('/',10);
}