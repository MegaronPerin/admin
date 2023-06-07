<?php

class UserController {    

    public function __construct() {
        
    }

    public function validacao($filter) {
        return 'Hello ALL';
    }

    public function all($filter) {
        return 'Hello ALL';
    }

    public function findId($id) {
        return 'Hello find  '.$id;
    }

    public function cadastro($req) {
        return ['sucesso' => true, 'id' => 123, 'mensagem' => 'login cadastrado com sucesso!', 'data' => $req];
    }
    
    public function resetPassword($req) {
        return ['sucesso' => true, 'id' => 123, 'mensagem' => 'Resetado com sucesso!', 'data' => $req];
    }
    
    public function update($filter) {
        return 'Hello UPDATE';
    }

    public function delete($filter) {
        return 'Hello DELETE';
    }

}