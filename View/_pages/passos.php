<?php

$passo1 = '<!-- Primeira pergunta -->
<div class="container">
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
                    <button type="button" value="0" id="botao1" name="resposta1_1" class="btn btn-primary" onclick="habilitar1();">X</button>      
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
                    <button type="button" value="25" id="botao2" class="btn btn-primary" onclick="habilitar2();">X</button>      
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
                    <button type="button" value="50" id="botao3" class="btn btn-primary" onclick="habilitar3();">X</button>      
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
                    <button type="button" value="75" id="botao4" class="btn btn-primary" onclick="habilitar4();">X</button>      
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
                    <button type="button" value="100" id="botao5" class="btn btn-primary" onclick="habilitar5();">X</button>      
                </div>
            </div>
        </div>
    </div>    
    <!-- Quinta pergunta -->';

$passo2 = '<!-- Primeira pergunta -->
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

$passo3 = '<!-- Primeira pergunta -->
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

$passo4 = '<!-- Primeira pergunta -->
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

$passo5 = '<!-- Primeira pergunta -->
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

$passo6 = '<!-- Primeira pergunta -->
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
