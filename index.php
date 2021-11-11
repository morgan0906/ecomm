<?php

require_once __DIR__ . '/includes/config.php';

require_once __DIR__ . '/header.php';

?>

<div class="fluid-container">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  	  <ul class="carousel-indicators">
  		<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
  		<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
  		<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  	  </ul>

  		<div class="carousel-inner">
  			<div class="item active">
  				<img class="d-block" src="https://picsum.photos/1200/400" alt="First slide" style="width:100%;">
  			</div>
  			<div class="item">
  				<img class="d-block" src="https://picsum.photos/1200/400" alt="Second slide" style="width:100%;">
  			</div>
  			<div class="item">
  				<img class="d-block" src="https://picsum.photos/1200/400" alt="Third slide" style="width:100%;">
  			</div>
  		</div>

  </div>
</div>

<div class="container">
  <h1>Website</h1>
  <p>
  Libero volutpat sed cras ornare arcu. At varius vel pharetra vel turpis. In aliquam sem fringilla ut morbi tincidunt. Id donec ultrices tincidunt arcu non sodales neque. In vitae turpis massa sed elementum tempus. Commodo quis imperdiet massa tincidunt nunc pulvinar sapien et.

  Interdum consectetur libero id faucibus. Pretium quam vulputate dignissim suspendisse in est. Arcu ac tortor dignissim convallis aenean et tortor at. Consectetur lorem donec massa sapien faucibus et. Sit amet tellus cras adipiscing enim eu turpis. Ut tristique et egestas quis ipsum. Habitant morbi tristique senectus et netus et malesuada. Malesuada bibendum arcu vitae elementum curabitur vitae nunc sed velit. Tincidunt eget nullam non nisi est sit amet facilisis. Proin sagittis nisl rhoncus mattis rhoncus urna. Scelerisque eu ultrices vitae auctor eu. Vitae auctor eu augue ut lectus. Nec dui nunc mattis enim ut tellus elementum sagittis. Dolor sed viverra ipsum nunc aliquet bibendum enim. Et netus et malesuada fames ac turpis egestas. In fermentum et sollicitudin ac orci. Consectetur purus ut faucibus pulvinar. Id ornare arcu odio ut sem. Donec ac odio tempor orci dapibus ultrices in iaculis nunc.

  Etiam erat velit scelerisque in dictum non consectetur. Pharetra sit amet aliquam id. Dignissim enim sit amet venenatis urna cursus eget nunc scelerisque. Adipiscing elit ut aliquam purus. At quis risus sed vulputate odio ut. Cras adipiscing enim eu turpis egestas pretium. Non tellus orci ac auctor. Sollicitudin nibh sit amet commodo nulla facilisi nullam. Bibendum neque egestas congue quisque egestas diam in arcu cursus. Tellus mauris a diam maecenas sed. Cursus mattis molestie a iaculis at erat. In nulla posuere sollicitudin aliquam. Ante metus dictum at tempor commodo ullamcorper a. Quisque egestas diam in arcu cursus
</p><br />
</div>


<div class="container">
  <h1 style="text-align:center">Best Sellers Section</h1><br />
  <p style="text-align:center">
    At quis risus sed vulputate odio ut. Cras adipiscing enim eu turpis egestas pretium. Non tellus orci ac auctor. Sollicitudin nibh sit amet commodo nulla facilisi nullam.
  </p>

    <div class="row">
      <center>

            <?php foreach ($productObj->getAll123() as $row ){

              print '<div class="col-md-3 col-sm-3"><div style="background-color:white;">';
                $image = $productImageObj->getRowByFieldNotDeleted('product_id', $row->id); ?>

                <!--product image-->
                <a href="<?= DOMAIN ?>/product/<?= $row->seo_url ?>"><img class="img-responsive fabricSquare" style="padding-top:15px;" alt="" src="product-images/<?= $image->id ?>.<?= $image->ext ?>"> </a>

                <!--product title-->
                <p style="margin-bottom:10px;font-size:20px"><b><?= $row->title ?></b></p>

                <!--price section-->
                <p style="margin-bottom:0px;font-size:20px;font-weight:600;">&#163;<?= $row->price ?></p>

                <!--Read More Btn-->
                <a style="padding-bottom:15px;" href="<?= DOMAIN ?>/product/<?= $row->seo_url ?>"><button style="font-size:20px;font-weight:600;border-radius:25px;color:white;border:none;background-color:black;width:10rem;height:5rem">View</button></a>

          </div>
          </div>
            <?php } ?>
          </div>
        </div>
      </center>
    </div>
</div>

<div id="indexHr">
  <hr /><br>
</div>

<?php require_once __DIR__ . '/footer.php'; ?>
