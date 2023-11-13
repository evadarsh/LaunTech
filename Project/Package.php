<?php
session_start();
ob_start();
include('Head.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        /* Add a border to all squares with the class 'bg-light' */
        .bg-light {
            border: 2px solid #4fc5e6; /* You can adjust the border width and color as needed */
            border-radius: 15px;
        }
    </style>
</head>
<body>
    <!-- Pricing Plan Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Our Package Plans</h6>
            <h1 class="display-4 text-center mb-5">The Best Packages</h1>
            <div class="row justify-content-center">
                <!-- Plan 1: Basic -->
                <div class="col-lg-2.5 mb-4 mb-lg-0">
                    <div class="bg-light text-center mb-2 pt-4" style="width: 220px;">
                        <div class="d-inline-flex flex-column align-items-center justify-content-center bg-secondary rounded-circle shadow mt-2 mb-4" style="width: 200px; height: 200px; border: 15px solid #ffffff;">
                            <h3 class="text-white">silver</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">₹</small>499
                            </h1>
                        </div>
                        <div class="d-flex flex-column align-items-center py-3">
                            <p><strong>90 Days</strong></p>
                            <p><strong>Number Of Cloths: 50</strong></p>
                            <p><strong>10% Discount On Every Order</strong></p>
                            <p><strong>Package Includes Basic Services</strong></p>
                        </div>
                        <a href="../Project/Guest/Login.php" class="btn btn-secondary py-2 px-4">Buy Now</a>
                    </div>
                </div>
                <!-- Plan 2: Standard -->
                <div class="col-lg-2.5 mb-4 mb-lg-0">
                    <div class="bg-light text-center mb-2 pt-4" style="width: 220px;">
                        <div class="d-inline-flex flex-column align-items-center justify-content-center bg-primary rounded-circle shadow mt-2 mb-4" style="width: 200px; height: 200px; border: 15px solid #ffffff;">
                            <h3 class="text-white">silver ++</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">₹</small>599
                            </h1>
                        </div>
                        <div class="d-flex flex-column align-items-center py-3">
                            <p><strong>120 Days</strong></p>
                            <p><strong>Number Of Cloths: 70</strong></p>
                            <p><strong>10% Discount On Every Order</strong></p>
                            <p><strong>Package Includes Upgraded Basic Services</strong></p>
                        </div>
                        <a href="../Project/Guest/Login.php" class="btn btn-primary py-2 px-4">Buy Now</a>
                    </div>
                </div>
                <!-- Plan 6: Gold -->
                <div class="col-lg-2.5 mb-4 mb-lg-0">
                    <div class="bg-light text-center mb-2 pt-4" style="width: 220px;">
                        <div class="d-inline-flex flex-column align-items-center justify-content-center bg-warning rounded-circle shadow mt-2 mb-4" style="width: 200px; height: 200px; border: 15px solid #ffffff;">
                            <h3 class="text-white">Gold</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">₹</small>649
                            </h1>
                        </div>
                        <div class="d-flex flex-column align-items-center py-3">
                            <p><strong>180 Days</strong></p>
                            <p><strong>Number Of Cloths:80</strong></p>
                            <p><strong>15% Discount On Every Order</strong></p>
                            <p><strong>Package Includes Standard Services</strong></p>
                        </div>
                        <a href="../Project/Guest/Login.php" class="btn btn-warning py-2 px-4">Buy Now</a>
                    </div>
                </div>                
                <!-- Plan 4: Diamond -->
                <div class="col-lg-2.5 mb-4 mb-lg-0">
                    <div class="bg-light text-center mb-2 pt-4" style="width: 220px;">
                        <div class="d-inline-flex flex-column align-items-center justify-content-center bg-info rounded-circle shadow mt-2 mb-4" style="width: 200px; height: 200px; border: 15px solid #ffffff;">
                            <h3 class="text-white">Gold ++</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">₹</small>799
                            </h1>
                        </div>
                        <div class="d-flex flex-column align-items-center py-3">
                            <p><strong>240 Days</strong></p>
                            <p><strong>Number Of Cloths: 100</strong></p>
                            <p><strong>15% Discount On Every Order</strong></p>
                            <p><strong>Package Includes Upgraded Services</strong></p>
                        </div>
                        <a href="../Project/Guest/Login.php" class="btn btn-info py-2 px-4">Buy Now</a>
                    </div>
                </div>
                <!-- Plan 5: Luxury -->
                <div class="col-lg-2.5 mb-4 mb-lg-0">
                    <div class="bg-light text-center mb-2 pt-4" style="width: 220px;">
                        <div class="d-inline-flex flex-column align-items-center justify-content-center bg-success rounded-circle shadow mt-2 mb-4" style="width: 200px; height: 200px; border: 15px solid #ffffff;">
                            <h3 class="text-white">Diamond</h3>
                            <h1 class="display-4 text-white mb-0">
                                <small class="align-top" style="font-size: 22px; line-height: 45px;">₹</small>999
                            </h1>
                        </div>
                        <div class="d-flex flex-column align-items-center py-3">
                            <p><strong>365 Days</strong></p>
                            <p><strong>Number Of Cloths: 250</strong></p>
                            <p><strong>25% Discount On Every Order</strong></p>
                            <p><strong>Package Includes All Services</strong></p>
                        </div>
                        <a href="../Project/Guest/Login.php" class="btn btn-success py-2 px-4">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->
</body>
    <?php
include('Foot.php');
ob_flush();
?>

</html>
