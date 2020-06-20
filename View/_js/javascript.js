//Validar e exibir resultado
function resultado() {
    $("FormCadastro").on('submit', function (event) {
        event.preventDefault();
        var Dados = $(this).serialize();

        $.ajax({
            url: '../_pages/passo1.php',
            type: 'POST',
            dataType: 'html',
            data: Dados,
            success: function (Dados) {
                $('.Resultado').show().html(Dados);
            }
        })
    });
}

function iniciarPasso1() {
    $(document).ready(function () {
        $("#etapa2,#etapa3,#etapa4,#etapa5,#etapa6").hide();
        $("#etapa1").show();
    });
}

function ocultarP1() {
    $(document).ready(function () {
        $("#etapa1").hide();
        $("#etapa2").show();
    });
}

function ocultarP2() {
    $(document).ready(function () {
        $("#etapa2").hide();
        $("#etapa3").show();
    });
}

function ocultarP3() {
    $(document).ready(function () {
        $("#etapa3").hide();
        $("#etapa4").show();
    });
}

function ocultarP4() {
    $(document).ready(function () {
        $("#etapa4").hide();
        $("#etapa5").show();
    });
}

function ocultarP5() {
    $(document).ready(function () {
        $("#etapa5").hide();
        $("#etapa6").show();
    });
}

function ocultarP6() {
    $(document).ready(function () {
        $("#etapa6").hide();
    });
}


function habilitar(botao) {
    for (var i = 1; i < 6; i++) {
        if (i !== botao) {
            $(document.getElementById("botao" + i)).attr("disabled", true);
        }
    }
}

//Botão de ativação e desativação de escolha
function habilitar1() {
    $("#botao2,#botao3,#botao4,#botao5").attr("disabled", true);
}

function habilitar2() {
    $("#botao1,#botao3,#botao4,#botao5").attr("disabled", true);
}

function habilitar3() {
    $("#botao1,#botao2,#botao4,#botao5").attr("disabled", true);
}

function habilitar4() {
    $("#botao1,#botao2,#botao3,#botao5").attr("disabled", true);
}

function habilitar5() {
    $("#botao1,#botao2,#botao3,#botao4").attr("disabled", true);
}

function limpar() {
    $("#botao1,#botao2,#botao2,#botao3,#botao4,#botao5").removeAttr("disabled");
}