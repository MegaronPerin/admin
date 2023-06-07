<?php

include CC_PASTA_INICIO."/config/connect.php";

require_once(CC_PASTA_INICIO."/controller/login/loginController.php");
require_once(CC_PASTA_INICIO."/controller/user/userController.php");

$method = $_SERVER['REQUEST_METHOD'];
$uri = explode('/',trim( $_SERVER['REQUEST_URI'], '/'));

$vtData = json_decode(file_get_contents('php://input'));

if($uri[1] == 'login') {
    $clLogin = new LoginController();
    $clUser = new UserController();

    if(is_numeric($uri[2])){
        echo json_encode($clUser->findId($uri[2]));
    }
    if($uri[2] == 'auth'){
        echo json_encode($clLogin->validacao($vtData));
    }
    if($uri[2] == 'out'){
        echo json_encode($clLogin->logout($vtData));
    }
    if($uri[2] == 'all'){
        echo json_encode($clUser->all($vtData));
    }
    if($uri[2] == 'cadastro'){
        echo json_encode($clUser->cadastro($vtData));
    }
    if($uri[2] == 'alterar'){
        echo json_encode($clUser->update($vtData));
    }
    if($uri[2] == 'deletar'){
        echo json_encode($clUser->deletar($vtData));
    }
    
}
