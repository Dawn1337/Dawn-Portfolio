<!DOCTYPE html>
<?php
    session_start();

    if(isset($_POST['Login'])) {
        include_once('db.php');
        $username = strip_tags($_POST['username']);
        $password = strip_tags($_POST['password']);

        $username = stripslashes($username);
        $password = stripslashes($password);

        $username = mysqli_real_escape_string($db, $username);
        $password = mysqli_real_escape_string($db, $password);

        $sql = "SELECT * FROM users WHERE username='$username' LIMIT 1";
        $query = mysqli_query($db, $sql);

        $row = mysqli_fetch_array($query);
        $id = $row['id'];
        $db_password = $row['password'];

        if($password == $db_password) {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = $id;
            header("Location: index.php");
        } else {
            echo "Username or password is wrong!";
        }
    }
?>
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
          <a class="Navbar" href="portfolio.php">Portfolio</a>
          <a class="Navbar" href="login.php">Login</a>
          <a class="Navbar" href="logout.php">Logout</a>
          <a class="Navbar" href="account.php">Account</a>
        </nav>
      </div>
      <div id="text">

      <span>
        <h1>Dawn's Coding Services</h1>
      </span>

      <span>
        <h2>Front-end Web Developer.</h2>
      </span>
    </div>
    </div>
    </div>

  </body>
</html>
