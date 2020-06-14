<?php

$passo1 = '
<!-- menu box -->
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
<!-- menu box -->
<!-- Primeira pergunta -->
<div class="container">
<form class="form-signin" name="FormPasso1" id="FormPasso1" method="post"
          action="../../Controller/ControllerPassos.php">
    <div class="card-deck mb-6 text-center">
    
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <img width="64" src="../_img/passo1_1.png" alt="Imagem passo 1 de 1">
                <p></p>
                <p class="card-title pricing-card-title" id="pergunta1_1" name="pergunta1_1" style="font-weight: bold; font-size: 0.9em">Processamento de
                    dados</p>
                <ul class="list-unstyled mt-3 mb-4">
                    <li style="font-size: 0.7em;text-align: justify "></li>
                </ul>
                <hr>
                <div style="text-align: center">
                    <label style="font-weight: bold;color: dodgerblue">Escolher :</label><br/>
                    <input type="submit" value="X" id="botao1" name="resposta1_1" class="btn btn-primary" onclick="habilitar1();">
                </div>
            </div>
        </div>               
        <!-- Primeira pergunta -->
        <!-- Segunda pergunta -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <img width="64" src="../_img/passo1_2.png" alt="Imagem passo 1 de 2">
                <p></p>
                <p class="card-title pricing-card-title" style="font-weight: bold">Armazenamento de dados por
                    documentação</p>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                </ul>
                <hr>
                <div style="text-align: center">
                    <label style="font-weight: bold;color: dodgerblue">Escolher :</label><br/>
                    <button type="submit" value="25" id="botao2" name="resposta1_2" class="btn btn-primary" onclick="habilitar2();">X</button>      
                </div>
            </div>
        </div>
        <!-- Segunda pergunta -->
        <!-- Terceira pergunta -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <img width="64" src="../_img/passo1_3.png" alt="Imagem passo 1 de 3">
                <p></p>
                <p class="card-title pricing-card-title" style="font-weight: bold">Análise de dados por processo de
                    monitoramento</p>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                </ul>
                <hr>
                <div style="text-align: center">
                    <label style="font-weight: bold;color: dodgerblue">Escolher :</label><br/>
                    <button type="submit" value="50" id="botao3" name="resposta1_3" class="btn btn-primary" onclick="habilitar3();">X</button>      
                </div>
            </div>
        </div>
        <!-- Terceira pergunta -->
        <!-- Quarta pergunta -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <img width="64" src="../_img/passo1_4.png" alt="Imagem passo 1 de 4">
                <p></p>
                <p class="card-title pricing-card-title" style="font-weight: bold">Avaliação para processo de
                    planejamento controle</p>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                </ul>
                <hr>
                <div style="text-align: center">
                    <label style="font-weight: bold;color: dodgerblue">Escolher :</label><br/>
                    <button type="submit" value="75" id="botao4" name="resposta1_4" class="btn btn-primary" onclick="habilitar4();">X</button>      
                </div>
            </div>
        </div>
        <!-- Quarta pergunta -->
        <!-- Quinta pergunta -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <img width="64" src="../_img/passo1_5.png" alt="Imagem passo 1 de 5">
                <p></p>
                <p class="card-title pricing-card-title" style="font-weight: bold">Planejamento e controle automático do
                    processo</p>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                </ul>
                <hr>
                <div style="text-align: center">
                    <label style="font-weight: bold;color: dodgerblue">Escolher :</label><br/>
                    <button type="submit" value="100" id="botao5" name="resposta1_5" class="btn btn-primary" onclick="habilitar5();">X</button>      
                </div>
            </div>            
        </div>        
    </div>    
    
    
    <!-- Quinta pergunta -->';

