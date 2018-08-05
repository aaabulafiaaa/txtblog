<?php
function render($layout, $post = null){
extract($post);
foreach ($post as $var => $cont){
$layout =  str_replace('$'.$var, $cont, $layout);
	}
	//echo str_replace("author", $author, $layout);
	echo $layout;
}

function head(){
echo file_get_contents("{$GLOBALS['folders']['html']}header.txt");	
}

function footer(){
echo file_get_contents("{$GLOBALS['folders']['html']}footer.txt");
}
