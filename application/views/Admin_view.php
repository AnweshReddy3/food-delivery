<!doctype html>
<html lang="en">

<head>

	<title>Dashboard</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

	<!-- external css -->
	<link href="<?php echo base_url('./assets/css/admin.css')?>" rel="stylesheet">

	<!-- font awesome icons -->
	<script src="https://kit.fontawesome.com/aa1d0d4bf6.js" crossorigin="anonymous"></script>

</head>

<body>


	<div class="wrapper">
		<header>
			<div class="header-content">
				<nav class="navbar nav-expand-md navbar-light bg-light">
					<a class="navbar-brand" href="<?php echo base_url(); ?>admin_controller/admin_view/">
						Food Explorer
					</a>
					<div class="dropdown image dropleft">
						<img class="rounded-circle w-25 h-25 dropdown-toggle " id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" src="<?php echo base_url(); ?>assets/upload/profile/profile_pic.jpg" />

						<div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
							<a class="dropdown-item" href="<?php echo base_url('admin_controller/my_profile/') ?>">
								<i class="fas fa-user"></i>
								My Profile
							</a>
							<a class="dropdown-item" href="#">
								<i class="fas fa-key"></i>
								Change Password
							</a>
							<a class="dropdown-item" href="<?php echo base_url(); ?>admin_controller/notification/">
								<i class="fas fa-bell"></i>
								Notification
							</a>
							<a class="dropdown-item" href="#">
								<i class="fas fa-user-cog"></i>
								Setting
							</a>
							<a class="dropdown-item" href="<?php echo base_url('admin_controller/logout/') ?>">
								<i class="fas fa-sign-out-alt"></i>
								Logout
							</a>
						</div>
					</div>
				</nav>
			</div>
		</header>

		<aside>
			<ul class="sidebar-menu">
				<li class="sidebar-list">
					<i class="fas fa-tachometer-alt"></i>
					<a href="<?php echo base_url(); ?>admin_controller/admin_view/">
						<span>Dashboard</span>
					</a>
				</li>
				<li class="sidebar-list">
					<i class="far fa-keyboard"></i>
					<a href="<?php echo base_url(); ?>admin_controller/admin_category/">
						<span>Category</span>
					</a>
				</li>
				<li class="sidebar-list">
					<i class="far fa-minus-square"></i>
					<a href="<?php echo base_url(); ?>admin_controller/menu_item/">
						<span>Menu Items</span>
					</a>
				</li>
				<li class="sidebar-list">
					<i class="fas fa-umbrella"></i>
					<a href="<?php echo base_url(); ?>admin_controller/admin_top_cat/">
						<span>Toppings</span>
					</a>
				</li>
				<li class="sidebar-list">
					<i class="fas fa-user"></i>
					<a href="<?php echo base_url(); ?>admin_controller/users/">
						<span>Users</span>
					</a>
				</li>
				<li class="sidebar-list">
					<i class="fas fa-child"></i>
					<a href="<?php echo base_url(); ?>admin_controller/delivery_boy/">
						<span>Delivery Boy</span>
					</a>
				</li>
				<li class="sidebar-list">
					<i class="fas fa-city"></i>
					<a href="<?php echo base_url(); ?>admin_controller/cities/">
						<span>City</span>
					</a>
				</li>
				<li class="sidebar-list">
					<i class="fas fa-address-book"></i>
					<a href="<?php echo base_url(); ?>admin_controller/contact/">
						<span>Contact Us</span>
					</a>
				</li>
				<p>Notification</p>
				<hr>
				<li class="sidebar-list">
					<i class="far fa-bell"></i>
					<a href="<?php echo base_url(); ?>admin_controller/notification/">
						<span>Send Notification</span>
					</a>
				</li>
				<li class="sidebar-list">
					<i class="fab fa-android"></i>
					<a href="#">
						<span>Android Notification</span>
					</a>
				</li>
				<li class="sidebar-list">
					<i class="fab fa-apple"></i>
					<a href="#">
						<span>ios Notification</span>
					</a>
				</li>
			</ul>
		</aside>


		<article>
		</article>

	</div>



	<!-- Option 1: Bootstrap Bundle with Popper -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>

</html>