$passo2 = '
<!-- Menu box -->
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h3 style="font-size: 1.4em; font-weight: bold; color: dodgerblue" class="display-4">Etapa 2 - Comunicação de
        máquinas para
        máquinas</h3>
    <p style="font-size: 0.9em; margin-right: 5%; margin-left: 5%" class="lead">Interfaces para troca automatizada de
        dados entre máquinas formam a base para inúmeras aplicações da Indústia 4.0. Campo interfaces de barramento bem
        como interfaces industriais Ethernet e Web são aplicados no ambiente industrial. Interfaces da Web e aplicativos
        com troca autônoma de informações (web Serviços) oferecem a vantagem de uma possível separação de informações e
        localização.</p>
    <p style="text-align: center; font-size: 0.9em">Etapa : <i class="fas fa-walking"></i>&nbsp;<b
                style="color: dodgerblue"><i
                    class="fas fa-walking"></i></b>&nbsp;<i class="fas fa-walking"></i>&nbsp;<i
                class="fas fa-walking"></i>&nbsp;<i
                class="fas fa-walking"></i>&nbsp;<i class="fas fa-walking"></i></p>
    <hr>
    <p style="text-align: center; font-size: 0.9em; color: slategrey">Selecione abaixo o item que condiz com sua empresa
        (Só é aceita uma opção) :</p>
    <hr>
</div>
<!-- Menu box -->
<!-- Primeira pergunta -->
<div class="container">
    <div class="card-deck mb-6 text-center">
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <img width="64" src="../_img/passo2_1.png" alt="Imagem passo 2 de 1">
                <p></p>
                <p class="card-title pricing-card-title" style="font-weight: bold">Sem comunicação</p>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                </ul>
                <hr>
                <div style="text-align: center">
                    <label style="font-weight: bold;color: dodgerblue">Escolher :</label><br/>
                    <button type="button" value="0" id="botao1" class="btn btn-primary" onclick="habilitar1();">X</button>      
                </div>
            </div>
        </div>
        <!-- Primeira pergunta -->
        <!-- Segunda pergunta -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <img width="64" src="../_img/passo2_2.png" alt="Imagem passo 2 de 2">
                <p></p>
                <p class="card-title pricing-card-title" style="font-weight: bold">Interfaces de barramento de campo</p>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                </ul>
                <hr>
               <div style="text-align: center">
                    <label style="font-weight: bold;color: dodgerblue">Escolher :</label><br/>
                    <button type="button" value="25" id="botao2" class="btn btn-primary" onclick="habilitar2();">X</button>      
                </div>
            </div>
        </div>
        <!-- Segunda pergunta -->
        <!-- Terceira pergunta -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <img width="64" src="../_img/passo2_3.png" alt="Imagem passo 2 de 3>
                <p></p>
                <p class="card-title pricing-card-title" style="font-weight: bold">Interfaces industriais conectadas a
                    ethernet</p>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                </ul>
                <hr>
                <div style="text-align: center">
                    <label style="font-weight: bold;color: dodgerblue">Escolher :</label><br/>
                    <button type="button" value="50" id="botao3" class="btn btn-primary" onclick="habilitar3();">X</button>      
                </div>
            </div>
        </div>
        <!-- Terceira pergunta -->
        <!-- Quarta pergunta -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <img width="64" src="../_img/passo2_4.png" alt="Imagem passo 2 de 4">
                <p></p>
                <p class="card-title pricing-card-title" style="font-weight: bold">Máquinas com a Internet</p>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                </ul>
                <hr>
                <div style="text-align: center">
                    <label style="font-weight: bold;color: dodgerblue">Escolher :</label><br/>
                    <button type="button" value="75" id="botao4" class="btn btn-primary" onclick="habilitar4();">X</button>      
                </div>
            </div>
        </div>
        <!-- Quarta pergunta -->
        <!-- Quinta pergunta -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <img width="64" src="../_img/passo2_5.png" alt="Imagem passo 2 de 5>
                <p></p>
                <p class="card-title pricing-card-title" style="font-weight: bold">Serviços WEB e máquinas com sofwares
                    M2M</p>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                </ul>
                <hr>
                <label style="font-weight: bold;color: dodgerblue;margin-left: -30%">Responda:</label><br/>
                <div style="text-align: center">
                    <label style="font-weight: bold;color: dodgerblue">Escolher :</label><br/>
                    <button type="button" value="100" id="botao5" class="btn btn-primary" onclick="habilitar5();">X</button>      
                </div>
            </div>
        </div>
    </div>
    <!-- Quinta pergunta -->';

