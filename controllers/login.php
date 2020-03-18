<?php
require 'vendor/autoload.php';
if (isset($_POST['submit'])) {
    require 'views/signin.view.php';
    if($_POST['name'] && $_POST['password']) {
        $_SESSION['name'] = $_POST['name'];
        $user = User::where('name', $_POST['name'])->first();
        $_SESSION['user_id'] = $user->id;
        if ($user && $user->password == hash('sha256', $_POST['password'])) {
            echo '<div class="success">Welcome ！</div>';
            $user = User::where('name', $_POST['name'])->first();
            echo "
        <script>
            setTimeout(function(){window.location.href='board';},2000);
        </script>";

        } else {
            echo '<div class="warning">Wrong Username or password ！</div>';
            echo "
        <script>
            setTimeout(function(){window.location.href='signin';},2000);
        </script>";
        }
    }else{
        echo '<div class="warning">Please enter Username and password ！</div>';
        echo "
        <script>
            setTimeout(function(){window.location.href='signin';},2000);
        </script>";

    }

}