<?php
include("../Assets/Connection/connection.php");
ob_start();
include('Head.php');

if (isset($_GET['id'])) {
    $branchId = $_GET['id'];
    $selqry = "SELECT * FROM tbl_branch WHERE branch_id = $branchId";
    $result = $con->query($selqry);

    if ($row = $result->fetch_assoc()) {
        // Retrieve branch data, including image
        $name = $row['branch_name'];
        $contact = $row['branch_contact'];
        $email = $row['branch_email'];
        $place = $row['place_id'];
        $address = $row['branch_address'];
        $image = $row['branch_photo'];

        // Display the form with pre-filled data for editing
        ?>
        <form action="UpdateBranch.php" method="post" enctype="multipart/form-data">
            <input type="hidden" name="branch_id" value="<?php echo $branchId; ?>">
            
            <!-- Form fields with pre-filled data -->
            <label for="txt_name">Name</label>
            <input type="text" name="txt_name" id="txt_name" value="<?php echo $name; ?>" required /><br><br>
            
            <label for="txt_contact">Contact</label>
            <input type="text" name="txt_contact" id="txt_contact" value="<?php echo $contact; ?>" required /><br><br>
            
            <label for="txt_email">Email</label>
            <input type="text" name="txt_email" id="txt_email" value="<?php echo $email; ?>" required /><br><br>
            
            <!-- District and Place fields (You need to populate these based on your logic) -->
            <label for="sl_district">District</label>
            <select name="sl_district" id="sl_district" onChange="getplace(this.value)">
                <option>--Select--</option>
                <?php
                $selQry = "SELECT * FROM tbl_district";
                $result = $con->query($selQry);
                while ($districtRow = $result->fetch_assoc()) {
                ?>
                    <option value="<?php echo $districtRow['district_id']; ?>"><?php echo $districtRow['district_name']; ?></option>
                <?php
                }
                ?>
            </select><br><br>
            
            <label for="sl_place">Place</label>
            <select name="sl_place" id="sl_place">
                <!-- Populate the place options based on your logic -->
            </select><br><br>
            
            <label for="txt_address">Address</label>
            <textarea name="txt_address" id="txt_address" required><?php echo $address; ?></textarea><br><br>
            
            <label for="txt_password">Password</label>
            <input type="password" name="txt_password" id="txt_password" title="You must enter 6 or more characters" required pattern="[a-zA-Z0-9.@#$%^&*]{6,30}" /><br><br>
            
            <!-- Display the existing image -->
            <label for="file_image">Current Image</label>
            <img src="../Assets/Files/Branch/<?php echo $image; ?>" width="100" height="100"><br><br>
            
            <!-- Upload a new image if needed -->
            <label for="file_image">New Image (Leave empty to keep current)</label>
            <input type="file" name="file_image" id="file_image" /><br><br>
            
            <input type="submit" name="btn_submit" id="btn_submit" value="Update" />
        <!-- Delete button with confirmation prompt -->
        <input type="button" name="btn_delete" id="btn_delete" value="Delete" onclick="confirmDelete(<?php echo $branchId; ?>)" />
        </form>
        <script src="../Assets/JQuery/jQuery.js"></script>
        <script>
        function getplace(pid) {
            $.ajax({
                url: "../Assets/AjaxPages/AjaxPlace.php?pid=" + pid,
                success: function (a) {
                    $("#sl_place").html(a);
                }
            });
        }

        function confirmDelete(branchId) {
            if (confirm("Are you sure you want to delete this branch?")) {
                // Redirect to the delete script with the branchId for server-side processing
                window.location.href = "DeleteBranch.php?id=" + branchId;
            }
        }
        </script>
        <?php
    }
}

include('Foot.php');
ob_flush();
?>
