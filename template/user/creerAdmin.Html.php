<div class="containeur">
            <form method='POST' action="<?=WEB_ROOT?>" class="formul" enctype="multipart/form-data">
            <input type="hidden" name="controllers" value="user">
            <input type="hidden" name="action" value="creer_joueur">
                <div class="head_text_ins">
                    <div class="text_inscrire">
                        S'INSCRIRE
                    </div>
                    <small class="text_head_ins">Pour proposer des quizz</small> 
                    <hr class="hr_head_ins">
                </div>
                <div class="formdiv">
                    <label for="prenom" class="label_ins">Prénom </label> <br>
                    <input type="text" id="prenom_ins_ad" class="con_ins_ad" name="prenom">
                    <small>Erreur</small>
                </div> 
                <div class="formdiv">
                    <label for="nom" class="label_ins">Nom</label><br>
                    <input type="text" id="nom_ins_ad" class="con_ins_ad" name="nom">
                    <small>Erreur</small> 
                </div>
                <div class="formdiv"> 
                    <label for="login" class="label_ins">Login</label><br>
                    <input type="text" id="login_ins_ad" class="con_ins_ad" name="login">
                    <small>Erreur</small> 
                </div>
                <div class="formdiv">   
                    <label for="password" class="label_ins">Password</label><br>
                    <input type="password" id="password_ins_ad" class="con_ins_ad" name="password">
                    <small>Erreur</small>
                </div> 
                <div class="formdiv">
                    <label for="password2" class="label_ins">Confirm password</label><br>
                    <input type="password" id="password2_ins_ad" class="con_ins_ad" name="password2">
                    <small>Erreur</small> 
                </div>
                <div class="form_div_file">
                    <label for="fichier" class="label_ins">Avatar</label>
                    <input type="file" name="file" class="file_avat" id="file_ins">
                    <i id="nom_img"> </i>
                </div>
                <div id="creer_compt">
                    <input type="submit" id='submit_ins' value='Créer compte' > 
                </div>
            </form> 
            <div class="avatar_ins">
            <label for="file_ins" class="file_avatar">
            <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."avatar.png" ?>" class="img_ins_avatar" alt="" id="img_ins_avatar">
            </label>
                <div class="text_avatar_ins">
                    Avatar Admin
                </div> 
            </div>      
        </div>
        <script src="<?=WEB_PUBLIC."js".DIRECTORY_SEPARATOR."script.ad.js" ?>"></script>