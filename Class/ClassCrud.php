<?php

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
}

