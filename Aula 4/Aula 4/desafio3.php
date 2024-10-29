<!DOCTYPE html>
<html lang="PT_BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    .container {
        align-items: center;
        margin-top: 200px;
        margin-bottom: 200px;
        margin-right: 500px;
        margin-left: 550px;
        padding: 22px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 5px rgba(0, 0, 0, 0.6);
        text-align: center;
    }
</style>

<body>
    <div class="container">
        <h1>Número Inteiros com incrementos - ÍMPAR</h1>
        <?php
        // Loop de 500 a 1000
        for ($i = 500; $i <= 1000; $i++) {
            // Verifica se o número é ímpar
            if ($i % 2 != 0) {
                echo $i . "<br>";
            }
        }
        ?>
    </div>
</body>

</html>