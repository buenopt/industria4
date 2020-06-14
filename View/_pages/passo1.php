<?php
include_once('complementos.php');
include_once('passos.php');
$paginaLocal = ' | Etapa 1 - Processamento de dados na produção';
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

<!-- container de passo1 -->
<?php
echo $passo1;
?>
<!-- container de passo1 -->
<!-- Botão continuar -->
<div style="text-align: center">
    <input style="color: white" class="btn btn-info" type="button" value="Limpar" onclick="limpar()">
    <input class="btn btn-success" type="submit" value="Continuar"/>
</div>
</form>
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