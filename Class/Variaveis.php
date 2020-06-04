<?php
$nomeEmpresa = "FERNANDO BUENO";
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
} elseif (isset($_GET['nomeEmpresa'])) {
    $emailEmpresa = filter_input(INPUT_GET, 'emailEmpresa', FILTER_SANITIZE_EMAIL);
} else {
    $emailEmpresa = "";
}