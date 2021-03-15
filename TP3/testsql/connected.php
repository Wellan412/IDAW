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
// on simule une base de données
$users = $tab;
    

$login = "anonymous";
$errorText = "";
$successfullyLogged = false;

if(isset($_GET['login']) && isset($_GET['password'])) {
    $tryLogin=$_GET['login'];
    $tryPwd=$_GET['password'];
}
// si login existe et password correspond
if( array_key_exists($tryLogin,$users) && $users[$tryLogin]==$tryPwd ) {
    $successfullyLogged = true;
    $login = $tryLogin;
} else{
    $errorText = "Erreur de login/password";
}

if(!$successfullyLogged) {
    echo $errorText;
} else {
echo "<h1>Bienvenu ".$login."</h1>";
}
?>
