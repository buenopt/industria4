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
                <option value="12">Gestor Operacional</option>
            </select>
        <!-- Tipo de gestor -->
        <p></p>
        <!-- Segmento das empresas -->
        <div class="form-group">
            <select id="segEmpresa" name="segEmpresa" class="form-control"
                    title="Insira o segmento de atividade da empresa" required>
                <option selected value="">Qual o segmento da empresa</option>
                <option value="20">Abate De Aves</option>
                <option value="21">Cultivo De Eucalipto</option>
                <option value="22">Fabricacao De Aparelhos E Equipamentos De Medida, Teste E Controle</option>
                <option value="23">Fabricacao De Aparelhos Eletromedicos E Eletroterapeuticos E Equipamentos De Irradiacao</option>
                <option value="24">Fabricacao De Artefatos De Borracha Nao Especificados Anteriormente</option>
                <option value="25">Fabricacao De Artefatos De Ceramica E Barro Cozido Para Uso Na Construcao,</option>
                <option value="26">Fabricacao De Artefatos De Cimento Para Uso Na Construcao</option>
                <option value="27">Fabricacao De Artefatos De Material Plastico </option>
                <option value="28">Fabricacao De Artefatos De Material Plastico Para Uso Pessoal E Domestico</option>
                <option value="29">Fabricacao De Artefatos De Material Plastico Para Usos Industriais</option>
                <option value="30">Fabricacao De Artefatos Diversos De Madeira, Exceto Moveis</option>
                <option value="31">Fabricacao De Artigos De Vidro</option>
                <option value="32">Fabricacao De Automoveis, Camionetas E Utilitarios</option>
                <option value="33">Fabricacao De Aviamentos Para Costura</option>
                <option value="34">Fabricacao De Baterias E Acumuladores Para Veiculos Automotores</option>
                <option value="35">Fabricacao De Cimento</option>
                <option value="36">Fabricacao De Defensivos Agricolas</option>
                <option value="37">Fabricacao De Embalagens De Material Plastico</option>
                <option value="38">Fabricacao De Embalagens Metalicas</option>
                <option value="39">Fabricacao De Ferramentas</option>
                <option value="40">Fabricacao De Fios, Cabos E Condutores Eletricos Isolados</option>
                <option value="41">Fabricacao De Geradores De Corrente Continua E Alternada, Pecas E Acessorios</option>
                <option value="42">Fabricacao De Laminados Planos E Tubulares De Material Plastico</option>
                <option value="43">Fabricacao De Maquinas E Equipamentos Para A Agricultura E Pecuaria, Pecas E Acessorios, Exceto Para Irrigacao</option>
                <option value="44">Fabricacao De Maquinas E Equipamentos Para Terraplenagem, Pavimentacao E Construcao, Pecas E Acessorios, Exceto Tratores</option>
                <option value="45">Fabricacao De Maquinas E Equipamentos Para Uso Industrial</option>
                <option value="46">Fabricacao De Maquinas E Equipamentos Para Uso Industrial Especifico</option>
                <option value="47">Fabricacao De Maquinas Para A Industria Metalurgica</option>
                <option value="48">Fabricacao De Maquinas-Ferramenta, Pecas E Acessorios</option>
                <option value="49">Fabricacao De Maquinas, Equipamentos E Aparelhos Para Transporte E Elevacao De Pessoas, Pecas E Acessorios</option>
                <option value="50">Fabricacao De Materiais Para Medicina E Odontologia</option>
                <option value="51">Fabricacao De Moveis Com Predominancia De Madeira</option>
                <option value="52">Fabricacao De Obras De Caldeiraria Pesada</option>
                <option value="53">Fabricacao De Outras Maquinas E Equipamentos De Uso Geral</option>
                <option value="54">Fabricacao De Outras Maquinas E Equipamentos Para Uso Na Extracao Mineral</option>
                <option value="55">Fabricacao De Outras Pecas E Acessorios Para Veiculos Automotores</option>
                <option value="56">Fabricacao De Outras Pecas E Acessorios Para Veiculos Automotores Nao</option>
                <option value="57">Fabricacao De Outros Artefatos E Produtos De Concreto, Cimento, Fibrocimento, Gesso E Materiais Semelhante</option>
                <option value="58">Fabricacao De Outros Produtos Alimenticios Nao Especificados Anteriormente</option>
                <option value="59">Fabricacao De Outros Produtos De Metal</option>
                <option value="60">Fabricacao De Outros Produtos De Metal Nao Especificados Anteriormente</option>
                <option value="61">Fabricacao De Outros Produtos De Minerais Nao-Metalicos</option>
                <option value="62">Fabricacao De Outros Produtos Quimicos</option>
                <option value="63">Fabricacao De Outros Produtos Quimicos Nao Especificados Anteriormente</option>
                <option value="64">Fabricacao De Pecas E Acessorios Para O Sistema De Direcao E Suspensao De Veiculos Automotores</option>
                <option value="65">Fabricacao De Perifericos Para Equipamentos De Informatica</option>
                <option value="66">Fabricacao De Produtos De Pastas Celulosicas, Papel, Cartolina, Papel-Cartao E Papelao Ondulado Nao Especificados</option>
                <option value="67">Fabricacao De Produtos De Trefilados De Metal</option>
                <option value="68">Fabricacao De Refrigerantes</option>
                <option value="69">Fabricacao De Tratores, Pecas E Acessorios, Exceto Agricolas</option>
                <option value="70">Fundicao De Ferro E Aco</option>
                <option value="71">Fundicao De Metais Nao-Ferrosos E Suas Ligas</option>
                <option value="72">Metalurgia De Outros Metais Nao-Ferrosos E Suas Liga</option>
                <option value="73">Preparacao E Fiacao De Fibras De Algodao</option>
                <option value="74">Producao De Aluminio E Suas Ligas Em Formas Primarias</option>
                <option value="75">Producao De Artefatos Estampados De Metal</option>
                <option value="76">Producao De Forjados De Metais Nao-Ferrosos E Suas Ligas</option>
                <option value="77">Producao De Laminados Longos De Aco, Exceto Tubos</option>
                <option value="78">Producao De Tubos De Aco Com Costura</option>
                <option value="79">Tecelagem De Fios De Fibras Artificiais E Sinteticas</option>
            </select>
        </div>
        <!-- Segmento das empresas -->
        <p></p>
        <!-- Qtde Funcionários -->
        <!--
            <div class="form-group">
            <select id="qtdeFuncEmpresa" name="qtdeFuncEmpresa" class="form-control"
                    title="Insira a quantidade de funcionários entre as opções." required>
                <option selected value="">Quantidade funcionários</option>
                <option value="100">Entre 101 á 499 funcionários</option>
                <option value="101">Acima 500 funcionários</option>
            </select>
        </div>
        -->
        <!-- Qtde Funcionários -->
        <p></p>
        <!-- Option sobre faturamento -->
        <div class="form-group">
            <select id="fatEmpresa" name="fatEmpresa" class="form-control"
                    title="Insira o faturamento médio anual da empresa" required>
                <option selected value="">Faturamento anual</option>
                <option value="200">Entre R$ 6 milhões a R$ 20 milhões</option>
                <option value="201">Acima de R$ 20 milhões</option>
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