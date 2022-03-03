<?php
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."usermodel.php");
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action']=="connexion"){
            $login=$_POST['login'];
            $password=$_POST['password'];
            connexion($login,$password);
        }
    }
}
if ($_SERVER["REQUEST_METHOD"]=="GET"){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action']=="connexion"){
            require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexionHtml.php");
        }elseif($_REQUEST['action']=="deconnexion"){
            logout();
        }
    }else{
        require_once(PATH_VIEWS."securite".DIRECTORY_SEPARATOR."connexionHtml.php");
    }
}

//US1

function connexion(string $login,string $password){
    $errors=[];
    champ_obligatoire('login', $login, $errors, "login invalid");
    if(count($errors) ==0){
        valid_email('login', $login, $errors);
    }
    champ_obligatoire('password', $password, $errors, "password invalid");
    
    if(count($errors) ==0){
        //appel d'une fonction du models
        $user=find_user_login_password($login,$password);
        
        if(count($user) !=0){
            //utilisateur existe
            
            $_SESSION["KEY_USER_CONNECT"]=$user;
            //controllers=user&action=accueil
            header("location:".WEB_ROOT."?controllers=user&action=accueil");
            exit();
        }else{
            //utilisateur n'existe pas
            $errors["connexion"]="Login ou mot de passe incorrecte";
            $_SESSION[KEY_ERRORS]=$errors;
            header("location:".WEB_ROOT);
            exit();
        }
    }else{
        //erreur de validation
        echo"test";
        $_SESSION[KEY_ERRORS]=$errors;
        header("location:".WEB_ROOT);
        exit();
    }
}
function logout(){
    session_destroy();
    header("location:".WEB_PUBLIC);
    exit();
}