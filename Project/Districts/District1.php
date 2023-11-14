<?php
session_start();
ob_start();
include('Head.php');
?>
<!DOCTYPE html>
<html lang="en">
    <meta charset="utf-8">
    <title>LaunTech Laundry </title>
<body>
    <div class="container-fluid pt-5 pb-3">
        <div class="containe text-uppercase text-center font-weight-medium mb-3">Our Branches</h6>
            <h1 class="display-4 text-center mb-5">Trivandrum</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="shadow-lg p-3">
                        <img src='../Assets/Files/Branch/152823161-people-washing-clothes-at-the-laundry-shop.jpg' width="100%" height="200" >
                    </div>
                    <h4 class="font-weight-bold mt-auto">Palode</h4>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="shadow-lg p-3">
                       <img src='../Assets/Files/Branch/33500819_2077600919144867_1264565481499525120_n.jpg ' width="100%" height="200" >    
                </div>
                    <h4 class="font-weight-bold mt-auto">Attingal</h4>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="shadow-lg p-3">
                    <img src='../Assets/Files/Branch/27867573_2302658956627225_7139991582878796876_n.jpg' width="100%" height="200" >
                </div>
                    <h4 class="font-weight-bold mt-auto">Neyattinkara</h4>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="shadow-lg p-3">
                       <img src='../Assets/Files/Branch/mlp3.jpg' width="100%" height="200" > 
                    </div>
                    <h4 class="font-weight-bold mt-auto">Kattakada</h4>
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
