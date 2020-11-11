<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta http-equiv="content-type" content="text/html; charset=utf-8" />

    <title>SELECT CLIENT</title>
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-beta.2/css/bootstrap.css'>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="stylesheets/selectclient-style.css">
</head>

        <header class="marg-header">
            <div>
              <img class="logo" src="images/logo.png">
            </div>
            <div>
              <ul id="techList" >
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
                  <p>SELECT CLIENT</p>
              </div>
            </div>
          </section>

          <?php
    try{
        $user = "root";
        $pswd = "root";
        $bdd = new PDO('mysql:host=localhost;dbname=ujob', $user, $pswd);
    } catch (PDOException $e){
        print "Erreur !: " . $e->getMessage() . "<br/>";
    }

    $sql = "SELECT * FROM customers";
    $result = $bdd->query($sql);
?>



    <form action="ApiCRUD/customers/delete.php" method = "post">
        <label for="customers">Select a customer</label>
        <select name="customer">
        <?php
            while($data = $result->fetch()){
                ?>
                <option value="<?php echo $data['username'];?>"><?php echo $data['username'];?> </option>
                <?php
            }
        ?>
        </select>
        <button class="section-menu-tab deledit btn active" id="view-job" type ="submit">DELETE</button>
        <button class="section-menu-tab deledite btn active" type="submit" id="view-job" formaction="ApiCRUD/customers/edit.php">EDIT</button>
    </form>
</body>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js'></script>
</html>