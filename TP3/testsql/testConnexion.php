<?php

$serveur = "localhost";
$dbname = "test";
$user = "root";
$pass = "";


$mysqli = new mysqli($serveur,$user,$pass,$dbname);

$result = $mysqli->query("SELECT * FROM cours ");
$tab=array();

$response=mysqli_fetch_all($result, $resulttype=MYSQLI_ASSOC);
foreach($response as $id => $ligne){

    $tab[$ligne['login']]=$ligne['password'];
        
    }
print_r($tab);
?>



