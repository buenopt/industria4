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
    $emailEmpresa = filter_input(INPUT_POST, 'emailEmpresa', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['emailEmpresa'])) {
    $emailEmpresa = filter_input(INPUT_GET, 'emailEmpresa', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $emailEmpresa = "";
}

#campo gestor da empresa
if (isset($_POST['gestorEmpresa'])) {
    $gestorEmpresa = filter_input(INPUT_POST, 'gestorEmpresa', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['gestorEmpresa'])) {
    $gestorEmpresa = filter_input(INPUT_GET, 'gestorEmpresa', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $gestorEmpresa = "";
}

#campo segmento da empresa
if (isset($_POST['segEmpresa'])) {
    $segEmpresa = filter_input(INPUT_POST, 'segEmpresa', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['segEmpresa'])) {
    $segEmpresa = filter_input(INPUT_GET, 'segEmpresa', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $segEmpresa = "";
}

#campo Qtde de funcionários da empresa
if (isset($_POST['qtdeFuncEmpresa'])) {
    $qtdeFuncEmpresa = filter_input(INPUT_POST, 'qtdeFuncEmpresa', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['qtdeFuncEmpresa'])) {
    $qtdeFuncEmpresa = filter_input(INPUT_GET, 'qtdeFuncEmpresa', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $qtdeFuncEmpresa = "";
}

#campo Qtde de faturamento da empresa
if (isset($_POST['fatEmpresa'])) {
    $fatEmpresa = filter_input(INPUT_POST, 'fatEmpresa', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['fatEmpresa'])) {
    $fatEmpresa = filter_input(INPUT_GET, 'fatEmpresa', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $fatEmpresa = "";
}