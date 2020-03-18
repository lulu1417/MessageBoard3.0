<?php

class Redirect
{

    public static function setTimeoutString($uri, $time)
    {
        $uri = '\''.$uri.'\'';
        echo '
        <script>
            setTimeout(function(){window.location.href='.$uri.';},'.$time.');
        </script>';

    }

}
