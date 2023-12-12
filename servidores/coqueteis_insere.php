<?php

$nome = $_POST['nome'];
$preco = $_POST['preco'];

//echo $nome;


// Salva no banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "bar";

$conn = new mysqli($servidor, $usuario, $senha, $banco);

if ($conn->connect_error) {
    die("Erro: " . $conn->connect_error);
} else {
    //echo "Conectado com o banco!";
}

$consulta = "INSERT INTO `coqueteis` (`id`, `nome`, `preco`) VALUES (NULL, '". $nome ."', '". $preco ."');";
$result = $conn->query($consulta);
$conn->close();


// Redireciona para INDEX
header('Location: http://localhost/servidores/coqueteis.php');


?>
