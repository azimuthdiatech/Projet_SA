
<?php
//Layout ou page de présentation
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."headerHtml.php");
?>

<div id="con_header">
    <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."icone.png" ?>" id="con_icone" alt="">  
    <div id="con_txt_header_prin"><h2>Le plaisir de jouer</h2></div> 
</div>


    <div id="ins_parti_dynamique">
        <div class="containeur">
            <form method='POST' action="<?=WEB_ROOT?>" class="formul" id="form_ins" enctype="multipart/form-data">
            <input type="hidden" name="controllers" value="user">
            <input type="hidden" name="action" value="creer_joueur">
                <div class="head_text_ins">
                    <div class="text_inscrire">
                        S'INSCRIRE
                    </div>
                    <small class="text_head_ins">Pour testez votre niveau de culture générale</small> 
                    <hr class="hr_head_ins">
                </div>
                <div class="formdiv">
                    <label for="prenom" class="label_ins">Prénom </label> <br>
                    <input type="text" id="prenom_ins_ad" class="con_ins_j" error="error_1" name="prenom">
                    <small id="error"></small>
                </div> 
                <div class="formdiv">
                    <label for="nom" class="label_ins">Nom</label><br>
                    <input type="text" id="nom_ins_ad" class="con_ins_j" error="error_2" name="nom">
                    <small id="error"></small> 
                </div>
                <div class="formdiv"> 
                    <label for="login" class="label_ins">Login</label><br>
                    <input type="text" id="login_ins_ad" class="con_ins_j" error="error_3" name="login">
                    <small id="error_log"></small> 
                </div>
                <div class="formdiv">   
                    <label for="password" class="label_ins">Password</label><br>
                    <input type="password" id="password_ins_ad" class="con_ins_j" error="error_4" name="password">
                    <small id="error_pwd"></small>
                </div> 
                <div class="formdiv">
                    <label for="password2" class="label_ins">Confirm password</label><br>
                    <input type="password" id="password2_ins_ad" class="con_ins_j" error="error_5" name="password2">
                    <small id="error_pwd2"></small> 
                </div>
                <div class="form_div_file">
                    <label for="fichier" class="label_ins">Avatar</label>
                    <input type="file" name="file" class="file_avat" id="file_ins">
                    <i id="nom_img"></i>
                </div>
                <div id="creer_compt">
                    <input type="submit" id="submit_ins" value='Créer compte' > 
                </div>
            </form> 
            <div class="avatar_ins">
            <label for="file_ins" class="file_avatar">
            <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."avatar.png" ?>" class="img_ins_avatar" id="img_ins_avatar">
            </label>
                <div class="text_avatar_ins">
                    Avatar du joueur
                </div> 
            </div>      
        </div>
    </div>
    <script src="<?=WEB_PUBLIC."js".DIRECTORY_SEPARATOR."scriptjoueur.js" ?>"></script>