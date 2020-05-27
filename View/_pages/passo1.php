<?php
include_once('complementos.php');
include_once('passos.php');
$paginaLocal = ' | Etapa 1 - Processamento de dados na produção';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Richardson K. Luz">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../_css/styles.css" type="text/css">
    <!--   <link href="_css/pricing.css" rel="stylesheet"> -->
    <title>Indústria 4.0 <?php echo $paginaLocal ?></title>
    <link rel="icon" href="../_img/favicon.svg" type="image/svg+xml">
</head>
<body>
<!-- Menu principal -->
<?php
echo $menuPrincipal;
?>
<!-- Menu principal -->
<!-- Menu box -->
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h3 style="font-size: 1.4em; font-weight: bold; color: dodgerblue" class="display-4">Etapa 1 - Processamento de
        dados na
        produção</h3>
    <p style="font-size: 0.9em; margin-right: 5%; margin-left: 5%" class="lead">O processamento de dados para várias
        aplicações é uma questão fundamenta
        para aplicações Indústria 4.0 em produção. Processamento de dados em produção pode ser usado para documentação
        simples, bem como para objetivos visando o monitoramento de processos, processos autônomos planejamento e
        controle.</p>
    <p style="text-align: center; font-size: 0.9em">Etapa : <b style="color: dodgerblue"><i class="fas fa-walking"></i></b>&nbsp;<i
                class="fas fa-walking"></i>&nbsp;<i class="fas fa-walking"></i>&nbsp;<i class="fas fa-walking"></i>&nbsp;<i
                class="fas fa-walking"></i>&nbsp;<i class="fas fa-walking"></i></p>
    <hr>
    <p style="text-align: center; font-size: 0.9em; color: slategrey">Selecione abaixo o item que condiz com sua empresa
        (Só é aceita uma opção) :</p>
    <hr>
</div>
<!-- Menu box -->
<!-- container de perguntas -->
<?php
echo $passo1;
?>
<!-- conainer de perguntas -->
<!-- Botão continuar -->
<div style="text-align: center">
    <a class="btn btn-success" href="passo2.php">Continuar <i class="fas fa-forward"></i><i
                class="fas fa-forward"></i></a>
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
</div>
<!--scripts frameworks -->
<?php
echo $scriptsFrame;
?>
<!--scripts frameworks -->
</body>
</html>