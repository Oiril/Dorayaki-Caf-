<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$database = 'Cafe';

$conn = new mysqli($servidor,$usuario,$senha,$database);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Obtenha os dados do formulário
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "SELECT * FROM cadastro WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows == 1) {
    $row = $result->fetch_assoc();
    if (password_verify($senha, $row['senha'])) {
        echo "Login bem-sucedido! <a href='cafeteria.html'>Redirecionando<a>.";
        // Você pode redirecionar o usuário para outra página aqui.
    } else {
        echo "Senha e/ou Email incorretos";
    }
}

$conn->close();
?>