$passo3 = '<!-- Menu box -->
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
<!-- Primeira pergunta -->
<div class="container">
    <div class="card-deck mb-6 text-center">
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <img width="64" src="../_img/passo3_1.png" alt="Imagem passo 3 de 1">
                <p></p>
                <p class="card-title pricing-card-title" style="font-weight: bold">Nenhuma rede na produção com outras
                    unidades de negócios</p>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                </ul>
                <hr>
                <div style="text-align: center">
                    <label style="font-weight: bold;color: dodgerblue">Escolher :</label><br/>
                    <button type="button" value="0" id="botao1" class="btn btn-primary" onclick="habilitar1();">X</button>      
                </div>
            </div>
        </div>
        <!-- Primeira pergunta -->
        <!-- Segunda pergunta -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <img width="64" src="../_img/passo3_2.png" alt="Imagem passo 3 de 2">
                <p></p>
                <p class="card-title pricing-card-title" style="font-weight: bold">Troca de informações via correio e
                    telefone</p>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                </ul>
                <hr>
                <div style="text-align: center">
                    <label style="font-weight: bold;color: dodgerblue">Escolher :</label><br/>
                    <button type="button" value="25" id="botao2" class="btn btn-primary" onclick="habilitar2();">X</button>      
                </div>
            </div>
        </div>
        <!-- Segunda pergunta -->
        <!-- Terceira pergunta -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <img width="64" src="../_img/passo3_3.png" alt="Imagem passo 3 de 3">
                <p></p>
                <p class="card-title pricing-card-title" style="font-weight: bold">Portais baseados na Internet com
                    compartilhamento de dados</p>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                </ul>
                <hr>
                <div style="text-align: center">
                    <label style="font-weight: bold;color: dodgerblue">Escolher :</label><br/>
                    <button type="button" value="50" id="botao3" class="btn btn-primary" onclick="habilitar3();">X</button>      
                </div>
            </div>
        </div>
        <!-- Terceira pergunta -->
        <!-- Quarta pergunta -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <img width="64" src="../_img/passo3_4.png" alt="Imagem passo 3 de 4>
                <p></p>
                <p class="card-title pricing-card-title" style="font-weight: bold">Formatos de dados uniformes e
                    servidores de dados inter-divisionalmente ligados</p>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                </ul>
                <hr>
                <div style="text-align: center">
                    <label style="font-weight: bold;color: dodgerblue">Escolher :</label><br/>
                    <button type="button" value="75" id="botao4" class="btn btn-primary" onclick="habilitar4();">X</button>      
                </div>
            </div>
        </div>
        <!-- Quarta pergunta -->
        <!-- Quinta pergunta -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <img width="64" src="../_img/passo3_5.png" alt="Imagem passo 3 de 5"">
                <p></p>
                <p class="card-title pricing-card-title" style="font-weight: bold">Soluções de TI interdivisionais e
                    totalmente em rede</p>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                </ul>
                <hr>
                <div style="text-align: center">
                    <label style="font-weight: bold;color: dodgerblue">Escolher :</label><br/>
                    <button type="button" value="100" id="botao5" class="btn btn-primary" onclick="habilitar5();">X</button>      
                </div>
            </div>
        </div>
    </div>
    <!-- Quinta pergunta -->';

