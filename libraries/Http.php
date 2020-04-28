<?php 
/**
 * Redirection function
 * Redirect('index.php');
 */
class Http{
    public static function redirect(string $url): void
    {
    header("Location: $url");
    exit();   
    }
}