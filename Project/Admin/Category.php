<?php
include("../Assets/Connection/Connection.php");

ob_start();
include('Head.php');
$catgry="";


if(isset($_POST["btn_save"]))
{
	$catgry=$_POST["txt_cat"];
	$insqry="insert into tbl_category(category_name)
	values('$catgry')";
	$con->query($insqry);
}
if(isset($_GET["id"]))
{
	$id=$_GET["id"];
	$delqry="delete from tbl_category where category_id='$id'";
	$con->query($delqry);
	header("location:category.php");
	}

?>





<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LaunTech::Admin::Category</title>
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
<form id="form1" name="form1" method="post" action="">
  <table width="500" border="1" height="100">
    <tr>
      <td width="234" style="font-size: 22px;"><strong>Category Name</strong></td>
      <td width="250"><label for="txt_cat"></label>
      <input type="text" name="txt_cat" id="txt_cat" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="btn_save" id="btn_save" value="Save" />
      <input type="submit" name="btn_cnl" id="btn_cnl" value="Cancel" /></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
<table width="500" border="1">
  <tr>
    <th>Sl.No</th>
    <th>Category</th>
    <th>Action</th>
  </tr>
  <?php
	$selqry = "select * from tbl_category";
	$i=0;
	$result = $con->query($selqry);
	while($data = $result->fetch_assoc())
	{
		$i++;
		?>
		<tr>
			<td><?php echo $i;?></td>
			<td><?php echo $data["category_name"];?></td>
			<td><a href="Category.php?id=<?php echo $data["category_id"];?>"class="button button-delete">Delete</a></td>
	</tr>
    <?php
    }
	?>
 
</table>
</body>
<?php
						include('Foot.php');
						ob_flush();
						?>
</html>