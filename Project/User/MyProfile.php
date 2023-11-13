<?php
include("../Assets/Connection/Connection.php");
session_start();
ob_start();
include('Head.php');
$selqry="select * from tbl_user u inner join tbl_place  inner join tbl_district   where user_id=".$_SESSION['uid'] ;
$result=$con->query($selqry);
$data=$result->fetch_assoc();

?> 











<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LuanTech::User::MyProfile</title>
</head>
<body>
<div class="container mt-5">
  <div class="row justify-content-center">
    <div class="col-md-4">
      <div class="card">
        <img src="../Assets/Files/User/<?php echo $data['user_photo'];?>" class="card-img-top" alt="User Photo" height="400" width="200">
        <div class="card-body">
        <h5 class="card-title" style="color: black;">Name</h5>
          <p class="card-text" style="color: black;"><?php echo $data["user_name"];?></p>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item" style="color: black;"><strong>Gender:</strong> <?php echo $data["user_gender"];?></li>
          <li class="list-group-item" style="color: black;"><strong>Contact:</strong> <?php echo $data["user_contact"];?></li>
          <li class="list-group-item" style="color: black;"><strong>Email:</strong> <?php echo $data["user_email"];?></li>
          <li class="list-group-item" style="color: black;"><strong>District:</strong> <?php echo $data['district_name']; ?></li>
          <li class="list-group-item" style="color: black;"><strong>Place:</strong> <?php echo $data['place_name']; ?></li>
          <li class="list-group-item" style="color: black;"><strong>Address:</strong> <?php echo $data['user_address']; ?></li>
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