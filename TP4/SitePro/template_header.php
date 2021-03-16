<?php

function findstyle(){
    $stylecss="deco.css";
    if(isset($_COOKIE['stylecss'])){
        $stylecss = $_COOKIE['stylecss'];
    }

    if(isset($_POST['css'])){
            $stylecss=$_POST['css'];
            setcookie("stylecss" , $stylecss);
    }
        
    echo $stylecss;
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo findstyle(); ?>">
    <title>Site Pro Hugo Resseguier : Projets</title>
</head>


<body>

<div class="haut">
        <div class="Titre"> 
            <h1> Site Professionnel de Hugo Resseguier </h1> 
            <?php 
            echo "<p>".date("d/m/Y")."</p>";

            ?>
        
        </div>
       
        <div class="image"> 
            <img id="image1" src="images/imagepagedegarde.jpg" alt="photo de Hugo Resseguier">
        </div>
       
                 
</div>





