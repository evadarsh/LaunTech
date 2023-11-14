<?php
session_start();
ob_start();
include('Head.php');
?>
<body>
    <div class="container-fluid pt-5 pb-3">
        <div class="containe text-uppercase text-center font-weight-medium mb-3">Our Branches</h6>
            <h1 class="display-4 text-center mb-5">Malappuram</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="shadow-lg p-3">
                    <img src='../Assets/Files/Branch/mlp4.jpg  ' width="100%" height="200" >     
                </div>
                    <h4 class="font-weight-bold mt-auto">manjeri</h4>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="shadow-lg p-3">
                     <img src='../Assets/Files/Branch/mlp1.jpg  ' width="100%" height="200" >    
                </div>
                    <h4 class="font-weight-bold mt-auto">wandoor</h4>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="shadow-lg p-3">
                    <img src='../Assets/Files/Branch/tvm1.jpg  ' width="100%" height="200" >     
                </div>
                    <h4 class="font-weight-bold mt-auto">nilambur</h4>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="shadow-lg p-3">
                     <img src='../Assets/Files/Branch/ktm1.jpg  ' width="100%" height="200" >    
                </div>
                    <h4 class="font-weight-bold mt-auto">perinthalmanna</h4>
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
