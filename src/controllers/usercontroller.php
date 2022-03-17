<?php
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."usermodel.php");
if ($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_REQUEST['action'])){
        switch($_POST['action']){
            case 'inscription':{
                require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."inscription.html.php");
            }break;
            case 'creer_joueur':{ 
                extract($_POST);
                extract($_FILES);
            $errors=[];
            $role="ROLE_ADMIN";
               if(is_admin()){
                   $role="ROLE_ADMIN" ;  
                    creerUser($nom,$prenom,$login,$password,$password2,$role);
               }else{
                    $role="ROLE_JOUEUR" ;
                    creerUser($nom,$prenom,$login,$password,$password2,$role); 
            }
            } break;
           
        }
    }
}


if ($_SERVER["REQUEST_METHOD"]=="GET"){
    if(isset($_GET['action'])){
        if(!is_connect() && $_GET['action'] != "inscription") {
            header("location:".WEB_PUBLIC);
            exit();
        }
        switch($_GET['action']){
            case 'accueil' :{
                if(is_admin()){
                   // $role="ROLE_ADMIN";
                    lister_joueur();
                }else{
                   // $role="ROLE_JOUEUR";
                    jeu();
                }
            }break;
            case 'inscription':{
                require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."inscription.html.php");
            }break;
            case  "listejoueur":{
                lister_joueur();
            }break;
            case 'creerAdmin':{
                creer_admin();
            }break;
            case 'creerquestion':{
                creer_question();
            }break;
            case 'listerquestion':{
                lister_question();
            }break;
             

        }
    
      
    }
}

function creerUser($nom,$prenom,$login,$password1,$password2,$role){
    
    $errors=[];
  
    champ_obligatoire('login',$login,$errors,"ce champ est obligatoire");
    if(count($errors)==0){
        valid_email('login',$login,$errors,"Email Invalid");
    }
  
    champ_obligatoire('prenom',$prenom,$errors,"ce champ est obligatoire");
    champ_obligatoire('nom',$nom,$errors,"ce champ est obligatoire");
    
    if(empty($password1)){
        $errors['password']="ce champ est obligatoire" ;
    }else{
        matcPassword($password1,$password2,$errors,$message="les mots de passe ne match pas");
    }
    //var_dump($errors);
   
    if(count($errors)==0){
        $prefix=str_replace("@gmail.com",$role,$login);
        $_FILES['file']['name']= $prefix.'.'.str_replace('.','',strrchr(".",$_FILES["file"]["name"]));
        upload_file($errors,$_FILES['file']['name']);
        if(count($errors)==0){
            add_user_to_json($nom,$prenom,$login,$password1,$role,$_FILES['file']['name']."png");
            if(is_admin()){
                lister_joueur();
            }else{
                header("location:".WEB_PUBLIC);
                exit();
            }
        }
    }else{
       // var_dump($errors);
        
        $_SESSION['error']=$errors;
        if(is_admin){
            header("location:".WEB_PUBLIC."?controllers=user&action=creerAdmin");
            exit();  
        }else{
            header("location:".WEB_ROOT."?controllers=user&action=inscription");
            exit();
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
            $data = find_users(ROLE_JOUEUR);
            $users = count($data);
            $users_par_page = 5;
            $nbre_de_page = ceil($users / $users_par_page);
                if(isset($_GET["page"])){
                        $currentsPage = (int)$_GET["page"];
                    if($currentsPage > $nbre_de_page ){
                        $currentsPage = $nbre_de_page;
                }if($currentsPage < 1){
                    $currentsPage = 1;
                }
                
            }else{
                $currentsPage = 1;
            }
                
            $indiceDepart =($currentsPage - 1) * $users_par_page;
            $indiceFin = $indiceDepart + $users_par_page -1;

            for($i = $indiceDepart; $i <= $indiceFin; $i++){
                if(isset($data[$i])){
                    $element[] = $data[$i];
                }
            }
            $data = $element;
            

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
        ob_start();
        require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."creerquestion.html.php");
        $content_for_views=ob_get_clean();
        require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueilHtml.php");
    }
    function lister_question(){
        ob_start();
        require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."listequestion.html.php");
        $content_for_views=ob_get_clean();
        require_once(PATH_VIEWS."user".DIRECTORY_SEPARATOR."accueilHtml.php");
    }

function upload_file(array &$errors,$image){
    if(!empty($_FILES["file"])){
        $extension_accept=array(".jpg",".png",".jpeg");
        if(!in_array(strrchr(".",$_FILES["file"]["name"]), $extension_accept)){
            if($_FILES["file"]["size"]!==0){
                if(move_uploaded_file($_FILES["file"]["tmp_name"],ROOT."public".DIRECTORY_SEPARATOR."uploads".DIRECTORY_SEPARATOR.$image."png")){
                    
                }
            }else{
                $errors["file"]="veuillez choisir un fichier correcte";
            }
        }else{
            $errors["file"]="Veuillez choisir une extension correcte";
        }
    }else{
        $errors["file"]="choississez un fichier";
    }

}
    