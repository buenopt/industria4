<?php
//header('Location: ../View/_pages/passo1.php');
include('../Class/Variaveis.php');
include('../Class/ClassCrud.php');

#Cadastro das informações da empresa
$Crud = new ClassCrud();
try {
    $Crud->insertDB("tbEmpresas", "?,?,?,?,?,?,?",
        array($idEmpresa, $nomeEmpresa, $emailEmpresa, $fkgestorEmpresa, $fksegEmpresa, $fkqtdeFuncEmpresa, $fkfatEmpresa));
    header('Location: ../View/_pages/passo1.php');
} catch (Exception $erroInsertBD) {
    echo $erroInsertBD->getMessage() . ' <<<=== Erro de inserção de dados no banco de dados';
}

