<?php
function champ_obligatoire(string $key,string $data,array &$errors,string $message="ce champ est obligatoire"){
    if(empty($data)){
        $errors[$key]=$message;
    }
}

function valid_email(string $key,string $data,array &$errors,string $message="email invalide"){
    if(!filter_var($data, FILTER_VALIDATE_EMAIL)){
        $errors[$key]=$message;
    }
}
function valid_password(string $key,$password, array &$errors,string $message="Mot de passe invalide"){
    $lettre= preg_match('@[a-Z]@' , $password);
    $chiffre= preg_match('@[0-9]@' , $password);
    if(!$lettre || $chiffre || strlen($password < 6)){
        $errors[$key]=$message;
        return false;
    }else{
        return true;
    }
}
