<?php

session_start();
$login = "anonymous";
$errorText = "";
$successfullyLogged = false;
$tryLogin = '';
if(isset($_GET['disconnect'])){
    session_unset();
    session_destroy();   
}
if(isset($_SESSION['login'])){
    $login=$_SESSION['login'];   
}
else {
    // on simule une base de données
    $users = array(
        // login => password
        'riri' => 'fifi',
        'yoda' => 'maitrejedi',
        'Wellan_412' => 'blabla' );

    if(isset($_POST['login']) && isset($_POST['password'])) {
        $tryLogin=$_POST['login'];
        $tryPwd=$_POST['password'];
    }
    // si login existe et password correspond
    if( array_key_exists($tryLogin,$users) && $users[$tryLogin]==$tryPwd ) {
        $successfullyLogged = true;
        $login = $tryLogin;
        $_SESSION['login']=$login;
    } else{
        $errorText = "Vous n'êtes pas connecté";
    } 
    
}
    require_once("template_header.php");
    echo $errorText;
    
    echo "<h1>Bienvenu ".$login."</h1>";
    
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
    renderMenuToHTML($currentPageId,$currentlang);
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