<?php

// Básico

// Declaração de variáveis
$nome = "João";
$idade = 19;
$altura = 1.90;

// Condição básica
if ($var >= 10) {
    echo "Hello, World";
}

// Saída com echo
echo "Meu nome é $nome, idade: $idade";

// Constantes
define("NOME", "Carlos");
echo NOME;

// Arrays
$carro = array("Gol", "Civic", "i320", 12, 17.9, true);

print_r($carro);

// Intermediário

// Variáveis dinâmicas
$bebida = "refri";
$$bebida = "Coca"; // $refri agora é "Coca"

// Condição ternária
echo ($var >= 10) ? "Sim" : "Não";

// Uso de tags HTML com echo
echo "Oi <br> thal";

// Verificação de tipo
if (is_string($nome)) {
    // Faz algo se $nome for uma string
}

// Complexo

// Switch case
switch ($escolha) {
    case 1:
        escolha1();
        break;
    case 2:
        escolha2();
        break;
}

// Funções
function escolha1() {
    // Faça algo para a escolha 1
}

function escolha2() {
    // Faça algo para a escolha 2
}

// Array Multidimensional

$bandas = array(
    "Brasileiras" => array("melhor" => "Raimundos", "segunda" => "Mamonas"),
    "Americanas" => array("melhor" => "CCR", "segunda" => "Aerosmith"),
    "Britânicas" => array("melhor" => "The Beatles", "segunda" => "Queen")    
);

echo $bandas["Brasileiras"]["segunda"];

foreach ($bandas["Brasileiras"] as $indice => $valor) {
    echo $indice . ":" . $valor . "<br>";
}

// Array Associativo

$pessoa = array("nome" => "Carlos", "Idade" => 19, "altura" => 1.85);

foreach ($pessoa as $indice => $valor) {
    echo $indice . ":" . $valor . "<br>";
}

// Funções para Arrays

$carros = array("Gol", "Civic", "i320");

// Verifica se é um array
if (is_array($carros)) {
    // Faz algo se for um array
}

// Verifica se um valor está no array
if (in_array("Gol", $carros)) {
    // Faz algo se "Gol" estiver no array $carros
}

// Retorna as chaves de um array
$keys = array_keys($pessoa);

// Retorna os valores de um array
$values = array_values($pessoa);

// Junta dois arrays
$merged_array = array_merge($bandas["Brasileiras"], $bandas["Americanas"]);

// Exclui a última posição do array
array_pop($carros);

// Exclui a primeira posição do array
array_shift($carros);

// Adiciona um valor ao início do array
array_unshift($carros, "Fusca");

// Adiciona um valor ao final do array
array_push($carros, "Ferrari");

// Mescla um array de chaves com um array de valores
$combined_array = array_combine($keys, $values);

// Faz a soma dos valores de um array
$array_sum = array_sum($array);

// Transforma uma string em um array
$string_to_array = explode(" ", "Transforma esta string");

// Transforma um array em uma string
$array_to_string = implode(", ", $array);

// Strings

// Transforma uma string em maiúsculas
$uppercase = strtoupper("string");

// Transforma uma string em minúsculas
$lowercase = strtolower("STRING");

// Retorna uma parte de uma string
$substring = substr("String", 0, 3);

// Preenche uma string para um tamanho específico
$padded_string = str_pad("String", 10, "-");

// Repete uma string várias vezes
$repeated_string = str_repeat("Palavra ", 3);

// Retorna o tamanho de uma string
$string_length = strlen("String");

// Substitui uma parte de uma string por outra
$replaced_string = str_replace("Original", "Troca", "String Original");

// Retorna a posição de uma palavra em uma string
$string_position = strpos("String", "tri");

// Acessando Variáveis Globais

// Para acessar todas as variáveis globais em um array
echo $GLOBALS['x'] + $GLOBALS['y'];

// Consultando Dados do Servidor
// Usado para consultar dados do script, consulte a documentação para mais detalhes
echo $_SERVER['PHP_SELF'] . "<br>";

// Recolhendo Dados de Formulários (POST)
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Acessando dados do formulário
    $nome = $_POST['nome'];
    $email = $_POST['email'];

    echo "Seu nome é $nome";
}

// Recolhendo Dados de Formulários (GET)
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    // Acessando dados da URL
    echo $_GET['nome'] . "<br>" . $_GET['idade'];
}

// Filtros de Validação

// Para trabalhar com formulários dentro do próprio index
echo "<form action=\"" . $_SERVER['PHP_SELF'] . "\">";

// Filtros de Sanitização

// Usados para limpar variáveis

// Elimina caracteres especiais do HTML
$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);

// Elimina tudo que não é um número inteiro
$idade = filter_input(INPUT_GET, 'idade', FILTER_SANITIZE_NUMBER_INT);

// Elimina o que não faz parte de um email válido
$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);

// Elimina o que não faz parte de uma URL válida
$url = filter_input(INPUT_POST, 'url', FILTER_SANITIZE_URL);

?>

<!-- Formulário para Método POST -->
<html>
<body>
<form action="dados.php" method="POST">
    Nome: <input type="text" name="nome">
    Email: <input type="email" name="email">
    <input type="submit" name="enviar">
</form>

<!-- Link para Método GET -->
<a href="dados.php?nome=Carlos&idade=19">Enviar dados</a>
</body>
</html>

?>
