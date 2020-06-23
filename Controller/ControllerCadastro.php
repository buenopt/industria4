<?php
header("X-XSS-Protection: 1; mode=block");
include('../Class/Variaveis.php');
include('../Class/ClassCrud.php');
$dataAtual = date('Y-m-d H:i:s');
#Cadastro das informações da empresa
$Crud = new ClassCrud();
try {
    $values = "'" . $nomeEmpresa . "','" . $emailEmpresa . "','" . $fkgestorEmpresa . "','" . $fksegEmpresa . "','" . $fkqtdeFuncEmpresa . "','" . $fkfatEmpresa . "','" . $dataAtual . "'";
    $parametros = ("`nomeEmpresa`, `emailEmpresa`, `fkgestorEmpresa`, `fksegEmpresa`, `fkqtdeFuncEmpresa`, `fkfatEmpresa`, `dtCadEmpresa`");
    $idEmpresa = $Crud->insertDB("tbempresas", $parametros, $values);
    session_start();
    $_SESSION["idEmpresa"] = $idEmpresa;
    header('Location: ../View/_pages/passos.php');
} catch (Exception $erroInsertBD) {
    echo $erroInsertBD->getMessage() . ' <<<=== Erro de inserção de dados no banco de dados';
}