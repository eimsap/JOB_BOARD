<?php
session_start();
    try{
        $user = "root";
        $pswd = "root";
        $bdd = new PDO('mysql:host=localhost;dbname=ujob', $user, $pswd);
    } catch (PDOException $e){
        print "Erreur !: " . $e->getMessage() . "<br/>";
    }
    $_SESSION['adselect'] = $_POST['adselected'];
    $adselect = $_POST['adselected'];
    $sql = "SELECT * FROM advertissements WHERE name_ad = '$adselect'";
    $result = $bdd->query($sql);
    while($data = $result->fetch()){
    ?>
        <form action = "../advertissements/update.php" method="post">
            <select name="Mvalue">
                <option value="ID">ID</option>
                <option value="author">author</option>
                <option value="name_ad">name</option>
                <option value="resume">abstract</option>
                <option value="complete_ad">description</option>
                <option value="type_ad">type of contract</option>
            </select>
            <input type="text" name="Newvalue" placeholder="Enter new value">
            <button class="section-menu-tab btn active" id="view-job" type = "submit">EDIT</button>
        </form>
    <?php
    }
?>