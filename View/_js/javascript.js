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

respostas = {};

function hide(div) {
    if (div < 6) {
        $(document.getElementById("etapa" + div)).fadeOut();
        $(document.getElementById("etapa" + (div + 1))).fadeIn();
    } else if (div === 6) {
        $(document.getElementById("etapa" + div)).fadeOut();
        $("#resultado").fadeIn();
        for (var i = 1; i <= 6; i++) {
            var button = $(document.getElementById("botao" + i + "_" + respostas["passo"+i]));
           var teste = button.parent("p").text();
           alert(teste);
        }
    } else {
        alert("Valor inválido!");
    }
}

function habilitar(passo, botao) {
    for (var i = 1; i < 6; i++) {
        if (i !== botao) {
            $(document.getElementById("botao" + passo + "_" + i)).attr("disabled", true);
        }
    }
    respostas["passo" + passo] = botao;
}

function limpar(passo) {
    for (var i = 1; i < 6; i++) {
        $(document.getElementById("botao" + passo + "_" + i)).attr("disabled", false);
    }
}
