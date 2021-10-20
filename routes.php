<?php

require __DIR__.'/includes/config.php';

$url = $_SERVER['REQUEST_URI'];
$slug = explode('/', $_SERVER['REQUEST_URI']);
$slug = $slug[count($slug)-1];
	
include('404.php');