<div id="con_header">
    <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."icone.png" ?>" id="con_icone" alt="">  
    <div id="con_txt_header_prin"><h2>Le plaisir de jouer</h2></div> 
</div>


    <div id="ins_parti_dynamique">
        <div class="containeur">
            <form method='POST' action="" class="formul">
                <div class="head_text_ins">
                    <div class="text_inscrire">
                        S'INSCRIRE
                    </div>
                    <small class="text_head_ins">Pour testez votre niveau de culture générale</small> 
                    <hr class="hr_head_ins">
                </div>
                <div class="formdiv">
                    <label for="prenom" class="label_ins">Prénom </label> <br>
                    <input type="text" id="prenom_ins_ad" class="con_ins_j" name="prenom">
                    <small>Erreur</small>
                </div> 
                <div class="formdiv">
                    <label for="nom" class="label_ins">Nom</label><br>
                    <input type="text" id="nom_ins_ad" class="con_ins_j" name="nom">
                    <small>Erreur</small> 
                </div>
                <div class="formdiv"> 
                    <label for="login" class="label_ins">Login</label><br>
                    <input type="text" id="login_ins_ad" class="con_ins_j" name="login">
                    <small>Erreur</small> 
                </div>
                <div class="formdiv">   
                    <label for="password" class="label_ins">Password</label><br>
                    <input type="text" id="password_ins_ad" class="con_ins_j" name="password">
                    <small>Erreur</small>
                </div> 
                <div class="formdiv">
                    <label for="password2" class="label_ins">Confirm password</label><br>
                    <input type="text" id="password2_ins_ad" class="con_ins_j" name="password2">
                    <small>Erreur</small> 
                </div>
                <div class="form_div_file">
                    <label for="fichier" class="label_ins">Avatar</label>
                    <input type="file" name="file_ava" class="file_avat" id="file_ins">
                    <label for="file_ins" class="file_avatar">Choisir un fichier</label>
                </div>
                <div id="creer_compt">
                    <input type="submit" id='submit_ins' value='Créer compte' > 
                </div>
            </form> 
            <div class="avatar_ins">
                <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."avatar.png" ?>" class="img_ins_avatar" alt="">
                <div class="text_avatar_ins">
                    Avatar du joueur
                </div> 
            </div>      
        </div>
    </div>