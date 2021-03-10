
<?php
function renderMenuToHTML($currentPageId) {
// un tableau qui d\'efinit la structure du site
$mymenu = array(
// idPage titre
'index' => array( 'Accueil' ),
'cv' => array( 'CV' ),
'projets' => array('Mes Projets')
);
echo "<h1> MENU </h1>";
// ...
foreach($mymenu as $pageId => $pageParameters) {
if($pageId==$currentPageId){
echo "<button class=\"boutoncourant\"><a href=\"".$pageId.".php\">".$pageParameters[0]."</a></button><br>";
} else {
echo "<button class=\"bouton\"><a href=\"".$pageId.".php\">".$pageParameters[0]."</a></button><br>";
}
}
}
?>
