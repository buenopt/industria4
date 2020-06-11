<?php
include('ClassConexao.php');

class ClassCrud extends ClassConexao
{
    #atributos
    private $Crud;
    private $Contador;

    #preparação das declarativas
    private function preparedStatements($Query, $Parametros)
    {
        $this->countParametros($Parametros);
        $this->Crud = $this->conectaDB()->prepare($Query);
        if ($this->Contador > 0) {
            for ($I = 1; $I <= $this->Contador; $I++) {
                $this->Crud->bindValue($I, $Parametros[$I - 1]);
            }
        }
        $this->Crud->execute();
    }

    #Contador de parametros
    private function countParametros($Parametros)
    {
        $this->Contador = count($Parametros);
    }

    #Inserção no banco de dados
    public function insertDB($Tabela, $Condicao, $Parametros)
    {
        $this->preparedStatements("INSERT INTO {$Tabela} VALUES ({$Condicao})", $Parametros);
        return $this->Crud;
    }

    public function insertDBRespostas($Tabela, $Condicao, $Parametros)
    {
        $this->preparedStatements("INSERT INTO {$Tabela} VALUES ({$Condicao})", $Parametros);
        return $this->Crud;
    }

    #Selecão no banco de dados
    public function selectDBPerguntas($Campos, $Tabela, $Condicao, $Parametros)
    {
        $this->preparedStatements("SELECT {$Campos} FROM {$Tabela} {$Condicao}", $Parametros);
        return $this->Crud;
    }

}

