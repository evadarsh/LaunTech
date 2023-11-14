<?php
session_start();
ob_start();
include('Head.php');
?>
<body>
    <div class="container-fluid pt-5 pb-3">
        <div class="containe text-uppercase text-center font-weight-medium mb-3">Our Branches</h6>
            <h1 class="display-4 text-center mb-5">Thrissur</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="shadow-lg p-3">
                    <img src='../Assets/Files/Branch/27500161_2293177710908683_362095659447705620_o.jpg' width="100%" height="200" >     
                </div>
                    <h4 class="font-weight-bold mt-auto">Thrissur</h4>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="shadow-lg p-3">
                    <img src='../Assets/Files/Branch/tvm2.jpg ' width="100%" height="200" >    
                </div>
                    <h4 class="font-weight-bold mt-auto">guruvayoor</h4>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="shadow-lg p-3">
                    <img src='../Assets/Files/Branch/mlp2.jpg ' width="100%" height="200" >    
                </div>
                    <h4 class="font-weight-bold mt-auto">chalakudy</h4>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="shadow-lg p-3">
                    <img src='../Assets/Files/Branch/tvm4.jpg ' width="100%" height="200" >  
                </div>
                    <h4 class="font-weight-bold mt-auto">kodungaloor</h4>
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
