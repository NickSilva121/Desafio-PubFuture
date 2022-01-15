<?php
	session_start();
	include('conexao.php');

	$sql = "SELECT * FROM receita ORDER BY valor DESC";

	$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Sistema PubFuture</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="corpo">
	<h1>Tabela de Receitas</h1>
	<br>
	<div>
		<table id="tabela" class="table table-dark table-striped">
			<thead>
				<tr class="table-active">
					<th scope="col">Conta</th>
					<th scope="col">Valor</th>
					<th scope="col">Tipo de Receita</th>
					<th scope="col">Data de Recebimento</th>
					<th scope="col">Data de Recebimento Esperado</th>
					<th scope="col">Descrição</th>
				</tr>
			</thead>
			<tbody>
				<?php
					while ($user_data = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>".$user_data['conta']."</td>";
						echo "<td>".$user_data['valor']."</td>";
						echo "<td>".$user_data['tipoReceita']."</td>";
						echo "<td>".$user_data['dataRecebimento']."</td>";
						echo "<td>".$user_data['dataRecebimentoEsperado']."</td>";
						echo "<td>".$user_data['descricao']."</td>";
						echo "<td><a type='button' class='btn btn-light' href='editaReceita.php?id=".$user_data['ID']."'>Editar</a></td>";
						echo "<td><a id='exclui' type='button' class='btn btn-danger' href='excluiReceita.php?id=".$user_data['ID']."'>Excluir</a></td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>		
	</div>

	<h3>Selecione uma opção</h3>
	<button id= "botao" type="button" class="btn btn-primary"><a class="btn btn-primary" href="cadastroReceita.php" role="button">Cadastrar receita</a></button>
	<br><br>
	<a id="botao" type="button" class="btn btn-secondary" href="../paginainicial.html" role="button">Voltar</a>
</body>
</html>