<?php

if(isset($_REQUEST['controllers']) ){
    switch ($_REQUEST['controllers']) {
        case "securite" :
        require_once(PATH_SRC."controllers/securitecontroller.php");
    break;
    case "user" :
        require_once(PATH_SRC."controllers/usercontroller.php");
    break;
    }
    }else{
        require_once(PATH_SRC."controllers/securitecontroller.php");
}