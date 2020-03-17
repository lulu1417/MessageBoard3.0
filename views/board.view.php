<title>All Posts</title>
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
    foreach ($posts as $post) {
        echo "Author：" . $post->user->name;
        echo "<br>Subject：" . $post->subject;
        echo "<br>Content：" . $post->content;
        echo "<br>Time：" . $post->created_at;
        echo '
        <form name="form1" action="storeLike" method="post">
        <input type="hidden" name="post_id" value= ' . $post->id . ' >
        <input type="submit" name="submit" value= "Like 👍" >
        </form>';

        echo '
            <form name="form1" action="showComments" method="post">
        <input type="hidden" name="post_id" value=' . $post->id . '>
        <input type="submit" name="submit" value= "All comments" >
        </form>';

        echo '
         <form name="form1" action="storeComment" method="post">
                <input type="hidden" name="post_id" value= ' . $post->id . ' >
                <p><textarea style="font-family: \'Nunito\', sans-serif; font-size:20px; width:550px;height:100px;" name="content"></textarea></p>
                <p><input type="submit" name="submit" value="SEND">

            </form>
        ';
        require 'buttonStyle.html';
        echo "<hr>";
        $i++;
    }
    echo '<div class="bottom left position-abs content">';
    echo "There are " . $i . " posts.";

    ?>

</div>
</body>
</html>