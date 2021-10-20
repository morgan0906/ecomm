<?php

use App\Product;
use App\Category;
use App\SubCategory;
use App\ProductImage;

$productObj = new Product;
$categoryObj = new Category;
$subcategoryObj = new SubCategory;
$productimageObj = new ProductImage;


if($action == 'delete-image'){

	$productimageObj->delete($_GET['image_id']);

}

if($action == 'edit'){

	$row = $productObj->find($id);
	$categoriesArray = json_decode($row->category_id, true);
	$subCategoriesArray = json_decode($row->sub_category_id, true);
	if(count($subCategoriesArray) == 0){ $subCategoriesArray = []; }
	$product_images = $productimageObj->getAll();

}

if( isset($_POST['title']) ){

	if($action == 'add'){
	
		$productObj->add();
	
	} else {
	
		$productObj->update($id);
	
	}

}

?>

<script>

$(function(){

	$.get('account.php?page=product&action=add&get=sessions', function(data){
		
		var data = jQuery.parseJSON(data);
		
		$('#form input[type=text], #form input[type=email], #form textarea').each(function(){
			
			if (typeof data[this.id] !== 'undefined') {
			
				$('#' + this.id).val(data[this.id]);
				
			}
		
		});
		
		$('#form select').each(function(){
		
			$('#' + this.id + ' option[value='+data[this.id]+']').prop('selected', true);
		
		});

	});

});

</script>
<script src="tinymce/js/tinymce/tinymce.min.js"></script>
<script>
tinymce.init({
  selector: "textarea",
  plugins: "code"
});
</script>

<style>

	

</style>

<h1>PRODUCT</h1>

