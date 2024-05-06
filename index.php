<?php
session_start();

  if (isset($_SESSION['authenticated']) != 1) {
    header('location: /login.php');
  }
?>

<html>
  <head>
    <title>COSC4806 Assignment 1 - Alex</title>
  </head>
  <body>

    <h1>Assignment 1</h1>

    <p> Welcome, <?=$_SESSION['username'] ?>!</p>

    <p><a href="/logoutPage.php">Click here to logout</a></p>
    
    
    

  </body>


</html>