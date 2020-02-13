<?php

session_start();

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] === FALSE) {
    header("location: login.html");
    exit;
}

?>