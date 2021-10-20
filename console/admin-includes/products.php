<?php

use App\Product;
$productObj = new Product;

$search = isset($_GET['search']) ? $_GET['search'] : null;

if( $search ){

	$query = $productObj->adminSearch($search);

} else {

	$query = $productObj->getAll($page);

}

if(isset($action)){

	$productObj->delete($id);

}

?>

<h1><?= $page == 'products' ? 'PRODUCTS' : 'OUT OF STOCK' ?></h1>

	<form action="" method="get">
	
	<div class="row">

<div class="col-md-6"> <input type="hidden" name="page" value="<?= $page ?>"> <input required placeholder="Search by title or product code" type="text" name="search" class="form-control" value="<?= $search ?>">  	</div>
	
	<div class="col-md-2">  <button type="submit" class="btn btn-primary">SEARCH</button>   </div>
	
	</div>
	
	</form>
	
<br /><br />

<a class="btn btn-primary" href="account.php?page=product&action=add">Add <i class="fa fa-plus"></i></a>
<a class="btn btn-primary" href="account.php?page=product&action=export-products">Export <i class="fa fa-chevron-right"></i></a>


<br /> <br />

<script>
$(function(){
	$('.show-image').click(function(){
		if( $(this).width() == 50 ){
			$(this).css({ 'width' : '300px' });
		} else {
			$(this).css({ 'width' : '50px' });
		}
	});
});
</script>

<?php

if( count($query) ){

?>

<div class="table-responsive">

	<table class="table table-striped table-hover">

	<tr><td><strong>Image</strong></td><td><strong>Title</strong></td><td><strong>Product URL</strong></td><td><strong>Category</strong></td><td><strong>Available Qty</strong></td><td width="290px"><strong>Action</strong></td></tr>
	
	<?php
	
	foreach( $query as $row ){
	
	$image = $productImageObj->getRowByFieldNotDeleted('product_id', $row->product_id);
	
	$categories = '';
	$sub_categories = '';
	$category_json = json_decode($row->category_id);
	$sub_category_json = json_decode($row->sub_category_id);
	
	foreach($category_json as $category_id){
	
		$categories .= '['.$categoryObj->find($category_id)->title.']<br />';
	
	}
	
	
	print '<tr><td><img class="show-image" style="width:50px;cursor:pointer" src="../product-images/'.$image->id.'.'.$image->ext.'" alt="'.$image->alt.'"></td><td>'.$row->product_title.'</td><td><a target="_blank" style="color:#359DB6" href="'.DOMAIN.'/product/'.$row->product_seo_url.'">'.DOMAIN.'/product/'.$row->product_seo_url.'</a></td><td>'.$categories.'</td><td>'.$row->qty_available.'</td><td><a class="btn btn-primary" href="account.php?page=product&action=edit&id='.$row->product_id.'">Edit <i class="fa fa-edit"></i></a>  <a onclick="return confirm(\'Are you sure you want to delete this product?\')" class="btn btn-primary" href="account.php?page=products&action=delete&id='.$row->product_id.'">Delete <i class="fa fa-remove"></i></a></td></tr>';
	
	}
	
	?>

	</table>

</div>		

<?php

} else { print "<p>There are currently no products.</p>"; }

?>