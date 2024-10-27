<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificação de Média</title>
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
        <h2>Verificação de Média</h2>
        <form method="post" action="">
            <label for="nota1">Nota 1:</label>
            <input type="number" name="nota1" id="nota1" placeholder="Digite a nota 1" required><br>

            <label for="nota2">Nota 2:</label>
            <input type="number" name="nota2" id="nota2" placeholder="Digite a nota 2" required><br>

            <label for="nota2">Nota 3:</label>
            <input type="number" name="nota3" id="nota3" placeholder="Digite a nota " required><br>
            <div class="result">
                <input type="submit" value="Calcular Média">
            </div>

            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $nota1 = $_POST['nota1'];
                $nota2 = $_POST['nota2'];
                $nota3 = $_POST['nota3'];


                $media = ($nota1 + $nota2 + $nota3) / 3;
                echo "<p>A média do aluno é: <p style='color: red;'>$media   <br</p>";


            }
            ?>



        </form>
    </div>


</body>

</html>