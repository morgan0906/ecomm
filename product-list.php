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
