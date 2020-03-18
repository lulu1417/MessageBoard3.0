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

        echo "
        <script>
            setTimeout(function(){window.location.href='showComments';},20);
        </script>";

    }else{
        echo "
        <script>
            setTimeout(function(){window.location.href='board';},20);
        </script>";

    }

}else{

    echo "
        <script>
            setTimeout(function(){window.location.href='/';},20);
        </script>";

}