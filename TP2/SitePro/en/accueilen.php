<div class="bandeau">
         <h2>Welcome !</h1>
</div>
        
<p> This is Hugo Resseguier's professional website</p>
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

        $tab = array("A","B","C");
        for($i=0;$i<count($tab);$i++)
            echo $tab[$i]."<br>";
?>
    
    


