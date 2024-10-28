<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=
1.0">
    <title>Verificar Número</title>
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

    .container input[type="number"] {
        margin-bottom: 10px;
    }

    .positivo {
        color: blue;
        font-weight: bold;

    }

    .negativo {
        color: red;
        font-weight: bold;

    }

    .zero {
        color: yellowgreen;
        font-weight: bold;

    }
</style>

<body>
    <div class="container">
        <form action="" method="POST">
            <label for="numero">Digite um número:<br><br></label>
            <input type="number" id="numero" name="numero" required><br>
            <button type="submit">Verificar</button><br><br>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $numero = $_POST['numero'];
            // Verifique se o número é positivo, negativo ou zero.
            if ($numero > 0) {
                echo "<p class='positivo'>O número é POSITIVO!</p>";
            } elseif ($numero < 0) {
                echo "<p class='negativo'>O número é NEGATIVO!</p>";
            } else {
                echo "<p class='zero'>O número é ZERO!</p>";
            }
        }
        ?>
    </div>
</body>

</html>
