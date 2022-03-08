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
                <div id="con_X">x</div>
            </div>
            
            <form action="<?=WEB_ROOT?>" method="POST" class="con_form" id="form">
            <input type="hidden" name="controllers" value="securite">
            <input type="hidden" name="action" value="connexion">
               
                    <?php if(isset($errors["connexion"])):?>
                    <p style="color:red"><?=$errors["connexion"]?></p>
                    <?php endif?>
                <div class="con_input">
                    <input type="text" placeholder="Login" id="con_log" name="login" > <img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-login.png" ?>" class="img_con" alt="">
                </div>
                
                    <?php if(isset($errors["login"])):?>
                    <i style="color:red" id="error_log"><?=$errors["login"]?></i>
                    <?php endif?>
               <div class="con_input">
               <input type="password" placeholder="Password" id="con_pwd" name="password" ><img src="<?=WEB_PUBLIC."img".DIRECTORY_SEPARATOR."ic-password.jpeg" ?>" class="img_con" alt="">
               </div>
                    <?php if(isset($errors["password"])):?>
                    <i style="color:red" id="error_pwd"><?=$errors["password"]?></i>
                    <?php endif?>
                <div id="sub_sign">
                    <input type="submit" id='con_submit' value='Connexion' >
                     <a href="<?=WEB_ROOT."?controllers=user&action=inscription"?>" id="sign_in">S'inscrire pour jouer?</a>
                </div>
            </form>
        </div>
        
<?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footerHtml.php");
?>