<div class="Conteneur">
 <div class="Eltflex1">
        <h1> MENU </h1>
        <?php
        function renderMenuToHTML($currentPageId) {
        // un tableau qui d\'efinit la structure du site
        $mymenu = array(
        // idPage titre
        'index' => array( 'Accueil' ),
        'cv' => array( 'CV' ),
        'projets' => array('Mes Projets')
        );

        // boucle affichant un bouton par page selon l'ID de la page avec un style css différent pour l'ID de la page courante
        foreach($mymenu as $pageId => $pageParameters) {
        if($pageId==$currentPageId){
        echo "<button class=\"boutoncourant\"><a href=\"".$pageId.".php\">".$pageParameters[0]."</a></button><br>";
        } else {
        echo "<button class=\"bouton\"><a href=\"".$pageId.".php\">".$pageParameters[0]."</a></button><br>";
        }
        }
        echo "</div>";
        }

