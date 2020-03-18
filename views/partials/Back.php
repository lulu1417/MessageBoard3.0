<?php

class Back
{
    public static function setBackString($uri)
    {
        $uri = '\''.$uri.'\'';
        echo '<a href='.$uri.'>back</a>';
    }

}