<!DOCTYPE HTML>
<head>
<title>Website Title</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?= DOMAIN ?>/css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?= DOMAIN ?>/css/margins.css" />
<link rel="stylesheet" type="text/css" href="<?= DOMAIN ?>/css/styles.css" />
<script src="<?= DOMAIN ?>/js/jquery-1.11.3.min.js"></script>
<script src="<?= DOMAIN ?>/js/bootstrap.js"></script>
<script src="<?= DOMAIN ?>/js/jquery.matchHeight-min.js"></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg" crossorigin="anonymous">
</head>
<body>
	<?php require __DIR__.'/includes/cookies.php'; ?>




<div class="container-fluid" style="background-color:#f5f5f5">

  <div class="row">
		<div class="col-md-2">

		</div>
		<div class="col-md-6 col-xs-10">
			<div id="navbar">
		    <ul class="nav navbar-nav">
		      <li>
		        <a style="color:black;" href="<?= DOMAIN ?>/index.php">Home</a>
		      </li>
		          <?php foreach ($categoryObj->getAll2() as $category ){ ?>
								<li>
									<a style="color:black;" href="<?= DOMAIN ?>/products/<?= $category->seo_url ?>"> <?= ($category->title) ?> </a>
								</li>

							<?php } ?>
		      <li>
		        <a style="color:black;" href="<?= DOMAIN ?>/contact.php">Contact</a>
		      </li>
		    </ul>
		  </div>
		</div>
		<a style="color:white;" href="<?= DOMAIN ?>/basket.php">
			<div class="col-md-1 col-xs-2" style="padding:15px 0px 15px 0px;text-align:right; background-color:#a5a5a5; color:white; text-align:center;">
				<span><i class="fa fa-shopping-cart"></i> <?= $cartObj->countItems123() ?> Items</span>
			</div>
		</a>
	</div>
</div>
