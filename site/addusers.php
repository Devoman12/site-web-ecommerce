<?php 

include("path.php");
include(ROOT_PATH . "/controlers/users.php");


$table1 = 'users';

$users = selectAll($table1);


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
				    <input type="text" name="name" class="form-control" required="required" placeholder="Name">
				</div>

                <div class="form-group col-md-6">
				    <input type="email" name="email" class="form-control" required="required" placeholder="email">
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
						<option  value='1'>Yes</option>
                        <option  value='0'>No</option>
					</select>
				</div>


				<div class="form-group col-md-12">
				    <input type="submit" name="add-user" class="btn btn-primary pull-right" value="Submit">
				</div>

			</form>
			
			<div class="register-req">
				<p></p>
			</div>
			
			<div >
				<h2>all users</h2>
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
					<th>email</th>
					<th>admin</th>
                    <th colspan="3">Action</th>
                </thead>
                <tbody>
				<?php foreach($users as $key => $user): ?>
                    <tr>
                    	<td><?php echo $key + 1; ?></td>
						<td><?php echo $user['name'] ?></td>
						<td><?php echo $user['email'] ?></td>
						
						<?php if($user['admin']): ?>
                            <td><a href="editeUser.php?admin=0&U_id=<?php echo $user['id']; ?>" class="unpublish">yes</a></td>
                        <?php else: ?>
                            <td><a href="editeUser.php?admin=1&U_id=<?php echo $user['id']; ?>" class="publish">no</a></td>
						<?php endif; ?>

						<td><a href="editeUser.php?id=<?php echo $user['id']; ?>" class="edit">edite</a></td>
                        <td><a href="editeUser.php?delate_id=<?php echo $user['id']; ?>" class="Delate">Delate</a></td>
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