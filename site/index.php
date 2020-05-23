<?php 

include("path.php");
include(ROOT_PATH . "/controlers/register.php");



$table = 'products';
$products = NewProducts($table, ['availability' => 1]);

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

	<!--slider-->
	<?php include(ROOT_PATH . "/includs/slider.php");?>
    <!--/slider-->
	
	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-3">
					<div class="left-sidebar">
						<h2>Category</h2>
                        <?php include(ROOT_PATH . "/includs/leftbar/Category.php");?>
                        <!--/category-products-->

                        <!--brands_products-->
						<div class="brands_products">
							<h2>Brands</h2>
							<?php include(ROOT_PATH . "/includs/leftbar/brands.php");?>
						</div>
						<!--/brands_products-->

                        <!--shipping-->
						<div class="shipping text-center">
							<img src="images/home/shipping.jpg" alt="" />
						</div><!--/shipping-->
					</div>
				</div>
				
				<div class="col-sm-9 padding-right">
				<div class="features_items">
				<h2 class="title text-center">New Items</h2>
    
                    <!--features_items-->
					<?php include(ROOT_PATH . "/includs/content/features_items.php");?>
					<!--features_items-->

					<!--recommended_items-->
					<?php include(ROOT_PATH . "/includs/content/recommended_items.php");?>
                    <!--/recommended_items-->

				</div>
			</div>
		</div>
	</section>
	
     <!--Footer-->
	<?php include(ROOT_PATH . "/includs/footer.php");?>
    <!--/Footer-->
	
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>