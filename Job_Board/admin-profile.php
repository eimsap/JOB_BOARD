<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php echo $_SESSION['user'];?></title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="stylesheets/admin-style.css">
</head>

<body>
  <header class="marg-header">
    <div>
      <img class="logo" src="images/logo.png">
    </div>
    <div>
      <ul id="techList">
        <li class="Find">Find & hire</li>
        <li class="Talented">Talented</li>
      </ul>
    </div>
  </header>

  <div class="main-container">
    <section class="block">
      <div class="button-wrapper">
        <ul class="section-menu horizontal-list">
          <li>
            <a class="section-menu-tab btn active" href="home.php">HOME</a>
          </li>
          <li>
            <a class="section-menu-tab btn active" type="button" id="ads">ADS</a>
          </li>
          <li>
            <a class="section-menu-tab btn active" type="button" id="customers">CUSTOMERS</a>
          </li>
          <li>
            <a class="section-menu-tab btn active" type="button" id="createcust">CREATE CUSTOMER</a>
          </li>
          <li>
            <a class="section-menu-tab btn active" type="button" id="createAD">CREATE AD</a>
          </li>
          <li>
            <a class="section-menu-tab btn active" type="button" id="disconnect">DISCONNECT</a>
          </li>
        </ul>
    
      </div>
    </section>
  </div>

  <main>
    <article id="adlist">
    <h1 class="title2">ADS</h1>
      <?php
      include 'ApiCRUD/advertissements/read.php';
      include 'ApiCRUD/administration/selectad.php';
      ?>
    </article>

    <article id="customerlist">
    <h1 class="title1">CUSTOMER</h1>
      <?php
      include 'ApiCRUD/customers/read.php';
      include 'ApiCRUD/administration/selectclient.php';
      ?>
    </article>
    
    <article id="mkclient">
      <div id="slideBox">
        <div class="topLayer">
          <div class="left">
            <div class="content">
              <form action="ApiCRUD/customers/create.php" id="form-signup" method="post">
                <h1 class="title">Create Customer</h1>

                <div class="half left cf form-element form-stack">
                  <input for="firstname" class="input name form-control" type="text" placeholder="Firstname" name="firstname" required="">
                  <input for="name" class="input name form-control" type="text" placeholder="Name" name="name" required="">
                  <input for="username" class="input name form-control" type="text" placeholder="Username" name="username" required="">
                </div> 
              
                <div class="half right cf">
                  <input for="password" class="input name form-control" type="password" placeholder="Password" name="password" required="">
                  <input for="email" class="input name form-control" type="text" placeholder="Email" name="email" required="">
                  <input for="Phone" class="input name form-control" type="tel" placeholder="0102030405" pattern="[0-9]{10}" name="phone" required="">
                </div>  

                <label for="ad" for="typead"></label>
                <div class="form-element form-stack" id="contract">
                <label for="contractor" class="form-label text">Are you a contractor ?</label><br>
                <select for="contractor" class="input name form-control" id="contract" name="typeAd">
                  <option for="yes" type="radio" name="contractor" value="yes">YES</option>
                  <option for="no" type="radio" name="contractor" value="no">NO</option>
                </select>
                <input class="input submit" type="submit" value="Create">
              </form>
            </div>
          </div>
        </div>
      </div>
    </article>

    <article id="mkad">
      <form action="ApiCRUD/advertissements/create.php">
        <h1 class="title">Create ad</h1>
        <div class="half left cf">
          <input for="author" class="input name" type="text" placeholder="Author" name="author" required="">
          <input class="input name" name="nameAd" required="" placeholder="Ad Name">
          <input for="resume" class="input abstract" name="resumeAd" required="" placeholder="Abstract">
        </div>  

        <div class="half right1 cf">
          <label for="ad" for="typead"></label>
          <select for="selectad" class="input" id="adconcerned" name="typeAd">
            <option value="CDD">CDD</option>
            <option value="CDI">CDI</option>
            <option value="stage">Stage</option>
            <option value="proC">Professionalistion Contract</option>
            <option value="learnC">Learning Contract</option>
          </select>
          <textarea class="input message" name="completeAd" required="" placeholder="Description"></textarea>
        </div>
        <input class="input submit" type="submit" value="Create">
      </form>
    </article>
  </section>
</main>

</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<script src='scripts/admin-profile.js'></script>

</html>