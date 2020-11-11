<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Page Login + Sign Up</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="stylesheets/login-style.css">
</head>

<body>

  <!-- Fond -->

  <div id="back">
    <canvas id="canvas" class="canvas-back"></canvas>
    <div class="backRight">
      <img src="images/logo.png">
      <p class="textlogin">WELCOME<br> Please create an account</p>
    </div>
    <div class="backLeft">
      <img src="images/logo.png">
      <p class="textlogin">WELCOME<br>Please Login</p>
    </div>
  </div>

  <!-- Sign Up -->
  <main>
    <section id="signup">
      <div id="slideBox">
        <div class="topLayer">
          <div class="left">
            <div class="content">
              <form action="ApiCRUD/customers/create.php" method="post">
                <h2 class="form-title">Sign Up</h2>
                <form id="form-signup" onsubmit="return false;">
                <div class="form-element form-stack">
                  <label for="firstname" class="form-label">Firstname</label>
                  <input type="text" class="form-control" name="firstname" required="">
                </div>
                <div class="form-element form-stack">
                  <label for="name" class="form-label">Name</label>
                  <input type="text" class="form-control" name="name" required="">
                </div>
                <div class="form-element form-stack">
                  <label for="username" class="form-label">Username</label>
                  <input type="text" class="form-control" name="username" required="">
                </div>
                <div class="form-element form-stack">
                  <label for="password" class="form-label">Password</label>
                  <input type="password" class="form-control" name="password" required="">
                </div>
                <div class="form-element form-stack">
                  <label for="email" class="form-label">Email</label>
                  <input type="email" class="form-control" name="email" required="">
                </div>
                <div class="form-element form-stack">
                  <label for="phone" class="form-label">Phone</label>
                  <input type="tel" name="phone" placeholder="0102030405" pattern="[0-9]{10}" required>
                </div>
                <div class="form-element form-stack" id="contract">
                  <label for="contractor" class="form-label"> Are you a contractor ?</label><br>
                  <input type="radio" name="contractor" value="yes">
                  <label for="yes">yes</label>
                  <input type="radio" name="contractor" value="no">
                  <label for="no">no</label><br>
                </div>
                <div class="form-element form-submit">
                  <button id="signUp" class="signup value" type="submit" name="signup">Sign up</button>
                  <button id="goLeft" class="signup off">Login</button>
                  </div>
              </form>
            </form>
          </div>
        </div>
   
    <!-- Login -->
    <section id="login">
      <div class="right">
        <div class="content">
          <form action="ApiCRUD/administration/connect.php" id="form-login" method="post">
            <h2>Login</h2>
            <form id="form-login" method="post" onsubmit="return false;">
            <div class="form-element form-stack">
              <label for="username" class="form-label">Username</label>
              <input id="username-login" type="text" name="username" required="">
            </div>
            <div class="form-element form-stack">
              <label for="password" class="form-label">Password</label>
              <input id="password-login" type="password" name="password" required="">
            </div>
            <div class="form-element form-submit">
              <button id="logIn" class="login value" type="submit" name="login">Log In</button>
              <button id="goRight" class="login off" name="signup">Sign Up</button>
            </div>
          </form>
        </div>
      </div>
    </section>
    <?php
    if ($_SESSION['error'] == true) {
      echo "<script> alert('Password wrong. Please try again')</script>";
      $_SESSION['error'] = false;
    }
    ?>
  </main>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/paper.js/0.11.3/paper-full.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="scripts/login.js"></script>

</body>

</html>