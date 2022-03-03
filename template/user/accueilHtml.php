<?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."headerHtml.php");
?>
<ul>
  <li><a class="active" href="<?=WEB_PUBLIC."?controllers=user&action=accueil"?>">Accueil</a></li>
  <?php if(is_admin()):?>
  <li><a href="<?=WEB_PUBLIC."?controllers=user&action=listejoueur"?>">Liste des joueurs</a></li>
  <?php endif?>
  <li><a href="<?=WEB_PUBLIC."?controllers=securite&action=deconnexion"?>">Déconnexion</a></li>
</ul>
<?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footerHtml.php");
?>