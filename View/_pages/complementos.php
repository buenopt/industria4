<?php
$versao = '<small style="font-size: 0.7em; font-style: italic">(versão 0.5)</small>';

$headPassos = '<meta charset="UTF-8">
    <link rel="canonical" href="https://nuvem-d.com.br/industria4">
    <meta name="author" content="Richardson K. Luz">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../_css/styles.css" type="text/css">
    <!--   <link href="_css/pricing.css" rel="stylesheet"> -->    
    <link rel="icon" href="../_img/favicon.svg" type="image/svg+xml">';

$menuPrincipal = '
<div class="d-flex flex-column flex-md-row align-items-center p-3 px-md-4 mb-3 bg-white border-bottom shadow-sm">
    <i style="font-size: 1em; color: dodgerblue" class="fas fa-industry"></i> &nbsp;&nbsp;&nbsp;<h5
        class="my-0 mr-md-auto font-weight-normal" title="Ferramenta para avaliação para industria 4.0 desenvolvida por Richardson K. Luz">Avaliação industria 4.0</h5>
    <label style="font-style: italic;font-size: 0.8em; margin-right: 2%; color: dodgerblue; font-weight: bold" title="Projeto de mestrado de Richardson K. Luz">| Projeto
        de mestrado |</label>
    <div style="margin-top: 0.4em"></div>
    <div class="form-check form-check-inline">
        <button type="button" class="btn btn-info" data-toggle="modal" title="Precisando de ajuda ? Clique aqui !" data-target="#exampleModal">
            Ajuda
        </button>&nbsp;&nbsp;
        <a class="btn btn-danger" title="Voltar para o inicio da ferramenta" href="inicio.php" >Sair</a>
    </div>
</div>';

$rodapePrincipal = '<footer class="pt-4 my-md-5 pt-md-5 border-top">
    <div class="row">
        <div class="col-12 col-md">
        </div>
        <img style="margin-left: 3%; margin-top: 1%" class="mb-2" src="../_img/richardsonluz.jpg" alt="Foto de Richarson K. Luz" title="Foto de Richarson K. Luz" width="100"
             height="100">
        <div class="col-6 col-md">
            <h5 style="font-size: 1em; "><u>Sobre o projeto</u></h5>
            <ol class="list-unstyled text-small">
                <li><a class="text-muted" href="carta-apresentacao.php" title="Leia sobre a carta de apresentação" target="_blank">Carta de apresentação</a>
                </li>
                <li><a class="text-muted"
                       href="http://buscatextual.cnpq.br/buscatextual/visualizacv.do?metodo=apresentar&id=K4419598A4"
                       target="_blank" title="Leia maiores detalhes sobre Richardson K. Luz no Lattes">Contato (Lattes) </a></li>
                <li><a class="text-muted" href="../_files/sobreProjeto.pdf" target="_blank" title="Leia sobre o projeto de mestrado de Richardson K. Luz"> Sobre o projeto</a></li>
                <li><a class="text-muted" href="termo.php" target="_blank" title="Leia o termo de confidencialidade"> Termo de confidencialidade</a>
                </li>
            </ol>
        </div>
    </div>
    <small style="text-align: center" class="d-block mb-3 text-muted" title="Nome do desenvolvedor desta ferramenta">&copy; 2020 | Richardson K. Luz</small>
</footer>';

$scriptsFrame = '<script src="../_js/642bf06c9e.js"></script>
<script src="../_js/jquery-3.5.1.slim.min.js"></script>
<script src="../_js/popper.min.js"></script>
<script src="../bootstrap/js/bootstrap.min.js"></script>';

$modalAjuda = '
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="text-align: center" class="modal-title" id="exampleModalLabel">Dúvidas no
                    preenchimento:</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p style="text-align: center">Para selecionar clique no botão <b>SIM</b></p>
                <p style="text-align: center; color: red; font-weight: bold; font-size: 0.7em">Para cada etapa só pode
                    ter umas (01) resposta<br/> com (SIM) das 5(cinco) opções.</p>
                <img style="margin-left: 30%; width: 30%; height: auto" alt="Imagem como fazer" src="../_img/comoFazer.gif">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"  title="Clique aqui para fechar a janela de ajuda">Fechar</button>
            </div>
        </div>
    </div>
</div>
';
