<?php

include 'headerAdmin.php';


include 'connect.php';
$bdd = mysqli_connect (SERVER,USER,PASS,DB);
mysqli_set_charset($bdd,'UTF8');


if(isset($_POST['add'])){
    foreach ($_POST as $key=>$val){
        $newData[$key]=mysqli_real_escape_string($bdd,$val);
    }
    $req_add="INSERT INTO pizza (nom, ingredients, pv_taille1,pv_taille2,type) VALUES ('".$newData['nom']."','".$newData['ingredients']."','".$newData['pv_taille1']."','".$newData['pv_taille2']."','".$newData['type']."')";

if(mysqli_query($bdd,$req_add)){
    header('Location:admin.php');
}
}



?>


<body>

<h2>Créer une nouvelle pizza</h2>

<div class="row">

    <div class="col-xs-offset-2 col-xs-8 formulaire">

        <form name="création_pizza" method="POST" action="admin.php">

        <div class="form-group">
            <label for="type">type de pizza</label>
            <select name="type" id="type">
                <option value="tomate">base tomate</option>
                <option value="creme">base creme</option>
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



<?php

$req = "SELECT id,type,nom,ingredients,pv_taille1,pv_taille2 FROM pizza";
$res =mysqli_query($bdd,$req);

while ($data=mysqli_fetch_assoc($res)) {
    echo '
        <div class="row">
            <div class="col-xs-offset-3 col-xs-6 liste_pizzas">
 
            <table class="table table-bordered table-admin">
            <caption class="libelle_tableau">'.$data['nom'].'</caption>
            <tr><td><a class="btn btn-warning" href="updatePizza.php?id='.$data['id'].'">Update</a></td>
            <td class="col1"><a class="btn btn-danger" href="deletePizza.php?id='.$data['id'].'">Delete</a></td></tr>
            <tr class="success"><td class="col1">type de pizza</td><td>'.$data['type'].'</td></tr>
            <tr><td class="col1">description</td><td>'.$data['ingredients'].'</td></tr>
            <tr class="success"><td class="col1">PV taille1<td>'.$data['pv_taille1'].'</td></tr>
            <tr><td class="col1">PV taille2</td><td>'.$data['pv_taille2'].'</td></tr>          
            </table>
            
            </div>
        </div>'

    
    ;
}


?>


