<?php
// Start the session to access session variables
// session_start();

// Check if the user is logged in
if (isset($_SESSION['name'])) {
    $username = $_SESSION['name'];
    echo "Hello, $username";
} else {
    echo "Hello, Guest";
}
?>