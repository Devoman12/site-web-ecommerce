<?php 

include("path.php");
include(ROOT_PATH . "/controlers/pro.php");


$table1 = 'categorys';
$table2 = 'brands';

$Categorys = selectAll($table1);
$Brands = selectAll($table2);


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
				<h2>Add Product</h2>
			</div>

			<div>
				<br>
			</div>

            <form id="main-contact-form" class="contact-form row" name="contact-form" action="addProd.php" method="post" enctype="multipart/form-data">

				<div class="form-group col-md-6">
				    <input type="text" name="name" class="form-control" required="required" placeholder="Name">
				</div>

                <div class="form-group col-md-6">
				    <!-- <input type="text" name="price" class="form-control" required="required" placeholder="price"> -->
					<input type="number" name="price" class="form-control" required="required" placeholder="price" min="1" max="9999999999">
				</div>

				<div class="form-group col-md-6">
					<h5>availability</h5>
                    <select name="availability">
						<option  value='1'>Yes</option>
                        <option  value='0'>No</option>
					</select>
				</div>

                <div class="form-group col-md-6">
					<h5>condition</h5>
                    <select name="condition">
						<option value="New" >New</option>
                        <option value="used" >used</option>
                        <option value="Other" >Other</option>
					</select>
				</div>

				<div class="form-group col-md-6">
					<h5>brand</h5>
                    <select name="brand">
                    	<?php foreach($Brands as $key => $Brand ): ?>
                            <option value="<?php echo $Brand['id'] ?>"><?php echo $Brand['brand_name'] ?></option>
                        <?php endforeach; ?>
            		</select>
				</div>


                <div class="form-group col-md-6">
					<h5>category</h5>
                    <select name="category">
					<?php foreach($Categorys as $key => $Category ): ?>
                            <option value="<?php echo $Category['id'] ?>"><?php echo $Category['category_name'] ?></option>
                    <?php endforeach; ?>
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
				    <input type="submit" name="add" class="btn btn-primary pull-right" value="Submit">
				</div>

			</form>
			
			<div class="register-req">
				<p></p>
			</div>
			
			<div >
				<h2>all Products</h2>
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
			<table>
                <thead>
                    <th>N</th>
                    <th>name</th>
					<th>price</th>
					<th>condition</th>
					<th>category</th>
					<th>brand</th>
					<th>availability</th>
                    <th colspan="3">Action</th>
                </thead>
                <tbody>
				<?php foreach($products as $key => $product): ?>
                    <tr>
                    	<td><?php echo $key + 1; ?></td>
						<td><?php echo $product['name'] ?></td>
						<td><?php echo $product['price'] ?></td>
						<td><?php echo $product['condition'] ?></td>
						<td><?php echo(selectOne($table1, ['id' => $product['category']])['category_name']);  ?></td>
						<td><?php echo(selectOne($table2, ['id' => $product['brand']])['brand_name']); ?></td>
						<?php if($product['availability']): ?>
                            <td><a href="edit.php?availability=0&p_id=<?php echo $product['id']; ?>" class="unpublish">yes</a></td>
                        <?php else: ?>
                            <td><a href="edit.php?availability=1&p_id=<?php echo $product['id']; ?>" class="publish">no</a></td>
						<?php endif; ?>

						<td><a href="edit.php?id=<?php echo $product['id']; ?>" class="edit">edite</a></td>
                        <td><a href="edit.php?delate_id=<?php echo $product['id']; ?>" class="Delate">Delate</a></td>
                    </tr>
                <?php endforeach ;?>
                </tbody>
            </table>

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