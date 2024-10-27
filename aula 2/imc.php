<?php
// Declaração e atribuição de uma variável do tipo float.
$peso = 78.5;

// Mensagem baseada no peso.
if ($peso >= 70.0) {
    $mensagem = "Você está acima do peso recomendado.";
} elseif ($peso >= 50.0 && $peso < 70.0) {
    $mensagem = "Você está dentro do recomendado.";
} else {
    $mensagem = "Você está abaixo do recomendado.";
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Peso</title>
</head>

<body>
    <h1>Verificação de Peso</h1>
    <p>Seu peso é: <?php echo $peso; ?> kg</p>
    <p><?php echo $mensagem; ?></p> <!-- echo - funciona como um "print" do Python, um "alert" do JavaScript. -->
</body>

</html>