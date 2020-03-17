<?php

echo "<a href='board'>All Posts</a>";
if(isset($_SESSION['name'])){
    echo '<a href="addPost">Add post</a>';
}

echo '<a href="/">leave</a>';