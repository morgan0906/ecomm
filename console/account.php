<?php

ob_start();

require __DIR__.'/../includes/config.php';

$user->checkAuth();

if( !$user->isAdmin() ){

	redirect( '../login.php', 'You are not authourised to view that page.', 'e' );

}

if(empty($_GET['page'])){ redirect('account.php?page=home'); }

use App\Newsletter;
$newsletterObj = new Newsletter;

$page = $_GET['page'];
 
if(isset($_GET['id'])){ $id = $_GET['id']; }
if(isset($_GET['action'])){ $action = $_GET['action']; }

if( isset($_GET['get']) ){

	$results = [];

	foreach($_SESSION as $key => $session){

		$key = str_replace(SESSION, '', $key);

		$results[$key] = $session;

	}


print json_encode($results); exit;

}

if(isset($action) && $action == 'export-mailinglist'){

	$newsletterObj->export();

}

if(isset($action) && $action == 'export-customers'){

	$user->export();

}

if(isset($action) && $action == 'export-products'){

	$productObj->export($categoryObj, $subCategoryObj);

}

if(isset($_GET['user_id']) && $user->isAdmin() ){
	
	$row = $user->find($_GET['user_id']);
	unset($row->password);
	print json_encode($row);
	exit;

}

if($page == 'orders' && isset($_GET['from'])){

	$orderObj = new App\Order;
	$orderObj->export($_GET['from'], $_GET['to']);

}

?>

<?php include(dirname(__FILE__).'/header.php'); ?>

<div class="container-fluid" style="padding-left:5%;padding-right:5%">

<?php require __DIR__.'/../includes/flash-messages.php'; ?>

		<?php
		
		switch($_GET['page']){

			
			case 'change-password':
			include('../includes/change-password.php');
			break;
			
			case 'gallery':
			include('admin-includes/gallery.php');
			break;
			
			case 'products':
			include('admin-includes/products.php');
			break;
			
			case 'out-of-stock':
			include('admin-includes/products.php');
			break;
			
			case 'product':
			include('admin-includes/product.php');
			break;
			
			case 'sub-categories':
			include('admin-includes/sub-categories.php');
			break;
			
			case 'sub-category':
			include('admin-includes/sub-category.php');
			break;
			
			case 'categories':
			include('admin-includes/categories.php');
			break;
			
			case 'category':
			include('admin-includes/category.php');
			break;
			
			case 'orders':
			include('admin-includes/orders.php');
			break;
			
			case 'order':
			include('admin-includes/order.php');
			break;
			
			case 'news':
			include('admin-includes/news.php');
			break;
			
			case 'news-item':
			include('admin-includes/news-item.php');
			break;
			
			case 'error':
			include('admin-includes/error.php');
			break;
			
			case 'cross-sell':
			include('admin-includes/cross-sell.php');
			break;
			
			case 'promos':
			include('admin-includes/promos.php');
			break;
			
			case 'promo':
			include('admin-includes/promo.php');
			break;
			
			case 'blogs':
			include('admin-includes/blogs.php');
			break;
	
			case 'blog':
			include('admin-includes/blog.php');
			break;
			
			case 'newsletters':
			include('admin-includes/newsletters.php');
			break;
			
			case 'receipt':
			include('admin-includes/receipt.php');
			break;

			case 'users':
			include('admin-includes/users.php');
			break;
			
			case 'user':
			include('admin-includes/user.php');
			break;
			
			default:
			include('admin-includes/home.php');

		}
		
		?>		

</div>


<?php require __DIR__.'/footer.php'; ?>