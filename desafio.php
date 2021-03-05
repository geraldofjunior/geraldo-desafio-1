<?php
$valor = 0;
$valorCalculado = 0;
if (isset($_POST['valor']) && is_numeric($_POST['valor'])) {
    $display = "block";

    $valor = $_POST['valor'];

    if ($valor < 0) { 
        $valor *= -1;
    }

    for ($i = 0; $i < $valor; $i++) {
        if ($i % 3 == 0 || $i % 5 == 0) {
            $valorCalculado += $i;
        }
    }
} else {
    $display = "none"; 
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Desafio - PHP</title>
    <link rel="stylesheet" type="text/css" href="estilos/estilo.css" />
</head>

<body>
    <form name="calculo" id="form-calculo" action="desafio.php" method="POST">
        <input type="number" id="campo-valor" name="valor" placeholder="Insira aqui o valor" value="<?= $valor != 0 ? $valor : ''; ?>" />
        <button id="botao-calcular">Calcular</button>
        <div id="resultado" style="display: <?=$display;?>">
            <p>A soma de todos os m&uacute;ltiplos de 3 e 5 at&eacute; <span id="valor-original"><?= $valor ?? 'o valor informado acima'; ?></span> &eacute;:</p>
            <p id="campo-resultado"><?=$valorCalculado; ?></p>
        </div>
    </form>
</body>
</html>