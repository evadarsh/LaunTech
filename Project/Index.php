<?php
session_start();
ob_start();
include('Head.php');
?>
<!DOCTYPE html>
<html lang="en">
    <!-- Carousel Start -->
    <div class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <video class="w-100" autoplay loop muted>
                        <source src="Assets/Files/Video/Service.mp4" type="video/mp4">
                        <!-- You can also provide additional sources for different video formats -->
                        <!-- <source src="video1.webm" type="video/webm"> -->
                        Your browser does not support the video tag.
                    </video>
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px; background: rgba(0, 0, 0, 0.5);">
                            <h4 class="text-white text-uppercase mb-md-3">Laundry & Dry Cleaning</h4>
                            <h1 class="display-3 text-white mb-md-4">Best For Laundry Services</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <video class="w-100" autoplay loop muted>
                        <source src="Assets/Files/Video/StaffVideo.mp4" type="video/mp4">
                        <!-- You can also provide additional sources for different video formats -->
                        <!-- <source src="video2.webm" type="video/webm"> -->
                        Your browser does not support the video tag.
                    </video>
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px; background: rgba(0, 0, 0, 0.5);">
                            <h4 class="text-white text-uppercase mb-md-3">Laundry & Dry Cleaning</h4>
                            <h1 class="display-3 text-white mb-md-4">Highly Professional Staff</h1>
                            <a href="" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                <div class="btn btn-secondary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-prev-icon mb-n2"></span>
                </div>
            </a>
            <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                <div class="btn btn-secondary" style="width: 45px; height: 45px;">
                    <span class="carousel-control-next-icon mb-n2"></span>
                </div>
            </a>
        </div>
    </div>
    
    <!-- Carousel End -->


    <!-- Contact Info Start -->
    <div class="container-fluid contact-info mt-5 mb-4">
        <div class="container" style="padding: 0 30px;">
            <div class="row">
                <div class="col-md-4 d-flex align-items-center justify-content-center bg-secondary mb-4 mb-lg-0" style="height: 100px;">
                    <div class="d-inline-flex">
                        <i class="fa fa-2x fa-map-marker-alt text-white m-0 mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-white font-weight-medium">Our Location</h5>
                            <p class="m-0 text-white">Trivandrum,Kottayam,Ernakulam </p>
                            <p class="m-0 text-white">Thrissur,Malappuram,Calicut </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center justify-content-center bg-primary mb-4 mb-lg-0" style="height: 100px;">
                    <div class="d-inline-flex text-left">
                        <i class="fa fa-2x fa-envelope text-white m-0 mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-white font-weight-medium">Email Us</h5>
                            <p class="m-0 text-white">launtech2023@gmail.com.com</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 d-flex align-items-center justify-content-center bg-secondary mb-4 mb-lg-0" style="height: 100px;">
                    <div class="d-inline-flex text-left">
                        <i class="fa fa-2x fa-phone-alt text-white m-0 mr-3"></i>
                        <div class="d-flex flex-column">
                            <h5 class="text-white font-weight-medium">Call Us</h5>
                            <p class="m-0 text-white">+91 7510849660</p>
                            <p class="m-0 text-white">+91 9567455445</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Info End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container pt-0 pt-lg-4">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid" src="Assets/Templates/Main/img/about.jpg" alt="">
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0 pl-lg-5">
                    <h6 class="text-secondary text-uppercase font-weight-medium mb-3">Learn About Us</h6>
                    <h1 class="mb-4">We Are Quality Laundry Provider In Your City</h1>
                    <h5 class="font-weight-medium font-italic mb-4">Your trusted partner in laundry management solutions.</h5>
                    <p class="mb-2">Our mission is to revolutionize the way laundry is managed. We strive to provide innovative, user-friendly, and cost-effective solutions that empower businesses and individuals to take control of their laundry processes. By leveraging the latest technology and industry best practices, we aim to save you time, reduce costs, and deliver impeccable laundry results.</p>
                    <div class="row">
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">Quality Laundry Service</p>
                            </div>
                        </div>
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">Express Fast Delivery</p>
                            </div>
                        </div>
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">Highly Professional Staff</p>
                            </div>
                        </div>
                        <div class="col-sm-6 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">100% Satisfaction Guarantee</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Services Start -->
    <div class="container-fluid pt-5 pb-3">
        <div class="container">
            <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Our Services</h6>
            <h1 class="display-4 text-center mb-5">What We Offer</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-3x fa-cloud-sun text-secondary"></i>
                        </div>
                        <h4 class="font-weight-bold m-0">Dry Cleaning</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                            <i class="fas fa-3x fa-soap text-secondary"></i>
                        </div>
                        <h4 class="font-weight-bold m-0">Wash & Laundry</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-3x fa-burn text-secondary"></i>
                        </div>
                        <h4 class="font-weight-bold m-0">Clean White</h4>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white shadow rounded-circle mb-4" style="width: 100px; height: 100px;">
                            <i class="fa fa-3x fa-tshirt text-secondary"></i>
                        </div>
                        <h4 class="font-weight-bold m-0">Suits Cleaning</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-0 my-lg-5 pt-0 pt-lg-5 pr-lg-5">
                    <h6 class="text-secondary text-uppercase font-weight-medium mb-3">Our Features</h6>
                    <h1 class="mb-4">Why Choose Us</h1>
                    <p>We are committed to staying on the cutting edge of laundry management technology, providing you with the latest and most efficient tools for success. </p>
                    <div class="row">
                        <div class="col-sm-6 mb-4">
                            <h1 class="text-secondary" data-toggle="counter-up">10000</h1>
                            <h5 class="font-weight-bold">Quality Service</h5>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <h1 class="text-secondary" data-toggle="counter-up">250</h1>
                            <h5 class="font-weight-bold">Expert Worker</h5>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <h1 class="text-secondary" data-toggle="counter-up">1250</h1>
                            <h5 class="font-weight-bold">Happy Clients</h5>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <h1 class="text-secondary" data-toggle="counter-up">7000</h1>
                            <h5 class="font-weight-bold">Dry Cleaning</h5>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="d-flex flex-column align-items-center justify-content-center bg-secondary h-100 py-5 px-3">
                        <i class="fa fa-5x fa-certificate text-white mb-5"></i>
                        <h1 class="display-1 text-white mb-3">20000+</h1>
                        <h1 class="text-white m-0">Orders/Month</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Features End -->


    <!-- Working Process Start -->
    <div class="container-fluid pt-5">
        <div class="container">
            <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Working Process</h6>
            <h1 class="display-4 text-center mb-5">How We Work</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                            <h2 class="display-2 text-secondary m-0">1</h2>
                        </div>
                        <h3 class="font-weight-bold m-0 mt-2">Order Place</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                            <h2 class="display-2 text-secondary m-0">2</h2>
                        </div>
                        <h3 class="font-weight-bold m-0 mt-2">Free Pick Up</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                            <h2 class="display-2 text-secondary m-0">3</h2>
                        </div>
                        <h3 class="font-weight-bold m-0 mt-2">Dry Cleaning</h3>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center mb-5">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white border border-light shadow rounded-circle mb-4" style="width: 150px; height: 150px; border-width: 15px !important;">
                            <h2 class="display-2 text-secondary m-0">4</h2>
                        </div>
                        <h3 class="font-weight-bold m-0 mt-2">Free Delivery</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Working Process End -->


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

    <!-- Testimonial Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Reviews</h6>
            <h1 class="display-4 text-center mb-5">Our Clients Say</h1>
            <div class="owl-carousel testimonial-carousel">
                <div class="testimonial-item">
                    <img class="position-relative rounded-circle bg-white shadow mx-auto" src="Assets/Templates/Main/img/testimonial-1.jpg" style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                    <div class="bg-light text-center p-4 pt-0">
                        <h5 class="font-weight-medium mt-5">Jhon Sacaria</h5>
                        <p class="text-muted font-italic">Hotel Manager</p>
                        <p class="m-0">"LaunTech has been a game-changer for our hotel's laundry needs. Their professionalism and attention to detail are unparalleled. Our guests have noticed the difference in the quality of our linens, and we couldn't be happier with their services."</p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img class="position-relative rounded-circle bg-white shadow mx-auto" src="Assets/Templates/Main/img/testimonial-2.jpg" style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                    <div class="bg-light text-center p-4 pt-0">
                        <h5 class="font-weight-medium mt-5">Sarah Mari</h5>
                        <p class="text-muted font-italic">Bussiness</p>
                        <p class="m-0">"As a business owner, I needed a laundry service that could handle our uniforms efficiently. LaunTech not only met but exceeded our expectations. Their personalized service and quick turnaround have been a tremendous asset to our operations."</p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img class="position-relative rounded-circle bg-white shadow mx-auto" src="Assets/Templates/Main/img/testimonial-3.jpg" style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                    <div class="bg-light text-center p-4 pt-0">
                        <h5 class="font-weight-medium mt-5">Mark B</h5>
                        <p class="text-muted font-italic">Daily Customer</p>
                        <p class="m-0">"I've been using LaunTech for my personal laundry for over a year now, and I'm impressed every time. The convenience of their app for scheduling pickups and deliveries is a lifesaver. My clothes come back fresh and perfectly folded every time."</p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img class="position-relative rounded-circle bg-white shadow mx-auto" src="Assets/Templates/Main/img/testimonial-4.jpg" style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                    <div class="bg-light text-center p-4 pt-0">
                        <h5 class="font-weight-medium mt-5">Dr.Linda K</h5>
                        <p class="text-muted font-italic">Collage Principal</p>
                        <p class="m-0">"LaunTech has been instrumental in maintaining a clean and safe environment for our students. Their dedication to hygiene standards in laundering our uniforms and linens is commendable."</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


  <!-- Districts Start -->
