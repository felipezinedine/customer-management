<?php 


namespace Src\Utilities;

class Redirect 
{
    public static function route(string $url) {
        echo '<script>window.location.href="'. $url .'"</script>';
        die; 
    }

    public static function back() {
        echo '<script>javascript:history.go(-1)</script>';
        die;
    }
}