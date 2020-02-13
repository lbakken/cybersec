<?php

session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === TRUE) {
    header("Location: index.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
      
    if (!isset($_POST["username"], $_POST["password"])) {
        header("Location: login.html")
        die("Please Input Username and Password");
    }

    if (empty(trim($_POST["username"]))) {
        header("Location: login.html")
        die("Please Input Username");
    }

    if (empty(trim($_POST("password")))) {
        header("Location: login.html")
        die("Please Input Password");
    }
      
    if ($_POST["username"] == "user" && $_POST["password"] == "password") {
        session_regenerate_id();
        $_SESSION["loggedin"] = TRUE;
        $_SESSION["username"] = trim($_POST["username"])
        $_SESSION["id"] = 1;
        header("Location: index.php");
    } else {
        header("Location: login.html")
        die("Username or Password Incorrect");
    }
}

?>