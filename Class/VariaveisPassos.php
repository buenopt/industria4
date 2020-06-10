<?php
# campo de respostas
if (isset($_POST['resposta1_1'])) {
    $resposta1_1 = filter_input(INPUT_POST, 'resposta1_1', FILTER_SANITIZE_SPECIAL_CHARS);
} elseif (isset($_GET['resposta1_1'])) {
    $resposta1_1 = filter_input(INPUT_GET, 'resposta1_1', FILTER_SANITIZE_SPECIAL_CHARS);
} else {
    $resposta1_1 = "";
}