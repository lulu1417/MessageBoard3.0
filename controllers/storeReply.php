<?php
require 'vendor/autoload.php';
require 'header.php';
if (isset($_SESSION['name']) && isset($_POST['submit'])) {
    $reply = Reply::create([
        'content' => $_POST['content'],
        'comment_id' => $_POST['comment_id'],
        'user_id' => $_SESSION['user_id'],
        'created_at' => date("Y-m-d H:i:s"),
    ]);
    $_SESSION['comment_id'] = $_POST['comment_id'];
    echo "
<script>
    setTimeout(function(){window.location.href='showReplies';},20);
</script>";
}else{

    echo "
        <script>
            setTimeout(function(){window.location.href='/';},20);
        </script>";

}