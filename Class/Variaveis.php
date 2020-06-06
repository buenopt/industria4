<?php

#id da empresa
if (isset($_POST['idEmpresa'])) {
    $idEmpresa = filter_input(INPUT_POST, 'idEmpresa', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['idEmpresa'])) {
    $idEmpresa = filter_input(INPUT_GET, 'idEmpresa', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $idEmpresa = 0;
}

#campo nome da empresa
if (isset($_POST['nomeEmpresa'])) {
    $nomeEmpresa = filter_input(INPUT_POST, 'nomeEmpresa', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['nomeEmpresa'])) {
    $nomeEmpresa = filter_input(INPUT_GET, 'nomeEmpresa', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $nomeEmpresa = "";
}
#campo e-mail da empresa
if (isset($_POST['emailEmpresa'])) {
    $emailEmpresa = filter_input(INPUT_POST, 'emailEmpresa', FILTER_SANITIZE_EMAIL);
} elseif (isset($_GET['emailEmpresa'])) {
    $emailEmpresa = filter_input(INPUT_GET, 'emailEmpresa', FILTER_SANITIZE_EMAIL);
} else {
    $emailEmpresa = "";
}

#campo gestor da empresa
if (isset($_POST['gestorEmpresa'])) {
    $fkgestorEmpresa = filter_input(INPUT_POST, 'gestorEmpresa', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['gestorEmpresa'])) {
    $fkgestorEmpresa = filter_input(INPUT_GET, 'gestorEmpresa', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $fkgestorEmpresa = "";
}

#campo segmento da empresa
if (isset($_POST['segEmpresa'])) {
    $fksegEmpresa = filter_input(INPUT_POST, 'segEmpresa', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['segEmpresa'])) {
    $fksegEmpresa = filter_input(INPUT_GET, 'segEmpresa', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $fksegEmpresa = "";
}

#campo Qtde de funcionários da empresa
if (isset($_POST['qtdeFuncEmpresa'])) {
    $fkqtdeFuncEmpresa = filter_input(INPUT_POST, 'qtdeFuncEmpresa', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['qtdeFuncEmpresa'])) {
    $fkqtdeFuncEmpresa = filter_input(INPUT_GET, 'qtdeFuncEmpresa', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $fkqtdeFuncEmpresa = "";
}

#campo Qtde de faturamento da empresa
if (isset($_POST['fatEmpresa'])) {
    $fkfatEmpresa = filter_input(INPUT_POST, 'fatEmpresa', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['fatEmpresa'])) {
    $fkfatEmpresa = filter_input(INPUT_GET, 'fatEmpresa', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $fkfatEmpresa = "";
}