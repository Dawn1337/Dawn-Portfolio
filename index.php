<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dawn's Services</title>
    <link rel="stylesheet" type="text/css" href="/styles/main.css">
    <meta name="keywords" content="Custom coding services, webdev, Dawn's Coding Services, web designing, web designers for small fee, web designer for small fee">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
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
      <div class="box">
      <div id="text">
      <span>
        <h1>Dawn's Coding Services</h1>
      </span>
      <span>
        <h2>Front-end Web Developer.</h2>
      </span>
      </ul>
      <div class="wrapper">
        <div id="test">
        <ul>
          <li class="twitter"><a href="https://twitter.com/jimmy_hoolm" target="_blank"><i class="fa fa-twitter fa-2x" aria-hidden="true"></i></li>
          <li class="instagram"><a href="https://www.instagram.com/Dawn._1337/" target="_blank"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></li>
          <li class="github"><a href="https://github.com/Dawn1337" target="_blank"><i class="fa fa-github fa-2x" aria-hidden="true"></i></li>
        </ul>
      </div>
      </div>
    </div>
    </div>
    </div>
    </div>
  </body>
</html>
