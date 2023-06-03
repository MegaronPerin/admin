<?php

include CC_PASTA_INICIO."/config/connect.php";

require_once(CC_PASTA_INICIO."/controller/login/loginController.php");

$method = $_SERVER['REQUEST_METHOD'];
$uri = explode('/',trim( $_SERVER['REQUEST_URI'], '/'));

$vtData = json_decode(file_get_contents('php://input'));

if($uri[1] == 'login') {
    $clLogin = new LoginController();

    if(is_numeric($uri[2])){
        echo json_encode($clLogin->findId($uri[2]));
    }
    if($uri[2] == 'all'){
        echo json_encode($clLogin->all($vtData));
    }
    if($uri[2] == 'id'){
        echo json_encode($clLogin->findId($vtData));
    }
    if($uri[2] == 'cadastro'){
        echo json_encode($clLogin->cadastro($vtData));
    }
    if($uri[2] == 'deletar'){
        echo json_encode($clLogin->deletar($vtData));
    }
    
}
