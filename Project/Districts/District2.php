<?php
session_start();
ob_start();
include('Head.php');
?>
<body>
    <div class="container-fluid pt-5 pb-3">
        <div class="containe text-uppercase text-center font-weight-medium mb-3">Our Branches</h6>
            <h1 class="display-4 text-center mb-5">kottayam</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="shadow-lg p-3">
                    <img src='../Assets/Files/Branch/56435222_2620644271495357_387063333183815680_n.jpg' width="100%" height="200" > 
                                            </div>
                    <h4 class="font-weight-bold mt-auto">Kottayam</h4>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="shadow-lg p-3">
                    <img src='../Assets/Files/Branch/52528-1604217821-8f72f2c2-7f6b-46e4-beb5-4bd05f3d32e2.jpeg' width="100%" height="200" > 
                        </div>
                    <h4 class="font-weight-bold mt-auto">Pala</h4>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="shadow-lg p-3">
                    <img src='../Assets/Files/Branch/13585169_1064065490347677_7773736415622101174_o.jpg' width="100%" height="200" > 
                        </div>
                    <h4 class="font-weight-bold mt-auto">Manimala</h4>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="shadow-lg p-3">
                    <img src='../Assets/Files/Branch/17903422_2121482561411533_7222160352988076256_n.jpg' width="100%" height="200" > 
                        </div>
                    <h4 class="font-weight-bold mt-auto">Vaikom</h4>
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
