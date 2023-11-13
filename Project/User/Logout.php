<?php
session_start();
session_destroy();

// Add JavaScript for the alert message
echo '<script>alert("You have been logged out.");</script>';

// Redirect the user to the desired page
header('location: ../');
?>
