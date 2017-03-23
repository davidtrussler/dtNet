<?php

if ($_SERVER['SERVER_NAME'] == 'davidtrussler.net') {
	$SERVER_ROOT = 'http://davidtrussler.net/'; 
	$DOC_ROOT = '/home/futuragr/public_html/davidtrussler/'; 
} else {
	$SERVER_ROOT = 'http://localhost/dtNet/';
	$DOC_ROOT = '/Library/WebServer/Documents/dtNet/';
}

$COMMENT_EXPIRE = 278; // number of days until comments are disabled

?>