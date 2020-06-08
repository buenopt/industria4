//Validar e exibir resultado
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

function habilitar1() {
    $("#botao2,#botao3,#botao4,#passo1_1").attr("disabled", true);
}

function habilitar2() {
    $("#botao1,#botao3,#botao4").attr("disabled", true);
}

function habilitar3() {
    $("#botao1,#botao2,#botao4").attr("disabled", true);
}

function habilitar4() {
    $("#botao1,#botao2,#botao3").attr("disabled", true);
}

function limpar() {
    $("#botao1,#botao2,#botao2,#botao3,#botao4").removeAttr("disabled");
}