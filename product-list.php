<<<<<<< HEAD
<?php
  require('header.php');

  $query = $productObj->getAllByCategory($row->id);
?>

<div class="container">
  <h1><?= strtoupper($row->title) ?></h1>
</div>

<div class="container">

  <div class="row">
    <?php foreach($query as $row){
        $image = $productImageObj->getRowByFieldNotDeleted('product_id', $row->id);?>

        <div class="col-md-3 col-sm-3 col-xs-6">

            <div class="thumbnail mb-0 mt-50 pt-0 pb-0">
              <a href="<?= DOMAIN ?>/product/<?= $row->seo_url ?>">
                <img style="width:100%" src="<?= DOMAIN ?>/product-images/<?= $image->id ?>.<?= $image->ext ?>" alt="<?= $image->alt ?>"/>
              </a>
            </div>
            <p style="text-align:center;margin-top:20px;padding-bottom:0px;margin-bottom:0px;font-size:22px;">
                <a href="<?= DOMAIN ?>/product/<?= $row->seo_url ?>">
                  <?= $row->title ?>
                </a>
            </p>
            <p style="text-align:center;font-weight:700;padding-top:0px;margin-top:0px;font-size:22px;">
                <?php if($row->special_offer_price){
                  echo '<span style="color:red;padding-right:5px;"><strike>£'.$row->price.'</strike></span>£'.$row->special_offer_price;
                }else{
                  echo '£'.$row->price;
                } ?>
            </p>
        </div>
    <?php } ?>
  </div>

</div>
















<?php
require('footer.php');
?>
=======
<?php

$query = $productObj->getAllByCategory($category_id);


  require('header.php');

?>

<div class="container">
  <h1><?= $title ?></h1>
</div>

<?php
require('footer.php');
?>
>>>>>>> f824e7cca0f346142aef68d1539110768725155e
