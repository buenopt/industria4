<?php
include_once('complementos.php');
include_once('passos.php');
$paginaLocal = ' | Etapa 3 - Produção conectada em rede com toda a empresa';
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
    <title>Indústria 4.0 <?php echo $paginaLocal; ?></title>
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
    <h3 style="font-size: 1.4em; font-weight: bold; color: dodgerblue" class="display-4">Etapa 3 - Produção conectada em
        rede
        com toda a empresa</h3>
    <p style="font-size: 0.9em; margin-right: 5%; margin-left: 5%" class="lead">Uma melhoria da rede entre a produção e
        os outros níveis da empresa abrem sinergias e evitam duplicação de trabalho. A rede entre produção e outros
        departamentos facilita soluções unificadas de TI, fluxos de trabalho padronizados ou formatos de arquivo usados
        de forma consistente a partir dos quais toda a empresa benefícios.</p>
    <p style="text-align: center; font-size: 0.9em">Etapa : <i class="fas fa-walking"></i>&nbsp;<i
                class="fas fa-walking"></i>&nbsp;<b style="color: dodgerblue"><i class="fas fa-walking"></i></b>&nbsp;<i
                class="fas fa-walking"></i>&nbsp;<i
                class="fas fa-walking"></i>&nbsp;<i class="fas fa-walking"></i></p>
    <hr>
    <p style="text-align: center; font-size: 0.9em; color: slategrey">Selecione abaixo o item que condiz com sua empresa
        (Só é aceita uma opção) :</p>
    <hr>
</div>
<!-- Menu box -->
<!-- container de perguntas -->
<?php
echo $passo3;
?>
<!-- container de perguntas -->
<!-- Botão continuar -->
<div style="text-align: center">
    <a class="btn btn-secondary" href="passo2.php"><i class="fas fa-backward"></i><i class="fas fa-backward"></i>
        Voltar </a>
    <a class="btn btn-success" href="passo4.php">Continuar <i class="fas fa-forward"></i><i
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