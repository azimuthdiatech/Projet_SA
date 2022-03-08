<?php
function champ_obligatoire(string $key,string $data,array &$errors,string $message="ce champ est obligatoire"):void{
    if(empty($data)){
        $errors[$key]=$message;
    }
}

function valid_email(string $key,string $data,array &$errors,string $message="email invalide"):void{
    if(!filter_var($data, FILTER_VALIDATE_EMAIL)){
        $errors[$key]=$message;
    }
}
function valid_password(string $key,$password, array &$errors,string $message="Mot de passe invalide"):void{
    champ_obligatoire($key,$password,$errors,"ce champ est obligatoire");
    if(count($errors)==0){
        $lettre= preg_match('@[a-zA-Z]@' , $password);
        $chiffre= preg_match('@[0-9]@' , $password);
    if(!$lettre) {
        $errors[$key]="Le mot de passe doit contenir une lettre";
    }
    if(!$chiffre){
        $errors[$key]="Le mot de passe doit contenir un chiffre";
    }
    if(strlen( $password) < 6 ){
        $errors[$key]="Le mot de passe doit contenir au moins 6 caractères";
    }
 }
}
