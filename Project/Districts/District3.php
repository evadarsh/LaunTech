<?php
session_start();
ob_start();
include('Head.php');
?>
<body>
    <div class="container-fluid pt-5 pb-3">
        <div class="containe text-uppercase text-center font-weight-medium mb-3">Our Branches</h6>
            <h1 class="display-4 text-center mb-5">Ernakulam</h1>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="shadow-lg p-3">
                    <img src='../Assets/Files/Branch/download.jpg' width="100%" height="200" >   
                </div>
                    <h4 class="font-weight-bold mt-auto">Kochi</h4>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="shadow-lg p-3">
                    <img src='../Assets/Files/Branch/14650450_2008125166080607_2371901931793513084_n.jpg' width="100%" height="200" >    
                </div>
                    <h4 class="font-weight-bold mt-auto">Muvattupuzha</h4>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="shadow-lg p-3">
                    <img src='../Assets/Files/Branch/116344262_3057207151172398_104567179663345070_n.jpg' width="100%" height="200" >   
                </div>
                    <h4 class="font-weight-bold mt-auto">aluva</h4>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="shadow-lg p-3">
                    <img src='../Assets/Files/Branch/dry-cleaners-near-me-london.jpeg' width="100%" height="200" > 
                    </div>
                    <h4 class="font-weight-bold mt-auto">angamaly</h4>
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
