<?php
require_once('template_header.php') ?>

<div class="Conteneur">
<div class="Eltflex1"> 
<h1> MENU </h1>
<?php
 require_once("template_menu.php");
 renderMenuToHTML('index');
?>
</div>
<div class="Contenu">
    <div class="bandeau">
         <h2>Acceuil</h1>
    </div>
        
    <p> Ceci est le site professionnel de Hugo Resseguier</p>
    <?php 
    function afficher( $texte, $saut = 1 ) {
    echo $texte;
    for( $i = 0 ; $i < $saut ; $i++)
    echo "\n";
    }
    echo "<p>";
    afficher("Hello", 0);
    afficher(" World !");
    echo "</p>";

    $tab = array("A","B","C","D");
    for($i=0;$i<count($tab);$i++)
        echo $tab[$i]."<br>";
    

    ?>
    
    
</div>
</div>

<?php require_once("template_footer.php") ?>

</div> 


 



    
   
   

</body>
</html>