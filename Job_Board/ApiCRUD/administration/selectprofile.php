<?php
session_start();
try {
    $user = "root";
    $pswd = "root";
    $bdd = new PDO('mysql:host=localhost;dbname=ujob', $user, $pswd);
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
}
$user = $_SESSION['user'];
$sql = "SELECT * FROM customers WHERE username = '$user'";
$result = $bdd->query($sql);

while($data = $result->fetch()){
    if($data['contractor']!='yes' && $data['username']!='admin'){
        header('location: ../../user-profile.php');
    }elseif($data['username'] == 'admin' && $data['Cpassword'] == 'root'){
        header('location: ../../admin-profile.php');
        exit();
    }else{
        header('location: ../../company-profile.php');
    }
}
?>