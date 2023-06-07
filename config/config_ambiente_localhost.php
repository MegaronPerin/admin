<?php

// ** Configurações SERVIDOR **
// CAMINHOS
define("CC_PASTA_INICIO", $_SERVER['DOCUMENT_ROOT'] . "/");
define("CC_LOCAL_INICIO", "http://" . $_SERVER['HTTP_HOST'] . "/");

//BANCO DE DADOS
define("CC_BANCO", "POSTGRES");
define("CC_VERSAO", "9");
define("CC_USUARIO", "postegres");  //nome do usuario do banco
define("CC_SENHA", "outPlan1438");   //senha do banco
define("CC_HOST", "localhost");
define("CC_CONEXAO", "db_sis_admin");  //endereco de conexao
define("CC_PDO", "PDO_PGSQL");
