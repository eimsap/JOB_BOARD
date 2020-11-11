<?php
    session_start();
    try{
        $user = "root";
        $pswd = "root";
        $bdd = new PDO('mysql:host=localhost;dbname=ujob', $user, $pswd);
    } catch (PDOException $e){
        print "Erreur !: " . $e->getMessage() . "<br/>";
    }
    $adselect = $_SESSION['adselect'];
    $Mvalue = $_POST['Mvalue'];
    $Newvalue = $_POST['Newvalue'];
    $sql = "UPDATE advertissements SET $Mvalue = '$Newvalue' WHERE name_ad = '$adselect'";
    $result = $bdd->query($sql);
    header('location: ../../admin-profile.php');
    exit();
?>