<?php
session_start();

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['admin_username'])) {
    header("Location: adminlogin.php");
    exit;
}
?>