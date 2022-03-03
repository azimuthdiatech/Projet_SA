<?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."headerHtml.php");
if(isset($_SESSION[KEY_ERRORS])){
    $errors=$_SESSION[KEY_ERRORS];
    unset($_SESSION[KEY_ERRORS]);
}
?>
        <div id="container">
            <!-- zone de connexion -->
            
            <form action="<?=WEB_ROOT?>" method="POST">
            <input type="hidden" name="controllers" value="securite">
            <input type="hidden" name="action" value="connexion">
                <div id="logform">
            <h4>Login Form</h4>
                </div>
                    <?php if(isset($errors["connexion"])):?>
                    <p style="color:red"><?=$errors["connexion"]?></p>
                    <?php endif?>
                <label><b>Login</b></label>
                <input type="text" placeholder="Entrer le nom d'utilisateur" name="login" >
                    <?php if(isset($errors["login"])):?>
                    <p style="color:red"><?=$errors["login"]?></p>
                    <?php endif?>
                <label><b>Password</b></label>
                <input type="password" placeholder="Entrer le mot de passe" name="password" >
                    <?php if(isset($errors["password"])):?>
                    <p style="color:red"><?=$errors["password"]?></p>
                    <?php endif?>
                <input type="submit" id='submit' value='Connexion' >
                
            </form>
        </div>
<?php
require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."footerHtml.php");
?>