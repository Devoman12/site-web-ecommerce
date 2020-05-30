<?php 

include("path.php");
include(ROOT_PATH . "/controlers/register.php");

$thisUser = selectOne('users', ['id' => $_SESSION['id']]);

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
			<div class="breadcrumbs">
                                
                <div class="form-group col-md-12">
                    <h2> </h2>
                </div>


			</div><!--/breadcrums-->

			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-12 clearfix">
						<div class="bill-to">
							<p>Bill To</p>
							<div class="form-one">
								<form>
                                    <input type="text" value="<?php echo $thisUser['name']; ?>" placeholder="User Name">
                                    <input type="text" placeholder="First Name *">
									<input type="text" placeholder="Middle Name">
                                    <input type="text" placeholder="Last Name *">
                                    <input type="text" placeholder="Company Name">
									<input type="text" value="<?php echo $thisUser['email']; ?>" placeholder="Email*">
                                    <input type="text" placeholder="Phone *">
									
								</form>
							</div>
							<div class="form-two">
								<form>
                                    <input type="text" placeholder="Address  *">
									<input type="text" placeholder="Mobile Phone">
									<input type="text" placeholder="Zip / Postal Code *">
									<select>
										<option>-- Country --</option>
										<option>United States</option>
										<option>Bangladesh</option>
										<option>UK</option>
										<option>India</option>
										<option>Pakistan</option>
										<option>Ucrane</option>
										<option>Canada</option>
										<option>Dubai</option>
									</select>
									<select>
										<option>-- State / Province / Region --</option>
										<option>United States</option>
										<option>Bangladesh</option>
										<option>UK</option>
										<option>India</option>
										<option>Pakistan</option>
										<option>Ucrane</option>
										<option>Canada</option>
										<option>Dubai</option>
									</select>
                                    <input type="password" placeholder="Confirm password">
                                    <div class="form-group pull-right">
                                        <a class="btn btn-primary" href="">Continue</a>
                                        <a class="btn btn-primary" href="">save</a>
                                    </div>
								</form>
							</div>
						</div>
					</div>				
				</div>
			</div>
	</section> <!--/#cart_items-->

	

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