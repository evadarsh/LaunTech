<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>LaunTech Laundry Service</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="../Assets/Files/Logo/favicon.ico">
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="../Assets/Templates/Main/https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;800&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="../Assets/Templates/Main/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="../Assets/Templates/Main/css/style.css" rel="stylesheet">
    <style>
        /* Add a border to all squares with the class 'bg-light' */
        .bg-light {
            border: 2px solid #4fc5e6; /* You can adjust the border width and color as needed */
            border-radius: 15px;
        }
        
        /* Style for the video toggler */
        .video-toggler {
            display: inline-block;
            margin-left: 10px;
            position: relative;
        }

        /* Style for the video */
        .video-toggler video {
            width: 30px;
            height: 30px;
        }

        /* Style for the play button (overlay) */
        .video-toggler::before {
            content: "\f04b"; /* FontAwesome play icon */
            font-family: FontAwesome;
            font-size: 30px;
            color: #fff;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            background-color: rgba(0, 0, 0, 0.5);
            cursor: pointer;
            border-radius: 50%;
        }

        /* Hide the video player initially */
        .video-toggler video {
            display: none;
        }
       /* CSS for Hover Effect */

    </style>
</head>
<body>


    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 pl-3 pl-lg-5">
            <video autoplay muted  width="300" height="100">
                    <source src="../Assets/Files/Logo/Laun.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <!-- Navigation Links -->
                    <div class="navbar-nav ml-auto py-0">
                        <a href="Homepage.php" class="nav-item nav-link">Home</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Book Now</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                            <a href="SearchBranch.php" class="nav-item nav-link">Order Cloths</a>
                            <a href="PackageSubscribe.php" class="nav-item nav-link">Subscribe Package</a>   
                        </div>
                        </div>
                        <a href="MyBooking.php" class="nav-item nav-link">My Bookings</a>
                        <a href="ComplaintBranch.php" class="nav-item nav-link">Complaints</a>
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">More</a>
                            <div class="dropdown-menu border-0 rounded-0 m-0">
                                <a href="MyProfile.php" class="nav-item nav-link">My Profile</a>
                                <a href="MyPackage.php" class="nav-item nav-link">My Package</a>
                                <a href="EditProfile.php" class="nav-item nav-link">Edit Profile</a>
                                <a href="ChangePassword.php" class="nav-item nav-link">Change password</a>
                            </div>
                        </div>
                        <a href="Logout.php" class="nav-item nav-link">Logout</a>
                    </div>
                    <!-- Navigation Links -->
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->