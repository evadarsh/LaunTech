<?php
include("../Assets/Connection/Connection.php");
session_start();
ob_start();
include('Head.php');
$sel="select * from tbl_branch where branch_id='".$_GET['bid']."'";
		$result=$con->query($sel);
		$data=$result->fetch_assoc();
		?>

<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Branch Profile</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        table {
            width: 360px;
            border: 1px solid #ccc;
            margin: 20px auto;
            background-color: #fff;
            border-collapse: collapse;
        }

        td {
            text-align: center;
            padding: 20px;
            color: black;
        }

        

        p {
            margin: 10px 0;
        }

        /* Add more CSS for styling as needed */
    </style>
</head>
<body>
    <form id="form1" name="form1" method="post" action="">
        <table>
            <tr>
                <td>
                    <img src="../Assets/Files/Branch/<?php echo $data['branch_photo'];?>" style="height: 250px; width: 350px;">
                    <p style="color: black; font-weight: bold; font-size: 24px; "><?php echo $data["branch_name"];?></p>
                    <p><?php echo $data["branch_address"];?></p>
                    <p><?php echo $data["branch_contact"];?></p>
                    <p><?php echo $data["branch_email"];?></p>
                     <!-- Review and Rating Section -->
                     <div class="space-gap">
                        <?php
                            $average_rating = 0;
                            $total_review = 0;
                            $five_star_review = 0;
                            $four_star_review = 0;
                            $three_star_review = 0;
                            $two_star_review = 0;
                            $one_star_review = 0;
                            $total_user_rating = 0;
                            $review_content = array();

                            $query = "SELECT * FROM tbl_review where branch_id = '".$data["branch_id"]."' ORDER BY review_id DESC";
                            $result = $con->query($query);

                            while($row = $result->fetch_assoc())
                            {
                                if($row["review_count"] == '5')
                                {
                                    $five_star_review++;
                                }
                                // Similar logic for other star ratings

                                $total_review++;
                                $total_user_rating = $total_user_rating + $row["review_count"];
                            }

                            if($total_review==0 || $total_user_rating==0 )
                            {
                                $average_rating = 0; 			
                            }
                            else
                            {
                                $average_rating = $total_user_rating / $total_review;
                            }
                        ?>
                        <p align="center" style="color: #F96; font-size: 20px; font-weight: bold;">
                            Average Rating: <?php echo number_format($average_rating, 1); ?>
                        </p>
                        <!-- Display star ratings here based on the $average_rating -->
                        <?php
                            // Your star rating display code here
                        ?>
                        <p align="center">
                            Total Reviews: <?php echo $total_review; ?>
                        </p>
                        <!-- Display count of five-star, four-star, etc., reviews here -->
                        <?php
                            // Your review count display code here
                        ?>
                    </div>
                </td>
            </tr>
        </table>
    </form>
</body>
</html>

<?php
include('Foot.php');
ob_flush();
?>
</html>