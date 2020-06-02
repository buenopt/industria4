<?php
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