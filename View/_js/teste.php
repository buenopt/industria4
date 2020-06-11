<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <script src="https://code.jquery.com/jquery-3.5.1.js"
            integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
</head>
<body>
<?php
//lembre-se deve estar no mesmo diretório.
include_once 'DaoMensagem.php';
$daoMensagem = new DaoMensagem();
$mensagem = $botao1;
?>
<!DOCTYPE html>
<html>
<head lang="pt-br">
    <meta charset="UTF-8">
    <title>Home</title>
</head>
<body>
<h2>testing...</h2>

<!-- Aqui você chama seu print -->
<input type="button" value="X" name="<?php $botao1 = 75 ?>">
<?php $daoMensagem->suaMensagem($botao1); ?>
</body>
</html>

</body>
</html>