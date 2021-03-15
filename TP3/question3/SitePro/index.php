<?php
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