<?php
  require __DIR__.'/includes/config.php';

  $user->destroyUniqueId();

  require 'header.php';
?>

<div class="container mb-0 mt-30">
    <div class="col-md-4 hidden-xs hidden-sm mt-25" style="border-bottom:2px dotted #311E26">
    </div>
    <div class="col-md-4 text-center">
        <h1 class="mt-10">ORDER COMPLETE</h1>
    </div>

    <div class="col-md-4 mt-25" style="border-bottom:2px dotted #311E26"></div>
</div>

<div class="container pt-30 pb-30">
  <div class="panel panel-default">
    <div class="panel-heading">
      <i class="fa fa-check"></i>ORDER COMPLETE
    </div>

    <div class="panel-body">
      <?php require __DIR__.'/includes/flash-messages.php'; ?>

      <?php if( $orderObj->getOrderNumber() ){

        $order_id = $orderObj->getOrderNumber() - 100000;
        $order_number = $orderObj->getOrderNumber();
        $order = $orderObj->find($order_id);

        ?>
          <p>Thank you for your order. You have been emailed an order confirmation. Please check your junk mail folder if it does not arrive in your inbox. <br /><br /> Your order number is <?= $orderObj->getOrderNumber() ?>. <br /><br />Please use this in any correspondence regarding your order. Please see details below; <br /><br /></p>

          <table class="table" cellspacing="10">
              <thead>
                <tr>
                  <th style="width:55%;">
                    Product
                  </th>
                  <th style="width:15%;">
                    Price
                  </th>
                  <th style="width:8%;">
                    Quantity
                  </th>
                  <th style="width:22%;text-align:right">
                    Subtotal
                  </th>
                </tr>
              </thead>
              <tbody>

                  <?php

                  $total = 0;

    							foreach( $productFromOrderObj->getOrder($order_id) as $row) {

                    $sub_total = $order->cost;
      							$shipping = $order->shipping;
                    ?>

                      <tr>
                        <td>
                          <?= $row->title ?>
                        </td>

                        <td>
                          &pound; <?= $row->price ?>
                        </td>

                        <td>
                          <?= $row->quantity ?>
                        </td>

                        <td style="text-align:right">
                          &pound; <?= number_format($row->quantity * $row->price, 2); ?>
                        </td>
                      </tr>

                  <?php } ?>
              </tbody>

              <tfoot>
                <tr>
                    <td colspan="4" style="text-align:right"><Strong>Subtotal &pound;<?= number_format($sub_total, 2) ?></Strong></td>
                </tr>

                <tr>
                    <td colspan="4" style="text-align:right">
                      <strong>VAT &pound;<?=number_format($sub_total / 5, 2) ?></strong>
                    </td>
                </tr colspan="4" style="text-align:right">

                <tr>
                  <td colspan="4" style="text-align:right">
                      <strong>Shipping &pound;<?=number_format($shipping, 2) ?></strong>
                  </td>
                </tr>

                <tr>
                  <td colspan="4" style="text-align:right">
                    <strong>Total &pound;<?= number_format($sub_total + ($sub_total / 5)  +  $shipping, 2) ?></strong>
                  </td>
                </tr>
              </tfoot>
          </table>

          <a href="<?= DOMAIN ?>/" class="btn btn-default"><i class="fa fa-chevron-left"></i> CONTINUE SHOPPING</a><br /><br />

      <?php
    } else { ?>
        <p>
           Your session has expired. Please contact our store by email or contact number if you have any issues.
        </p>
    <?php } ?>
    </div>

  </div>
</div>



<?php require 'footer.php'; ?>
