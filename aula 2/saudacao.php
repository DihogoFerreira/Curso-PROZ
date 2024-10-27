<?php
// Declaração e atribuição de uma variável de string.
$nome = "Dihogo";

// Concatenação de strings usando o operador ".".
$saudacao = " Olá,Sr. " . $nome . " Seja bem-vindo!";

// Interpolação de strings dentro de uma string delimitada por aspas duplas.
$saudacao_interpolada = " Olá,Sr. $nome, Seja bem-vindo!";
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saudação</title>
</head>

<body>
    <h1>Saudação</h1>
    <p><?php echo $saudacao; ?></p>
    <p><?php echo $saudacao_interpolada; ?></p>
</body>

</html>