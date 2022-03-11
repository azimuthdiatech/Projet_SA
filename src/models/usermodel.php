<?php

function find_user_login_password(string $login,string $password):array{
$users=json_to_array ("users");

foreach ($users as $user) {
    if( $user['login']==$login && $user['password']==$password)
    return $user;
}
return [];
}

function find_users(string $role):array{
    $result=[];
    $users=json_to_array("users");
   
    
    foreach ($users as $user) {
        if( $user['role']==$role)
            $result[]= $user;
    }
    return $result;
}

// function add_user_to_json($nom,$prenom,$login,$password1,$role){
//     $data = array(
//         'users' =>[
//             0 =>
//                 [
//                     "nom" => $_POST["nom"],
//                     "prenom" => $_POST["prenom"],
//                     "login" => $_POST["login"],
//                     "password" => $_POST["password"],
//                     "role" => $_POST["role"]
//                 ]
//         ]
//     );
//     file_get_contents(PATH_DB, json_encode($data, JSON_FORCE_OBJET));
// }


function add_user_to_json($nom,$prenom,$login,$password1,$role,$url){
    $data=array_to_json();
    $len = count($data['users']);
    $data['users'][$len]['nom']=$nom;
    $data['users'][$len]['prenom']=$prenom;
    $data['users'][$len]['login']=$login;
    $data['users'][$len]['password']=$password1;
    $data['users'][$len]['role']=$role;
    $data['users'][$len]['score']=0;
    $data['users'][$len]['url']=$url;

    file_put_contents(PATH_DB,json_encode($data));

}
