<?php


$row = $productObj->getRowByFieldNotDeleted('seo_url', $slug);

if(!$row){

	include('404.php');
	exit;

}

if( isset($_POST['product_id']) ){

	if ($row->special_offer_price > "0"){
		$_POST['cart_price'] = $row->special_offer_price;
	}	else{
		$_POST['cart_price'] = $row->price;
	}
	#$_POST['options'] = 'test';

	$cartObj->add($cart_price);

}

include('header.php');
?>

<?php if(count(App\Helpers\Validation::errors()) || count(App\Helpers\Tools::flashes()) ){ ?>

<div class="container mt-0">

	<?php require __DIR__.'/includes/flash-messages.php'; ?>

</div>

<?php } ?>

<div class="container">
		<div style="margin-top:50px;">
				<ul class="breadcrumb">
						<li><a href="<?= DOMAIN ?>/index.php">Home</a></li>
						<li><?php echo $row->title ?></li>
				</ul>
		</div>

      <div class="row" style="margin-top:100px;">

        <div class="col-md-1"></div>

        <div class="col-md-4">
					<?php foreach($productImageObj->getAll($row->id) as $image) { ?>
              <img class="img-responsive fabricSquare" src="<?= DOMAIN ?>/product-images/<?= $image->id ?>.<?= $image->ext ?>" alt="<?= $image->alt ?>">
					<?php } ?>
				</div>

				<div class="col-md-1"></div>

				<div class="col-md-6">

					<h1><?php echo  $row->title ?></h1>

					<!-- <p>&#163;<?php echo $row->price ?></p> -->
					<p>
						<?php if($row->special_offer_price) {
									print 'WAS <strike>£'.$row->price.'</strike> <span style="color:red"> NOW £'.$row->special_offer_price. '</span>';
								} else {
									print '£'.$row->price;
								}
						?>
					</p>
					<p><strong>Quantity Available: <?php echo $row->qty_available ?></strong></p>

							<form action="" method="POST" style="margin-top:100px;">

								<input type="hidden" name="product_id" value="<?= $row->id ?>" />

									<select name="quantity" class="form-control" style="width:20rem;aspect-ratio: 2 / 1.5;">
											<option value="1">QTY - 1</option>
											<?php $max = $row->qty_available > 10 ? 10: $row->qty_available;
											for($i = 2; $i < $max +1; $i++){

												print '<option value="'.$i.'">
												'.$i.'</option>';
											}
											?>
									</select>
									<br />
									<button type="submit" style="border-style:none; background-color:#f5f5f5; width:10rem; aspect-ratio:2 / 1;">Add To Cart</button>
							</form>



							<p><hr />
								<strong style="font-size:40px;">Product Description</strong><?php echo $row->description ?>
							<hr /></p>

				</div>



      </div>
			<hr />
</div>


<?php
include('footer.php');
 ?>
