<div class="Conteneur">
 <div class="Eltflex1">
        <h1> MENU </h1>
        <?php
        function renderMenuToHTML($currentPageId) {
              // un tableau qui d\'efinit la structure du site
              $mymenu = array(
              // idPage titre
                     'accueil' => array( 'Accueil' ),
                     'cv' => array( 'CV' ),
                     'projets' => array('Mes Projets'),
                     'contact' => array ('Me Contacter')
                     );

              // boucle affichant un bouton par page selon l'ID de la page avec un style css différent pour l'ID de la page courante
              foreach($mymenu as $pageId => $pageParameters) {
                     if($pageId==$currentPageId){
                            echo "<button class=\"boutoncourant\"><a href=\"http://localhost/IDAW/TP2/SitePro/index.php?page=".$pageId."\">".$pageParameters[0]."</a></button><br>";
                            echo "<button class=\"bouton\"><a href=\"http://localhost/IDAW/TP2/SitePro/index.php?page=".$pageId."&lang=en\">".$pageParameters[0]." En Anglais </a></button><br>";
                     } else {
                            echo "<button class=\"bouton\"><a href=\"http://localhost/IDAW/TP2/SitePro/index.php?page=".$pageId."\">".$pageParameters[0]."</a></button><br>";
                     }
               }
              echo "</div>";
        }

        ?>

