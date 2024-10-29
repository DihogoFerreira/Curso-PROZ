<?php
// Passo 1: Criar um array indexado multidimensional
$carros = array(
    array("Toyota", "Corolla", 2020, "Prata"),
    array("Honda", "Civic", 2019, "Preto"),
    array("Ford", "Focus", 2018, "Azul")
);

// Função para exibir o array de carros de forma organizada
function exibirCarros($carros)
{
    foreach ($carros as $index => $carro) {
        echo "Carro " . ($index + 1) . ":<br>";
        echo "Marca: " . $carro[0] . "<br>";
        echo "Modelo: " . $carro[1] . "<br>";
        echo "Ano: " . $carro[2] . "<br>";
        echo "Cor: " . $carro[3] . "<br><br>"; // Adicionando um espaço entre os carros
    }
}

// Chamar a função para exibir os carros
exibirCarros($carros);
//Passo 3: Modificar a cor do segundo carro (Honda Civic para Branco)

$carros[1][3] = "Branco";
echo " <strong>Formatação após mudar a cor  segundo carro para Branco : </strong><br>";
exibirCarros($carros);
echo "<br>";

//Passo 4 :Adicionar um carro novo
$carros[] = array("Chevrolet", "Cruze", 2021, "Vermelho");
echo " <strong>Formatação após adição de um novo carro : </strong><br>";
exibirCarros($carros);
echo "<br>";

//Passo 5: Remover o primeiro carro do array
unset($carros[0]);
echo " <strong>Formatação após deletar o primeiro carro: </strong><br>";
exibirCarros($carros);
echo "<br>";








?>