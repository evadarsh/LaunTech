<?php
include("../Assets/Connection/Connection.php");
ob_start();
include('Head.php');
if(isset($_POST["btn_save"]))
{
	$disname=$_POST["txt_dist"];
	$insqry="insert into tbl_district(district_name)
	values('$disname')";
	$con->query($insqry);
}
if(isset($_GET["id"]))
{
	$id=$_GET["id"];
	$delqry="delete from tbl_district where district_id='$id'";
	$con->query($delqry);
	header("location:district.php");
	}

?>




<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>LaunTech::Admin::District</title>
    <style>
        /* Style for the table headers */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 4px solid #ccc; /* Table border */
            padding: 8px;
            text-align: center;
            font-weight: bold;
            font-size: 18px;
        }

        th {
            background-color: #333; /* Header background color */
            color: #FFF; /* Header text color */
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            text-decoration: none;
            border: none;
            border-radius: 5px;
        }

        .button-home {
            background-color: #007BFF; /* Home button background color (blue) */
            color: #FFF; /* Home button text color */
        }

        .button-delete {
            background-color: #FF0000; /* Delete button background color (red) */
            color: #FFF; /* Delete button text color */
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #007bff;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <a href="Homepage.php" class="button button-home">Home</a>

    <form id="form1" name="form1" method="post" action="">
	<table width="500" border="1" height="100">
    <tr>
      <td width="235" style="font-size: 22px;"><strong>District Name</strong></td>
      <td width="249"><label for="txt_dist"></label>
      <input type="text" name="txt_dist" id="txt_dist" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btn_save" id="btn_save" value="Save" />
      <input type="submit" name="btn_cnl" id="btn_cnl" value="Cancel" /></td>
    </tr>
  </table>
        <table>
            <tr>
                <th>Sl.No</th>
                <th>District</th>
                <th>Action</th>
            </tr>
            <?php
            $selqry = "select * from tbl_district";
            $i = 0;
            $result = $con->query($selqry);
            while ($data = $result->fetch_assoc()) {
                $i++;
            ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $data["district_name"]; ?></td>
                    <td><a href="District.php?id=<?php echo $data["district_id"]; ?>" class="button button-delete">Delete</a></td>
                </tr>
            <?php
            }
            ?>
        </table>
    </form>
</body>
</html>
