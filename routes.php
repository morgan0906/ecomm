<?php

require __DIR__.'/includes/config.php';

if(strstr($url, 'product/')){

    /*  this means if url has  `product/ ` in it - like http://localhost/ecomm/product/product-one  */
    /*  then make your product details page in a new file product-details-page.php  */
    /*  $slug will be available in product-details-page.php  */
    /*  you don't need to add require config.php in product-details-page.php
    because it's an included file and it will use the config included on this routes.php page.   */

    $row = $productObj->getRowByFieldNotDeleted('seo_url', $slug);

    if(!$row){

    	include('404.php');
    	exit;

    }

    include('product-details-page.php');
    exit;

} else{

  	$row = $categoryObj->getRowByField('seo_url', $slug);

    if(!$row){

    	include('404.php');
    	exit;

    }
  		include('product-list.php');

}
