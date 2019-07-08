<?php 
	
	require_once "conexao.php";
	

	$cpf= $_POST["cpf"];
	$sql= "DELETE FROM cliente WHERE cpf='$cpf'";
	
	$resultado= mysqli_query($conexao,$sql) or die("erro: ".mysql_error());
	header('Location:pg_excluir.php');
	
 ?>