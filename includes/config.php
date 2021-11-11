<?php

session_start();

require __DIR__. '/../vendor/autoload.php';

define('HOST', '213.171.200.101');
define('USERNAME', 'morgan00231');
define('PASSWORD', 'd8X!WwLb$*$tqU');
define('DATABASE', 'ecommtest');
define('DOMAIN', 'http://localhost/ecomm');

define('SMTP_HOST', 'smtp.livemail.co.uk');
define('COMPANY_NAME', 'Ecomm Test');
define('SMTP_USERNAME', '');
define('SMTP_EMAIL', '');
define('SMTP_PASSWORD', '');

define('SALT', 'yYdHfAJKicvO41R8SVqm3bHg6hWjkEFeUxPoXpGr7nDaMTC0IZLwulN5t9Q2rszB');
define('SESSION', 'B9lMe1NKRJUC0EbSt7Tc8q4Gjx6kWOXordQ5fhmi2YVuznFHysIPprZAg3vaLHwD');
date_default_timezone_set('Europe/London');
define('DT', date('Y-m-d H:i:s'));
define('FILE', basename($_SERVER['SCRIPT_NAME']));

$user = new App\User;
$cartObj = new App\Cart;
$productObj = new App\Product;
$categoryObj = new App\Category;
$productImageObj = new App\ProductImage;
$orderObj = new App\Order;


if( !$user->uniqueId() ){

	$user->setUniqueId();

}


App\Helpers\Tools::boot();

function redirect($url, $message = null, $type = null){

	if($message){

		unset($_SESSION[SESSION.'flash']);
		unset($_SESSION[SESSION.'errors']);

		$message = $type == 'e' ? App\Helpers\Tools::error($message) : App\Helpers\Tools::flash($message);

	}

	$_SESSION[SESSION.'currentPage'] = $_SERVER['REQUEST_URI'];

header('Location: '.$url); exit;

}

$url = $_SERVER['REQUEST_URI'];
$slug = explode('/', $_SERVER['REQUEST_URI']);
$slug = $slug[count($slug)-1];


function dd($array){

	foreach($array as $key => $value){

		print $key.' => '.$value.'<br />';

	}

}
