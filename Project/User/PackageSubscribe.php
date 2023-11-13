<?php
include("../Assets/Connection/Connection.php");
session_start();
ob_start();
include('Head.php');
$selqry="select * from tbl_package";
$result=$con->query($selqry);
if(isset($_GET['pid']))
{
	$insqry="insert into tbl_packagebooking(package_id,packagebooking_date,user_id)
	values('".$_GET['pid']."',curdate(),'".$_SESSION['uid']."')";
	if($con->query($insqry))
	{
		$_SESSION['type']='pkgsub';
		header('location: PackagePayment.php');
	}
	else{
		?>
        <script>
		alert('Subscription Failed')
		
		</script>
        <?php
	}
}
?> 

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LuanTech::User::Search Package</title>
</head>
<div>
<h1 class="display-4 text-center mb-5">Our Package Plans</h1>
    </div>
<body>
  <?php
  while ($data=$result->fetch_assoc())
  {
    ?>
    
    <div class="row">
    <?php foreach ($result as $data) { ?>
    <div class="col-lg-2.5 mb-4 mb-lg-0" style="height: 400px;">
        <div class="bg-light text-center mb-9 pt-4"  style="width: 308px; height: 400px;">
            <h2 class="text-blue" style="border: 3px solid #194376; padding: 10px;"><?php echo $data["package_name"]; ?></h2>
            <p><?php echo $data["package_details"]; ?></p>
            <p>Duration: <?php echo $data["package_duration"]; ?></p>
            <p>Discount: <?php echo $data["package_percentage"]; ?></p>
            <p>₹<?php echo $data["package_price"]; ?></p>
            
            <a href="PackageSubscribe.php?pid=<?php echo $data['package_id'] ?>" class="btn btn-primary" style="margin-top: 20px;">Subscribe</a>
        </div>
    </div>
    <?php } ?>
</div>
    <?php
  }
    ?>
</body>
<?php
include('Foot.php');
ob_flush();
?>
</html>