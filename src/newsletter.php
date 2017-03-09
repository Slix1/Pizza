<?php
    include 'connect.php';
    $bdd= mysqli_connect(SERVER, USER, PASS, DB);

        if(isset($_POST['btnSubmit'])){
            foreach ($_POST as $key=>$val){
                $newData[$key]=mysqli_real_escape_string($bdd,$val);
            }
            $reqBtnSubmit="INSERT INTO newsletter (nom,prenom,email) VALUES ('".$newData['nom']."', '".$newData['prenom']."','".$newData['email']."')";
            if (mysqli_query($bdd,$reqBtnSubmit)){
                
                header('Location:newsletter.php');
            }

        }



?>

<!doctype html>
<html>

<link href="style.css" rel="stylesheet">

<form name="newsletter" method="POST" action="newsletter.php" ">

    <p><label for="nom"> Nom </label>

        <input required="required" class="form-control" name="nom" type="text" id="nom" placeholder="Nom"/></p>

    <p><label for="prenom"> Prénom </label>

        <input required="required" class="form-control" name="prenom" type="text" id="prenom" placeholder="Prénom"/></p>

    <p><label for="email"> Email </label>

        <input required="required" class="form-control" name="email" type="text" id="email" placeholder="Email"/></p>


    <input name="btnSubmit" type="submit" value="S'incrire à la Newsletter"/>

</form>

</html>
