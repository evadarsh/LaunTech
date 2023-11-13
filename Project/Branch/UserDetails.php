<?php
include("../Assets/Connection/Connection.php");
include('Head.php');

if(isset($_GET['uid'])){
    $userId = $_GET['uid'];
    
    // Fetch user details from the database based on the user ID
    $userQry = "SELECT * FROM tbl_user WHERE user_id = $userId";
    $userRes = $con->query($userQry);

    if ($userRes->num_rows > 0) {
        $userData = $userRes->fetch_assoc();
    } else {
        // Handle the case where the user is not found
        echo "User not found";
        exit();
    }
} else {
    // Handle the case where user ID is not provided
    echo "User ID not provided";
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Details</title>
</head>
<body>

<h2>User Details</h2>

<table>
<tr>
        <td>
            <?php
            $userImage = $userData['user_photo'];
            
            if (!empty($userImage)) {
                echo '<img src="../Assets/Files/User/'. $userImage . '" alt="User Image" style="max-width: 150px;">';
            } else {
                echo 'No image available';
            }
            ?>
        </td>
    </tr>
    <tr>
        <td>User Name:</td>
        <td><?php echo $userData['user_name']; ?></td>
    </tr>
    <tr>
        <td>Contact Number:</td>
        <td><?php echo $userData['user_contact']; ?></td>
    </tr>
    <tr>
        <td>Address:</td>
        <td><?php echo $userData['user_address']; ?></td>
    </tr>
</table>

</body>

<?php
include('Foot.php');
?>
</html>
