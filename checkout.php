<?php

include('includes/config.php');


include('header.php');
?>


<div class="container">
  <h1 style="text-align:center;">Checkout</h1><br /><br />

  <form id="form" action="" method="post">
      <div class="row">
          <div class="col-md-6">
            <label>Delivery Address</label>
            <div class="form-group">
              <input type="text" name="first_name" class="form-control" id="first_name" placeholder="* First Name"/>
            </div>
            <div class="form-group">
                <input  type="text" name="last_name" class="form-control" id="last_name" placeholder="* Last Name"/>
            </div>
            <div class="form-group">
                <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone"/>
            </div>
            <div class="form-group">
                <input type="text" name="address_1" class="form-control" id="address_1" placeholder="* Address 1"/>
            </div>
            <div class="form-group">
                <input type="text" name="address_2" class="form-control" id="address_2" placeholder="Address 2"/>
            </div>
            <div class="form-group">
                <input type="text" name="town" class="form-control" id="town" placeholder="* Town"/>
            </div>
            <div class="form-group">
                <input type="text" name="postcode" class="form-control" id="postcode" placeholder="* Postcode"/>
            </div>
            <div class="form-group">
                <input type="text" name="country" class="form-control" id="country" placeholder="* Country"/>
            </div>
            <div class="form-group">
                <textarea name="notes" class="form-control" rows="4" cols="80" id="notes" placeholder="Please send us any delivery notes or special requirements you may have..."></textarea>
            </div>
          </div>

          <div class="col-md-6"><br />
              <?php foreach( $cartObj->getAll() as $row ){  ?>
                  <div class="row">
                    <div class="col-md-6">
                      <?= $row->quantity ?> x <?= $row->title ?>
                    </div>

                    <div class="col-md-6" style="text-align:right;">
                      £ <?= number_format($row->quantity * $row->cart_price,2) ?>
                    </div>
                  </div>

              <?php } ?>

              <hr />

            <div class="row">
              <div class="col-md-6">
                <p>
                  <strong>SubTotal</strong>
                </p>
              </div>
              <div class="col-md-6" style="text-align:right;">
                <?php
                $sum = 0;
                foreach( $cartObj->getAll() as $row ){
                    $sum += $row->price * $row->quantity;
                }
                 echo "£" . number_format($cartObj->subTotal(),2); ?>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <p>
                  <strong>Shipping</strong>
                </p>
              </div>
              <div class="col-md-6" style="text-align:right;">
                <?php
                 echo "£" . number_format($cartObj->shipping(),2); ?>
              </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <p>
                  <strong>Total</strong>
                </p>
              </div>
              <div class="col-md-6" style="text-align:right;">
                <?php
                 echo "£" . number_format($cartObj->total(),2); ?>
              </div>
            </div>

            <div class="row">
              <div class="col-md-12">
                      By Clicking 'BUY NOW' you agree to the <?= COMPANY_NAME ?> <a target="_blank" href="#">Terms and Conditions</a> and <a target="_blank" href="#">Privacy</a> and <a target="_blank" href="#" >Cookie Policy</a>
                  </p>
              </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                  <button style="float:right" type="submit">Buy Now</button>
                </div>
            </div>

          </div>
      </div>
  </form>

</div>

<?php include('footer.php'); ?>
