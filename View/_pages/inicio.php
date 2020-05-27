<?php
include_once('complementos.php');
$paginaLocal = ' | Inicio - Informações da pesquisa';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <link rel="manifest" href="../../manifest.json">
    <link rel="canonical" href="https://nuvem-d.com.br/industria4">
    <meta name="author" content="Richardson K. Luz">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link href="../_css/signin.css" rel="stylesheet">
    <link rel="stylesheet" href="../_css/styles.css" type="text/css">
    <title>Indústria 4.0 <?php echo $paginaLocal ?></title>
    <link rel="icon" href="../_img/favicon.svg" type="image/svg+xml">
</head>
<body class="text-center">

<div class="container-fluid center">
    <form class="form-signin">
        <i class="fas fa-industry" id="mobileResponsive"></i>
        <h1 style="font-size: 1.5em; font-weight: bold" class="h3 mb-3 font-weight-normal">Avaliação Industria 4.0</h1>
        <p style="font-size:0.7em; font-weight: bold; font-style: italic; color: dodgerblue">Projeto de mestrado</p>
        <p style="font-size: small">Saiba se sua empresa está preparada !</p>
        <label for="inputEmail" class="sr-only">Insira nome da sua empresa</label>
        <input type="email" id="inputEmpresa" class="form-control" placeholder="Nome da sua empresa" required autofocus>
        <p></p>
        <label for="inputEmpresa" class="sr-only">Insira seu e-mail</label>
        <input type="text" id="inputEmail" class="form-control" placeholder="Seu e-mail" required>
        <p></p>
        <div class="form-group">
            <select id="inputNivel" class="form-control">
                <option selected>Seu nível dentro da empresa</option>
                <option>Gestor Executivo</option>
                <option>Gestor Operacional</option>
            </select>
        </div>
        <p></p>
        <div class="form-group">
            <select id="inputSegmento" class="form-control">
                <option>Confecção de artigos do vestuário e acessórios</option>
                <option selected>Qual o segmento da empresa</option>
                <option>Fabricação de produtos alimentícios</option>
                <option>Fabricação de bebidas</option>
                <option>Fabricação de produtos têxteis</option>
                <option>Fabricação de produtos de madeira</option>
                <option>Fabricação de celulose, papel e produtos de papel</option>
                <option>Fabricação de produtos derivados do petróleo</option>
                <option>Fabricação de biocombustíveis</option>
                <option>Fabricação de produtos químicos</option>
                <option>Fabricação de produtos farmoquímicos e farmacêuticos</option>
                <option>Fabricação de produtos de borracha e de material plástico</option>
                <option>Fabricação de produtos de minerais não metálicos</option>
                <option>Fabricação de produtos de metal, exceto máquinas e equipamentos</option>
                <option>Fabricação de equipamentos de informática, produtos eletrônicos e ópticos</option>
                <option>Fabricação de máquinas, aparelhos e materiais elétricos</option>
                <option>Fabricação de máquinas, aparelhos e materiais elétricos</option>
                <option>Fabricação de veículos automotores, reboques e carrocerias</option>
                <option>Fabricação de outros equipamentos de transporte, exceto veículos automotores</option>
                <option>Fabricação de móveis</option>
                <option>Fabricação de produtos diversos</option>
                <option>Manutenção, reparação e instalação de máquinas e equipamentos</option>
                <option>Metalurgia</option>
            </select>
        </div>
        <p></p>
        <div class="form-group">
            <select id="inputQtdeFunc" class="form-control">
                <option selected>Quantidade funcionários</option>
                <option>Entre 101 á 499 funcionários</option>
                <option>Acima 500 funcionários</option>
            </select>
        </div>
        <p></p>
        <div class="form-group">
            <select id="inputFatur" class="form-control">
                <option selected>Faturamento anual</option>
                <option>Entre R$ 6 milhões a R$ 20 milhões</option>
                <option>Acima de R$ 20 milhões</option>
            </select>
        </div>
        <p></p>
        <a class="btn btn-lg btn-primary btn-block" href="passo1.php" title="Acesso a aplicação">Começar</a>
        <br/>
        <p style="font-size: 0.7em">Conheça nossa política de pesquisa | <a href="carta-apresentacao.php"
                                                                            target="_blank">Leia aqui</a></p>
    </form>
    <footer id="mobileResponsiveFooter">
        <p style="font-size: 0.7em; font-weight: bold; color: gray" class="mt-5 mb-3 text-muted">&copy; 2020 |
            Richardson K. Luz <?php echo $versao ?></p>
    </footer>
</div>
<!--scripts frameworks -->
<?php
echo $scriptsFrame;
?>
<!--scripts frameworks -->
</body>
</html>