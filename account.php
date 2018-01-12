<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dawn's Services</title>
    <link rel="stylesheet" type="text/css" href="/styles/main.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  </head>
<body>
  <div class="main">
  <div id="container">
    <div class="Header">
      <nav>
        <a class="Navbar" href="index.php">Home</a>
        <a class="Navbar" href="resume.php">Resume</a>
        <?php if(isset($_SESSION['id'])){ ?>
          <a class="Navbar" href="account.php">Account</a>
          <a class="Navbar" href="logout.php">Logout</a>
        <?php }else{ ?>
        <a class="Navbar" href="login.php">Login</a>
        <?php } ?>
      </nav>
    </div>
