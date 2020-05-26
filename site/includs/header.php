<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +2 95 01 88 821</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> info@domain.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->
		
<!--header-middle-->
		<div class="header-middle">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/home/logo.png" alt="" /></a>
						</div>
					</div>
					
					<div class="col-sm-8">
						<div class="search_box">
							<input type="text" placeholder="Search"/>
						</div>
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav">
								<?php if (isset($_SESSION['id'])): ?>
									<li><a href="#"><i class="fa fa-user"></i> <?php echo $_SESSION['name']; ?></a></li>
									<li><a href="#"><i class="fa fa-star"></i> Wishlist</a></li>
									<li><a href="contact-us.html">Contact</a></li>
									<li><a href="<?php echo BASE_URL . '/logout.php' ?>"; ?><i class="fa fa-lock"></i>Logout</a></li>
								
								<?php else: ?>
									<li><a href="shop.php">SHOW ALL PRODUCTS</a></li>
									<li><a href="contact-us.html">Contact</a></li>
									<li><a href="login.php"; ?><i class="fa fa-lock"></i> Login</a></li>
								<?php endif; ?>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	<!--/header-middle-->

	</header>