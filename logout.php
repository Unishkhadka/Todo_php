<?php
    include "connection.php";
    // Start the session
session_start();

// Unset all session variables
$_SESSION = array();

// Destroy the session
session_destroy();

// Redirect to another page or perform any other necessary actions
header("Location: login.php");
?>