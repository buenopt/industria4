<?php
include_once('complementos.php');
$paginaLocal = ' | Resultado da avaliação da sua empresa';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Richardson K. Luz">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../bootstrap-4.5.0-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="../_css/styles.css" type="text/css">
    <title>Indústria 4.0 <?php echo $paginaLocal; ?></title>
    <link rel="icon" href="../_img/favicon.svg" type="image/svg+xml">
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
</head>
<body>
<!-- Menu principal -->
<?php
echo $menuPrincipal;
?>
<!-- Menu principal -->
<!-- Menu box -->
<main role="main" class="container">
    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
        <h3 style="font-size: 1.4em; font-weight: bold; color: dodgerblue" class="display-4">Obrigado! </h3>
        <p style="font-size: 0.9em; margin-right: 5%; margin-left: 5%" class="lead">O seu resultado abaixo é conforme
            suas respostas as etapas anteriores.</p>

        <hr>
        <p style="text-align: center; font-size: 0.9em; color: slategrey">Sua indústria já esta :</p>
        <h1 style="color: dodgerblue; font-size: 3em;font-family: 'Anton', sans-serif;" class="text-center">15 %</h1>
        <hr>
    </div>
    <!-- Menu box -->
    <!-- Respostas para editar -->
    <div class="my-3 p-3 bg-white rounded shadow-sm">
        <h6 class="border-bottom border-gray pb-2 mb-0">Respostas da etapa 1 a 6</h6>
        <!-- Etapa 1 -->
        <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg"
                 preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                <title>Etapa 1</title>
                <rect width="100%" height="100%" fill="#007bff"/>
                <text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
            </svg>
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <strong class="d-block text-gray-dark">Etapa 1</strong>
                Processamento de dados | <a href="#">Editar resposta</a>
            </p>
        </div>

        <!-- Etapa 1 -->
        <!-- Etapa 2 -->
        <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg"
                 preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                <title>Etapa 2</title>
                <rect width="100%" height="100%" fill="#007bff"/>
                <text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
            </svg>
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <strong class="d-block text-gray-dark">Etapa 2</strong>
                Máquinas com internet | <a href="#">Editar resposta</a>
            </p>
        </div>
        <!-- Etapa 2 -->
        <!-- Etapa 3 -->
        <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg"
                 preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                <title>Etapa 3</title>
                <rect width="100%" height="100%" fill="#007bff"/>
                <text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
            </svg>
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <strong class="d-block text-gray-dark">Etapa 3</strong>
                Troca de informações via correio e telefone | <a href="#">Editar resposta</a>
            </p>
        </div>
        <!-- Etapa 3 -->
        <!-- Etapa 4 -->
        <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg"
                 preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                <title>Etapa 4</title>
                <rect width="100%" height="100%" fill="#007bff"/>
                <text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
            </svg>
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <strong class="d-block text-gray-dark">Etapa 4</strong>
                Troca automatizada de informações | <a href="#">Editar resposta</a>
            </p>
        </div>
        <!-- Etapa 4 -->
        <!-- Etapa 5 -->
        <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg"
                 preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                <title>Etapa 5</title>
                <rect width="100%" height="100%" fill="#007bff"/>
                <text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
            </svg>
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <strong class="d-block text-gray-dark">Etapa 5</strong>
                Uso de sistema de produção flexível e peças idênticas | <a href="#">Editar resposta</a>
            </p>
        </div>
        <!-- Etapa 5 -->
        <!-- Etapa 6 -->
        <div class="media text-muted pt-3">
            <svg class="bd-placeholder-img mr-2 rounded" width="32" height="32" xmlns="http://www.w3.org/2000/svg"
                 preserveAspectRatio="xMidYMid slice" focusable="false" role="img" aria-label="Placeholder: 32x32">
                <title>Etapa 6</title>
                <rect width="100%" height="100%" fill="#007bff"/>
                <text x="50%" y="50%" fill="#007bff" dy=".3em">32x32</text>
            </svg>
            <p class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
                <strong class="d-block text-gray-dark">Etapa 6</strong>
                Uso de interfaces móveis | <a href="#">Editar resposta</a>
            </p>
        </div>
        <!-- Etapa 6 -->
        <!-- botão imprimir -->
        <div style="text-align: center; margin-top: 3%">
            <button class="btn btn-outline-success" type="button" value="imprimir" onclick="window.print()"><i
                        class="fas fa-print"></i> Imprimir
            </button>
        </div>
        <!-- botão imprimir -->
    </div>
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
</main>
<!--scripts frameworks -->
<?php
echo $scriptsFrame;
?>
<!--scripts frameworks -->

</body>
</html>