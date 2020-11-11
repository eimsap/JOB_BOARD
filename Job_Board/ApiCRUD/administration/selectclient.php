<?php
    try{
        $user = "root";
        $pswd = "root";
        $bdd = new PDO('mysql:host=localhost;dbname=ujob', $user, $pswd);
    } catch (PDOException $e){
        print "Erreur !: " . $e->getMessage() . "<br/>";
    }

    $sql = "SELECT * FROM customers";
    $result = $bdd->query($sql);
?>
    <form action="ApiCRUD/customers/delete.php" method = "post">
        <label for="customers"><h2>Select a customer</h2></label>
        <select class="section-menu-tab deledite btn active" id="view-job" name="customer">
        <?php
            while($data = $result->fetch()){
                ?>
                <option value="<?php echo $data['username'];?>"><?php echo $data['username'];?> </option>
                <?php
            }
        ?>
        </select>
        <button class="section-menu-tab deledit btn active" id="view-job" type ="submit">DELETE</button>
        <button class="section-menu-tab deledit btn active" id="view-job" type="submit" formaction="ApiCRUD/customers/edit.php">EDIT</button>
    </form>