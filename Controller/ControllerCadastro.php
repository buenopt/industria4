<?php
//header('Location: ../View/_pages/passo1.php');
include('../Class/Variaveis.php');
include('../../Class/ClassCrud.php');

#Cadastro das informações da empresa
$Crud = new ClassCrud();
$Crud->insertDB("tbEmpresas", "?,?,?,?,?,?,?", array($idEmpresa, $nomeEmpresa, $emailEmpresa, $gestorEmpresa, $segEmpresa, $qtdeFuncEmpresa, $fatEmpresa));
echo "Cadastro realizado com sucesso!";