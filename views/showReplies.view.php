<title>All Replies</title>
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
    $i = 0;
    foreach ($replies as $reply){
        echo "Author：".$reply->user->name;
        echo "<br>Content：".$reply->content;
        echo "<br>Time：".$reply->created_at;

        require 'buttonStyle.html';
        echo "<hr>";
        $i++;

    }
    echo '<div class="bottom left position-abs content">';
    echo "There are " . $i . " replies.";
    ?>

</div>
</body>
</html>