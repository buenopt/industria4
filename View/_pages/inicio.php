<?php
header("X-XSS-Protection: 1; mode=block");
include_once('complementos.php');
$paginaLocal = ' | Inicio - Informações da pesquisa';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <?php
    echo $headPassos;
    ?>
    <title>Indústria 4.0 <?php echo $paginaLocal ?></title>
    <!-- CSS Especifico -->
    <link href="../_css/signin.css" rel="stylesheet">
</head>
<body class="text-center">
<!-- Perguntas -->
<div class="container-fluid center">
    <form class="form-signin" name="FormCadastro" id="FormCadastro" method="post"
          action="../../Controller/ControllerCadastro.php">
        <!-- Menu -->
        <i class="fas fa-industry" id="mobileResponsive"></i>
        <h1 style="font-size: 1.5em; font-weight: bold" class="h3 mb-3 font-weight-normal">Avaliação Industria 4.0</h1>
        <p style="font-size:0.7em; font-weight: bold; font-style: italic; color: dodgerblue">Projeto de mestrado</p>
        <p style="font-size: small">Saiba se sua empresa está preparada !</p>
        <!-- Menu -->
        <!-- Nome empresa -->
        <label for="nomeEmpresa" class="sr-only">Insira nome da sua empresa</label>
        <input type="text" id="nomeEmpresa" name="nomeEmpresa" class="form-control" placeholder="Nome da sua empresa"
               title="Insira o nome da sua empresa" required autofocus>
        <!-- Nome empresa -->
        <p></p>
        <!-- E-mail do respondente -->
        <label for="emailEmpresa" class="sr-only">Insira seu e-mail</label>
        <input type="email" id="emailEmpresa" name="emailEmpresa" class="form-control" placeholder="Seu e-mail"
               title="Insira seu e-mail"
               required>
        <!-- E-mail do respondente -->
        <p></p>
        <!-- Tipo de gestor -->
        <div class="form-group">
            <select id="gestorEmpresa" name="gestorEmpresa" class="form-control"
                    title="Insira o seu nível de responsabilidade na empresa" required>
                <option selected value="">Seu nível dentro da empresa</option>
                <option value="10">Gestor Executivo</option>
                <option value="11">Gestor Operacional</option>
            </select>
        <!-- Tipo de gestor -->
        <p></p>
        <!-- Segmento das empresas -->
        <div class="form-group">
            <select id="segEmpresa" name="segEmpresa" class="form-control"
                    title="Insira o segmento de atividade da empresa" required>
                <option selected value="">Qual o segmento da empresa</option>
                <option value="20">Confecção de artigos do vestuário e acessórios</option>
                <option value="21">Fabricação de produtos alimentícios</option>
                <option value="22">Fabricação de bebidas</option>
                <option value="23">Fabricação de produtos têxteis</option>
                <option value="24">Fabricação de produtos de madeira</option>
                <option value="25">Fabricação de celulose, papel e produtos de papel</option>
                <option value="26">Fabricação de produtos derivados do petróleo</option>
                <option value="27">Fabricação de biocombustíveis</option>
                <option value="28">Fabricação de produtos químicos</option>
                <option value="29">Fabricação de produtos farmoquímicos e farmacêuticos</option>
                <option value="30">Fabricação de produtos de borracha e de material plástico</option>
                <option value="31">Fabricação de produtos de minerais não metálicos</option>
                <option value="32">Fabricação de produtos de metal, exceto máquinas e equipamentos</option>
                <option value="33">Fabricação de equipamentos de informática, produtos eletrônicos e ópticos</option>
                <option value="34">Fabricação de máquinas, aparelhos e materiais elétricos</option>
                <option value="35">Fabricação de máquinas, aparelhos e materiais elétricos</option>
                <option value="36">Fabricação de veículos automotores, reboques e carrocerias</option>
                <option value="37">Fabricação de outros equipamentos de transporte, exceto veículos automotores</option>
                <option value="38">Fabricação de móveis</option>
                <option value="39">Fabricação de produtos diversos</option>
                <option value="40">Manutenção, reparação e instalação de máquinas e equipamentos</option>
                <option value="41">Metalurgia</option>
            </select>
        </div>
        <!-- Segmento das empresas -->
        <p></p>
        <!-- Qtde Funcionários -->
        <div class="form-group">
            <select id="qtdeFuncEmpresa" name="qtdeFuncEmpresa" class="form-control"
                    title="Insira a quantidade de funcionários entre as opções." required>
                <option selected value="">Quantidade funcionários</option>
                <option value="50">Entre 101 á 499 funcionários</option>
                <option value="51">Acima 500 funcionários</option>
            </select>
        </div>
        <!-- Qtde Funcionários -->
        <p></p>
        <!-- Option sobre faturamento -->
        <div class="form-group">
            <select id="fatEmpresa" name="fatEmpresa" class="form-control"
                    title="Insira o faturamento médio anual da empresa" required>
                <option selected value="">Faturamento anual</option>
                <option value="60">Entre R$ 6 milhões a R$ 20 milhões</option>
                <option value="61">Acima de R$ 20 milhões</option>
            </select>
        </div>
        <!-- Option sobre faturamento -->
        <p></p>
        <input class="btn btn-lg btn-primary btn-block" type="submit" title="Acesso a aplicação" value="Começar">
        <br/>
        <p style="font-size: 0.7em">Conheça nossa política de pesquisa | <a
                    title="Clique aqui e leia a carta de apresentação na integra" href="carta-apresentacao.php"
                    target="_blank">Leia aqui</a></p>
    </form>
    <!-- Perguntas -->

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