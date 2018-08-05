<?php

$GLOBALS['folders'] = array(
							'functions' => 'functions/',
							'html' => 'html/'
							);

include("{$GLOBALS['folders']['functions']}parser.php");
include("{$GLOBALS['folders']['functions']}render.php");
include("{$GLOBALS['folders']['functions']}initialize.php");


initialize();

