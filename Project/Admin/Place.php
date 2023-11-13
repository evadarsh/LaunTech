<?php
include("../Assets/Connection/Connection.php");

ob_start();
include('Head.php');
if(isset($_POST["btn_save"]))
{
	
    $insqry="insert into tbl_place(place_name,district_id)
	values('".$_POST["txt_place"]."','".$_POST["sl_dis"]."')";
	$con->query($insqry);
}



if(isset($_GET["id"]))
{
	$id=$_GET["id"];
	$delqry="delete from tbl_place where place_id='$id'";
	$con->query($delqry);
	header("location:Place.php");
	}

?>






<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>
LaunTech::Admin::Place</title>
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
  <table width="500" border="1" height="200">
    <tr>
    <td width="235" style="font-size: 22px;"><strong>District Name</strong></td>
      <td width="251"><label for="sl_dis"></label>
      
      
      <select name="sl_dis" id="sl_dis">
      <option>--Select--</option>
      		<?php
            					$selqry = "select * from tbl_district";
								$result = $con->query($selqry);
								while($data = $result->fetch_assoc())
									{
			?>
           						<option value="<?php echo $data["district_id"];?>"><?php echo $data["district_name"];?></option>
                                
                                <?php
								
									}
							    ?>
      </select>
      
      
      
      
      
      </td>
    </tr>
    <tr>
    <td width="235" style="font-size: 22px;"><strong>Place Name</strong></td>
      <td><label for="txt_pn"></label>
      <input type="text" name="txt_place" id="txt_place" /></td>
    </tr>
      <td colspan="2" align="center"><input type="submit" name="btn_save" id="btn_save" value="Save" />
      <input type="submit" name="btn_cnl" id="btn_cnl" value="Cancel" /></td>
    </tr>
  </table>
</form>
</body>
</html>



  <table width="500" border="1">
    <tr>
      <th width="138" height="47">Sl.No</td>
      <th width="190">District</th>
      <th width="190">PlaceName</th>
      <th width="150">Action</th>
    </tr>
    <?php
	$selqry = "select * from tbl_place p inner join tbl_district d on p.district_id=d.district_id";
	$i=0;
	$result = $con->query($selqry);
	while($data = $result->fetch_assoc())
	{
		$i++;
		?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $data["district_name"];?></td>
            <td><?php echo $data["place_name"];?></td>
			<td><a href="Place.php?id=<?php echo $data["place_id"];?>"class="button button-delete">Delete</a></td>
	</tr>
    <?php
    }
	?>
  </table>
  <?php
						include('Foot.php');
						ob_flush();
						?>