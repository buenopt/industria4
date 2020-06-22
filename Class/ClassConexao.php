<?php
date_default_timezone_set('America/Sao_Paulo');

abstract class ClassConexao
{
    protected function conectaDB()
    {
        #Configurações de acesso ao banco de dados
        $host = "localhost"; //Nome do servidor de acesso ao MySQL
        $user = "root"; //Usuário do MySQL
        $password = "root"; //Senha do MySQL
        $dbname = "industria4"; //Nome da base de dados

        #Conectando a base de dados com as configurações de acesso
        try {
            $Con = new mysqli($host, $user, $password, $dbname);
            return $Con;
        } catch (Exception $Erro) {
            return $Erro->getMessage();
        }
    }
}