<?php
session_start();
try{
    $user = "root";
    $pswd = "root";
    $bdd = new PDO('mysql:host=localhost;dbname=ujob', $user, $pswd);
} catch (PDOException $e){
    print "Erreur !: " . $e->getMessage() . "<br/>";
}

$_SESSION['user']=$_POST['username'];
$username = $_POST['username'];
$password = $_POST['password'];
$sql = "SELECT * from customers";
$result = $bdd->query($sql);
echo $username;
echo $password;
while($data = $result->fetch()){
    if($data['username'] != $username || $data['Cpassword'] != $password){
        $_SESSION['error']=true;
        header('location: ../../login.php');
    }else{
        $_SESSION['error']=false;
        header('location: ../../home.php');
        exit();
    }
}
?>
