<?php
try {
  $user = "root";
  $pswd = "root";
  $bdd = new PDO('mysql:host=localhost;dbname=ujob', $user, $pswd);
} catch (PDOException $e) {
  print "Erreur !: " . $e->getMessage() . "<br/>";
}

$sql = "SELECT * FROM advertissements";
$result = $bdd->query($sql);
?>


<form action="ApiCRUD/advertissements/delete.php" method="post">
  <label for="ad">Select an ad</label>
  <select name="adselected">
    <?php
    while ($data = $result->fetch()) {
    ?>
      <option value="<?php echo $data['name_ad']; ?>"><?php echo $data['name_ad']; ?> </option>
    <?php
    }
?>