<?php
require_once("template_header.php");
require_once("template_menu.php");
$currentPageId='index';
$id= 'accueil';
if(isset($_GET['page'])) {
    $id = $_GET['page'];
}
renderMenuToHTML($currentPageId);
?>

<div class="Contenu">

<?php
 $pageToInclude = $id . ".php";
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