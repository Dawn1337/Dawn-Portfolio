<?php
session_start();
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Resume</title>
    <link rel="stylesheet" href="styles/resume.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
    <script src="scripts/resume.js"></script>
  </head>
  <body>
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
    <header>
      <img src="images/avatar.jpg" alt="Tech" class="avatar-image">
      <h1>Jimmy Holm, Front-End Web Developer</h1>
    </header>

    <section>
      <div id="show-hidebutton">
      <button onlick="">About me</button>
    </div>

    <div class="Container" id="about">
      <h4>about me</h4>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
      <br>Sed luctus magna eu aliquam rutrum. Curabitur molestie hendrerit
      <br>ante, et luctus neque tristique sit amet. Pellentesque luctus,
    </div>

      <div class="Container" id="skills">
        <h4> Skills: </h4>
      <p>CSS</p>
      <p>HTML5</p>
      <p>JavaScript</p>
      <p>Python</p>
      <p>PHP</p>
      </div>
    </section>
  </body>
</html>
