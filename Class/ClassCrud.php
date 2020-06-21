<?php
include('ClassConexao.php');

class ClassCrud extends ClassConexao
{

    public function insertDB($Tabela, $Parametros, $Values)
    {

        $objDb = new ClassConexao();
        $link = $objDb->conecta_mysql();

        $query = "INSERT INTO {$Tabela}({$Parametros}) VALUES ({$Values})";

        if (mysqli_query($link, $query)) {
            return mysqli_insert_id($link);
        } else {
            var_dump(mysqli_error($link));
        }
    }
}

