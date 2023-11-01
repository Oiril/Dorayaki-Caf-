<?php
$servidor = 'localhost';
$usuario = 'root';
$senha = '';
$database = 'cafeteria_cafe';

$conexao = mysqli_connect($servidor,$usuario,$senha,$database);

if($conexao->connect_errno){
	echo "Erro";
}
else
{
	echo "conexão efetuada com sucesso";
}
?>