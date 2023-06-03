<?php

// ** Configurações SERVIDOR **
// CAMINHOS
define("CC_PASTA_INICIO", $_SERVER['DOCUMENT_ROOT'] . "/admin");
define("CC_LOCAL_INICIO", "http://" . $_SERVER['HTTP_HOST'] . "/admin");

//BANCO DE DADOS
//define("CC_BANCO", "POSTGRES");
//define("CC_VERSAO", "9");
define("CC_USUARIO", "root");  //nome do usuario do banco
define("CC_SENHA", "");   //senha do banco
define("CC_HOST", "localhost");
define("CC_CONEXAO", "db_sis_admin");  //endereco de conexao
//define("CC_PDO", "PDO_PGSQL");
