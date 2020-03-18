<?php
require 'vendor/autoload.php';

if (isset($_POST['submit'])) {
    Like::find($_POST['like_id'])->delete();
    echo "
                <script>
                 setTimeout(function(){window.location.href='board';},10);
                </script>";
}
?>