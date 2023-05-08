<?php
// CAMINHOS
define("CC_PASTA_INICIO","/arquivos/www/obccloud/public");
define("CC_LOCAL_INICIO",OBC_HTTPPROTO."://".OBC_CLIENTE.".outbuycenter.com.br");
define("CC_PASTA_ANEXO_CLIENTE",CC_PASTA_INICIO."/anexos/".OBC_CLIENTE);
define("CC_LOCAL_ANEXO_CLIENTE",CC_LOCAL_INICIO."/anexos/".OBC_CLIENTE);
define("CC_PASTA_EMAIL",CC_PASTA_ANEXO_CLIENTE."/oml_emails/");
define("CC_LOCAL_LOJA", OBC_HTTPPROTO."://".OBC_CLIENTE.".outbuycenter.com.br/loja-virtual/");

$vmPastaOBC = "obc";	


//BANCO DE DADOS OUTPLAN
define("CC_BANCO", "POSTGRES");
define("CC_VERSAO","9");
define("CC_USUARIO","obc_adami");		//nome do usuario do banco
define("CC_SENHA", "outPlan1438");			//senha do banco
define("CC_HOST", "pgpool-obccloud.outbuycenter.com.br");
define("CC_CONEXAO","obc_cloud_adami");		//endereco de conexao

define("CC_CONN_SCHEMA",serialize(array("public")));

define("CC_WSNOTA_WSDL","http://sapiensweb.adami.com.br:8080/g5-senior-services/sapiens_Synccom_senior_g5_co_mcm_cpr_notafiscal?wsdl");
define("CC_WSPEDIDO_WSDL","http://sapiensweb.adami.com.br:8080/g5-senior-services/sapiens_Synccom_senior_g5_co_mcm_cpr_ordemcompra?wsdl");
define("CC_WSDL_ESTOQUE", "http://sapiensweb.adami.com.br:8080/g5-senior-services/sapiens_Synccom_senior_g5_co_mcm_est_saldoestoque?WSDL");
define("CC_WSDL_REQUISICAO", "http://sapiensweb.adami.com.br:8080/g5-senior-services/sapiens_Synccom_senior_g5_co_mcm_est_requisicoes?WSDL");
define("CC_WSDL_SALDO_PROJETO", "http://sapiensweb.adami.com.br:8080/g5-senior-services/sapiens_Synccom_senior_g5_co_ger_adami?WSDL");
define("CC_WSPEDIDO_LOGIN","outplan");
define("CC_WSPEDIDO_SENHA","Outpl@nAd@mi1119");

define("CC_LOCAL_BASE",CC_LOCAL_INICIO."/".$vmPastaOBC);
define("CC_PASTA_BASE",CC_PASTA_INICIO."/".$vmPastaOBC);

//CONTROLES DO SISTEMA
define("CC_ENVIA_EMAIL", 1);

//Constante que define se os e-mails serão ou não gravados no banco de dados.
//É utilizada em conjunto com o CC_ENVIA_EMAIL
define("CC_GRAVA_EMAIL_BANCO", 1);

//Não usar mais CC_ENVIA_EMAIL_SMTP
//Se precisar usar autenticação SMTP, fazer essa configuração no POSTFIX
define("CC_ENVIA_EMAIL_SMTP",false);
define("CC_HOST_SMTP","");
define("CC_LOGIN_SMTP","");
define("CC_SENHA_SMTP","");
// ---FIM--- Configurações SERVIDOR

//Define se realiza o envio de email pelo zend.
//O CC_ENVIA_EMAIL_SMTP precisa estar desativado.
define("CC_ENVIA_EMAIL_ZEND",true);

//Indica se todos os emails terão o mesmo FROM. ira pegar do CC_REMETENTE_EMAIL do config_inc.php
define("CC_ENVIA_EMAIL_REMETENTE_DEFAULT",2);

/**
 * adicionado o if abaixo para autenticação via LDAP para a UnoChapeco. Só passa pela altenticaçãodo LDAP se no 
 * config a constante CC_AUTENTICA_LDAP for igual a 1 ou se a senha não a senha curinga.
 */
define("CC_AUTENTICA_LDAP",0);

/*Definição se a autenticação for para a Tegma, se utilizar o servidor AD para fazer a validação dos usuários
 * colocar 1, se não 0. 
 */
define("CC_AUTENTICA_AD",0);
								
define("CC_GRAVA_ERRO_SQL", 1);
define("CC_GRAVA_TRACE_SQL", 0); //Acria um arquivo no /obc/logs com todos os SQLs sendo executados
define("CC_PDO","PDO_PGSQL");