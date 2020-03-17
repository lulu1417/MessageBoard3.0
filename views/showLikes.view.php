<title>Who also like this</title>
<?php
require 'style.css';
?>
<body>
<div class="flex-center position-ref full-height">
    <div class="top-right home">
        <?php
        require 'partials/nav.php';
        ?>
    </div>

</div>
<div class="note full-height">
    <?php
    foreach ($likes as $like) {
        echo "User：" . $like->user->name;
        echo "<br>Time：" . $like->created_at;

        if ($like->user->name == $_SESSION['name']) {
            echo '
                <form name="form1" action="dislike" method="post">
                    <input type="hidden" name="like_id" value='.$like->id.'>
                    <input type="submit" name="submit" value= "Retrive like 👎" >
                </form>
        
            ';
        }
        require 'buttonStyle.html';

        echo "<hr>";

    }
    ?>

</div>
</body>
</html>