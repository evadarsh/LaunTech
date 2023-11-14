<?php
session_start();
ob_start();
include('Head.php');
include("../Assets/Connection/Connection.php");

if (isset($_POST['btn_save'])) 
{
    $complaintTitle = $_POST['txt_complaint_title'];
    $complaintDetails = $_POST['txt_complaint'];
    $user_id = $_SESSION["uid"];
    $branch_id = $_GET['bid'];

    // Insert data into the tbl_complaint table
    $insertComplaintQuery = "INSERT INTO `tbl_complaint` (`complaint_date`, `complaint_title`, `complaint_details`, `user_id`, `branch_id`) 
    VALUES (curdate(), '$complaintTitle', '$complaintDetails', '$user_id', '$branch_id')";
    
    if ($con->query($insertComplaintQuery) === TRUE) {
        // Display JavaScript alert after successful insertion
        echo '<script>alert("Complaint sent to branch!");</script>';
    } else {
        echo "Error: " . $insertComplaintQuery . "<br>" . $con->error;
    }
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
<form id="form1" name="form1" method="post" action="" onsubmit="return validateForm()">
  <table width="500" border="0" align="center">
    
    <tr>
      <td>Complaint Title</td>
      <td>
        <label for="txt_complaint_title"></label>
        <input type="txt_complaint_title" name="txt_complaint_title" id="txt_complaint_title" required />
      </td>
    </tr>
    <tr>
      <td>Complaint Details</td>
      <td>
        <label for="txt_complaint"></label>
        <textarea name="txt_complaint" id="txt_complaint" cols="45" rows="5" required></textarea>
      </td>
    </tr>
    <tr>
      <td colspan="2"><input type="submit" value="Submit" name="btn_save" style="color: blue;" /></td>
    </tr>
  </table>
</form>
<script>
  function validateForm() {
    var title = document.getElementById("txt_complaint_title").value;
    var details = document.getElementById("txt_complaint").value;

    if (title.trim() === "" || details.trim() === "") {
      alert("Please provide both complaint title and details.");
      return false; // Prevent form submission
    }

    return true; // Allow form submission
  }
</script>
</body>
<?php
include('Foot.php');
ob_flush();
?>
</html>
