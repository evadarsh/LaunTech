<?php
session_start();
include("../Assets/Connection/Connection.php");
$selqry = "select * from tbl_admin";
$result = $con->query($selqry);
$data = $result->fetch_assoc();

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
		#content {
			min-height: 100vh;
		}
	</style>
</head>

<body>
	<div class="wrapper">
		<div class="main-header">
			<div class="logo-header">
				<a href="#" class="logo">
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
						</li>
						<li class="nav-item dropdown">
							<a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false"> <img src="../Assets/Files/Logo/logoadmin.png" alt="user-img" width="36"><span><?php echo $data['admin_name']; ?></span></span> </a>
							<ul class="dropdown-menu dropdown-user">
								<li>
									<div class="user-box">
										<div class="u-img"><img src="../Assets/Files/Logo/logoadmin.png" alt="user"></div>
										<div class="u-text">
											<h4><?php echo $data['admin_name']; ?></h4>
											<p class="text-muted"><?php echo $data['admin_email']; ?></p>
										</div>
									</div>
								</li>
								<div class="dropdown-divider"></div>
								<a class="dropdown-item" href="MyProfile.php"><i class="ti-user"></i> My Profile</a>
								<a href="Logout.php" class="dropdown-item"  onclick="confirmLogout()">Logout</a>
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
							</span>
						</a>
						<div class="clearfix"></div>
					</div>
				</div>
				<ul class="nav">
					<li class="nav-item">
						<a href="BranchRegistration.php">
							<i class="la la-registered"></i>
							<p>BRANCH REGISTRATION</p>
							<span class="badge badge-danger">Add</span>
						</a>
					</li>
					<li class="nav-item">
						<?php
						
						$branchCountQuery = "SELECT COUNT(*) AS branch_count FROM tbl_branch";
						$branchCountResult = $con->query($branchCountQuery);
						$branchCountData = $branchCountResult->fetch_assoc();
						$branchCount = $branchCountData['branch_count'];
						?>
						<a href="Branchs.php">
							<i class="la la-font"></i>
							<p>BRANCHS</p>
							<span class="badge badge-danger"><?php echo $branchCount; ?></span>
						</a>
					</li>

					<li class="nav-item">
						<?php
						
						$districtCountQuery = "SELECT COUNT(*) AS district_count FROM tbl_district";
						$districtCountResult = $con->query($districtCountQuery);
						$districtCountData = $districtCountResult->fetch_assoc();
						$districtCount = $districtCountData['district_count'];
						?>
						<a href="District.php">
							<i class="la la-map"></i>
							<p>DISTRICT</p>
							<span class="badge badge-count"><?php echo $districtCount; ?></span>
						</a>
					</li>

					<li class="nav-item">
					<?php
						
						$placeCountQuery = "SELECT COUNT(*) AS place_count FROM tbl_place";
						$placeCountResult = $con->query($placeCountQuery);
						$placeCountData = $placeCountResult->fetch_assoc();
						$placeCount = $placeCountData['place_count'];
						?>
						<a href="Place.php">
							<i class="la la-map-marker"></i>
							<p>PLACE</p>
							<span class="badge badge-count"><?php echo $placeCount; ?></span>
						</a>
					</li>

					<li class="nav-item">
					<?php
						$categoryCountQuery = "SELECT COUNT(*) AS category_count FROM tbl_category";
						$categoryCountResult = $con->query($categoryCountQuery);
						$categoryCountData = $categoryCountResult->fetch_assoc();
						$categoryCount = $categoryCountData['category_count'];
						?>
						<a href="Category.php">
							<i class="la la-list-alt"></i>
							<p>CATEGORY</p>
							<span class="badge badge-count"><?php echo $categoryCount; ?></span>
						</a>
					</li>
					<li class="nav-item">
					<?php
						$subcategoryCountQuery = "SELECT COUNT(*) AS subcategory_count FROM tbl_subcategory";
						$subcategoryCountResult = $con->query($subcategoryCountQuery);
						$subcategoryCountData = $subcategoryCountResult->fetch_assoc();
						$subcategoryCount = $subcategoryCountData['subcategory_count'];
						?>
						<a href="subcategory.php">
							<i class="la la-tags"></i>
							<p>SUBCATEGORY</p>
							<span class="badge badge-success"><?php echo $subcategoryCount; ?></span>
						</a>
					</li>
					<li class="nav-item">
					<?php
						$packageCountQuery = "SELECT COUNT(*) AS package_count FROM tbl_package";
						$packageCountResult = $con->query($packageCountQuery);
						$packageCountData = $packageCountResult->fetch_assoc();
						$packageCount = $packageCountData['package_count'];
						?>
						<a href="Addpackage.php">
							<i class="la la-gift"></i>
							<p>PACKAGES</p>
							<span class="badge badge-count"><?php echo $packageCount; ?></span>
						</a>
					</li>
					<li class="nav-item">
						<a href="Complaints.php">
							<i class="la la-comment"></i>
							<p>COMPLAINTS</p>
						</a>
					</li>
				</ul>

			</div>
		</div>
		<div class="main-panel">
			<div class="content">
				<div class="container-fluid" id="content">