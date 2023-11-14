<?php
include("../Assets/Connection/Connection.php");
session_start();
ob_start();
include('Head.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .table-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Ensure the table is centered vertically on the page */
        }

        table {
            border-collapse: collapse;
            width: 80%; /* Adjust the width as needed */
            margin: 0 auto; /* Center the table horizontally */
        }

        th, td {
    border: 3px solid black;
    padding: 10px;
    text-align: center;
    color: black; /* Set text color to black */
}

th {
    font-weight: bold; 
    font-size: 20px;/* Make text in <th> elements bold */
}
td{
    font-size: 18px;
}
</style>
</head>
<body>
<table width="80%" border="1" align="center">
    <tr>
      <th style="color: black;">Sl.no</th>
      <th style="color: black;">Branch</th>
      <th style="color: black;">Title</th>
      <th style="color: black;">Details</th>
      <th style="color: black;">Date</th>
      <th style="color: black;">Reply</th>
    </tr>
    <?php
    $i = 0;
    $sel = "SELECT c.*, b.branch_name 
            FROM tbl_complaint c
            INNER JOIN tbl_branch b ON c.branch_id = b.branch_id
            WHERE c.user_id='" . $_SESSION['uid'] . "'";
    $row = $con->query($sel);
    
    while ($data = $row->fetch_assoc()) {
        $i++;
    ?>
    <tr>
        <td><?php echo $i; ?></td>
        <td><?php echo $data['branch_name']; ?></td>
        <td><?php echo $data['complaint_title'];?></td>
        <td><?php echo $data['complaint_details']; ?></td>
        <td><?php echo $data['complaint_date'];?></td>
        <td><?php echo $data['complaint_reply'];?></td>
    </tr>
    <?php } ?>
</table> 
<?php
include('Foot.php');
ob_flush();
?>
</body>
</html>