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
            Redirect::setTimeoutString('board',10);
        } else {
            echo '<div class="warning">The Username has already been used ！</div>';
            Redirect::setTimeoutString('/',2000);


        }
    }else{
        echo '<div class="warning">Please enter Username and password ！</div>';
        Redirect::setTimeoutString('/',10000);

    }


}