$passo4 = '
<!-- Menu box -->
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h3 style="font-size: 1.4em; font-weight: bold; color: dodgerblue" class="display-4">Etapa 4 - Infraestrutura de TIC
        na
        produção</h3>
    <p style="font-size: 0.9em; margin-right: 5%; margin-left: 5%" class="lead">A infraestrutura de tecnologias da
        informação e telecomunicações na produção determina as possibilidades de implementar aplicações inovadoras e
        melhorias potenciais para
        e processos organizacionais. Além do uso da central servidores de dados, portais de comunicação baseados na Web
        podem ser usados. Processos automatizados para troca de dados com parceiros externos da cadeia de valor, ou
        melhor, da rede de valor representam etapas adicionais em direção a uma visão da Indústria 4.0. </p>
    <p style="text-align: center; font-size: 0.9em">Etapa : <i class="fas fa-walking"></i>&nbsp;<i
                class="fas fa-walking"></i>&nbsp;<i class="fas fa-walking"></i>&nbsp;<b style="color: dodgerblue"><i
                    class="fas fa-walking"></i></b>&nbsp;<i
                class="fas fa-walking"></i>&nbsp;<i class="fas fa-walking"></i></p>
    <hr>
    <p style="text-align: center; font-size: 0.9em; color: slategrey">Selecione abaixo o item que condiz com sua empresa
        (Só é aceita uma opção) :</p>
    <hr>
</div>
<!-- Menu box -->
<!-- Primeira pergunta -->
<div class="container">
    <div class="card-deck mb-6 text-center">
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <img width="64" src="../_img/passo4_1.png" alt="Imagem passo 4 de 1">
                <p></p>
                <p class="card-title pricing-card-title" style="font-weight: bold">Troca de informações via correio e
                    telefone</p>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                </ul>
                <hr>
                <div style="text-align: center">
                    <label style="font-weight: bold;color: dodgerblue">Escolher :</label><br/>
                    <button type="button" value="0" id="botao1" class="btn btn-primary" onclick="habilitar1();">X</button>      
                </div>
            </div>
        </div>
        <!-- Primeira pergunta -->
        <!-- Segunda pergunta -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <img width="64" src="../_img/passo4_2.png" alt="Imagem passo 4 de 2">
                <p></p>
                <p class="card-title pricing-card-title" style="font-weight: bold">Servidores de dados centrais em
                    produção</p>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                </ul>
                <hr>
                <div style="text-align: center">
                    <label style="font-weight: bold;color: dodgerblue">Escolher :</label><br/>
                    <button type="button" value="25" id="botao2" class="btn btn-primary" onclick="habilitar2();">X</button>      
                </div>
            </div>
        </div>
        <!-- Segunda pergunta -->
        <!-- Terceira pergunta -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <img width="64" src="../_img/passo4_3.png" alt="Imagem passo 4 de 3">
                <p></p>
                <p class="card-title pricing-card-title" style="font-weight: bold">Portais baseados na Internet com
                    compartilhamento de dados</p>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                </ul>
                <hr>
                <div style="text-align: center">
                    <label style="font-weight: bold;color: dodgerblue">Escolher :</label><br/>
                    <button type="button" value="50" id="botao3" class="btn btn-primary" onclick="habilitar3();">X</button>      
                </div>
            </div>
        </div>
        <!-- Terceira pergunta -->
        <!-- Quarta pergunta -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <img width="64" src="../_img/passo4_4.png" alt="Imagem passo 4 de 4">
                <p></p>
                <p class="card-title pricing-card-title" style="font-weight: bold">Troca automatizada de informações</p>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                </ul>
                <hr>
                <div style="text-align: center">
                    <label style="font-weight: bold;color: dodgerblue">Escolher :</label><br/>
                    <button type="button" value="75" id="botao4" class="btn btn-primary" onclick="habilitar4();">X</button>      
                </div>
            </div>
        </div>
        <!-- Quarta pergunta -->
        <!-- Quinta pergunta -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <img width="64" src="../_img/passo4_5.png" alt="Imagem passo 4 de 5">
                <p></p>
                <p class="card-title pricing-card-title" style="font-weight: bold">Fornecedores e clientes são
                    totalmente integrados ao design do processo</p>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                </ul>
                <hr>
                <div style="text-align: center">
                    <label style="font-weight: bold;color: dodgerblue">Escolher :</label><br/>
                    <button type="button" value="100" id="botao5" class="btn btn-primary" onclick="habilitar5();">X</button>      
                </div>
            </div>
        </div>
    </div>
    <!-- Quinta pergunta -->';

