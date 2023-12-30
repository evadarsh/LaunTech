<?php
include("../Assets/Connection/Connection.php");
ob_start();
include('Head.php');
if(isset($_GET['cid'])){
    
        ?>
        <script>
            var data =prompt("Enter Your Reply");
            window.location="Complaints.php?id=<?php echo $_GET['cid']?>&data="+data
            </script>
            <?php
    
}
if(isset($_GET['id'])){
    $updQry="update tbl_complaint set complaint_status='1',complaint_reply='".$_GET["data"]."' where complaint_id=".$_GET['id'];
    if($con->query($updQry)){
        ?>
        <script>
            alert('Updated')
            window.location="Complaints.php"
            </script>
            <?php
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
            <th>Date</th>
            <th>Title</th>
            <th>Details</th>
            <th>User</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
    <?php
$selQry = "select * from tbl_complaint c inner join tbl_user u on u.user_id=c.user_id where branch_id='" . $_SESSION['bid'] . "' and complaint_status='0'";
$res = $con->query($selQry);
if ($res->num_rows > 0) {
    ?>
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Sl.No</th>
                <th>Date</th>
                <th>Title</th>
                <th>Details</th>
                <th>User</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
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
                    <td>
                        <a href="Complaints.php?cid=<?php echo $data['complaint_id'] ?>" class="btn btn-primary">Reply</a><br>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
<?php
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