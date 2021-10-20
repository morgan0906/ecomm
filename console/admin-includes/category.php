<?php

$categoryObj = new App\Category;

if($action == 'edit'){

	$row = $categoryObj->find($id);

}

if( isset($_POST['title']) ){

	if($action == 'add'){
	
		$categoryObj->add();
	
	} else {
	
		$categoryObj->update($id);
	
	}

}

?>


<h1>CATEGORY</h1>

	<form enctype="multipart/form-data" class="form-horizontal" <?php if($action == 'add'){ print 'id="form"'; } ?> method="post" action="">

						<div class="panel panel-default">
						<div class="panel-heading"><?= strtoupper($action) ?> CATEGORY</div>
						<div class="panel-body">
						
								<div class="form-group">
									<label class="col-md-4 control-label">Title</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="title" id="title" value="<?php if(isset($row)){ print $row->title; } ?>">
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label">SEO Friendly URL</label>
									<div class="col-md-6">
										<input type="text" class="form-control" name="seo_url" id="seo_url" value="<?php if(isset($row)){ print $row->seo_url; } ?>">
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label">Meta Description</label>
									<div class="col-md-6">
										<textarea name="meta_description" id="meta_description" class="form-control"><?php if(isset($row)){ print $row->meta_description; } ?></textarea>
									</div>
								</div>
								
								<div class="form-group">
									<label class="col-md-4 control-label">Image</label>
									<div class="col-md-6">
										<input type="file" class="form-control" name="file">
										
										<?php if(isset($row) && file_exists('../category-images/'.$row->id.'.'.$row->ext)){ ?>
										<br />
										<img style="width:200px" alt="" class="img-responsive" src="../category-images/<?= $row->id ?>.<?= $row->ext ?>">
										
										<?php } ?>
										
									</div>
								</div>

								<div class="form-group">
									<div class="col-md-6 col-md-offset-4">
										<button type="submit" class="btn btn-primary"> <?= strtoupper($action) ?> CATEGORY </button>
									</div>
								</div>
							
						</div>
					</div>
		
		
	</form>		

