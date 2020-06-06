<?php
date_default_timezone_set('America/Sao_Paulo');

abstract class ClassConexao
{

    #Realizará a conexão com o banco de dados
    protected function conectaDB()
    {
        try {
            $Con = new PDO("mysql:host=localhost;dbname=industria4", "root", "root", array(
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"
            ));
            return $Con;
        } catch (PDOException $ErroConexaoBD) {
            echo $ErroConexaoBD->getMessage() . ' <<<=== Erro de conexão com o banco de dados';
            $Con = null;
        }
    }
}