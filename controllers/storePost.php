<?php
require 'vendor/autoload.php';
require 'header.php';
if (isset($_POST['submit'])) {
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
}
