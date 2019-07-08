<?php 
	require_once "conexao.php";
	

?>
<body>
	<center><form action="pg_pesquisar.php" method="_GET">
		<button class="button button3">Voltar Pesquisar</button></h2>
	</form></center><br><br>
	<main id="conteudo">
		<table border="1px" cellpadding="6px" cellspacing="6px">
			<tr>
				<td><center> cpf </center></td>
				<td><center> nome </center></td>
				<td><center> email </center></td>
				<td><center> endereco </center></td>
				<td><center> contato </center></td>
				<td><center> animal </center></td>
				<td><center> descricao </center></td>
			</tr>
			<?php 
				require_once "conexao.php";

				
				$sql= "SELECT * FROM cliente";
				$resultado= mysqli_query($conexao,$sql);

				while ($registro= mysqli_fetch_array($resultado)) {
					
					$cpf= $registro['cpf'];
					$nome= $registro['nome'];
					$email= $registro['email'];
					$endereco= $registro['endereco'];
					$contato= $registro['contato'];
					$animal= $registro['animal'];
					$descricao= $registro['descricao'];

					echo ("<form action='excluir.php' method='POST'>
							<tr>
							
							<td><input type='text' readonly='readonly' readonly='readonly' name='cpf' value='".$cpf."'></td>
							<td><input type='text' readonly='readonly' name='nome' value='".$nome."'></td>
							<td><input type='text' readonly='readonly' name='email' value='".$email."'></td>
							<td><input type='text' readonly='readonly' name='endereco' value='".$endereco."'></td>
							<td><input type='text' readonly='readonly' name='contato' value='".$contato."'></td>
							<td><input type='text' readonly='readonly' name='animal' value='".$animal."'></td>
							<td><input type='text' readonly='readonly' name='descricao' value='".$descricao."'></td>
							<td><input class='active' type='submit' value='Excluir'></td>
							</tr>
							</form>
							");
				}
			 ?>
		</table>
	</main>
</body>
</html>