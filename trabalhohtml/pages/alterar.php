<?php 
	require_once "conexao.php";

?>
<!DOCTYPE html>
<html>
<head>
	<title>Alterar Informações</title>
	<meta charset="utf-8">
</head>
<body>
	<main id="conteudo">
		<table border="1px" cellpadding="6px" cellspacing="6px">
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
				require_once "conexao.php";

				$cpf= $_GET['cpf'];
				$sql= "SELECT * FROM cliente WHERE cpf='$cpf'";
				$resultado= mysqli_query($conexao,$sql);

				while ($registro= mysqli_fetch_array($resultado)) {
					
					$cpf= $registro['cpf'];
					$nome= $registro['nome'];
					$email= $registro['email'];
					$endereco= $registro['endereco'];
					$contato= $registro['contato'];
					$animal= $registro['animal'];
					$descricao= $registro['descricao'];

					echo ("<form action='alterar_salvar.php' method='POST'>
							<tr>
							
							<td><input type='text' readonly='readonly' name='cpf' value='".$cpf."'></td>
							<td><input type='text' name='nome' value='".$nome."'></td>
							<td><input type='text' name='email' value='".$email."'></td>
							<td><input type='text' readonly='readonly' name='endereco' value='".$endereco."'></td>
							<td><input type='text' readonly='readonly' name='contato' value='".$contato."'></td>
							<td><input type='text' name='animal' value='".$animal."'></td>
							<td><input type='text' name='descricao' value='".$descricao."'></td>

							<td><input type='submit' value='Alterar'></td>
							</tr>
							</form>
							");
				}
			 ?>
		</table><br><br>
		<center><form action="pages/pesquisar.php" method="_GET">
		<button class="button button3">Voltar</button></h2>
		</form></center>
	</main>
</body>
</html>