<?php
$project_name = 'rest-api';
$port = '';
$uri_segments_array = explode("/", $_SERVER['REQUEST_URI']);
$segments = array();
if (!($uri_segments_array[0]=='' & $uri_segments_array[1]=='')) {
	$segments = explode("/", $_SERVER['REQUEST_URI']);
	//var_dump($segments);
	$segments = array_slice($segments,1);
}
