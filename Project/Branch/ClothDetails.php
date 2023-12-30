<?php
ob_start();
include('Head.php');
include("../Assets/Connection/Connection.php");

if (isset($_GET['bid'])) {
    // Fetch booking details
    $bookingId = $_GET['bid'];
    $selQry = "SELECT * FROM tbl_booking WHERE booking_id = $bookingId AND user_id = " . $_SESSION['uid'];
    $res = $con->query($selQry);
    $data = $res->fetch_assoc();

    // Fetch booked clothes details
    $selCloth = "SELECT c.*, s.subcategory_name 
            FROM tbl_cloth c 
            INNER JOIN tbl_subcategory s ON c.subcategory_id = s.subcategory_id
            WHERE c.booking_id = $bookingId";
    $resCloth = $con->query($selCloth);
}


?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title style="text-align: center;">View Booked Clothes</title>
</head>

<body>
    <style>
        h2 {
            text-align: center;
        }

        h3 {
            text-align: center;
        }

        p {
            text-align: center;
        }
    </style>
    <h2>Booked Clothes</h2>
    <h3></h3>
    <table align="center" cellpadding="10" border='1'>
        <tr>
            <td>Sl.No</td>
            <td>Cloth</td>
            <td>Quantity</td>
        </tr>
        <?php
        $i = 0;
        $resCloth = $con->query($selCloth);
        while ($dataCloth = $resCloth->fetch_assoc()) {
            $i++;
        ?>
            <tr>
                <td><?php echo $i ?></td>
                <td><?php echo $dataCloth['subcategory_name']; ?></td>
                <td><?php echo $dataCloth['cloth_quantity'] ?></td>
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