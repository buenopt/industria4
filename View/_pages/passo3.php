<?php
include_once('complementos.php');
include_once('passos.php');
$paginaLocal = ' | Etapa 3 - Produção conectada em rede com toda a empresa';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    echo $headPassos;
    ?>
    <title>Indústria 4.0 <?php echo $paginaLocal; ?></title>
</head>
<body>
<!-- Menu principal -->
<?php
echo $menuPrincipal;
?>
<!-- Menu principal -->

<!-- container do passo3 -->
<?php
echo $passo3;
?>
<!-- container do passo3 -->
<!-- Botão continuar -->
<div style="text-align: center">
    <a class="btn btn-secondary" href="passo2.php"><i class="fas fa-backward"></i>
        Voltar </a>
    <input style="color: white" class="btn btn-info" type="button" value="Limpar" onclick="limpar()">
    <a class="btn btn-success" href="passo4.php">Continuar <i class="fas fa-forward"></i></a>
</div>
<div style="margin-top: 1em"></div>
<!-- Botão continuar -->
<!-- Fim modal ajuda -->
<?php
echo $modalAjuda;
?>
<!-- Fim modal ajuda -->
<!-- Rodapé -->
<?php
echo $rodapePrincipal;
?>
<!-- Rodapé -->
<!--scripts frameworks -->
<?php
echo $scriptsFrame;
?>
<!--scripts frameworks -->
</body>
</html>