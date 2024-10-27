<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soma de Três Valores</title>
</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #f4f4f4;
        display: flex;

    }

    .container input[type="number"] {
        margin-bottom: 10px;
    }

    .container {
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
        <h2>Soma de Três Valores</h2>
        <form method="post" action="">
            <input type="number" name="valor1" placeholder="Digite o primeiro valor" required><br>
            <input type="number" name="valor2" placeholder="Digite o segundo valor" required><br>
            <input type="number" name="valor3" placeholder="Digite o terceiro valor" required><br>
            <input type="submit" value="Calcular">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $sv1 = $_POST['valor1'];
            $sv2 = $_POST['valor2'];
            $sv3 = $_POST['valor3'];

            $soma = $sv1 + $sv2 + $sv3;
            echo "<p>A soma dos valores $sv1 + $sv2 + $sv3 é <strong><p style='color: red;'> $soma <br</p>";
        }
        ?>
    </div>
</body>

</html>