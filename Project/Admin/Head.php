<?php
session_start();
include("../Assets/Connection/Connection.php");
$selqry="select * from tbl_admin" ;
$result=$con->query($selqry);
$data=$result->fetch_assoc();

?> 


<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>LuanTech Administrator</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
	<!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../Assets/Files/Logo/favicon.ico">
	<link rel="stylesheet" href="../Assets/Templates/Admin/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
	<link rel="stylesheet" href="../Assets/Templates/Admin/css/ready.css">
	<link rel="stylesheet" href="../Assets/Templates/Admin/css/demo.css">
    <style>
        #content{
            min-height: 100vh;
        }
    </style>
</head>
<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header">
				<a href="index.php" class="logo">
				<video autoplay muted loop width=100%>
                    <source src="../Assets/Files/Logo/Laun.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
				</a>
				<button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-controls="sidebar" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<button class="topbar-toggler more"><i class="la la-ellipsis-v"></i></button>
			</div>
			<nav class="navbar navbar-header navbar-expand-lg">
				<div class="container-fluid">
					
					
					<ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="la la-envelope"></i>
							</a>
						</li>
						<li class="nav-item dropdown hidden-caret">
							<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<i class="la la-bell"></i>
								<span class="notification">3</span>
							</a>
							<ul class="dropdown-menu notif-box" aria-labelledby="navbarDropdown">
								<li>
									<div class="dropdown-title">You have 4 new notification</div>
								</li>
								<li>
									<div class="notif-center">
										<a href="#">
											<div class="notif-icon notif-primary"> <i class="la la-user-plus"></i> </div>
											<div class="notif-content">
												<span class="block">
													New user registered
												</span>
												<span class="time">5 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-icon notif-success"> <i class="la la-comment"></i> </div>
											<div class="notif-content">
												<span class="block">
													Rahmad commented on Admin
												</span>
												<span class="time">12 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-img"> 
												<img src="../Assets/Templates/Admin/img/profile2.jpg" alt="Img Profile">
											</div>
											<div class="notif-content">
												<span class="block">
													Reza send messages to you
												</span>
												<span class="time">12 minutes ago</span> 
											</div>
										</a>
										<a href="#">
											<div class="notif-icon notif-danger"> <i class="la la-heart"></i> </div>
											<div class="notif-content">
												<span class="block">
													Farrah liked Admin
												</span>
												<span class="time">17 minutes ago</span> 
											</div>
										</a>
									</div>
								</li>
								<li>
									<a class="see-all" href="javascript:void(0);"> <strong>See all notifications</strong> <i class="la la-angle-right"></i> </a>
								</li>
							</ul>
						</li>
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="../Assets/Files/Logo/logoadmin.png" alt="user-img" width="36" ><span ><?php echo $data['admin_name']; ?></span></span> </a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img"><img src="../Assets/Files/Logo/logoadmin.png" alt="user"></div>
										<div class="u-text">
											<h4><?php echo $data['admin_name']; ?></h4>
											<p class="text-muted"><?php echo $data['admin_email']; ?></p></div>
										</div>
									</li>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="ti-user"></i> My Profile</a>
									<a class="dropdown-item" href="#"></i> My Balance</a>
									<a class="dropdown-item" href="#"><i class="ti-email"></i> Inbox</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="ti-settings"></i> Account Setting</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="#"><i class="fa fa-power-off"></i> Logout</a>
								</ul>
								<!-- /.dropdown-user -->
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<div class="sidebar">
				<div class="scrollbar-inner sidebar-wrapper">
					<div class="user">
						<div class="photo">
							<img src="../Assets/Files/Logo/logoadmin.png">
						</div>
						<div class="info">
							<a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
								<span>
								<?php echo $data['admin_name']; ?>
									<span class="user-level">Administrator</span>
									<span class="caret"></span>
								</span>
							</a>
							<div class="clearfix"></div>

							<div class="collapse in" id="collapseExample" aria-expanded="true" style="">
								<ul class="nav">
									<li>
										<a href="#profile">
											<span class="link-collapse">My Profile</span>
										</a>
									</li>
									<li>
										<a href="#edit">
											<span class="link-collapse">Edit Profile</span>
										</a>
									</li>
									<li>
										<a href="#settings">
											<span class="link-collapse">Settings</span>
										</a>
									</li>
								</ul>
							</div>
						</div>
					</div>
					<ul class="nav">
					<li class="nav-item">
							<a href="Branchs.php">
								<i class="la la-font"></i>
								<p>BRANCHS</p>
								<span class="badge badge-danger">3</span>
							</a>
						</li>
						<li class="nav-item ">
							<a href="District.php">
								<i class="la la-dashboard"></i>
								<p>DISTRICT</p>
								<span class="badge badge-count">5</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="Place.php">
								<i class="la la-table"></i>
								<p>PLACE</p>
								<span class="badge badge-count">14</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="Category.php">
								<i class="la la-keyboard-o"></i>
								<p>CATEGORY</p>
								<span class="badge badge-count">50</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="subcategory.php">
								<i class="la la-bell"></i>
								<p>SUBCATEGORY</p>
								<span class="badge badge-success">3</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="Addpackage.php">
								<i class="la la-th"></i>
								<p>PACKAGES</p>
								<span class="badge badge-count">6</span>
							</a>
						</li>
						
						<li class="nav-item">
							<a href="BranchRegistration.php">
								<i class="la la-font"></i>
								<p>BRANCH REGISTRATION</p>
								<span class="badge badge-danger">3</span>
							</a>
						</li>
						<li class="nav-item">
							<a href="Complaints.php">
								<i class="la la-fonticons"></i>
								<p>COMPLAINTS</p>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="main-panel">
				<div class="content">
					<div class="container-fluid" id="content">
						 