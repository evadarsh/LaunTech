<?php
session_start();
include("../Assets/Connection/Connection.php");
$selqry = "select * from tbl_branch u inner join tbl_place  inner join tbl_district   where branch_id=" . $_SESSION['bid'];
$result = $con->query($selqry);
$data = $result->fetch_assoc();
// Assuming you have a function to fetch the total number of bookings
$bookingCountQry = "SELECT COUNT(*) AS total_bookings FROM tbl_booking WHERE branch_id=" . $_SESSION['bid'];
$bookingCountResult = $con->query($bookingCountQry);
$bookingCountData = $bookingCountResult->fetch_assoc();
$totalBookingsNumber = $bookingCountData["total_bookings"];

// Assuming you have a function to fetch the total amount of bookings
$bookingAmountQry = "SELECT SUM(booking_amount) AS total_bookings FROM tbl_booking WHERE branch_id=" . $_SESSION['bid'];
$bookingAmountResult = $con->query($bookingAmountQry);
$bookingAmountData = $bookingAmountResult->fetch_assoc();
$totalBookingsAmount = $bookingAmountData["total_bookings"];
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Branch Dashboard</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../Assets/Files/Logo/favicon.ico">
    <!-- Custom fonts for this template-->
    <link href="../Assets/Templates/Branch/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../Assets/Templates/Branch/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
                <div class="sidebar-brand-icon ">
                    <img src="../Assets/Files/Logo/favicon-32x32.png" alt="Your Image Alt Text">
                </div>
                <div class="sidebar-brand-text mx-3">LaunTech</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="HomePage.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Bookings.php">
                    <i class="fas fa-chart-area"></i>
                    <span>Orders</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="NewRequest.php">
                    <i class="fas fa-plus-circle"></i>
                    <span>New Request</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Accepted.php">
                    <i class="fas fa-check-circle"></i>
                    <span>Accepted</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Rejected.php">
                    <i class="fas fa-times-circle"></i>
                    <span>Rejected</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="ClothPicked.php">
                    <i class="fas fa-shopping-bag"></i>
                    <span>Cloth Picked</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="WashingFinished.php">
                    <i class="fas fa-check-double"></i>
                    <span>Washing Finished</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="PaymentDone.php">
                    <i class="fas fa-dollar-sign"></i>
                    <span>Payment Done</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Returned.php">
                    <i class="fas fa-arrow-alt-circle-left"></i>
                    <span>Returned</span>
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="Cancelled.php">
                    <i class="fas fa-times"></i>
                    <span>Cancelled</span>
                </a>
            </li>


            <li class="nav-item">
                <a class="nav-link" href="Complaints.php">
                    <i class="fas fa-fw fa-table"></i>
                    <span>Complaints</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            <!-- Sidebar Message -->


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->


                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">







                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $data["branch_name"]; ?></span>
                                <img class="img-profile rounded-circle" src="../Assets/Files/Branch/<?php echo $data['branch_photo']; ?>" class="img-fluid" alt="Branch Photo">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="BranchProfile.php">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="EditBranch.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Edit Profile
                                </a>
                                <a class="dropdown-item" href="ChangePassword.php">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Change Password
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->