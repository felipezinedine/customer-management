<?php 

namespace Src\Utilities;

class Help
{
    public static function alert(string $message) {
        echo '<script>alert("'. $message .'")</script>';
    }

    public static function getFirstAndSecondName(string $fullName): string
    {
        $nameParts = explode(' ', $fullName);

        if (count($nameParts) >= 2) {
            return $nameParts[0] . ' ' . $nameParts[1];
        }
        return $nameParts[0];
    }
}