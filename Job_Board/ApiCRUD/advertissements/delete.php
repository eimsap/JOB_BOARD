<?php
    session_start();
    try{
        $user = "root";
        $pswd = "root";
        $bdd = new PDO('mysql:host=localhost;dbname=ujob', $user, $pswd);
    } catch (PDOException $e){
        print "Erreur !: " . $e->getMessage() . "<br/>";
    }
    $selectad = $_POST['ad'];
    $sql = "DELETE FROM advertissements WHERE name_ad = '$selectad'";
    $result = $bdd->query($sql);

    header('location: ../../admin-profile.php');
    exit();
?>