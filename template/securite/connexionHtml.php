<?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."headerHtml.php");
if(isset($_SESSION[KEY_ERRORS])){
    $errors=$_SESSION[KEY_ERRORS];
    unset($_SESSION[KEY_ERRORS]);
}
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."headerPrincipal.html.php");
?>

        <div id="container">
           
            <div id="con_header_log_form">
                <div id="con_log_form">Login Form</div>
                <div id="con_X">X</div>
            </div>
            
            <form action="<?=WEB_ROOT?>" method="POST" id="form">
            <input type="hidden" name="controllers" value="securite">
            <input type="hidden" name="action" value="connexion">
               
                    <?php if(isset($errors["connexion"])):?>
                    <p style="color:red"><?=$errors["connexion"]?></p>
                    <?php endif?>
                <div class="con_input">
                    <input type="text" placeholder="Login" name="login" > <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-login.png" ?>" class="img_con" alt="">
                </div>
                
                    <?php if(isset($errors["login"])):?>
                    <p style="color:red"><?=$errors["login"]?></p>
                    <?php endif?>
               <div class="con_input">
               <input type="password" placeholder="Password" name="password" ><img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-password.jpeg" ?>" class="img_con" alt="">
               </div>
                
                    <?php if(isset($errors["password"])):?>
                    <p style="color:red"><?=$errors["password"]?></p>
                    <?php endif?>
                <input type="submit" id='submit' value='Connexion' > <a href="#" id="sign_in">S'inscrire pour jouer?</a>
                
            </form>
        </div>
<?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footerHtml.php");
?>