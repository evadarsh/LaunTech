<?php
session_start();
ob_start();
include('Head.php');
include("../Assets/Connection/Connection.php");
if (isset($_POST['btn_save'])) 
{

    $complaint= $_POST['txt_complaint'];
    $user_id = $_SESSION["uid"];
    $branch_id = $_GET['bid'];
    $insert_booking_query = "INSERT INTO `tbl_complaint` (`complaint_date`, `complaint_details`, `user_id`, `branch_id`) 
    VALUES (curdate(), '$complaint', '$user_id', '$branch_id')";
    $con->query($insert_booking_query);
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Booking</title>

<style>
    .table-container {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    table {
        border-collapse: collapse;
        width: 80%; /* Adjust the width as needed */
    }

    th, td {
        border: 3px solid black;
        padding: 10px;
        text-align: center;
    }
</style>
</head>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="500" border="0" align="center">
    
    <tr>
      <td>Complaint</td>
      <td><label for="txt_complaint"></label>
      <textarea name="txt_complaint" id="txt_complaint" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td  colspan="2"><input type="submit" value="Submit" name="btn_save" style="color: blue;" /></td>
    </tr>
  </table>
  <br>
  <br><br><br>
  
  <p>&nbsp;</p>
  
</form>
</body>
<?php
include('Foot.php');
ob_flush();
?>
</html>