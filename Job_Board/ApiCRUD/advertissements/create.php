<?php
session_start();
try {
    $user = "root";
    $pswd = "root";
    $bdd = new PDO('mysql:host=localhost;dbname=ujob', $user, $pswd);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
}
$author = $_POST["author"];
if (!isset($author)) {
    $author = $_SESSION['user'];
}

$nameAd = $_POST["nameAd"];
$resumeAd = $_POST["resumeAd"];
$completeAd = $_POST["completeAd"];
$typeAd = $_POST["typeAd"];
$sql = "INSERT INTO advertissements (author, name_ad, resume_ad, complete_ad, type_ad) VALUES ('$author', '$nameAd', '$resumeAd', '$completeAd', '$typeAd')";
$bdd->exec($sql);
header('location: ../../home.php')
?>