$passo5 = '
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
<!-- Primeira pergunta -->
<div class="container">
    <div class="card-deck mb-6 text-center">
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <img width="64" src="../_img/passo5_1.png" alt="Imagem passo 5 de 1">
                <p></p>
                <p class="card-title pricing-card-title" style="font-weight: bold">Sistema de produção rígida e pequena
                    proporção de peças idênticas</p>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                </ul>
                <hr>
                <div style="text-align: center">
                    <label style="font-weight: bold;color: dodgerblue">Escolher :</label><br/>
                    <button type="button" value="0" id="botao1" class="btn btn-primary" onclick="habilitar1();">X</button>      
                </div>
            </div>
        </div>
        <!-- Primeira pergunta -->
        <!-- Segunda pergunta -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <img width="64" src="../_img/passo5_2.png" alt="Imagem passo 5 de 2">
                <p></p>
                <p class="card-title pricing-card-title" style="font-weight: bold">Uso de sistema de produção flexível e
                    peças idênticas</p>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                </ul>
                <hr>
                <div style="text-align: center">
                    <label style="font-weight: bold;color: dodgerblue">Escolher :</label><br/>
                    <button type="button" value="25" id="botao2" class="btn btn-primary" onclick="habilitar2();">X</button>      
                </div>
            </div>
        </div>
        <!-- Segunda pergunta -->
        <!-- Terceira pergunta -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <img width="64" src="../_img/passo5_3.png" alt="Imagem passo 5 de 3">
                <p></p>
                <p class="card-title pricing-card-title" style="font-weight: bold">Sistema de produção flexível e
                    projetos modulares para os produtos</p>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                </ul>
                <hr>
                <div style="text-align: center">
                    <label style="font-weight: bold;color: dodgerblue">Escolher :</label><br/>
                    <button type="button" value="50" id="botao3" class="btn btn-primary" onclick="habilitar3();">X</button>      
                </div>
            </div>
        </div>
        <!-- Terceira pergunta -->
        <!-- Quarta pergunta -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <img width="64" src="../_img/passo5_4.png" alt="Imagem passo 5 de 4">
                <p></p>
                <p class="card-title pricing-card-title" style="font-weight: bold">Produção flexível orientada por
                    componentes de produtos modulares dentro da empresa</p>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                </ul>
                <hr>
                <div style="text-align: center">
                    <label style="font-weight: bold;color: dodgerblue">Escolher :</label><br/>
                    <button type="button" value="75" id="botao4" class="btn btn-primary" onclick="habilitar4();">X</button>      
                </div>
            </div>
        </div>
        <!-- Quarta pergunta -->
        <!-- Quinta pergunta -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <img width="64" src="../_img/passo5_5.png" alt="Imagem passo 5 de 5">
                <p></p>
                <p class="card-title pricing-card-title" style="font-weight: bold">Produção modular orientada por
                    componentes em redes de valor agregado</p>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                </ul>
                <hr>
                <div style="text-align: center">
                    <label style="font-weight: bold;color: dodgerblue">Escolher :</label><br/>
                    <button type="button" value="100" id="botao5" class="btn btn-primary" onclick="habilitar5();">X</button>      
                </div>
            </div>
        </div>
    </div>
    <!-- Quinta pergunta -->';

$passo6 = '
<!-- Menu box -->
<div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
    <h3 style="font-size: 1.4em; font-weight: bold; color: dodgerblue" class="display-4">Etapa 6 - interfaces
        homem-máquina (IHC)</h3>
    <p style="font-size: 0.9em; margin-right: 5%; margin-left: 5%" class="lead">A tendência para bens produzidos
        individualmente e continuamente lotes menores leva a uma crescente complexidade da produção processos. Atingir
        maior eficiência com lotes pequenos é tornando-se assim um fator competitivo decisivo. Nesse sentido, uma
        estrutura modular dos respectivos produtos ou o uso de dispositivos flexíveis instalações de produção com a
        coordenação adequada na respectiva cadeia de valor pode abrir novos potenciais.</p>
    <p style="text-align: center; font-size: 0.9em">Etapa : <i class="fas fa-walking"></i>&nbsp;<i
                class="fas fa-walking"></i>&nbsp;<i class="fas fa-walking"></i>&nbsp;<i
                class="fas fa-walking"></i>&nbsp;<i
                class="fas fa-walking"></i>&nbsp;<b style="color: dodgerblue"><i class="fas fa-walking"></i></b></p>
    <hr>
    <p style="text-align: center; font-size: 0.9em; color: slategrey">Selecione abaixo o item que condiz com sua empresa
        (Só é aceita uma opção) :</p>
    <hr>
