<div class="Conteneur">
       <div class="Eltflex1">
        <h1> MENU </h1>
        <?php
        function renderMenuToHTML($currentPageId,$currentlang) {
              // un tableau qui d\'efinit la structure du site
              $mymenu = array(
              // idPage titre
                     'accueil' => array( 'Accueil' ),
                     'cv' => array( 'CV' ),
                     'projets' => array('Mes Projets'),
                     'contact' => array ('Me Contacter')
                     );
              if($currentlang=='en'){
                     echo "<div class=\"boutonlangue\">";
                     echo "<button class=\"blangcourant\"><a href=\"http://localhost/IDAW/TP3/question3/SitePro/index.php?page=".$currentPageId."&lang=en\"> <img id=\"imagelang\" src=\"images/drapeauen.jpg\" > </a></button>";
                     echo "<button class=\"blang\"><a href=\"http://localhost/IDAW/TP3/question3/SitePro/index.php?page=".$currentPageId."&lang=fr\"> <img id=\"imagelang\" src=\"images/drapeaufr.jpg\" alt=\"photo de Hugo Resseguier\"> </a></button>";
                     echo "</div>";
              }
              elseif($currentlang=='fr'){
                     echo "<div class=\"boutonlangue\">";
                     echo "<button class=\"blang\"><a href=\"http://localhost/IDAW/TP3/question3/SitePro/index.php?page=".$currentPageId."&lang=en\"> <img id=\"imagelang\" src=\"images/drapeauen.jpg\" > </a></button>";
                     echo "<button class=\"blangcourant\"><a href=\"http://localhost/IDAW/TP3/question3/SitePro/index.php?page=".$currentPageId."&lang=fr\"> <img id=\"imagelang\" src=\"images/drapeaufr.jpg\" alt=\"photo de Hugo Resseguier\"> </a></button>";
                     echo "</div>";
              }
              
             
              // boucle affichant un bouton par page selon l'ID de la page avec un style css différent pour l'ID de la page courante
              foreach($mymenu as $pageId => $pageParameters) {
                     if($pageId==$currentPageId){
                             echo "<button class=\"boutoncourant\"><a href=\"http://localhost/IDAW/TP3/question3/SitePro/index.php?page=".$pageId."&lang=".$currentlang."\">".$pageParameters[0]."</a></button>";
                            
                     } else {
                            echo "<button class=\"bouton\"><a href=\"http://localhost/IDAW/TP3/question3/SitePro/index.php?page=".$pageId."&lang=".$currentlang."\">".$pageParameters[0]."</a></button>";
                     }
                     
                            
              }
              require_once('login.php');
              echo "</div>";

       }


        ?>
         <form id="style_form" action="index.php" method="POST"> 
                     <select name="css">
                         <option value="deco.css">Normal</option>
                         <option value="deco2.css">Rose</option>
                     </select>
                     <input type="submit" value="Appliquer" />
                 </form>
                  
        

