<?php 

include("path.php");
include(ROOT_PATH . "/controlers/categoryANDbrands.php");


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
				<h2>Statistics</h2>
			</div>

            <div class="register-req">
				<p></p>
			</div>
			<div >
				<h2>Add CATEGORY OR  BRANDS</h2>
			</div>

			<div>
				<br>
			</div>

            <form id="main-contact-form" class="contact-form row" name="contact-form" action="addCATEGORY&BRANDS.php" method="post">

				<div class="form-group col-md-6">
				    <input type="text" name="cat_name" class="form-control" placeholder="CATEGORY">
				</div>

				<div class="form-group col-md-6">
				    <input type="text" name="bra_name" class="form-control"  placeholder="BRAND">
				</div>

				<div class="form-group col-md-12">
				    <input type="submit" name="add-Cat-Bra" class="btn btn-primary pull-right" value="Submit">
				</div>

			</form>

			
			<div class="register-req">
				<p></p>
			</div>
			
			<div class="form-group col-md-5" >
				<h2>Categorys</h2>
			</div>
			<div class="form-group col-md-5 pull-right">
				<h2>Brands</h2>
			</div>
			

			<!-- Style for table products -->
				<style>
					table {
					font-family: arial, sans-serif;
					border-collapse: collapse;
					width: 100%;
					}

					td, th {
					border: 1px solid #dddddd;
					text-align: left;
					padding: 8px;
					}

					tr:nth-child(even) {
					background-color: #dddddd;
					}
					tr:hover {background-color: #A7f5f7;}
				</style>
			<!-- /Style for table products -->
			<table class="form-group col-md-5">
                <thead>
                    <th>N</th>
                    <th>name</th>
                    <th colspan="3">Action</th>
                </thead>
                <tbody>

				<?php foreach($Categorys as $key => $Category): ?>
                    <tr>
                    	<td><?php echo $key + 1; ?></td>
						<td><?php echo $Category['category_name'] ?></td>

                        <td><a href="addCATEGORY&BRANDS.php?delate_C_id=<?php echo $Category['id']; ?>" class="Delate">Delate</a></td>
                    </tr>
                <?php endforeach ;?>
                </tbody>
            </table>


			<table class="form-group col-md-5 pull-right">
                <thead>
                    <th>N</th>
                    <th>name</th>
                    <th colspan="3">Action</th>
                </thead>
                <tbody>

				<?php foreach($Brands as $key => $Brand): ?>
                    <tr>
                    	<td><?php echo $key + 1; ?></td>
						<td><?php echo $Brand['brand_name'] ?></td>

                        <td><a href="addCATEGORY&BRANDS.php?delate_B_id=<?php echo $Brand['id']; ?>" class="Delate">Delate</a></td>
                    </tr>
                <?php endforeach ;?>
                </tbody>
            </table>



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