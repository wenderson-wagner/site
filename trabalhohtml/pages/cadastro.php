<?php
	session_start();
	require_once "conexao.php";

	date_default_timezone_set('America/Manaus');
	$cpf       = trim($_POST['cpf']);
	$nome       = trim($_POST['nome']);
	$email = trim($_POST['email']);
	$endereco = trim($_POST['endereco']);
	$contato = trim($_POST['contato']);
	$animal = trim($_POST['animal']);
	$descricao = trim($_POST['descricao']);


	$sql = "insert into cliente(cpf,nome, email, endereco, contato, animal,descricao) VALUES ('$cpf', '$nome','$email', '$endereco', '$contato','$animal','$descricao')";
	$resultado = mysqli_query($conexao,$sql);
	$linhas = mysqli_affected_rows($conexao);
	
	if($sql){
			echo"Dados Cadastrados";
		}else{
			echo"erro";

	}
?>