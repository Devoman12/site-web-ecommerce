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

			<div >
				<h2>edit Product</h2>
			</div>

			<div>
				<br>
			</div>

            <form id="main-contact-form" class="contact-form row" name="contact-form" action="addProd.php" method="post" enctype="multipart/form-data">

				<div class="form-group col-md-6">
					<input type="hidden" name="id" value="<?php echo $id ;?>">
				    <input type="text" name="name" class="form-control" value="<?php echo $name ?>" required="required" placeholder="Name">
				</div>

                <div class="form-group col-md-6">
					<input type="number" name="price" class="form-control" value="<?php echo $price ?>" required="required" placeholder="price" min="1" max="9999999999">
				</div>

				<div class="form-group col-md-6">
					<h5>availability</h5>
                    <select name="availability">
						<option <?php if ($availability == 1 ) echo 'selected' ; ?> value='1'>Yes</option>
                        <option <?php if ($availability == 0 ) echo 'selected' ; ?> value='0'>No</option>
					</select>
				</div>


                <div class="form-group col-md-6">
					<h5>condition</h5>
                    <select name="condition">
						<option <?php if ($condition == 'New' ) echo 'selected' ; ?> value="New" >New</option>
                        <option <?php if ($condition == 'used' ) echo 'selected' ; ?> value="used" >used</option>
                        <option <?php if ($condition == 'Other' ) echo 'selected' ; ?> value="Other" >Other</option>
					</select>
				</div>
                
                <div class="form-group col-md-6">
					<h5>brand</h5>
                    <select name="brand">
						<option <?php if ($brand == 'nike' ) echo 'selected' ; ?> value="nike" >nike</option>
                        <option <?php if ($brand == 'adidas' ) echo 'selected' ; ?> value="adidas" >adidas</option>
					</select>
				</div>

                <div class="form-group col-md-6">
					<h5>category</h5>
                    <select name="category">
						<option <?php if ($category == 'women' ) echo 'selected' ; ?>  value="women" >women</option>
                        <option <?php if ($category == 'man' ) echo 'selected' ; ?> value="man" >man</option>
                        <option <?php if ($category == 'kids' ) echo 'selected' ; ?> value="kids" >kids</option>
					</select>
				</div>

                <div class="form-group col-md-12 ">
					<h5>image</h5>
                    <input type="file" name="pro_image" id="profile-img">
				</div> 
                <div class="form-group col-md-12 form-control">
                    <img src="" id="profile-img-tag" width="99%" />
                    <script type="text/javascript">
                        function readURL(input) {
                            if (input.files && input.files[0]) {
                                var reader = new FileReader();
                                reader.onload = function (e) {
                                    $('#profile-img-tag').attr('src', e.target.result);}
                                reader.readAsDataURL(input.files[0]);}}
                        $("#profile-img").change(function(){
                            readURL(this);});
                    </script>
				</div> 

				<div class="form-group col-md-12">
				    <input type="submit" name="update-pro" class="btn btn-primary pull-right" value="Submit">
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