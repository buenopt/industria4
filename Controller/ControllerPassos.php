<?php
include('../Class/Variaveis.php');
include('../Class/ClassCrud.php');
$dataAtual = date('Y-m-d H:i:s');
#Cadastro das informações das respostas
echo "$resposta1_1 $resposta1_2 $resposta1_3 $resposta1_4 $resposta1_5";




/*
$Crud = new ClassCrud();
try {
    $Crud->insertDB("tbRespostas", "?",
        array($dados, $dataAtual));
    header('Location: ../View/_pages/passo2.php');
} catch (Exception $erroInsertBD) {
    echo $erroInsertBD->getMessage() . ' <<<=== Erro de inserção de dados no banco de dados';
}*/