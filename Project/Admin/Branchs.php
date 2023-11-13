<?php
include("../Assets/Connection/Connection.php");
ob_start();
include('Head.php');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LaunTech::Admin::Branch</title>
<style>
        /* Define your CSS styles here */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
            color: #333;
        }

        a:hover {
            text-decoration: underline;
        }

        table {
            border-collapse: collapse;
            width: 100%;
            margin: 20px auto;
        }

        th, td {
            border: 4px solid #ccc;
            padding: 10px;
            font-size: 18px;
        }

        th {
            background-color: #333;
            color: #fff;
        }

        img {
            max-width: 100px;
            max-height: 100px;
        }
        .button {
        display: inline-block;
        padding: 10px 20px;
        background-color: #007BFF; /* Button background color */
        color: #FFF; /* Button text color */
        text-decoration: none;
        border: none;
        border-radius: 5px;
        }
        .edit-button {
    display: inline-block;
    padding: 5px 10px;
    background-color: #FF0000; /* Red color */
    color: #FFF; /* Text color */
    text-decoration: none;
    border: none;
    border-radius: 5px;
}

    </style>
</head>
<body>
<a href="Homepage.php" class="button">Home</a>
<form id="form1" name="form1" method="post" action="">
  <table width="500" border="1" height="100">
  </table>
  <table border="1">
<tr>
    <th>Name</th>
    <th>Contact</th>
    <th>Email</th>
    <th>Image</th>
    <th>Address</th>
    <th>Actions</th>
</tr>
<?php
$selqry = "SELECT * FROM tbl_branch";
$result = $con->query($selqry);

while ($row = $result->fetch_assoc()) {
    echo "<tr>";
    echo "<td><strong style='font-size: 16px;'>" . $row['branch_name'] . "</strong></td>";
    echo "<td>" . $row['branch_contact'] . "</td>";
    echo "<td>" . $row['branch_email'] . "</td>";
    echo "<td><img src='../Assets/Files/Branch/" . $row['branch_photo'] . "' width='100' height='100'></td>";
    echo "<td width=300>" . $row['branch_address'] . "</td>";
    echo "<td>";
    echo "<a href='EditBranch.php?id=" . $row['branch_id'] . "' class='edit-button'>Edit</a> ";
    echo "</td>";
    echo "</tr>";
}
?>

</table>
</form>
</body>
</html>
