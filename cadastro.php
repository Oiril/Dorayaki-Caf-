<?php

$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$database = 'Cafe';

$conn = new mysqli ($servidor,$usuario,$senha,$database);

if ($conn->connect_error){
	die("Conexão falhou".$conn->connect_error);
}

$nome = $_POST['nome'];
$email = $_POST['email'];
$senha = password_hash($_POST['senha'], PASSWORD_BCRYPT);

$sql = "INSERT INTO cadastro (nome, email, senha) VALUES ('$nome','$email','$senha')";

if ($conn->query($sql) === TRUE){
	echo "Cadastro realizado com sucesso! <a href='cafeteria.html'>Cafeteria<a>.";
} else {
	echo "Erro".$sql."<br>".$conn->error;
}

$conn->close();

?>