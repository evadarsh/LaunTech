<?php
session_start();
ob_start();
include('Head.php');
include("../Assets/Connection/Connection.php");

if (isset($_GET['bid'])) {
    // Fetch booking details
    $bookingId = $_GET['bid'];
    $selQry = "SELECT * FROM tbl_booking b INNER JOIN tbl_branch br ON br.branch_id = b.branch_id WHERE b.booking_id = $bookingId AND b.user_id = " . $_SESSION['uid'];
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
        p 
        {
            text-align: center;
        }
    </style>
    <h2>View Booked Clothes</h2>

    <h3>Booking Details:</h3>
    <p>Branch: <?php echo $data['branch_name']; ?></p>
    <p>Contact: <?php echo $data['branch_contact']; ?></p>
    <p>Cloth Count: 
        <?php
        $totalCloths = 0;
        while ($dataCloth = $resCloth->fetch_assoc()) {
            $totalCloths += $dataCloth['cloth_quantity'];
        }
        echo $totalCloths;
        ?>
    </p>
    <p>Total Amount: Rs. <?php echo $data['booking_amount']; ?></p>
    <p>Status: 
        <?php
        if ($data['booking_status'] == 0) {
            echo "Request Send. Waiting for Shop response";
        } elseif ($data['booking_status'] == 1) {
            echo "Request Accepted";
        } elseif ($data['booking_status'] == 2) {
            echo "Request Rejected";
        } elseif ($data['booking_status'] == 3) {
            echo "Cloth Picked Up";
        } elseif ($data['booking_status'] == 4) {
            echo "Washing Finished. Complete Payment: Rs." . $data['booking_amount'];
        } elseif ($data['booking_status'] == 5) {
            echo "Payment Completed";
        } elseif ($data['booking_status'] == 6) {
            echo "Cloths Returned";
        } elseif ($data['booking_status'] == 7) {
            echo "Cancelled";
        }
        ?>
    </p>

    <h3>Booked Clothes:</h3>
    <table align= "center" cellpadding="10" border='1'>
        <tr>
            <td>Sl.No</td>
            <td>Cloth</td>
            <td>Quantity</td>
            <td>Amount</td>
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
    <td><?php echo $dataCloth['cloth_amount'] ?></td>
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