</div>
<!-- Menu box -->
<!-- Primeira pergunta -->
<div class="container">
    <div class="card-deck mb-6 text-center">
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <img width="64" src="../_img/passo6_1.png" alt="Imagem passo 6 de 1">
                <p></p>
                <p class="card-title pricing-card-title" style="font-weight: bold">Nenhuma troca de informações entre
                    usuário e máquina</p>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                </ul>
                <hr>
                <div style="text-align: center">
                    <label style="font-weight: bold;color: dodgerblue">Escolher :</label><br/>
                    <button type="button" value="0" id="botao1" class="btn btn-primary" onclick="habilitar1();">X</button>      
                </div>
            </div>
        </div>
        <!-- Primeira pergunta -->
        <!-- Segunda pergunta -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <img width="64" src="../_img/passo6_2.png" alt="Imagem passo 6 de 2">
                <p></p>
                <p class="card-title pricing-card-title" style="font-weight: bold">Uso de interfaces de usuário locais
                </p>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                </ul>
                <hr>
                <div style="text-align: center">
                    <label style="font-weight: bold;color: dodgerblue">Escolher :</label><br/>
                    <button type="button" value="25" id="botao2" class="btn btn-primary" onclick="habilitar2();">X</button>      
                </div>
            </div>
        </div>
        <!-- Segunda pergunta -->
        <!-- Terceira pergunta -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <img width="64" src="../_img/passo6_3.png" alt="Imagem passo 6 de 3">
                <p></p>
                <p class="card-title pricing-card-title" style="font-weight: bold">Monitoramento, controle de produção
                    centralizado e descentralizado</p>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                </ul>
                <hr>
                <div style="text-align: center">
                    <label style="font-weight: bold;color: dodgerblue">Escolher :</label><br/>
                    <button type="button" value="50" id="botao3" class="btn btn-primary" onclick="habilitar3();">X</button>      
                </div>
            </div>
        </div>
        <!-- Terceira pergunta -->
        <!-- Quarta pergunta -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <img width="64" src="../_img/passo6_4.png" alt="Imagem passo 6 de 4">
                <p></p>
                <p class="card-title pricing-card-title" style="font-weight: bold">Uso de interfaces móveis</p>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                </ul>
                <hr>
                <div style="text-align: center">
                    <label style="font-weight: bold;color: dodgerblue">Escolher :</label><br/>
                    <button type="button" value="75" id="botao4" class="btn btn-primary" onclick="habilitar4();">X</button>      
                </div>
            </div>
        </div>
        <!-- Quarta pergunta -->
        <!-- Quinta pergunta -->
        <div class="card mb-4 shadow-sm">
            <div class="card-body">
                <img width="64" src="../_img/passo6_5.png" alt="Imagem passo 6 de 5">
                <p></p>
                <p class="card-title pricing-card-title" style="font-weight: bold">Realidade aumentada e assistida</p>
                <ul class="list-unstyled mt-3 mb-4">
                    <li></li>
                </ul>
                <hr>
                <div style="text-align: center">
                    <label style="font-weight: bold;color: dodgerblue">Escolher :</label><br/>
                    <button type="button" value="100" id="botao5" class="btn btn-primary" onclick="habilitar5();">X</button>      
                </div>
            </div>
        </div>
    </div>
    <!-- Quinta pergunta -->';
