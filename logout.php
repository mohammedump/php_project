<?php
session_start(); // Start the session

// Check if the user is logged in
if (isset($_SESSION['nom'])) {
    // Unset all of the session variables
    $_SESSION = array();

    // Destroy the session
    session_destroy();

    // Redirect to the login page or any other page you want
    header("Location: authentification.php");
    exit();
} else {
    // If the user is not logged in, redirect to the login page
    header("Location: authentification.php");
    exit();
}