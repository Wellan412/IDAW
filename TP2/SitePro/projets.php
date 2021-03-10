<?php 
require_once('template_header.php');
?>
<div class="Conteneur">
<div class="Eltflex1"> 
<h1> MENU </h1>
<?php 
require_once("template_menu.php");
renderMenuToHTML('projets') ?>
</div>

    <div class="Contenu">
        <div class="bandeau">
          <h2> Projets </h2>
       </div>
       
        <p>Vous découvrirez ici tous mes projets passés , en cours et futurs. </p> 
        <br>
        <h3>Projets Passés</h3>
        <br>
        <h3>Projets En cours</h3>
        <br>
        <h3>Projets Futurs</h3>
        <br>
        <br>
        <br>
       
    </div> 
</div>
   <?php require_once("template_footer.php") ?>
</div>

    
   

</body>
</html>