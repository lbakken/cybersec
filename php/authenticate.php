<?php

session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === TRUE) {
    header("Location: /");
    exit;
}

if (isset($_SERVER["REQUEST_METHOD"]) && $_SERVER["REQUEST_METHOD"] == "POST") {
  if (!isset($_POST["username"], $_POST["password"])) {
    header("Location: /pages/login.php");
    die("Please Input Username and Password");
  }
  
  if (empty(trim($_POST["username"]))) {
    header("Location: /pages/login.php");
    die("Please Input Username");
  }
  
  if (empty(trim($_POST["password"]))) {
    header("Location: /pages/login.php");
    die("Please Input Password");
  }
        
  if ($_POST["username"] == "user" && $_POST["password"] == "password") {
    session_regenerate_id();
    $_SESSION["loggedin"] = TRUE;
    $_SESSION["username"] = trim($_POST["username"]);
    $_SESSION["id"] = 1;
    header("Location: /pages/home.php");
    exit;
  } else {
    header("Location: /pages/login.php");
    die("Username or Password Incorrect");
  }
}
?>