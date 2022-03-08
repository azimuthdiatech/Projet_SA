<?php
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."usermodel.php");
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action']=="connexion"){
            echo "Traiter le formulaire de connexion";
        }
    }
}


if ($_SERVER["REQUEST_METHOD"]=="GET"){
    if(isset($_GET['action'])){
        // if(!is_connect()) {
        //     header("location:".WEB_PUBLIC);
        //     exit();
        // }
        if($_GET['action']=="accueil"){
            if(is_admin()){
                lister_joueur();
            }elseif(is_joueur()){
                jeu();
            }
        }elseif($_GET['action']=="listejoueur") {
            lister_joueur();
        }elseif($_GET['action']=="creerAdmin") {
            creer_admin();
        }elseif($_GET['action']=="inscription") {
            inscription_j();
        }
        elseif($_GET['action']=="creerquestion") {
            creer_question();
        }
    }
}

function jeu(){
    ob_start();
        require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."jeu.html.php");
        $content_for_views=ob_get_clean();
        require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueilHtml.php");
    }

    function lister_joueur(){
        //Appel du model
        ob_start();
            $data= find_users(ROLE_JOUEUR);
            require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."listejoueur.php");
        $content_for_views=ob_get_clean();
        require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueilHtml.php");
        }
    function creer_admin(){
        ob_start();
        require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."creerAdmin.Html.php");
        $content_for_views=ob_get_clean();
        require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueilHtml.php");
    }
    function inscription_j(){
        require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."inscription.html.php");
        require_once(PATH_VIEWS."include".DIRECTORY_SEPARATOR."headerHtml.php");
    }
    function creer_question(){
        require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."creerquestion.html.php");
    }