<?php

session_start();

if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === TRUE) {
  header("Location: /pages/home.php");
  exit;
}

?>

<html lang="en">

  <head>
    <meta charset="utf-8">
  
    <title>Luke Bakken</title>
    <meta name="description" content="">
    <meta name="author" content="Luke Bakken">
  
    <link rel="stylesheet" href="../css/login.css">
    <script src="../js/login.js"></script>
  </head>
  
  <body>
    <div class="container">
      <h1>Login</h1>
      <form name="login" id="login" class="login" method="post" action="../php/authenticate.php">
        <div class="field">
          <label for="username">Username: </label>
          <input placeholder="Username" type="text" name="username" id="username" required
            onchange="validator()" onkeyup="validator()" oninput="validator()"
          />
        </div>
        <div class="field">
          <label for="password">Password: </label>
          <input placeholder="Password" type="password" name="password" id="password" required
            onchange="validator()" onkeyup="validator()" oninput="validator()"
          />
        </div>
        <div class="field">
          <input type="submit" value="Login" id="submit" name="submit" disabled="disabled" />
        </div>
      </form>
      <br><br>
      <p>U: user<br>P: password</p>
    </div>
  </body>

</html>