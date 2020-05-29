<?php 

include("path.php");
include(ROOT_PATH . "/controlers/pro.php");





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
	
	<section id="cart_items">
		<div class="container">
		<div class="register-req">
				<p></p>
			</div>

			<!--statistics-->
			<?php include(ROOT_PATH . "/includs/statistics.php");?>
			<!--/statistics-->

			<div class="col-md-2 btn btn-primary">
                <a href="<?php echo BASE_URL . '/addProd.php' ?>" class="button">addProd.php</a>
			</div>

            <div class="col-md-2 btn btn-primary">
                <a href="<?php echo BASE_URL . '/addCATEGORY&BRANDS.php' ?>" class="button">CATEGORY & BRANDS</a>
			</div>

            <div class="col-md-2 btn btn-primary">
                <a href="<?php echo BASE_URL . '/addusers.php' ?>" class="button">users</a>
			</div>

    

		</div>
	</section> <!--/#cart_items-->

	

	<!--Footer-->
	<?php ///include(ROOT_PATH . "/includs/footer.php");?>
    <!--/Footer-->

    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>