<p>Once uploaded, to delete an image, just click it.</p>

	<form enctype="multipart/form-data" <?php if($action == 'add'){ print 'id="form"'; } ?> class="form-horizontal" method="post" action="">

						<div class="panel panel-default">
						<div class="panel-heading"><?= strtoupper($action) ?> PRODUCT</div>
						<div class="panel-body">
						
								<div class="form-group">
									<label class="col-md-4 control-label">* Title</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="title" id="title" value="<?php if(isset($row)){ print $row->title; } ?>">
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label">Product Code</label>
									<div class="col-md-6">
										<input placeholder="Optional" type="text" class="form-control" name="product_code" id="product_code" value="<?php if(isset($row)){ print $row->product_code; } ?>">
									</div>
								</div>

								<div class="form-group">
									<label class="col-md-4 control-label">Barcode</label>
									<div class="col-md-6">
										<input placeholder="Optional" type="text" class="form-control" name="barcode" id="barcode" value="<?php if(isset($row)){ print $row->barcode; } ?>">
									</div>
								</div>
								
								<!--
								
								<div class="form-group">
									<label class="col-md-4 control-label">Weight</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="weight" id="weight" value="<?php if(isset($row)){ print $row->weight; } ?>">
									</div>
								</div>	

								-->
								
								<!--
								
								<div class="form-group">
									<label class="col-md-4 control-label">Sort Order</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="sort_order" id="sort_order" value="<?php if(isset($row)){ print $row->sort_order; } ?>">
									</div>
								</div>
									
								-->
								
								<div class="form-group">
									<label class="col-md-4 control-label">* Product SEO URL</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="seo_url" id="seo_url" value="<?php if(isset($row)){ print $row->seo_url; } ?>">
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label"></label>
									<div class="col-md-6">
										<p>eg. your-product-name</p>
										<p>This should have a dash in between each word, no spaces, and must be unique</p>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label">Best Seller</label>
									<div class="col-md-6">
										
										<select class="form-control" name="best_seller" id="best_seller">
										<option value="0">No</option>
										<option value="1" <?php if(isset($row) && $row->best_seller){ print 'selected'; } ?>>Yes</option>										
										</select>
										
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label">Sale Item</label>
									<div class="col-md-6">
										
										<select class="form-control" name="sale" id="sale">
										<option value="0">No</option>
										<option value="1" <?php if(isset($row) && $row->sale){ print 'selected'; } ?>>Yes</option>										
										</select>
										
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label">New Item</label>
									<div class="col-md-6">
										
										<select class="form-control" name="new" id="new">
										<option value="0">No</option>
										<option value="1" <?php if(isset($row) && $row->new){ print 'selected'; } ?>>Yes</option>										
										</select>
										
									</div>
								</div>								
								
								
								<div class="form-group">
									<label class="col-md-4 control-label">Featured</label>
									<div class="col-md-6">
										
										<select class="form-control" name="featured" id="featured">
										<option value="0">No</option>
										<option value="1" <?php if(isset($row) && $row->featured){ print 'selected'; } ?>>Yes</option>										
										</select>
										
									</div>
								</div>	

								<div class="form-group">
									<label class="col-md-4 control-label">* Category</label>
									<div class="col-md-6">
									
									<p style="margin-top:8px"><strong>( You must select at least 1 category )</strong></p>

										<?php
										
										foreach($categoryObj->getAll() as $category){
										
											$checked = isset($categoriesArray) && in_array($category->id, $categoriesArray) ? 'checked' : '';
										
											print '<input '.$checked.' id="category-'.$category->id.'" type="checkbox" name="categories[]" value="'.$category->id.'"> <label style="margin-right:10px" for="category-'.$category->id.'">'.$category->title.' </label> ';
										
										}
										
										?>
										
										<br /><br />
						
									</div>
								</div>
								
								

								
								<div class="form-group">
									<label class="col-md-4 control-label">Quantity Available</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="qty_available" id="qty_available" value="<?php if(isset($row)){ print $row->qty_available; } ?>">
									</div>
								</div>								
								
								<div class="form-group">
									<label class="col-md-4 control-label">* Price</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="price" id="price" value="<?php if(isset($row)){ print $row->price; } ?>">
									</div>
								</div>
								

								<div class="form-group">
									<label class="col-md-4 control-label">Special Offer Price</label>
									<div class="col-md-6">
										<input placeholder="Leave blank if not special offer" type="text" class="form-control" name="special_offer_price" id="special_offer_price" value="<?php if(isset($row)){ print $row->special_offer_price; } ?>">
									</div>
								</div>


								<div class="form-group">
									<label class="col-md-4 control-label">Description</label>
									<div class="col-md-6">
										
				<textarea class="form-control" rows="7" name="description" id="description"><?php  if(isset($row)){ print $row->description; } elseif(isset($_SESSION[SESSION.'description'])){ print $_SESSION[SESSION.'description']; } ?></textarea>
										
									</div>
								</div>
								
								
								<?php for($i = 1; $i < 5; $i++){ ?>
								
								<div class="form-group">
									<label class="col-md-4 control-label">Alt Tag <?= $i; ?></label>
									<div class="col-md-6">
										<input type="text" class="form-control" id="alt-<?= $i; ?>" name="alt-<?= $i; ?>" value="<?php if(isset($product_images[$i-1]->alt)){ print $product_images[$i-1]->alt; } ?>">										
									</div>
								</div>
								
								<?php if(isset( $product_images[$i-1]->id )){ ?>
								
								<input type="hidden" name="id-<?= $i; ?>" value="<?= $product_images[$i-1]->id ?>">
								<input type="hidden" name="ext-<?= $i; ?>" value="<?= $product_images[$i-1]->ext ?>">
								
								<?php } ?>
								
								<div class="form-group">
									<label class="col-md-4 control-label">Image <?= $i; ?> (JPG, PNG or GIF)</label>
									<div class="col-md-6">
										<input type="file" class="form-control" name="file-<?= $i; ?>">
										
										<?php
										
										if(isset($product_images[$i-1]->ext)){
										
	print "<br /><a onclick=\"return confirm('Are you sure you want to delete this image?')\" href='account.php?page=product&action=delete-image&image_id=".$product_images[$i-1]->id."'><img style='width:150px' src='../product-images/".$product_images[$i-1]->id.".".$product_images[$i-1]->ext."'></a>"; 
										
										}
										
										?>
										
									</div>
								</div>
								
								<?php } ?>

								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<button type="submit" class="btn btn-primary"> <?= strtoupper($action) ?> PRODUCT </button>
									</div>
								</div>
							
						</div>
					</div>
		
		
	</form>		

