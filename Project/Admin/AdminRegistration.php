<?php
include("../Assets/Connection/Connection.php");
ob_start();
include('Head.php');
if(isset($_POST["btn_save"]))
{
	
	$insqry="insert into tbl_admin(admin_name,admin_email,admin_password)
	values('".$_POST["txt_name"]."','".$_POST["txt_email"]."','".$_POST["txt_pass"]."')";
	echo $insqry;
if($con->query($insqry))
	{
		?>
        <script>
			alert("Successfully Registrated!")
			window.location="../Guest/Login.php";
		</script>
        <?php
	}
	else
	{
		echo "Registration Failed!";
	}
}











?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LaunTech::Admin::AdminRegistration</title>
<style>
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
  <table width="564" border="1" height="300">
    <tr>
      <td width="246">Admin Name</td>
      <td width="302"><label for="txt_name"></label>
      <input type="text" name="txt_name" id="txt_name" /></td>
    </tr>
    <tr>
      <td>Admin Email</td>
      <td><label for="txt_email"></label>
      <input type="text" name="txt_email" id="txt_email" /></td>
    </tr>
    <tr>
      <td>Admin Password</td>
      <td><label for="txt_pass"></label>
      <input type="text" name="txt_pass" id="txt_pass" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><label for="">
        <input type="submit" name="btn_save" id="btn_save" value="Save" />
        <input type="submit" name="btn_cnl" id="btn_cnl" value="Cancel"/>
      </label></td>
    </tr>
  </table>
</form>
</body>
<?php
						include('Foot.php');
						ob_flush();
						?>
</html>