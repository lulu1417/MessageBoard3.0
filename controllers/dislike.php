<?php
require 'vendor/autoload.php';

if (isset($_POST['submit'])) {
    Like::find($_POST['like_id'])->delete();
    Redirect::setTimeoutString('board',10);
}
?>