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

while ($data = $result->fetch()) {
    $_SESSION['firstname'] = $data['firstname'];
    $_SESSION['name'] = $data['Cname'];
    $_SESSION['mail'] = $data['email'];
    $_SESSION['phone'] = $data['Cnumber'];
    $_SESSION['password'] = $data['Cpassword'];
};

$sql = "SELECT * FROM advertissements";
$result = $bdd->query($sql);
?>

<article>
    <div class="form-overlay"></div>
    <div id="form-container" class="icon fa fa-pencil">
        <span id="form-close" class="icon fa fa-close"></span>
        <div id="form-content">
            <div id="form-head">
                <h1 class="pre">Form<br>Coordonates</h1>
            </div>
            <form>
            <label>Name</label> <p class="input select ptext"> <?php echo $_SESSION['firstname'];
                        echo " ";
                        echo $_SESSION['name']; ?><br></p>

            <label>E-mail</label> <p class="input select ptext"> <?php echo $_SESSION['mail'] ?><br></p>

            <label>Phone</label> <p class="input select ptext"> <?php echo $_SESSION['phone'] ?><br></p>

            <form action="../../ApiCRUD/infoad/create.php" method="post">
                <label for="ad">Select an ad</label>
                <select for="selectad" class="input select ptext" id="adconcerned" name="adconcerned">
                    <?php
                    while ($data = $result->fetch()) {
                    ?>
                        <option value=<?php echo $data['name_ad']; ?>><?php echo $data['name_ad']; ?></option>
                    <?php
                    }
                    ?>
                </select>

                <label for="message">Message : </label>
                <textarea class="input message" name="message" required=""></textarea>
                <input class="input submit" type="submit" value="Send Message">
            </form>
            </form>
        </div>
    </div>
</article>