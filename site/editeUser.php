<?php 

include("path.php");
include(ROOT_PATH . "/controlers/users.php");


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
			
			<div class="col-md-12">
				<h2>Add user</h2>
			</div>

			<div>
				<br>
			</div>

            <form id="main-contact-form" class="contact-form row" name="contact-form" action="addusers.php" method="post">

				<div class="form-group col-md-6">
                    <input type="hidden" name="id" value="<?php echo $id ;?>">
				    <input type="text" name="name" class="form-control"  value="<?php echo $name ?>" required="required" placeholder="Name">
				</div>

                <div class="form-group col-md-6">
				    <input type="email" name="email" class="form-control" value="<?php echo $email ?>" required="required" placeholder="email">
				</div>

                <div class="form-group col-md-6">
				    <input type="password" name="password" class="form-control" required="required" placeholder="password">
				</div>

                <div class="form-group col-md-6">
				    <input type="password" name="password1" class="form-control" required="required" placeholder="password">
				</div>
                

				<div class="form-group col-md-6">
					<h5>admin</h5>
                    <select name="admin">
						<option <?php if ($admin == '1' ) echo 'selected' ; ?> value='1'>Yes</option>
                        <option <?php if ($admin == '0' ) echo 'selected' ; ?> value='0'>No</option>
					</select>
				</div>


				<div class="form-group col-md-12">
				    <input type="submit" name="update-user" class="btn btn-primary pull-right" value="Submit">
				</div>

			</form>
			
			<div class="register-req">
				<p></p>
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