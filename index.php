<?php

session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === TRUE) {
  header("location: /pages/home.php");
  exit;
}

?>

<html lang="en">

  <head>
    <meta charset="utf-8">

    <title>Luke Bakken</title>
    <meta name="description" content="EC forum">
    <meta name="author" content="Luke Bakken">

    <link rel="stylesheet" href="css/styles.css">
    <script src="js/index.js"></script>
  </head>

  <body>
    <h1>Welcome to the Site!</h1>
    <a href="/pages/login.php">Login</a>
  </body>

</html>