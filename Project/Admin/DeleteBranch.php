<?php
// Include the database connection file
include("../Assets/Connection/connection.php");

if (isset($_GET['id'])) {
    // Get the branch ID from the URL
    $branchId = $_GET['id'];

    // SQL query to delete the branch by its ID
    $deleteQuery = "DELETE FROM tbl_branch WHERE branch_id = $branchId";

    // Execute the query
    if ($con->query($deleteQuery) === TRUE) {
        // Branch deleted successfully
        echo "Branch deleted successfully.";
    } else {
        // Error in deleting the branch
        echo "Error: " . $con->error;
    }

    // Redirect back to the branch listing page
    header("Location: Branchs.php");
} else {
    // If branch ID is not provided, display an error or redirect to an error page
    echo "Branch ID not provided.";
}
?>
