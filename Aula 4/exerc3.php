<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=
1.0">
    <title>Dia da Semana</title>
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

    .echo {
        font-weight: bold;


    }
</style>

<body>
    <div class="container">
        <form action="" method="POST">
            <label for="dia">
                <h3>Digite um número (1 a 7):</h3>
            </label><br>
            <input type="number" id="dia" name="dia" required>
            <button type="submit">Verificar</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $dia = $_POST['dia'];
            switch ($dia) {
                case 1:
                    echo "<p style='color: red;'> Domingo";
                    break;
                case 2:
                    echo "<p style='color: blue;'>Segunda-Feira";
                    break;
                case 3:
                    echo "<p style='color: green;'>Terça-Feira";
                    break;
                case 4:
                    echo "<p style='color: gray;'> Quarta-Feira";
                    break;
                case 5:
                    echo " <p style='color: aqua;'> Quinta-feira";
                    break;
                case 6:
                    echo "<p style='color: purple;'>Sexta-Feira";
                    break;
                case 7:
                    echo "<p style='color: gold;'>Sábado";
                    break;

                // Continue com os outros dias da semana
                default:
                    echo "Número inválido.";
                    break;
            }
        }
        ?>
    </div>
</body>

</html>