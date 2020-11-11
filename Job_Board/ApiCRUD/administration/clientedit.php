<?php
    session_start();
    try{
        $user = "root";
        $pswd = "root";
        $bdd = new PDO('mysql:host=localhost;dbname=ujob', $user, $pswd);
    } catch (PDOException $e){
        print "Erreur !: " . $e->getMessage() . "<br/>";
    }
    $user = $_SESSION['user'];
    $firstname=$_POST['firstname'];
    $name=$_POST['name'];
    $phone=$_POST['number'];
    $mail=$_POST['mail'];
    $newuser=$_POST['user'];
    $password =$_POST['password'];
    $sql = "UPDATE customers SET firstname = '$firstname' , Cname='$name' ,Cnumber='$phone',email='$mail',username='$newuser',Cpassword='$password' WHERE username = '$user'";
    $bdd->exec($sql);
    header('location: ../../user-profile.php');
    exit();
?>