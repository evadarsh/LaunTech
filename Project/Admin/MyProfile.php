<?php
include("../Assets/Connection/Connection.php");
ob_start();
include('Head.php');
$selqry="select * from tbl_admin where admin_id=".$_SESSION['aid'] ;
$result=$con->query($selqry);
$data=$result->fetch_assoc();
?> 
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LuanTech::Admin::MyProfile</title>
</head>
<body>
<a href="Homepage.php" class="button button-home">Home</a>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card">
        <div class="card-body">
        <h5 class="card-title" style="color: black;">Name</h5>
          <p class="card-text" style="color: black;"><?php echo $data["admin_name"];?></p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item" style="color: black;"><strong>Email:</strong> <?php echo $data["admin_email"];?></li>
        </ul>
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