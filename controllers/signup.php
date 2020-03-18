<?php
require 'vendor/autoload.php';
if (isset($_POST['submit'])) {
    require 'views/index.view.php';
    if($_POST['name'] && $_POST['password']){
        $_SESSION['name'] = $_POST['name'];
        $user = User::where('name', $_POST['name'])->first();

        if (!$user) {
            $user = User::create([
                'name' => $_POST['name'],
                'password' => hash('sha256', $_POST['password']),
                'created_at' => date("Y-m-d H:i:s"),
            ]);
            $_SESSION['user_id'] = $user->id;
            echo "
        <script>
            setTimeout(function(){window.location.href='board';},20);
        </script>";
        } else {
            echo '<div class="warning">The Username has already been used ！</div>';
            echo "
        <script>
            setTimeout(function(){window.location.href='/';},2000);
        </script>";

        }
    }else{

        echo '<div class="warning">Please enter Username and password ！</div>';
        echo "
        <script>
            setTimeout(function(){window.location.href='/';},2000);
        </script>";

    }


}