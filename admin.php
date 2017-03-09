<?php

include 'connect.php';
$bdd = mysqli_connect (SERVER,USER,PASS,DB);

if(isset($_POST['add'])){
    foreach ($_POST as $key=>$val){
        $newData[$key]=mysqli_real_escape_string($bdd,$val);
    }
    $req_add="INSERT INTO pizza (nom, ingredients, pv_taille1,pv_taille2,type) VALUES ('".$newData['nom']."','".$newData['ingredients']."','".$newData['pv_taille1']."','".$newData['pv_taille2']."','".$newData['type']."')";

if(mysqli_query($bdd,$req_add)){
    header('Location:admin.php');
}
};


?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/stylesheet.css">
    <link href="https://fonts.googleapis.com/css?family=Cookie" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Over+the+Rainbow" rel="stylesheet">



    <title>admin pizza cataluna</title>
</head>




<body>

<h2>Créer une nouvelle pizza</h2>

<div class="row">

    <div class="col-xs-offset-2 col-xs-8 formulaire">

        <form name="création_pizza" method="POST" action="admin.php">

        <div class="form-group">
            <label for="type">type de pizza</label>
            <select name="type" id="type">
                <option value="tomate">base tomate</option>
                <option value="creme">base crème</option>
                <option value="dessert">dessert</option>
            </select>
        </div>

        <div class="form-group">
            <label for="nom">nom pizza</label>
            <input required ="required" class="form-control" type="text" id="nom" name="nom" />
        </div>

        <div class="form-group">
            <label for="ingredients">ingrédients</label>
            <textarea required ="required" class="form-control" id="ingredients" name="ingredients"></textarea>
        </div>

        <div class="form-group">
            <label for="pv_taille1">PV taille1</label>
            <input required ="required" class="form-control" type="text" id="pv_taille1" name="pv_taille1" />
        </div>

        <div class="form-group">
            <label for="pv_taille2">PV taille2</label>
            <input required ="required" class="form-control" type="text" id="pv_taille2" name="pv_taille2" />
        </div>

        <input class="btn btn-success" type="submit" name="add" value="création_pizza">

    </div>

</div>


<h2>Liste des pizzas</h2>

<div class="row">
    <div class="col-xs-offset-2 col-xs-8 liste_pizzas">

<?php

$req = "SELECT id,type,nom,ingredients,pv_taille1,pv_taille2 FROM pizza";
$res =mysqli_query($bdd,$req);

while ($data=mysqli_fetch_assoc($res)) {
    echo '<div class="panel panel-primary">
    <div class="panel-heading">'
        .$data['nom'].'<br/>'.$data['type'].'<br/>
        <a class="btn btn-danger pull-right" href="deletePizza.php?id='.$data['id'].'">Delete</a>
        <a class="btn btn-warning pull-right" href="updatePizza.php?id='.$data['id'].'">Update</a>
    </div>
    <div class="panel-body">
    <p>'.$data['ingredients'].'<br/>'.$data['pv_taille1'].'<br/>'.$data['pv_taille2'].'</p>
    </div>';
}


?>

    </div>
</div>
