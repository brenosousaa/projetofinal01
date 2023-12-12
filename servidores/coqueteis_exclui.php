<?php

$id = $_GET['id'];

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

$consulta = "DELETE FROM coqueteis WHERE `coqueteis`.`id` = " . $id;
$result = $conn->query($consulta);
$conn->close();


// Redireciona para INDEX
header('Location: http://localhost/servidores/coqueteis.php');

?>
