<?php
session_start();
ob_start();
include('Head.php');
?>
<body>
    <div class="container-fluid pt-5 pb-3">
        <div class="containe text-uppercase text-center font-weight-medium mb-3">Our Branches</h6>
            <h1 class="display-4 text-center mb-5">calicut</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="shadow-lg p-3">
                      <img src='../Assets/Files/Branch/istockphoto-1132394814-612x612.jpg   ' width="100%" height="200" >   
                </div>
                    <h4 class="font-weight-bold mt-auto">calicut</h4>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="shadow-lg p-3">
                     <img src='../Assets/Files/Branch/ktm2.jpeg   ' width="100%" height="200" >    
                </div>
                    <h4 class="font-weight-bold mt-auto">balussery</h4>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="shadow-lg p-3">
                     <img src='../Assets/Files/Branch/tvm3.jpg   ' width="100%" height="200" >    
                </div>
                    <h4 class="font-weight-bold mt-auto">vatakara</h4>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="shadow-lg p-3">
                    <img src='../Assets/Files/Branch/hands-loading-laundry-into-washing-machine-dry-cleaning_154092-5797.jpg   ' width="100%" height="200" >    
                </div>
                    <h4 class="font-weight-bold mt-auto">feroke</h4>
                </div>
            </div>
        </div>
    </div>
</body>
<?php
include('Foot.php');
ob_flush();
?>
</html>
