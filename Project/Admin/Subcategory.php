<?php
include("../Assets/Connection/Connection.php");

ob_start();
include('Head.php');


if(isset($_POST["btn_save"]))
{
	
    $insqry="insert into tbl_subcategory(subcategory_name,category_id,subcategory_price)
	values('".$_POST["txt_subcategory"]."','".$_POST["sl_category"]."','".$_POST["txt_subcategoryprice"]."')";
	$con->query($insqry);
}



if(isset($_GET["id"]))
{
	$id=$_GET["id"];
	$delqry="delete from tbl_subcategory where subcategory_id='$id'";
	$con->query($delqry);
	header("location:subcategory.php");
	}

?>









<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LaunTech::Admin::Subcategory </title>
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
      <td width="237" style="font-size: 18px;"><strong>Category</strong></td>
      <td width="247"><label for="sl_category"></label>
  

      <select name="sl_category" id="sl_category">
      <option>--Select--</option>
      		<?php
            					$selqry = "select * from tbl_category";
								$result = $con->query($selqry);
								while($data = $result->fetch_assoc())
									{
			?>
           						<option value="<?php echo $data["category_id"];?>">
								<?php echo $data["category_name"];?></option>
                                
                                <?php
								
									}
							    ?>
      </select></td>
    </tr>
     
      
    <tr>
      <td width="237" style="font-size: 18px;"><strong> Sub Category</strong></td>
      <td><label for="txt_sc"></label>
      <input type="text" name="txt_subcategory" id="txt_subcategory" /></td>
    </tr>
    <td width="237" style="font-size: 18px;"><strong> Sub Category Price</strong></td>
      <td><label for="txt_sc"></label>
      <input type="text" name="txt_subcategoryprice" id="txt_subcategoryprice" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btn_save" id="btn_save" value="Save" />
      <input type="submit" name="btn_cnl" id="btn_cnl" value="Cancel" /></td>
    </tr> 
  </table>
</form>
</body>
</html>


  <table width="500" border="1">
    <tr>
      <th width="138" height="47">Sl.No</th>
      <th width="190">Category</th>
      <th width="190">Sub Category</th>
      <th width="190">Sub Category Price</th>
      <th width="150">Action</th>
    </tr>
    <?php
	$selqry = "select * from tbl_subcategory p inner join tbl_category d on p.category_id=d.category_id";
	$i=0;
	$result = $con->query($selqry);
	while($data = $result->fetch_assoc())
	{
		$i++;
		?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $data["category_name"];?></td>
            <td><?php echo $data["subcategory_name"];?></td>
             <td><?php echo $data["subcategory_price"];?></td>
			<td><a href="Subcategory.php?id=<?php echo $data["subcategory_id"];?>" class="button button-delete">Delete</a></td>
	</tr>
    <?php
    }
	?>
  </table>
  <?php
						include('Foot.php');
						ob_flush();
						?>