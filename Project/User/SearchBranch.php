<?php
include("../Assets/Connection/Connection.php");
session_start();
ob_start();
include('Head.php');


?> 









<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>SearchBranch</title>
</head>
<style>
.main-div {
    display: flex;
    gap: 2rem;
    flex-wrap: wrap;
    justify-content: center;
    align-items: center;
    margin-top: 20px; /* Add margin to create space between the search tab and cards */
}
.card {
    background-color: #194376;
    width: 220px;
    padding: 18px;
    border-radius: 10px;
}
.space-gap {
    padding: 10px;
}
.button {
    color: white;
    background-color: #007bff;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    display: inline-block;
    margin-right: 10px;
}

.button:hover {
    background-color: #0056b3;
}
.display-3.text-center.mb-5 {
    font-size: 24px; /* Adjust the size as needed */
  }
</style>
<body>
    <div>
<h1 class="display-4 text-center mb-5">Explore Our Branches</h1>
<div>
<h3  class="display-3 text-center mb-5" >Select your nearest Branch</h3>
    </div>
    </div>
    <form id="form1" name="form1" method="post" action="" onsubmit="return validateForm()">
<table align="center">
<tr>
<td>District</td>
<td><select name="sl_district" id="sl_district" onChange="getplace(this.value)">
          <option value="">--Select--</option>
            <?php
		$selQry="select * from tbl_district";
		$result=$con->query($selQry);
		while($row=$result->fetch_assoc())
		{
		?>
        <option value="<?php echo $row['district_id']  ?>"> <?php echo $row['district_name']  ?></option>
        <?php
		}
		?>

      </select></td>
      <td><input name="btn_search" type="submit" value="search"/></td>
</tr>
</table>
 
      
<div class="main-div">
<?php
if (isset($_POST['btn_search'])) {
    $sel = "select * from tbl_branch b inner join tbl_place p on b.place_id=p.place_id inner join tbl_district d on p.district_id=d.district_id where TRUE ";
    if ($_POST['sl_district'] != "") {
        $sel .= " and d.district_id=" . $_POST["sl_district"];
    }
    $result = $con->query($sel);
    if ($result->num_rows > 0) {
        while ($data = $result->fetch_assoc()) {
            ?>
            <div class="card" style="width: 300px;">
                <div class="space-gap" style="display: flex; flex-direction: column; align-items: center; text-align: center;">
                    <img src="../Assets/Files/Branch/<?php echo $data["branch_photo"]; ?>" width="200" height="200" />
                </div>
                <div class="space-gap" style="color: #fff; font-size: 20px; text-align: center;">
                    <?php echo $data["branch_name"]; ?>
                </div>
                <div class="space-gap" style="text-align: center;">
                    <a href="UserBranchProfile.php?bid=<?php echo $data["branch_id"] ?>" class="button">View More</a>
                </div>
                <div class="space-gap" style="text-align: center;">
                    <a href="Booking.php?bid=<?php echo $data['branch_id'] ?>" class="button">Book Now</a>
                </div>
            </div>
            <?php
        }
    } else {
        ?>
        <h2 style="color:red">Sorry..😔We have branches only in:</h2><br>
        <h3 style="color:red">Trivandrum, Kottayam, Ernakulam, Thrissur, Malappuram, Calicut</h3><br>
        <?php
    }
}
?>
</div>

</form>
</body>
<script type="text/javascript">
function validateForm() {
    var districtSelect = document.getElementById("sl_district");
    var selectedValue = districtSelect.options[districtSelect.selectedIndex].value;
    
    if (selectedValue === "") {
        alert("Please select a district.");
        return false; // Prevent form submission
    }

    return true; // Allow form submission for other selected values
}
</script>

<?php
include('Foot.php');
ob_flush();
?>
</html>