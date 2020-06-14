<?php
include('../Class/Variaveis.php');
include('../Class/ClassCrud.php');
$dataAtual = date('Y-m-d H:i:s');

#Cadastro das informações das respostas
if (isset($_POST["resposta1_1"])) {
    echo "0";
} else if (isset($_POST["resposta1_2"])) {
    echo "25";
} else if (isset($_POST["resposta1_3"])) {
    echo "50";
} else if (isset($_POST["resposta1_4"])) {
    echo "75";
} else if (isset($_POST["resposta1_5"])) {
    echo "100";
}





/*
$Crud = new ClassCrud();
try {
    $Crud->insertDB("tbRespostas", "?",
        array($dados, $dataAtual));
    header('Location: ../View/_pages/passo2.php');
} catch (Exception $erroInsertBD) {
    echo $erroInsertBD->getMessage() . ' <<<=== Erro de inserção de dados no banco de dados';
}*/