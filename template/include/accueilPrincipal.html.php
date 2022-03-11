<?php
//Layout ou page de présentation
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."headerHtml.php");
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."headerPrincipal.html.php");

?>

<div id="menu_accueil">

    <div id="acc_header">
       <div id="acc_text">
           <h2>CREER ET PARAMETRER VOTRE QUIZZ</h2>
        </div> 
         <div id="acc_btn_decon">
            <a class="active_decon" href="<?=WEB_PUBLIC."?controllers=securite&action=deconnexion"?>">Déconnexion</a>
        </div>
    </div>

    <div id="acc_body">

        <div id="acc_menu">

                <div id="acc_avatar">
                   <div class="avatar"><img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."avatar.png" ?>" class="img_acc_avatar" alt=""></div>
                   <div class="avatar_text"><h3><?= $_SESSION["KEY_USER_CONNECT"]["nom"]?>  </div>
                   <div class="avatar_text"><h3><?= $_SESSION["KEY_USER_CONNECT"]["prenom"]?></h3></div> 
                </div>
            
                <div id="menu">
                    <ul>
                        <li><a class="active" href="<?=WEB_PUBLIC."?controllers=user&action=#"?>">Liste Questions</a><div id="acc_icone"><img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-liste.png" ?>" class="img_acc" alt=""></div></li>
                        <li><a class="active" href="<?=WEB_PUBLIC."?controllers=user&action=creerAdmin"?>">Créer Admin</a><div id="acc_icone"><img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-ajout.png" ?>" class="img_acc" alt=""></div></li>
                        <?php if(is_admin()):?>
                        <li><a class="active" href="<?=WEB_PUBLIC."?controllers=user&action=listejoueur"?>">Liste des joueurs</a><div id="acc_icone"><img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-liste-active.png" ?>" class="img_acc" alt=""></div></li>
                        <?php endif?>
                        <li><a class="active" href="<?=WEB_PUBLIC."?controllers=user&action=creerquestion"?>">Créer Questions</a><div id="acc_icone"><img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-ajout.png" ?>" class="img_acc" alt=""></div></li>
                    </ul>
                </div>

        </div>
        <div id="ad_parti_dynamique">
        </div>
    </div>
</div>

<?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footerHtml.php");
?>