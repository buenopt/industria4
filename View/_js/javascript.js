//Validar e exibir resultado
function resultado() {
    var total = 0;
    for (var i = 1; i <= 6; i++) {
        total += parseInt($(document.getElementById("botao" + i + "_" + respostas["passo" + i])).val());
    }
    $("#resultadoFinal").html(parseFloat(total / 6).toFixed(2) + "%");
    $("#btnConcluir").fadeOut();
    $("#divPorcentagem").fadeIn();
    $("#btnImprimir").fadeIn();
    $(".editar").fadeOut();

    //var Dados = respostas.serialize();
    $.ajax({
        url: '../../Controller/ControllerPassos.php',
        type: 'POST',
        dataType: 'Json',
        data: respostas,
        success: function (Dados) {
        }
    })
}

respostas = {};

//Função exibe e mostra div's conforme as etapas
function hide(passo) {
    if (passo < 6 && Object.keys(respostas).length !== 12) {
        $(document.getElementById("etapa" + passo)).fadeOut();
        $(document.getElementById("etapa" + (passo + 1))).fadeIn();
    } else if (passo === 6 || Object.keys(respostas).length === 12) {
        $(document.getElementById("etapa" + passo)).fadeOut();
        $("#resultado").fadeIn();
        for (var i = 1; i <= 6; i++) {
            $(document.getElementsByTagName("answer" + i)).html(
                $(document.getElementById("pergunta" + i + "_" + respostas["passo" + i])).text());
        }
    } else {
        alert("Valor inválido!");
    }
}

//Função de botão, ao clicar sobre 1 botão os outros serão desativados
function habilitar(passo, botao, id) {
    for (var i = 1; i < 6; i++) {
        if (i !== botao) {
            $(document.getElementById("botao" + passo + "_" + i)).attr("disabled", true);
        }
    }
    $(document.getElementById("continuar" + passo)).attr("disabled", false);
    respostas["passo" + passo] = botao;
    respostas["passo" + passo + "_id"] = id;
    console.log(respostas);
}

//Função limpar botões da função disabled, deixando todos os botões habilitados novamente
function limpar(passo) {
    for (var i = 1; i < 6; i++) {
        $(document.getElementById("botao" + passo + "_" + i)).attr("disabled", false);
    }
    $(document.getElementById("continuar" + passo)).attr("disabled", true);
}

//Função editar respostas
function edit(passo) {
    limpar(passo);
    $("#resultado").fadeOut();
    $(document.getElementById("etapa" + passo)).fadeIn();
}
