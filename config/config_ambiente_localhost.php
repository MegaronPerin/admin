<?php

// ** Configurações SERVIDOR **
// CAMINHOS
define("CC_PASTA_INICIO", $_SERVER['DOCUMENT_ROOT'] . "");
define("CC_LOCAL_INICIO", OBC_HTTPPROTO . "://" . $_SERVER['HTTP_HOST'] . "");
define("CC_PASTA_ANEXO_CLIENTE", CC_PASTA_INICIO . "/anexos/" . CLIENTE);
define("CC_LOCAL_ANEXO_CLIENTE", CC_LOCAL_INICIO . "/anexos/" . CLIENTE);

//BANCO DE DADOS
define("CC_BANCO", "POSTGRES");
define("CC_VERSAO", "9");
define("CC_USUARIO", "postgres");  //nome do usuario do banco
define("CC_SENHA", "outPlan1438");   //senha do banco
define("CC_HOST", "postgres14");
define("CC_CONEXAO", "db_sis_admin");  //endereco de conexao
define("CC_PDO", "PDO_PGSQL");
