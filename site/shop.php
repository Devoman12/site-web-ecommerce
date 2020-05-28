<?php 

include("path.php");
include(ROOT_PATH . "/controlers/register.php");


$table = 'products';
$products = selectAll($table, ['availability' => 1]);
$countOfPosts = count(selectAll($table, ['availability' => 1]));
$titel = 'All Items';
$active = 1;


if (isset($_GET['B_id'])){
	$_SESSION['sis'] = 'brand';
	$_SESSION['imin'] = $_GET['name'];
	$_SESSION['imin_id'] = $_GET['B_id'];
	$products = selectAll($table, ['brand' => $_GET['B_id']]);
	$countOfPosts = count(selectAll($table, ['brand' => $_GET['B_id']]));
	$titel = $_GET['name'];
}


elseif (isset($_GET['C_id'])) {
	$_SESSION['sis'] = 'category';
	$_SESSION['imin'] = $_GET['name'];
	$_SESSION['imin_id'] = $_GET['C_id'];
	$products = $products = selectAll($table, ['category' => $_GET['C_id']]);
	$countOfPosts = count($products = selectAll($table, ['category' => $_GET['C_id']]));
	$titel = $_GET['name'];
}


if(isset($_GET['id_p'])){
	pri($_SESSION);
/* 
	$products = getProdByIdOfpage($_GET['id_p'], $_SESSION['imIn'], $_SESSION['imIn_id']);
	$products = getProdByIdOfpage($_GET['id_p']);
	$active = $_GET['id_p']; */
}





?>



<!DOCTYPE html>
<html lang="en">

<!--head-->
<?php include(ROOT_PATH . "/includs/head.php");?>
<!--/head-->


<body>

<!--header-->
<?php include(ROOT_PATH . "/includs/header.php");?>
<!--/header-->



	<section id="advertisement">
		<div class="container">
			<img src="images/shop/advertisement.jpg" alt="" />
		</div>
	</section>
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
						<?php include(ROOT_PATH . "/includs/leftbar/Category.php");?>
                        <!--/category-products-->
					
						<div class="brands_products"><!--brands_products-->
							<h2>Brands</h2>
							<?php include(ROOT_PATH . "/includs/leftbar/brands.php");?>
						</div><!--/brands_products-->
						
						<div class="shipping text-center"><!--shipping-->
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
						
					</div>
				</div>
				

				<div class="col-sm-9 padding-right">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center"><?php echo $titel ;?></h2>

					<!--features_items-->
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
									<li>
										<a href="<?php echo BASE_URL . '/productDitails.php?product_id=' . $product['id'] ; ?>">
											ditails
										</a>
									</li>


								</ul>
							</div>
							
						</div>
					</div>
					<?php endforeach; ?>
					<!--features_items-->

					</div><!--features_items-->

					<!-- <ul class="pagination">
						<li class="active"><a href="">1</a></li>
						<li><a href="">2</a></li>
						<li><a href="">3</a></li>
						<li><a href="">&raquo;</a></li>
					</ul> -->

					

					<ul class="pagination">
					<!-- <li class="active"><a href="">1</a></li> -->
					<?php
						$x = 1 ;
						$A = '"active"';
						for ($x; $x <= $countOfPosts/5; $x++) {
							if ($active == $x) {
								
								echo '<li class=' . $A . '><a  href="shop.php?id_p=' . $x . '">' . $x . '</a></li>';
							}
							else {
								echo '<li><a  href="shop.php?id_p=' . $x . '">' . $x . '</a></li>';
							}
						}
						if ($countOfPosts % 5 > 0) {
							if ($active == $x) {
								
								echo '<li class=' . $A . '><a  href="shop.php?id_p=' . $x . '">' . $x . '</a></li>';
							}
							else {
								echo '<li><a  href="shop.php?id_p=' . $x . '">' . $x . '</a></li>';
							}
						}
					?>
					
					</ul>


				</div>
			</div>
		</div>
	</section>
	



<!--Footer-->
<?php include(ROOT_PATH . "/includs/footer.php");?>
<!--/Footer-->


  
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>