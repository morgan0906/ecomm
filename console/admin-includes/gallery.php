<?php

use App\Helpers\Tools;
use App\GalleryImage;

$galleryimageObj = new GalleryImage;

if($action == 'delete-image'){

	$galleryimageObj->delete($_GET['image_id']);

}

if( isset($_POST['post']) ){

	Tools::validateImages();
	Tools::updateImages( $id = null, 'gallery-images', $galleryimageObj );
	redirect( 'account.php?page=gallery&action=add', 'The image has been uploaded' );

}

?>

<h1>BANNER / GALLERY IMAGES</h1>

<p>Once uploaded, to delete an image, just click it.<br /> Homepage banners are 1920px X 765px. File types allowed -  JPG, GIF or PNG</p>

	<form enctype="multipart/form-data" class="form-horizontal" method="post" action="">
	<input type="hidden" name="post">
						<div class="panel panel-default">
						<div class="panel-heading">GALLERY</div>
						<div class="panel-body">

								
								<?php
								
								$i = 1;
								
								foreach( $galleryimageObj->getAll() as $gallery_image ){
								
								?>
								
								<div class="form-group">

									<div class="col-md-4">
										
									<input placeholder="Clickable URL..." type="text" class="form-control" id="alt-<?= $i; ?>" name="alt-<?= $i; ?>" value="<?php if(isset($gallery_image->alt)){ print $gallery_image->alt; } ?>">										
									
									</div>
									<div class="col-md-2">
									
									<select class="form-control" name="type-<?= $i ?>">
									<option value="" <?php if($gallery_image->type == null){ print 'selected'; } ?>>GALLERY</option>
									<option value="banner" <?php if($gallery_image->type == 'banner'){ print 'selected'; } ?>>HOME PAGE BANNER</option>
									</select>
									
									</div>
									
								<input type="hidden" name="id-<?= $i ?>" value="<?= $gallery_image->id ?>">
								<input type="hidden" name="ext-<?= $i ?>" value="<?= $gallery_image->ext ?>">
									
									<div class="col-md-4">
									
									<input type="file" class="form-control" name="file-<?= $i; ?>">
									
									</div>
									
									<div class="col-md-2">
									
<?php print "<a onclick=\"return confirm('Are you sure you want to delete this image?')\" href='account.php?page=gallery&action=delete-image&image_id=".$gallery_image->id."'><img style='height:50px' src='../gallery-images-thumbnails/".$gallery_image->id.".".$gallery_image->ext."'></a>";  ?>
									
									</div>
									
								</div>


								
								
								<?php $i++; } ?>
								
								
								<div class="form-group">
								
									<div class="col-md-4">
									
									<input placeholder="Clickable URL..." type="text" class="form-control" id="alt-<?= $i ?>" name="alt-<?= $i ?>">
										
									</div>
									
									<div class="col-md-2">
									
									<select class="form-control" name="type-<?= $i ?>">
									<option value="">GALLERY</option>
									<option value="banner">HOME PAGE BANNER</option>
									</select>
									
									</div>									
									
									<div class="col-md-4">
									
									<input type="file" class="form-control" name="file-<?= $i; ?>">
									
									</div>
									
								</div>
								
								<br /><br />
								
								<div class="form-group">
									<div class="col-md-6 col-md-offset-2">
										<button type="submit" class="btn btn-primary pull-right"> UPLOAD </button>
									</div>
								</div>
							
						</div>
					</div>
		
		
	</form>		

