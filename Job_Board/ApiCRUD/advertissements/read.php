<?php
try {
  $user = "root";
  $pswd = "root";
  $bdd = new PDO('mysql:host=localhost;dbname=ujob', $user, $pswd);
} catch (PDOException $e) {
  print "Error !: " . $e->getMessage() . "<br/>";
}

$sql = 'SELECT * from advertissements';
$result = $bdd->query($sql);

while ($data = $result->fetch()) {
?>
  <div class="card div-card">
    <!--Annonce 1-->
    <article class="service-card">
      <div class="service-card-circle-title article1"></div>
      <div id="titre1" class="service-card-title"><?php echo $data['name_ad']; ?></div>
      <div ><?php echo $data['resume_ad']; ?></div>

      <!--LEARN MORE-->
      <p style="margin:0;">
      <a href="#" class="btn-action service-card-details-link">Learn More</a>
      <div class="service-card-details-block"><?php echo $data['complete_ad']; ?></div>
    </article>
  </div>
<?php
}
$result->closeCursor();

?>