<div class="container-fluid mt-5 pb-2">
    <div class="container">
        <h1 class="display-4 text-center mb-5">Explore Our Branches</h1>
        <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">From Six Amazing Districts</h6>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="p-3">
                    <!-- District 1 Map -->
                    <img class="img-fluid w-100" src="Assets/Files/Districts/trivandrum.jpg" alt="" style="height: 200px; object-fit: cover;">
                    <a href="district1.html" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center text-decoration-none" style="top: 0; left: 0;  background: rgba(0, 0, 0, .4);">
                        <h4 class="text-center text-white font-weight-medium mb-3">Trivandrum</h4>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="p-3">
                    <!-- District 2 Map -->
                    <img class="img-fluid w-100" src="Assets/Files/Districts/kottayam.jpg" alt="" style="height: 200px; object-fit: cover;">
                    <a href="district2.html" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center text-decoration-none" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                        <h4 class="text-center text-white font-weight-medium mb-3">Kottayam</h4>
                        
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="p-3">
                    <!-- District 3 Map -->
                    <img class="img-fluid w-100" src="Assets/Files/Districts/ernakulam.jpg" alt="" style="height: 200px; object-fit: cover;">
                    <a href="district3.html" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center text-decoration-none" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                        <h4 class="text-center text-white font-weight-medium mb-3">Ernakulam</h4>
                        
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="p-3">
                    <!-- District 4 Map -->
                    <img class="img-fluid w-100" src="Assets/Files/Districts/Thrissur.jpg" alt="" style="height: 200px; object-fit: cover;">
                    <a href="district4.html" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center text-decoration-none" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                        <h4 class="text-center text-white font-weight-medium mb-3">Thrissur</h4>
                        
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="p-3">
                    <!-- District 5 Map -->
                    <img class="img-fluid w-100" src="Assets/Files/Districts/malappuram.jpg" alt="" style="height: 200px; object-fit: cover;">
                    <a href="district4.html" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center text-decoration-none" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                        <h4 class="text-center text-white font-weight-medium mb-3">Malappuram</h4>
                        
                    </a>
                </div>
            </div><div class="col-lg-4 col-md-4 col-sm-6">
                <div class="p-3">
                    <!-- District 6 Map -->
                    <img class="img-fluid w-100" src="Assets/Files/Districts/calicut.jpg" alt="" style="height: 200px; object-fit: cover;">
                    <a href="district4.html" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center text-decoration-none" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                        <h4 class="text-center text-white font-weight-medium mb-3">Calicut</h4>
                        
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Districts End -->


</body>
<?php
include('Foot.php');
ob_flush();
?>

</html>