<?php
include("../Assets/Connection/connection.php"); // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['complaint_id']) && isset($_POST['reply'])) {
    // Retrieve form data
    $complaint_id = $_POST['complaint_id'];
    $reply = $_POST['reply'];

    // Perform validation (add more validation as needed)
    if (empty($reply)) {
        echo "Reply cannot be empty.";
    } else {
        // Construct SQL query to insert the reply
        $insert_query = "UPDATE tbl_complaint SET complaint_reply = '$reply' WHERE complaint_id = $complaint_id";

        // Execute the query
        if ($con->query($insert_query) === true) {
            echo "Reply submitted successfully!";
        } else {
            echo "Error: " . $con->error;
        }
    }
} else {
    // Handle invalid or missing POST data
    echo "Invalid form submission.";
}

// Close the database connection
$con->close();
?>
