<?php
try{
        $user = "root";
        $pswd = "root";
        $bdd = new PDO('mysql:host=localhost;dbname=ujob', $user, $pswd);
    } catch (PDOException $e){
        print "Erreur !: " . $e->getMessage() . "<br/>";
    }
    $user = $_SESSION['user'];
    $sql = "SELECT * FROM customers WHERE username = '$user'";
    $result = $bdd->query($sql);
        
    while($data = $result->fetch()){

    }

    ?>

    <h1>Informations : </h1>
    