<?php
try {
    $user = "root";
    $pswd = "root";
    $bdd = new PDO('mysql:host=localhost;dbname=ujob', $user, $pswd);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
}

$title = "";
$name = $_POST["name"];
$mail = $_POST["email"];
$phone = $_POST["phone"];
$msg = $_POST["message"];
$sql = "INSERT INTO infoad (ad_concerned, customer_concerned, mail, phone, message_ad) VALUES ('$title','$name', '$mail', '$phone', '$msg')";
$bdd->exec($sql);
