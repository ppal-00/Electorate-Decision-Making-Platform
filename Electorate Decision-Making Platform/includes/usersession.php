<?php
session_start();

// Check if the user is not logged in, redirect to login page
if (!isset($_SESSION['user_username'])) {
    header("Location: ../admin/adminlogin.php");
    exit;
}
?>