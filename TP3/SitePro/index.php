<?php
// on simule une base de données
$users = array(
    // login => password
        'riri' => 'fifi',
        'yoda' => 'maitrejedi',
        'Wellan_412' => 'Hugo1998'   );
    
    $login = "anonymous";
    $errorText = "";
    $successfullyLogged = false;
    
    if(isset($_GET['login']) && isset($_GET['password'])) {
        $tryLogin=$_GET['login'];
        $tryPwd=$_GET['password'];
    
    // si login existe et password correspond
    if( array_key_exists($tryLogin,$users) && $users[$tryLogin]==$tryPwd ) {
        $successfullyLogged = true;
        $login = $tryLogin;
    } else
        $errorText = "Erreur de login/password";
    } else
        $errorText = "Merci d'utiliser le formulaire de login";
    
    if(!$successfullyLogged) {
        echo $errorText;
    } else {
        echo "<h1>Bienvenu ".$login."</h1>";
    } 
   

    require_once("template_header.php");
    
    
    $currentPageId='accueil';
    if(isset($_GET['lang'])) {
        $currentlang = $_GET['lang'];
    } else {
        $currentlang= 'fr';
    }
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
    }
    require_once("template_menu.php");
    renderMenuToHTML($currentPageId,$currentlang,$successfullyLogged);
    
?>

<div class="Contenu">

<?php
    $pageToInclude = $currentlang."/".$currentPageId.$currentlang.".php";
    if(is_readable($pageToInclude))
        require_once($pageToInclude);
    else
        require_once("error.php");
?>
</div>
</div>
<?php
    require_once("template_footer.php");
?>





</body>
</html>