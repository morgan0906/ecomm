<?php

require __DIR__.'/includes/config.php';

$url = $_SERVER['REQUEST_URI'];
$slug = explode('/', $_SERVER['REQUEST_URI']);
$slug = $slug[count($slug)-1];

if(strstr($url, 'product/')){

    /*  this means if url has  `product/ ` in it - like http://localhost/ecomm/product/product-one  */
    /*  then make your product details page in a new file product-details-page.php  */
    /*  $slug will be available in product-details-page.php  */
    /*  you don't need to add require config.php in product-details-page.php
    because it's an included file and it will use the config included on this routes.php page.   */

    include('product-details-page.php');
    exit;

}elseif(strstr($url, '/sale')){

	include('product-list.php');
	exit;

} else{

    	$row = $categoryObj->getRowByField('seo_url', $slug);

    	if( isset($row->id) ){

    		$category_id = $row->id;
    		$category_title = $row->title;
    		include('product-list.php');
	     }

	 else {

		include('404.php');

	}

	exit;

}
