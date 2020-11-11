<?php session_start();?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SELECT CLIENT</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <link rel="stylesheet" href="stylesheets/selectclient-style.css">
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
  <main>
    <div class="main-container">
      <section class="block">
        <div class="button-wrapper">
          <ul class="section-menu horizontal-list">
            <li>
              <a class="section-menu-tab" href="home.html">HOME</a>
            </li>
            <li>
              <a class="section-menu-tab btn active" type="button" id="ads view-job">ADS</a>
            </li>
            <li>
              <a class="section-menu-tab btn active" type="button" id="view-job customers">CUSTOMERS</a>
            </li>
          </ul>
          <div class="profile-menu">
            <p><?php echo $_SESSION['user']; ?></p>
          </div>
        </div>
      </section>
    </div>
    <section>
    <div class="container">  
    <form id="contact" action="" method="post">
      <form action="ApiCRUD/administration/clientedit.php" method="post">
      <fieldset>
      <label for="fisrtname">Firstname :</label>
        <input type="text" value=<?php echo $_SESSION['firstname']?> name=firstname>
        </fieldset>
        <fieldset>
        <label for="name">Name :</label>
        <input type="text" value=<?php echo $_SESSION['name']?> name="name">
      </fieldset>
      <fieldset>
        <label for="phone">Number :</label>
        <input type="number" value=<?php echo $_SESSION['phone']?> name="number">
      </fieldset>
      <fieldset>
        <label for="mail">E-mail :</label>
        <input type="mail" value=<?php echo $_SESSION['mail']?> name = "mail">
      </fieldset>
      <fieldset>
        <label for="user">Username :</label>
        <input type="text" value=<?php echo $_SESSION['user']?> name = "user">
      </fieldset>
      <fieldset>
        <label for="password">Password :</label>
        <input type="password" value=<?php echo $_SESSION['password']?> name = "password">
      </fieldset>
        <button name="submit" type="submit" value="UPDATE" id="contact-submit" data-submit="...Sending">Submit</button>

      </form>
    </section> 
</div>
  </main>
</body>

</html>