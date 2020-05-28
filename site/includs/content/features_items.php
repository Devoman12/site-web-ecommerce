
	<?php foreach ($products as $key => $product): ?>
		<div class="col-sm-4">
		<div class="product-image-wrapper">
			<div class="single-products">
				<div class="productinfo text-center">
					<img src="<?php echo BASE_URL . '/images/allproducts/' .$product['image'] ?>"  alt="" />
					<h2><?php echo $product['price'] ?></h2>
					<p><?php echo $product['name'] ?></p>
				</div>
				<div class="product-overlay">
				    <div class="overlay-content">
						<p><h3><?php echo $product['brand_name'] ?></h3></p>
					    <h2><?php echo $product['price'] ?></h2>
					    <p><?php echo $product['name'] ?></p>
					    <a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				    </div>
			    </div>
		    </div>
		    
			<div class="choose">
			    <ul class="nav nav-pills nav-justified">
					<li><a href="<?php echo BASE_URL . '/shop.php?C_id=' . $Category['id'] . '&name=' . $Category['category_name']; ?>"><i class="fa"></i><?php echo $product['category_name'] ?></a></li>
					<li><a href="<?php echo BASE_URL . '/productDitails.php?product_id=' . $product['id'] ; ?>"><i class="fa fa-plus-square"></i>Detailes</a></li>
			    </ul>
			</div>
		</div>
	</div>
	<?php endforeach; ?>

</div>