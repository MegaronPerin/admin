<?php


class Banco {
    
    private $conn;
    private $host, $username, $password, $database;
    private $_transacao;
    
    
    private function __construct() {
        $this->host = CC_HOST;
        $this->username = CC_USUARIO;
        $this->password = CC_SENHA;
        $this->database = CC_CONEXAO;
        $this->_transacao = false;

        $this->connect();
    }
    
    private function connect(){
        
        $conn_string = "host={$this->host} port=5432 dbname={$this->database} user={$this->username} password={$this->password}";
        $this->conn = pg_connect($conn_string);
       
        if (!$this->conn) {
            die("Falha conexão DB");
            exit;
        }
    }
    private function query($query){
        try {
             
            $vmRetorno = pg_query($this->conn, $query);
            if (!$vmRetorno) {
                throw new Exception("ERRO SQL:" . utf8_encode(pg_last_error()) . "\n" . $query);
            }
            
            while ($row = pg_fetch_array($vmRetorno, null, PGSQL_ASSOC)) {
                $paCampos [] = array_change_key_case($row, CASE_LOWER);
            }
            
            return $paCampos;
        } catch (Exception $ex) {
            criarLogDeErro($ex, $query);
            return false;
        }
    }
    public function __destruct() {
        $this->diconect();
    }

    public function diconect() {
        
        pg_close($this->conn)
                OR die("There was a problem disconnecting from the database.");
                
    }
    
    
    public function grava($tabela, $acao, $campos, $valores, $expressao = "") {
        if (count($campos) != count($valores)) {
            return false;
        }

        switch (strtoupper($acao)) {
            case "I":
                $c = $v = "";
                for ($x = 0; $x < count($campos); $x++) {
                    if ($x > 0) {
                        $c .= ", ";
                        $v .= ", ";
                    }
                    $c .= $campos[$x];
                    $v .= $this->formata_string_grava($valores[$x]);
                }
                $sql = " INSERT INTO ";
                $sql .= "   $tabela ( ";
                $sql .= "     $c ";
                $sql .= "   ) values ( ";
                $sql .= "     $v ";
                $sql .= "   ) ";

                break;
            case "A":
                $c = "";
                for ($x = 0; $x < count($campos); $x++) {
                    if ($x > 0) {
                        $c .= ", ";
                    }
                    $c .= $campos[$x] . " = " . $this->formata_string_grava($valores[$x]);
                }

                if ($expressao != "") {
                    $sql = " UPDATE ";
                    $sql .= "   $tabela ";
                    $sql .= " SET ";
                    $sql .= "   $c ";
                    $sql .= " WHERE ";
                    $sql .= "   $expressao ";
                } else {
                    $sql = " UPDATE ";
                    $sql .= "   $tabela ";
                    $sql .= " set $c";
                }
                break;
            case "E":
                $sql = " DELETE ";
                $sql .= " FROM ";
                $sql .= "   $tabela ";
                $sql .= " WHERE ";
                $sql .= "   $expressao";
                break;
        }

        return $this->query($sql);
    }
    
    public function formata_string_grava($paString) {
        if (is_string($paString) && !preg_match('/^(TO_TIMESTAMP|TO_DATE|NEXTVAL|CONVERT|SEQ_)/', strtoupper($paString))) {

            $vmApas = '';
            if (((substr($paString, 0, 1) == '\'' && substr($paString, -1) == '\'') || (substr($paString, 0, 1) == '"' && substr($paString, -1) == '"')) && strlen($paString) > 1) {

                $paString = substr($paString, 1, -1);
                $vmApas = '\'';
            }

            $vmString = $vmApas . addslashes($paString) . $vmApas;

            //Alterado pois o scape do oracle nao é \' e sim ''.
            if (CC_BANCO == 'POSTGRES' && CC_VERSAO == '9') {
                $vmString = str_replace("\'", "''", $vmString);
                $vmString = str_replace('\"', '"', $vmString);
            }
        } else {

            $vmString = $paString;
        }

        return $vmString;
    }
    
}

