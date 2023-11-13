<?php
include("../Assets/Connection/connection.php");	

ob_start();
include('Head.php');

if(isset($_POST['btn_submit'])) {
    $name = $_POST['txt_name'];
    $contact = $_POST['txt_contact'];
    $email = $_POST['txt_email'];
    $place = $_POST['sl_place'];
    $password = $_POST['txt_password'];
    $address = $_POST['txt_address']; // New field for Branch Address

    $image = $_FILES['file_image']['name'];
    $path = $_FILES['file_image']['tmp_name'];
    move_uploaded_file($path, "../Assets/Files/Branch/" . $image);

    $insqry = "INSERT INTO tbl_branch(branch_name, branch_contact, branch_email, place_id, branch_password, branch_address, branch_photo)
    VALUES ('$name', '$contact', '$email', '$place', '$password', '$address', '$image')";

    if($con->query($insqry)) {
        ?>
        <script>
            alert("Branch added successfully...");
        </script>
        <?php
    } else {
        echo "Branch not added";
    }
}

if(isset($_GET['id'])) {
    $branchId = $_GET['id'];
    $delqry = "DELETE FROM tbl_branch WHERE branch_id = $branchId";
    if($con->query($delqry)) {
        header("Location: Branchs.php"); // Redirect back to the branch list page after deletion.
    } else {
        echo "Deletion failed";
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>LaunTech::Admin::NewBranch</title>
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


        input[type="text"],
        input[type="password"],
        select,
        textarea {
            width: 100%;
            padding: 5px;
            border: 1px solid #ccc;
            border-radius: 3px;
            font-size: 14px;
        }

        input[type="file"] {
            width: 100%;
            padding: 5px;
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
    <form action="" method="post" enctype="multipart/form-data">
        <table width="500" border="1" height="500">
        <tr>
        <th colspan="2" align="center">
        <span style="font-weight: bold; font-size: 18px;">New Branch Registration</span>
            </th>
            </tr>

            <tr>
                <td width="243">Name</td>
                <td width="241">
                    <label for="txt_name"></label>
                    <input type="text" name="txt_name" id="txt_name" required />
                </td>
            </tr>
            <tr>
                <td>Contact</td>
                <td>
                    <label for="txt_contact"></label>
                    <input type="text" name="txt_contact" id="txt_contact" required />
                </td>
            </tr>
            <tr>
                <td>Email</td>
                <td>
                    <label for="txt_email"></label>
                    <input type="text" name="txt_email" id="txt_email" required />
                </td>
            </tr>
            <tr>
                <td>Branch Address</td> <!-- New "Branch Address" field -->
                <td>
                    <label for="txt_address"></label>
                    <textarea name="txt_address" id="txt_address" required rows="4" cols="50"></textarea>
                </td>
            </tr>
            <tr>
                <td>District</td>
                <td>
                    <label for="sl_district"></label>
                    <select name="sl_district" id="sl_district" onChange="getplace(this.value)">
                        <option>--Select--</option>
                        <?php
                        $selQry = "SELECT * FROM tbl_district";
                        $result = $con->query($selQry);
                        while($row = $result->fetch_assoc()) {
                        ?>
                        <option value="<?php echo $row['district_id'] ?>"><?php echo $row['district_name'] ?></option>
                        <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Place</td>
                <td>
                    <label for="sl_place"></label>
                    <select name="sl_place" id="sl_place">
                        <option>--Select--</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <label for="txt_password"></label>
                    <input type="password" name="txt_password" id="txt_password" title="You must enter 6 or more characters" required pattern="[a-zA-Z0-9.@#$%^&*]{6,30}" />
                </td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td>
                    <label for="txt_confirmpassword"></label>
                    <input type="password" name="txt_confirmpassword" id="txt_confirmpassword" title="You must enter 6 or more characters" required pattern="[a-zA-Z0-9.@#$%^&*]{6,30}" />
                </td>
            </tr>
            <tr>
                <td>Image</td>
                <td>
                    <label for="file_image"></label>
                    <input type="file" name="file_image" id="file_image" required />
                </td>
            </tr>
            <tr>
                <td colspan="2" align="center">
                    <input type="submit" name="btn_submit" id="btn_submit" value="Submit" />
                    <input type="reset" name="btn_cancel" id="btn_cancel" value="Cancel" />
                </td>
            </tr>
        </table>
    </form>
</body>
<script src="../Assets/JQuery/jQuery.js"></script>
<script>
function getplace(pid) {
    $.ajax({
        url: "../Assets/AjaxPages/AjaxPlace.php?pid=" + pid,
        success: function(a) {
            $("#sl_place").html(a);
        }
    });
}
</script>
<?php
include('Foot.php');
ob_flush();
?>
</html>
