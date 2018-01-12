<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dawn's Services</title>
    <link rel="stylesheet" type="text/css" href="/styles/main.css">
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

      <!-- LOGIN FORM -->
      <form action="login_get.php" method="post" enctype="multipart/form-data">
        <div class="container" id="login">
          <label><b>Username</b></label>
          <input type="text" placeholder="Enter Username" name="username" required>
          <label><b>Password</b></label>
          <input type="password" placeholder="Enter Password" name="password" required>
          <button type="submit" name="login">Login</button>
        </div>
      </form>
</body>
</html>
