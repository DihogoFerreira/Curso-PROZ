<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello Word</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .container {
            text-align: center;
        }

        h1 {
            color: #333;
            font-size: 3rem;
            margin-bottom: 20px;
        }

        p {
            color: #666;
            font-size: 1.2rem;
        }
    </style>
</head>

<body>
    <div class="container">
        <?php
        $mensagem = "";
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $mensagem = $_POST['mensagem'];
        }
        ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            MENSAGEM : <input type="text" name="mensagem" required><br><br>
            <input type="submit" name="submit" value="Apresentar">
        </form>
        <h1> <?php echo $mensagem; ?> </h1>


        <P>Primeiro exemplo de exercicíos PHP</P>
    </div>


</body>

</html>