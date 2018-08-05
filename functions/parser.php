<?php
function parse($source, $reg){
$reg = preg_match_all("/(#)(.*?)\((.*?)\) (.*?) (~~)(\p{L}+)/", $source, $parsed);
$posts = array();
$numposts = count($parsed[0]) -1;
$numfields = count($parsed);
for ($i=0; $i <= $numposts; $i++) {
		$posts[$parsed[3][$i]] = array("title" => $parsed[2][$i], "id" => $parsed[3][$i], "content" => $parsed[4][$i], "author" => $parsed[6][$i]); 
	} 

return $posts;
}