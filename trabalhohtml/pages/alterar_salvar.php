<?php 
	require_once "conexao.php";

	$cpf= $_POST['cpf'];
	$nome= $_POST['nome'];
	$email= $_POST['email'];
	$endereco= $_POST['endereco'];
	$contato= $_POST['contato'];
	$animal= $_POST['animal'];
	$descricao= $_POST['descricao'];

	$sql= "UPDATE cliente SET cpf='$cpf', nome='$nome', email='$email', endereco='$endereco', contato='$contato', animal='$animal', WHERE cpf='$cpf'";
	$resultado= mysqli_query($conexao,$sql) or die("erro: ".mysql_error());
	echo "alterado com sucesso";
	header('Location:pages/alterar.php');


 ?>