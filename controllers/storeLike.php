<?php
require 'vendor/autoload.php';
if (isset($_SESSION['name']) && isset($_POST['submit'])) {
    $like = Like::where('user_id', $_SESSION['user_id'])->where('post_id', $_POST['post_id'])->first();

    if(!$like){
        $like = Like::create([
            'post_id' => $_POST['post_id'],
            'user_id' => $_SESSION['user_id'],
            'created_at' => date("Y-m-d H:i:s"),
        ]);
    }

    $_SESSION['post_id'] = $_POST['post_id'];
    echo "
        <script>
            setTimeout(function(){window.location.href='showLikes';},20);
        </script>";
}else{

    echo "
        <script>
            setTimeout(function(){window.location.href='/';},20);
        </script>";

}

