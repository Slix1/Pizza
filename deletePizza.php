<?php

include 'connect.php';
$bdd = mysqli_connect (SERVER,USER,PASS,DB);

$id = mysqli_real_escape_string($bdd,$_GET['id']);

if($id) {
    $req="DELETE FROM pizza WHERE id=$id";
    if(mysqli_query($bdd,$req)){
        header('Location:admin.php');
    }

}