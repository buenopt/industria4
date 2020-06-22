<?php
include('ClassConexao.php');

class ClassCrud extends ClassConexao
{

    public function insertDB($Tabela, $Parametros, $Values)
    {
        $Erro = "Falha ao inserir informações";
        $objDb = $this->conectaDB();
        $query = "INSERT INTO {$Tabela}({$Parametros}) VALUES ({$Values})";

        if (mysqli_query($objDb, $query)) {
            return mysqli_insert_id($objDb);
        } else {
            var_dump(mysqli_error($objDb));
            return $Erro;
        }
    }
}

