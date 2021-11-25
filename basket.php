<?php

include('includes/config.php');

if(isset($_GET['delete'])){
  $cartObj->delete($_GET['delete']);
  }

if(isset($_POST['shipping'])){
  $cartObj->setShipping($_POST['shipping']);
}

include('header.php');

 ?>

<script>
  $(function(){
      $('#shipping').change(function(){
        $('#shipping-form').submit();
      });
  });
</script>


<?php if(count(App\Helpers\Validation::errors()) || count(App\Helpers\Tools::flashes()) ){ ?>

<div class="container mt-0">

 <?php require __DIR__.'/includes/flash-messages.php'; ?>

</div>

<?php } ?>

   <div class="container pb-70 pt-20">
     <div style="margin-top:50px;">
         <ul class="breadcrumb">
             <li><a href="<?= DOMAIN ?>/index.php">Home</a></li>
             <li>Basket</li>
         </ul>
     </div>

     <?php if( !$cartObj->countItems() ){ ?>
      <h1><i class="fa fa-shopping-basket"></i> ONLINE BASKET</h1>
       <P>
         Your online basket is currently empty.
       </P>
     <?php } else { ?>


 <h1><i class="fa fa-shopping-basket"></i> ONLINE BASKET</h1>

 <hr />


 	<div class="row mb-10 hidden-xs hidden-sm">

 		<div class="col-md-1"> <strong>Product</strong> </div>
 		<div class="col-md-1 col-md-offset-6"> <strong>Price</strong> </div>
 		<div class="col-md-1"> <strong>Quantity</strong> </div>
 		<div class="col-md-1"> <strong>Total</strong> </div>

 	</div>

<form action="" method="post">
  <?php foreach( $cartObj->getAll() as $row) { ?>
 			<input type="hidden" name="cart">

 	    <div class="row mb-10">

 		     <div class="col-md-6 col-xs-6 col-sm-6">
 			       <h4 class="mt-0"><?= $row->title ?></h4>
 		     </div>

         <div class="col-md-1 col-xs-3 col-sm-3"></div>

 		     <div class="col-xs-3 visible-xs visible-sm">
           <span class="symbol">£</span><span class="price" data-price="<?= $row->price ?>"><?= $row->price ?></span>
         </div>

 		     <div class="col-md-1 hidden-xs hidden-sm">
           <span class="symbol">£</span><span class="price" data-price="<?= $row->price ?>"><?= $row->price ?></span>
         </div>

 		     <div class="col-xs-12 visible-xs visible-sm mt-10">Qty:</div>

       	 <div class="col-md-1 col-xs-3 col-sm-3">
           <p class="text-center">
             <?= $row->quantity ?>
           </p>
         </div>
       	 <div class="col-md-1 hidden-xs hidden-sm">
           <span class="symbol">£</span>
           <span class="price" data-price="<?= number_format($row->quantity * $row->cart_price, 2) ?>"><?= number_format($row->quantity * $row->cart_price, 2) ?></span>
         </div>
       	 <div class="col-xs-6 visible-xs visible-sm"></div>
       	 <div class="col-md-2 col-xs-9 col-sm-9 text-right">
 				     <a class="btn btn-primary btn-sm" title="Remove" href="basket.php?delete=<?= $row->cart_id ?>"><i class="fa fa-trash-alt"></i></a>
 		     </div>
 	    </div>
      <hr />
    <?php } ?>
</form>

  <div>
     	<div class="row">

     	  <div class="col-md-6">
     		   <div class="row">
     			    <div class="col-md-12">
         				<form action="" method="post" id="shipping-form">
           				<select class="form-control" name="shipping" id="shipping">
       					            <option value="" disabled>Please Select Your Shipping Method</option>
                   					<option value="2.99"
                              <?php if($cartObj->shipping() == '2.99'){ print 'selected'; } ?>> Standard Devliery - 2.99
                            </option>
                   					<option value="5.99"
                            <?php if($cartObj->shipping() == '5.99'){ print 'selected'; } ?>> Express Delivery - 5.99
                          </option>
       				    </select>
     				    </form>
     			     </div>

       			   <div class="col-md-12 mt-10 mb-20">

       			    </div>
     		    </div>
     	   </div>
         	<div class="col-md-6 text-right mb-10">
            <strong>Sub Total
              <span class="symbol">£</span>
              <span class="price" data-price="<?= number_format($cartObj->subTotal(), 2) ?>"><?= number_format($cartObj->subTotal(), 2) ?></span>
            </strong>
          </div>
         	<div class="col-md-6"></div>
         	<div class="col-md-6 text-right mb-10">
            <strong>Shipping
              <span class="symbol">£</span>

              <span class="price"
                data-price="<?= number_format($cartObj->shipping(), 2) ?>"
                value="<?= number_format($cartObj->shipping(), 2) ?>">
                <?= number_format($cartObj->shipping(), 2) ?>

              </span>
            </strong>
          </div>

         	<div class="col-md-6"></div>
         	<div class="col-md-6 text-right mb-10">
            <strong>Total <span class="symbol">£</span><span class="price" data-price="<?= number_format($cartObj->total(), 2) ?>"><?= number_format($cartObj->total(), 2) ?></span></strong>
          </div>


     	</div>
  </div>

 	<div class="col-md-6 pull-left col-xs-12 pr-0 pl-0 mt-20 visible-md visible-lg">
 	    <a href="<?= DOMAIN ?>" class="btn btn-primary"><i class="fa fa-chevron-left"></i> CONTINUE SHOPPING</a>
 	</div>

	<div class="col-md-6 col-xs-12 pr-0 pl-0 mt-20">

 	    <a href="checkout" class="btn btn-primary pull-right">CHECKOUT <i class="fa fa-chevron-right"></i></a>

 	</div>
<?php } ?>
 </div>


 <?php include('footer.php');
 ?>
