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

            <form id="main-contact-form" class="contact-form row" name="contact-form" action="addProd.php" method="post">

				<div class="form-group col-md-6">
				    <input type="text" name="name" class="form-control" required="required" placeholder="Name">
				</div>

                <div class="form-group col-md-4">
				    <input type="text" name="price" class="form-control" required="required" placeholder="price">
				</div>

                <div class="form-group col-md-2">
				    <a href="">$</a>
				</div>

				<div class="form-group col-md-6">
                    <select name="availability">
						<option>-- Availability --</option>
						<option value='1'>Yes</option>
                        <option value='0'>No</option>
					</select>
				</div>

                <div class="form-group col-md-6">
                    <select name="condition">
						<option>-- Condition  --</option>
						<option>New</option>
                        <option>used</option>
                        <option>Other</option>
					</select>
				</div>
                
                <div class="form-group col-md-6">
                    <select name="brand">
						<option>-- brand  --</option>
						<option>nike</option>
                        <option>adidas</option>
					</select>
				</div>

                <div class="form-group col-md-6">
                    <select name="category">
						<option>-- category  --</option>
						<option>women</option>
                        <option>man</option>
                        <option>kids</option>
					</select>
				</div>

                <div class="form-group col-md-12 form-control">
                    <input type="file" name="image" id="profile-img">
				</div> 
                <div class="form-group col-md-12">
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

				<div class="form-group col-md-11">
				    <input type="submit" name="add" class="btn btn-primary pull-right" value="Submit">
				</div>

			</form>



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