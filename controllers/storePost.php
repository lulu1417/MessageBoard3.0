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
        echo "
        <script>
            setTimeout(function(){window.location.href='board';},20);
        </script>";
    }else{
        echo "
        <script>
            setTimeout(function(){window.location.href='addPost';},20);
        </script>";
    }
}
