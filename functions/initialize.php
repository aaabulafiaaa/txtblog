<?php

function initialize() {
$layout = file_get_contents("{$GLOBALS['folders']['html']}single_post.txt");
$source = file_get_contents("blog.txt");
$reg = file_get_contents("rule.txt");


$id = isset($_GET['id']) ? $_GET['id'] : null; 

$posts = parse($source, $reg);
		

head();
if($id && $posts[$id])
{
	render($layout, $posts[$id]);
} else { 
	foreach ($posts as $post) {
		render($layout, $post);
	}
}
footer();
}