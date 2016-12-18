<?php
session_start();

if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
    session_unset();     // unset $_SESSION variable for the run-time
    session_destroy();   // destroy session data in storage
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

if (!isset($_SESSION['username'])) {
    header("Location: connexion.php");
} else {
    $user_check = $_SESSION['name'];
    $username = $_SESSION['username'];
    $userID = $_SESSION['userID'];
}