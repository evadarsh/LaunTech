<?php
include("../Assets/Connection/Connection.php");
ob_start();
include('Head.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Complaints</title>
</head>
<body>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Sl.No</th>
                <th>Date</th>
                <th>Title</th>
                <th>Details</th>
                <th>User</th>
                <th>Branch</th>
                <th>Status</th>
                <th>Reply</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $selQry = "SELECT c.*, u.user_name, b.branch_name FROM tbl_complaint c INNER JOIN tbl_user u ON u.user_id = c.user_id INNER JOIN tbl_branch b ON b.branch_id = c.branch_id";
            $res = $con->query($selQry);
            if ($res->num_rows > 0) {
                $i = 0;
                while ($data = $res->fetch_assoc()) {
                    $i++;
                    ?>
                    <tr>
                        <td><?php echo $i ?></td>
                        <td><?php echo $data['complaint_date'] ?></td>
                        <td><?php echo $data['complaint_title'] ?></td>
                        <td><?php echo $data['complaint_details'] ?></td>
                        <td><?php echo $data['user_name'] ?></td>
                        <td><?php echo $data['branch_name'] ?></td>
                        <td><?php echo $data['complaint_status'] == 0 ? 'Pending' : 'Resolved' ?></td>
                        <td><?php echo $data['complaint_reply'] ?></td>
                    </tr>
                    <?php
                }
            } else {
                echo "No Complaints";
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
