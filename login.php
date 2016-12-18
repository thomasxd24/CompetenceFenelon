<?php
include('connection.php');
session_start();
$error = "";
//Variable for storing our errors.
if ($_GET['error'] == '2') {
    $error = 'Vous avez créeé un compte avec succes';
}
if (isset($_POST["submit"])) {
    if (empty($_POST["username"]) || empty($_POST["password"])) {
        $error = "Both fields are required.";
    } else {
        // Define $username and $password
        $username = $_POST['username'];
        $password = $_POST['password'];

        // To protect from MySQL injection
        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysqli_real_escape_string($db, $username);
        $password = mysqli_real_escape_string($db, $password);
        $password = md5($password);

        //Check username and password from database
        $sql = "SELECT * FROM user WHERE username='$username' and md5password='$password' limit 1";
        $result = mysqli_query($db, $sql);
        $row = mysqli_fetch_assoc($result);

        //If username and password exist in our database then create a session.
        //Otherwise echo error.

        if (mysqli_num_rows($result) == 1) {
            $_SESSION['username'] = $row['username']; // Initializing Session
            $_SESSION['userID'] = $row['userID'];
            $_SESSION['name'] = $row['name'];
            $_SESSION['userType'] = $row['userType'];
            $_SESSION['profid'] = $row['profid'];
            if (isset($_POST["remember"])) {
                $_SESSION['REMEMBER'] = true;
            }
            header("location: http://fenelon63.co.nf"); // Redirecting To Other Page
        } else {
            $error = "Identifiant ou mot de passe incorrect";
        }

    }
}

?>