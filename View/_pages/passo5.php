<?php
include_once('complementos.php');
include_once('passos.php');
$paginaLocal = ' | Etapa 5 - Eficiência com pequenos lotes';
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
<!-- Menu box -->
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h3 style="font-size: 1.4em; font-weight: bold; color: dodgerblue" class="display-4">Etapa 5 - Eficiência com
        pequenos lotes </h3>
    <p style="font-size: 0.9em; margin-right: 5%; margin-left: 5%" class="lead">Considerando a crescente complexidade
        dos sistemas de produção, interfaces homem-máquina entram em foco. Na realidade industrial, o ponto de partida é
        frequentemente representado por unidades de exibição locais que não possui conceitos operacionais amigáveis.
        Novos conceitos operacionais tablets ou óculos de dados que convenientemente fornecer as informações corretas no
        lugar certo são potencialmente promissores para simplificar o trabalho dos funcionários e aumentar a eficiência
        da produção.</p>
    <p style="text-align: center; font-size: 0.9em">Etapa : <i class="fas fa-walking"></i>&nbsp;<i
                class="fas fa-walking"></i>&nbsp;<i class="fas fa-walking"></i>&nbsp;<i
                class="fas fa-walking"></i>&nbsp;<b style="color: dodgerblue"><i
                    class="fas fa-walking"></i></b>&nbsp;<i class="fas fa-walking"></i></p>
    <hr>
    <p style="text-align: center; font-size: 0.9em; color: slategrey">Selecione abaixo o item que condiz com sua empresa
        (Só é aceita uma opção) :</p>
    <hr>
</div>
<!-- Menu box -->
<!-- container de perguntas -->
<?php
echo $passo5;
?>
<!-- container de perguntas -->
<!-- Botão continuar -->
<div style="text-align: center">
    <a class="btn btn-secondary" href="passo4.php"><i class="fas fa-backward"></i><i class="fas fa-backward"></i>
        Voltar </a>
    <a class="btn btn-success" href="passo6.php">Continuar <i class="fas fa-forward"></i><i
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
<!--scripts frameworks -->
<?php
echo $scriptsFrame;
?>
<!--scripts frameworks -->
</body>
</html>