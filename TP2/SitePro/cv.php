<?php
require_once('template_header.php') ?>

<div class="Conteneur">
<div class="Eltflex1"> 
    <h1> MENU </h1>
<?php 
require_once("template_menu.php");
renderMenuToHTML('cv');
 ?>

</div>

    <div class="Contenu">
        <div class="bandeau">
            <h2>Mon CV</h1>
       </div>
            
    <p> Vous pouvez ici découvrir mon CV</p>

    <iframe src="images/CV Hugo Resseguier Stage Assistant Ingénieur.pdf" height=2000px></iframe>
    
    </div>

</div>

<?php require_once("template_footer.php") ?>
    
    
</div>



    

</body>
</html>