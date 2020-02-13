<?php

session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === FALSE) {
  header("location: /pages/login.php");
  exit;
}

?>

<html lang="en">

  <head>
    <meta charset="utf-8">

    <title>Luke Bakken</title>
    <meta name="description" content="EC forum">
    <meta name="author" content="Luke Bakken">

    <link rel="stylesheet" href="../css/home.css">
    <script src="../js/home.js"></script>
  </head>

  <body>
    <h1>Welcome to the Protected Site!</h1>
    <a href="/php/logout.php">Logout</a>
  </body>

</html>