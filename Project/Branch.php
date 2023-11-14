<?php
session_start();
ob_start();
include('Head.php');
?>
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
                    <a href="../Project/Districts/District1.php" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center text-decoration-none" style="top: 0; left: 0;  background: rgba(0, 0, 0, .4);">
                        <h4 class="text-center text-white font-weight-medium mb-3">Trivandrum</h4>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="p-3">
                    <!-- District 2 Map -->
                    <img class="img-fluid w-100" src="Assets/Files/Districts/kottayam.jpg" alt="" style="height: 200px; object-fit: cover;">
                    <a href="../Project/Districts/District2.php" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center text-decoration-none" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                        <h4 class="text-center text-white font-weight-medium mb-3">Kottayam</h4>
                        
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="p-3">
                    <!-- District 3 Map -->
                    <img class="img-fluid w-100" src="Assets/Files/Districts/ernakulam.jpg" alt="" style="height: 200px; object-fit: cover;">
                    <a href="../Project/Districts/District3.php" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center text-decoration-none" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                        <h4 class="text-center text-white font-weight-medium mb-3">Ernakulam</h4>
                        
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="p-3">
                    <!-- District 4 Map -->
                    <img class="img-fluid w-100" src="Assets/Files/Districts/Thrissur.jpg" alt="" style="height: 200px; object-fit: cover;">
                    <a href="../Project/Districts/District4.php" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center text-decoration-none" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                        <h4 class="text-center text-white font-weight-medium mb-3">Thrissur</h4>
                        
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-6">
                <div class="p-3">
                    <!-- District 5 Map -->
                    <img class="img-fluid w-100" src="Assets/Files/Districts/malappuram.jpg" alt="" style="height: 200px; object-fit: cover;">
                    <a href="../Project/Districts/District5.php" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center text-decoration-none" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
                        <h4 class="text-center text-white font-weight-medium mb-3">Malappuram</h4>
                        
                    </a>
                </div>
            </div><div class="col-lg-4 col-md-4 col-sm-6">
                <div class="p-3">
                    <!-- District 6 Map -->
                    <img class="img-fluid w-100" src="Assets/Files/Districts/calicut.jpg" alt="" style="height: 200px; object-fit: cover;">
                    <a href="../Project/Districts/District6.php" class="position-absolute w-100 h-100 d-flex flex-column align-items-center justify-content-center text-decoration-none" style="top: 0; left: 0; background: rgba(0, 0, 0, .4);">
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
