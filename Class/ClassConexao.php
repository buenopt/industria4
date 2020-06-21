<?php
date_default_timezone_set('America/Sao_Paulo');

class ClassConexao {
    public function conecta_mysql(){
        try {
            $db = new mysqli("localhost", "root", "root", "industria4");
            return $db;
        }catch (Exception $e){
            $error = $e->getMessage();
            return $error;
        }
    }
}