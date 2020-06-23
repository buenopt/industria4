<?php
header("X-XSS-Protection: 1; mode=block");
include('../Class/Variaveis.php');
include('../Class/ClassCrud.php');
$dataAtual = date('Y-m-d H:i:s');
session_start();
$idEmpresa = $_SESSION["idEmpresa"];
$Crud = new ClassCrud();
try {
    $values = "'" . $_POST['passo1_id'] . "'," . "'" . $_POST['passo2_id'] . "'," . "'" . $_POST['passo3_id'] . "'," . "'" . $_POST['passo4_id'] . "'," . "'" . $_POST['passo5_id'] . "'," . "'" . $_POST['passo6_id'] . "'," . "'" . $idEmpresa . "'," . "'" . $dataAtual . "'";
    $parametros = ("fkIdPergunta1, fkIdPergunta2, fkIdPergunta3, fkIdPergunta4, fkIdPergunta5, fkIdPergunta6, fkIdEmpresa, dtResposta");
    $idEmpresa = $Crud->insertDB("tbrespostas", $parametros, $values);
} catch (Exception $erroInsertBD) {
    echo $erroInsertBD->getMessage() . ' <<<=== Erro de inserção de dados no banco de dados';
}
