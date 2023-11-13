<?php

include("../Assets/Connection/connection.php");	

ob_start();
include('Head.php');
if(isset($_POST['btn_submit']))
{
	
	$packname=$_POST['txtpackname'];
	$packpriority=$_POST['select_pack'];
	$packduration=$_POST['txtpackduration'];
	$packdetails=$_POST['txtpackdetails'];
	$packprice=$_POST['txtpackprice'];
	$packpercentage=$_POST['txtpackpercentage'];
	
	$image=$_FILES['packphoto']['name'];
	$path=$_FILES['packphoto']['tmp_name'];
    move_uploaded_file($path,"../Assets/Files/Package/".$image	); 
	
	$insqry="insert into tbl_package(package_name,package_priority,package_duration,package_details,package_price,package_percentage,package_photo)values('$packname','$packpriority','$packduration','$packdetails','$packprice','$packpercentage','$image')";
	
	if($con->query($insqry))
	{
		?>
        <script>
			alert("Successfully Added Package!")
			window.location="AddPackage.php";
		</script>
        
        <?php
	}
	else
	{
		echo "Adding Failed!";
	}
}
	if(isset($_GET["id"]))
{
	$id=$_GET["id"];
	$delqry="delete from tbl_package where package_id='$id'";
	$con->query($delqry);
	header("location:AddPackage.php");
	}

?>









<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LaunTech::Admin::AddPackage</title>
<style>
        /* Style for the table headers */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
          border: 4px solid #ccc;
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
<form action="" method="post" enctype="multipart/form-data" name="form1" id="form1">
  <table width="550" height="441" border="1">
   <tr>
      <td width="202" style="font-size: 18px;"><strong>Package Name</strong></td>
      <td width="332"><label for="txtpackname"></label>
      <input type="text" name="txtpackname" id="txtpackname" /></td>
    </tr>
   <tr>
      <td style="font-size: 18px;"><strong>Package Photo</strong></td>
      <td><label for="packphoto"></label>
      <input type="file" name="packphoto" id="packphoto" /></td>
    </tr>
   
    <tr>
    <td style="font-size: 18px;"><strong>Package Priority</strong></td>
    <td>
        <select name="select_pack" id="select_pack">
            <option>--Select--</option>
            <option value="Basic">Basic</option>
            <option value="Standard">Standard</option>
            <option value="Premium">Premium</option>
        </select>
    </td>
</tr>


    <tr>
      <td style="font-size: 18px;"><strong>Package Duration</strong></td>
      <td><label for="txtpackduration"></label>
      <input type="text" name="txtpackduration" id="txtpackduration" /></td>
    </tr>
    <tr>
      <td style="font-size: 18px;"><strong>Package Details</strong></td>
      <td><label for="txtpackdetails"></label>
      <textarea name="txtpackdetails" id="txtpackdetails" cols="45" rows="5"></textarea></td>
    </tr>
    <tr>
      <td style="font-size: 18px;"><strong>Package Price</strong></td>
      <td><label for="txtpackprice"></label>
      <input type="text" name="txtpackprice" id="txtpackprice" /></td>
    </tr>
    <tr>
      <td style="font-size: 18px;"><strong>Package Percentage</strong></td>
      <td><label for="txtpackpercentage"></label>
      <input type="text" name="txtpackpercentage" id="txtpackpercentage" /></td>
    </tr>
   <tr>
      <td colspan="2" align="center"><input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
     <input type="reset" name="btn_cancel" id="btn_cancel" value="Cancel"/>
      </td>
    </tr>
  </table>
</form>
<table width="500" border="1">
  <tr>
    <th>Sl.No</th>
    <th>Package</th>
    <th>Image</th>
    <th>Action</th>
  </tr>
  <?php
	$selqry = "select * from tbl_package";
	$i=0;
	$result = $con->query($selqry);
	while($data = $result->fetch_assoc())
	{
		$i++;
		?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $data["package_name"];?></td>
      <td><img src="../Assets/Files/Package/<?php echo $data['package_photo']; ?>" class="img-fluid" alt="Branch Photo" width="100" height="100"></td>
			<td><a href="AddPackage.php?id=<?php echo $data["package_id"];?>" class="button button-delete">Delete</a></td>
	</tr>
    <?php
    }
	?>
 
</table>
<?php
						include('Foot.php');
						ob_flush();
						?>
</html>