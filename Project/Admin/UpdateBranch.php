<?php
include("../Assets/Connection/connection.php");
ob_start();
include('Head.php');

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['btn_submit'])) {
    $branchId = $_POST['branch_id'];
    $name = $_POST['txt_name'];
    $contact = $_POST['txt_contact'];
    $email = $_POST['txt_email'];
    $place = $_POST['sl_place'];
    $address = $_POST['txt_address'];
    $password = $_POST['txt_password'];

    if (isset($_FILES['file_image']) && $_FILES['file_image']['name'] != "") {
        $image = $_FILES['file_image']['name'];
        $path = $_FILES['file_image']['tmp_name'];
        move_uploaded_file($path, "../Assets/Files/Branch/" . $image);
        $updateqry = "UPDATE tbl_branch SET branch_name = '$name', branch_contact = '$contact', branch_email = '$email', place_id = '$place', branch_address = '$address', branch_password = '$password', branch_photo = '$image' WHERE branch_id = $branchId";
        if ($con->query($updateqry)) {
            ob_end_clean(); 
            ?>
            <script>
                alert("Branch updated successfully...");
                window.location.href = "Branchs.php"; 
            </script>
            <?php
            exit(); 
        } else {
            echo "Branch not updated";
        }
    } else {
        
        $updateqry = "UPDATE tbl_branch SET branch_name = '$name', branch_contact = '$contact', branch_email = '$email', place_id = '$place', branch_address = '$address', branch_password = '$password' WHERE branch_id = $branchId";

        if ($con->query($updateqry)) {
            ob_end_clean(); 
            ?>
            <script>
                alert("Branch updated successfully...");
                window.location.href = "Branchs.php"; 
            </script>
            <?php
            exit(); 
        } else {
            echo "Branch not updated";
        }
    }
}

include('Foot.php');
ob_flush();
?>
