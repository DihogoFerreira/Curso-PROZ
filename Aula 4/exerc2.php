<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initialscale=
1.0">
    <title>Verificar Idade</title>
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

    .criança {
        color: blue;
        font-weight: bold;

    }

    .adolescente {
        color: red;
        font-weight: bold;

    }

    .adulto {
        color: yellowgreen;
        font-weight: bold;

    }

    .idoso {
        color: gray;
        font-weight: bold;

    }
</style>

<body>
    <div class="container">
        <form action="" method="POST">
            <label for="idade">Digite sua idade:</label><br><br>
            <input type="number" id="idade" name="idade" required><br><br>
            <button type="submit">Verificar</button>
        </form>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $idade = $_POST['idade'];
            if ($idade < 15) {
                echo "<p class='criança'> Você é uma CRIANÇA.</p>";
            } elseif ($idade >= 15 && $idade < 18) {
                echo "<p class='criança'> Você é uma ADOLESCENTE.</p>";
            } elseif ($idade >= 18 && $idade < 60) {
                echo "<p class='adulto'> Você é uma ADULTO.</p>";
            } else {
                echo "<p class= 'idoso'> Você é um IDOSO.</p>";
            }
        }
        ?>
    </div>
</body>

</html>