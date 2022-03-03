<?php


/**
* Chemin sur dossier racine du projet
*/
define("ROOT",str_replace("public".DIRECTORY_SEPARATOR."index.php","",$_SERVER['SCRIPT_FILENAME']));

/**
* Chemin sur dossier src qui contient les controllers et les modeles
*/
define("PATH_SRC",ROOT."src".DIRECTORY_SEPARATOR);
/**
* Chemin sur dossier templates du projet
*/
define("PATH_VIEWS",ROOT."template".DIRECTORY_SEPARATOR);
/**
* Chemin sur data qui contient le fichier Json db.json
*/
define("PATH_DB",ROOT."data/db.json");

//requete GET et POST
define("WEB_ROOT","http://localhost/projet_Quizz/public/");

//URL charger les Images, CSS et JAVASCRIPT
define("WEB_PUBLIC",str_replace("index.php","",$_SERVER['SCRIPT_NAME']));


//cle d'erreur
define("KEY_ERRORS","errors");
//clé d'axxès à l'utilisateur connecté
define("KEY_USER_CONNECT","user_connect");