<?php
include("Parsedown.php");
$Parsedown = new Parsedown();
$parsed = trim(preg_replace('/\s+/', ' ', Parsedown::instance()->line($_POST['edit']))); 
var_dump($parsed);

//file_put_contents("blog.txt", $parsed, FILE_APPEND);

?>