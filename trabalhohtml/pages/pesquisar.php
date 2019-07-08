<?php 
	require_once "conexao.php";
		
	$pesquisar = $_POST['pesquisar'];
	$sql= "SELECT * FROM cliente WHERE nome LIKE '%$pesquisar%' LIMIT 20";
	$resultado= mysqli_query($conexao,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Pesuisar</title>
	<meta charset="utf-8">
</head>
<body>
	
	<main id="conteudo">
		<center><table border="1px" cellpadding="8px" cellspacing="8px">
			<tr>
				<td><center> CPF </center></td>
				<td><center> NOME </center></td>
				<td><center> EMAIL </center></td>
				<td><center> ENDERECO </center></td>
				<td><center> CONTATO </center></td>
				<td><center> ANIMAL </center></td>
				<td><center> DESCRICAO </center></td>
			</tr>
<?php 	
	
	while ($registro=mysqli_fetch_array($resultado)){
			//echo "<h2>".$registro['nome']."";

					
					$cpf= $registro['cpf'];
					$nome= $registro['nome'];
					$email= $registro['email'];
					$endereco= $registro['endereco'];
					$contato= $registro['contato'];
					$animal= $registro['animal'];
					$descricao= $registro['descricao'];

					echo ("<form action='pesquisar.php' method='POST'>
							<tr>
							<td><center>".$cpf."</center></td>
							<td><center>".$nome."</center></td>
							<td><center>".$email."</center></td>
							<td><center>".$endereco."</center></td>
							<td><center>".$contato."</center></td>
							<td><center>".$animal."</center></td>
							<td><center>".$descricao."</center></td>
							<td><center><a href='alterar.php?cpf=".$cpf."'>Alterar</td></center>
							<td><center><a href='excluir.php?cpf=".$cpf."'>Excluir</td></center>
							</tr></form>
						");
			}
				//echo "<h2><center>Nenhum Registro Encontrado!</center></h2>";
			
?>
</table></center>
</main>
</body>