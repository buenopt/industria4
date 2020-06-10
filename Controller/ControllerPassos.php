<?php
include('../Class/VariaveisPassos.php');
include('../Class/ClassCrud.php');
$dataAtual = date('Y-m-d H:i:s');
$Crud = new ClassCrud();
try {
    $Crud->insertDB("tbEmpresas", "?",
        array($dados, $dataAtual));
    header('Location: ../View/_pages/passo2.php');
} catch (Exception $erroInsertBD) {
    echo $erroInsertBD->getMessage() . ' <<<=== Erro de inserção de dados no banco de dados';
}