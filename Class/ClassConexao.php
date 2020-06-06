<?php
date_default_timezone_set('America/Sao_Paulo');

abstract class ClassConexao
{

    #Realizará a conexão com o banco de dados
    protected function conectaDB()
    {
        try {
            $Con = new PDO("mysql:host=127.0.0.1;dbname=industria4", "root", "root");
            return $Con;
        } catch (PDOException $Erro) {
            return $Erro->getMessage();
        }
    }
}