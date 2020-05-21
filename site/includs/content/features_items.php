
<?php 

$table = 'products';
$products = NewProducts($table, ['availability' => 1]);


?>
<div class="features_items">
	<h2 class="title text-center">Features Items</h2>
    
	<?php foreach ($products as $key => $product): ?>
		<div class="col-sm-4">
		<div class="product-image-wrapper">
			<div class="single-products">
				<div class="productinfo text-center">
					<img src="<?php echo BASE_URL . '/images/allproducts/' .$product['image'] ?>"  alt="" />
					<h2><?php echo $product['price'] ?></h2>
					<p><?php echo $product['name'] ?></p>

					<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				</div>
				<div class="product-overlay">
				    <div class="overlay-content">
					    <h2><?php echo $product['price'] ?></h2>
					    <p><?php echo $product['name'] ?></p>

					    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				    </div>
			    </div>
		    </div>
		    <div class="choose">
			    <ul class="nav nav-pills nav-justified">
				    <li><a href="#"><i class="fa"></i><?php echo $product['category_name'] ?></a></li>
				    <li><a href="#"><i class="fa fa-plus-square"></i>Add to compare</a></li>
			    </ul>
		    </div>
		</div>
	</div>
	<?php endforeach; ?>

</div>