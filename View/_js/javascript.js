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