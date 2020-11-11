<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Company Profile</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheets/company-style.css">
  </head>

<body>

  <!-- Menu -->
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

  <main class="main-container">
      <section class="block">
        <div class="button-wrapper">

          <ul class="header-menu horizontal-list">
            <li>
              <a class="section-menu-tab btn active" href="home.php">HOME</a>
            </li>
            <li>
              <a class="section-menu-tab btn active" type="button" id="view-job">ADS</a>
            </li>
            <li>
              <a class="section-menu-tab btn active" id="post-job" type="button">POST AN AD</a>
            </li>
            <li>
              <a class="section-menu-tab btn active" type="button" href="ApiCRUD/administration/disconnect.php">DISCONNECT</a>
            </li>
          </ul>
        </div>
      </section>
    </div>
    <section>
      <article id="adlist">
        <?php
        include 'ApiCRUD/companies/read.php';
        ?>
      </article>

      <article id="msglist">
        <?php
        include 'ApiCRUD/infoad/read.php';
        ?>
      </article>

      <article id="postad">
        <form  class="cf" action="ApiCRUD/advertissements/create.php" method="post">
         <h1 class="title">Post An Ad</h1>
          <div class="half left cf">
            <input for="nameAd" class="input name" type="text" placeholder="Ad name" name="nameAd" required="">
            <textarea class="input message" name="resumeAd" required="" placeholder="Abstract"></textarea>
          </div>  

          <div class="half right cf">
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
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
  <script src="scripts/company-profile.js"></script>
</body>

</html>