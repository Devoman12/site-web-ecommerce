
<?php

$users = selectAll('users');
$products = selectAll('products');


?>
<div class="form-group col-md-12">
	<h2>Statistics</h2>
</div>

<div class="form-group col-md-3">
	<h5>All PRODUCTS : <?php echo(count($products)); ?></h5>
</div>

<div class="form-group col-md-3">
	<h5>BRANDS : <?php echo(count($Brands)); ?></h5>
</div>

<div class="form-group col-md-3">
	<h5>CATEGORYS : <?php echo(count($Categorys)); ?></h5>
</div>

<div class="form-group col-md-3">
	<h5>users : <?php echo(count($users)); ?></h5>
</div>

 <div class="register-req col-md-12"><p></p></div>



 