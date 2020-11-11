<!DOCTYPE html>
<head>
        <meta http-equiv="content-type" content="text/html" />
  <meta charset="UTF-8">
  <title>UJOB</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
  <link rel="stylesheet" href="stylesheets/home-style.css">
</head>
<body>
  <div class="bg-img"></div>

  <!-- Menu -->  
  <header class="marg-header">
      <div>
        <img class="logo" src="images/logo.png">
        <ul id="techList" >
          <li class="Find">Find & hire</li>
          <li class="Talented">Talented</li>
        </ul> 
      </div>  
    </header>
    <section class="block main-container">
      <div class="button-wrapper">
        <ul class="header-menu horizontal-list">
          <li>
            <a class="section-menu-tab btn active" href="home.php">HOME</a>
          </li>
          <li>
            <a class="section-menu-tab btn active" href="ApiCRUD/administration/selectprofile.php">PROFILE</a>              </li>
          </li>
        </ul>
      </div>
    </section>
 
<!-- Cards -->
  <main>
    <article class="carousel">

      <!--Formulaire-->
        <?php
          include 'ApiCRUD/administration/apply.php';
        ?>

        <a class="prev-btn fa fa-arrow-left" href="#"></a>
          <?php
            include 'ApiCRUD/advertissements/read.php';
          ?>
        <a class="next-btn fa fa-arrow-right" href="#"></a>
    </article>
  </main>

<footer></footer>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
<script src= 'scripts/home.js'></script>
</body>
</html>