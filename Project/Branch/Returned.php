<?php
include("../Assets/Connection/Connection.php");
ob_start();
include('Head.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpMail/src/Exception.php';
require 'phpMail/src/PHPMailer.php';
require 'phpMail/src/SMTP.php';

if (isset($_GET['bid'])) {
    $bookingId = $_GET['bid'];
    $newStatus = $_GET['st'];

    $selQry = "SELECT * FROM tbl_booking b INNER JOIN tbl_user u ON u.user_id=b.user_id WHERE b.booking_id = $bookingId AND b.branch_id=" . $_SESSION['bid'];
    $res = $con->query($selQry);

    if ($res->num_rows > 0) {
        $data = $res->fetch_assoc();

        $userId = $data['user_id'];
        $userContactQuery = "SELECT user_contact, user_email FROM tbl_user WHERE user_id = $userId";
        $userContactResult = $con->query($userContactQuery);
        $userContactData = $userContactResult->fetch_assoc();
        $userContact = $userContactData['user_contact'];
        $userEmail = $userContactData['user_email'];

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'launtech2023@gmail.com';
        $mail->Password = 'fnotbyphlsbvtnwo';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('launtech2023@gmail.com', 'Laun Tech');
        $mail->addAddress($userEmail);
        $mail->Subject = "Booking Status Update";

        // Define email body based on booking status
        $emailBody = "";
        if ($newStatus == 1) {
            $emailBody = "Your booking request has been accepted by the branch manager.\nWe will pick up the cloths soon.";
        } else if ($newStatus == 2) {
            $emailBody = "Your booking request has been rejected by the branch manager.\nSorry for the inconvenience.";
        } else if ($newStatus == 3) {
            $emailBody = "Your booking cloths have been picked up.\nWe will complete the washing process in 3 days.";
        } else if ($newStatus == 4) {
            $emailBody = "Your booking cloths washing has been finished.\nWe are waiting for your payment.";
        } else if ($newStatus == 5) {
            $emailBody = "Your booking payment completed.\nWe will deliver the cloths to you soon.";
        } else if ($newStatus == 6) {
            $emailBody = "Your booking cloths has been returned.\nThanks for using our services.";
        } else if ($newStatus == 7) {
            $emailBody = "Your booking request cancelled ";
        }

        $mail->Body = "Booking Status: $emailBody";

        if ($mail->send()) {
            // Email sent successfully
            echo 'Email sent successfully';
        } else {
            // Email could not be sent
            echo 'Email could not be sent. Error: ' . $mail->ErrorInfo;
        }

        // Update booking status in the database (Assuming the 'booking_status' field exists in your table)
        $updateQry = "UPDATE tbl_booking SET booking_status = $newStatus WHERE booking_id = $bookingId";
        $con->query($updateQry);

?>
        <script>
            alert('Status Updated Successfully');
            window.location = "Returned.php";
        </script>
<?php
    } else {
        echo "Invalid booking ID or branch";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking</title>
</head>

<body>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Sl.No</th>
                <th>User</th>
                <th>Contact</th>
                <th>Booking Date</th>
                <th>Cloth Count</th>
                <th>Total Amount</th>
                <th>Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $selQry = "SELECT * FROM tbl_booking b INNER JOIN tbl_user u ON u.user_id = b.user_id WHERE b.branch_id=" . $_SESSION['bid'] . " AND b.booking_status = 6";
            $res = $con->query($selQry);
            $i = 0;
            while ($data = $res->fetch_assoc()) {
                $i++;
            ?>
                <tr>
                    <td><?php echo $i ?></td>
                    <td><?php echo $data['user_name'] ?></td>
                    <td><?php echo $data['user_contact'] ?></td>
                    <td><?php echo $data['booking_date'] ?></td>
                    <td>
                        <?php
                        $selCloth = "select sum(cloth_quantity) as cloth from tbl_cloth where booking_id=" . $data['booking_id'];
                        $resCloth = $con->query($selCloth);
                        $dataCloth = $resCloth->fetch_assoc();
                        echo $dataCloth['cloth'];
                        ?>
                    </td>
                    <td><?php echo $data['booking_amount'] ?></td>
                    <td>
                        <?php
                        if ($data['booking_status'] == 0) {
                            echo "New Request";
                        } else if ($data['booking_status'] == 1) {
                            echo "Request Accepted";
                        } else if ($data['booking_status'] == 2) {
                            echo "Request Rejected";
                        } else if ($data['booking_status'] == 3) {
                            echo "Cloth Picked Up";
                        } else if ($data['booking_status'] == 4) {
                            echo "Washing Finished";
                        } else if ($data['booking_status'] == 5) {
                            echo "Payment Completed";
                        } else if ($data['booking_status'] == 6) {
                            echo "Cloths Returned";
                        } else if ($data['booking_status'] == 7) {
                            echo "Request Cancelled by User";
                        }
                        ?>
                    </td>
                    <td>
                    <?php
                        if ($data['booking_status'] == 0) {
                        ?>
                            <a href="Accepted.php?bid=<?php echo $data['booking_id'] ?>&st=1" class="btn btn-primary">Accept</a><br>
                            <a href="Rejected.php?bid=<?php echo $data['booking_id'] ?>&st=2" class="btn btn-danger">Reject</a>
                        <?php
                        } else if ($data['booking_status'] == 1) {
                        ?>
                            <a href="ClothPicked.php?bid=<?php echo $data['booking_id'] ?>&st=3" class="btn btn-success">Cloth Picked Up</a><br>
                        <?php
                        } else if ($data['booking_status'] == 2) {
                        ?>
                            <p style="color: red;">Rejected</p>
                        <?php
                        } else if ($data['booking_status'] == 3) {
                        ?>
                            <a href="WashingFinished.php?bid=<?php echo $data['booking_id'] ?>&st=4" class="btn btn-success">Washing Finished</a><br>
                        <?php
                        } else if ($data['booking_status'] == 4) {
                        ?>
                            <p style="color: green;">Waiting for Payment</p>
                        <?php
                        } else if ($data['booking_status'] == 5) {
                        ?>
                            <a href="Returned.php?bid=<?php echo $data['booking_id'] ?>&st=6" class="btn btn-success">Cloth Returned</a><br>
                        
                        <?php
                        } else if ($data['booking_status'] == 6) {
                        ?>
                            <p style="color: blue;">Booking Completed</p>
                        <?php
                        } else if ($data['booking_status'] == 7) {
                        ?>
                            <p style="color: red;">Cancelled by User</p>
                        <?php
                        }
                        ?>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
</body>
<?php
include('Foot.php');
ob_flush();
?>

</html>