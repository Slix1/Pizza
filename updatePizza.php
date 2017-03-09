<?php

include 'header.php';
include 'connect.php';

$bdd = mysqli_connect (SERVER,USER,PASS,DB);


if(!empty($_POST)){
    foreach ($_POST as $key=>$val){
        $updateData[$key]=mysqli_real_escape_string($bdd,$val);
    }

    if(isset($_POST['update'])) {
        $id = $updateData['id'];
        $nom = $updateData['nom'];
        $ingredients = $updateData['ingredients'];
        $pv_taille1 = $updateData['pv_taille1'];
        $pv_taille2 = $updateData['pv_taille2'];
        $type = $updateData['type'];

        $req_update = " UPDATE pizza SET nom='$nom', ingredients='$ingredients', pv_taille1='$pv_taille1',pv_taille2='$pv_taille2',type='$type' WHERE id=$id";

        echo $req_update;
        $resup = mysqli_query($bdd,$req_update);
    }
    if(mysqli_query($bdd,$req_update)){
        header('Location:admin.php');
    }
}

else {

    $id = mysqli_real_escape_string($bdd, $_GET['id']);

    $req = "SELECT * FROM pizza WHERE id=$id";

    $res = mysqli_query($bdd, $req);

    while ($data = mysqli_fetch_assoc($res)) {
        $type = $data['type'];
        $nom = $data['nom'];
        $ingredients = $data['ingredients'];
        $pv_taille1 = $data['pv_taille1'];
        $pv_taille2 = $data['pv_taille2'];
    }
};


echo'

<h2>Modifier une pizza</h2>

<div class="row">

    <div class="col-xs-offset-2 col-xs-8 formulaire">';

$tabType =['pizza tomate'=>'base tomate',
                    'pizza creme'=>'base crème',
                    'pizza dessert'=>'dessert'
            ];


echo '  <form name="update_pizza" method="POST" action="updatePizza.php">

        <div class="form-group">
            <label for="type">type de pizza</label>
            <select name="type" id="type">';
            foreach ($tabType as $label=>$value){
                $selected='';
                    if($type==$value){
                        $selected ='selected="selected"';
                    }
                    echo '<option value="'   .$value.'"'.$selected.'>'.$label.'</option>';
            }


 echo  '</select>
        </div>

       <div class="form-group">
            <label for="nom">nom pizza</label>
            <input required ="required" class="form-control" type="text" value="'   .$nom.'" id="nom" name="nom"/>
        </div>

        <div class="form-group">
            <label for="ingredients">ingrédients</label>
            <textarea class="form-control" name="ingredients" id="ingredients">'    .$ingredients.'</textarea>
        </div>

        <div class="form-group">
            <label for="pv_taille1">PV taille1</label>
            <input required ="required" class="form-control" type="text" value="'   .$pv_taille1.'" id="pv_taille1" name="pv_taille1" />
        </div>

        <div class="form-group">
            <label for="pv_taille2">PV taille2</label>
            <input required ="required" class="form-control" type="text" value="'   .$pv_taille2.'" id="pv_taille2" name="pv_taille2" />
        </div>
        
        <input type="hidden" name="id" value="' .$id.'"/>

        <input class="btn btn-warning" type="submit" name="update" value="update">

    </div>

</div>

';
