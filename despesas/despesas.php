<?php
	session_start();
	include('conexao.php');

	$sql = "SELECT * FROM despesas ORDER BY VALOR_DESP DESC";

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
	<h1>Tabela de Despesas</h1>
	<div id="tabela">
		<table class="table table-dark table-striped">
			<thead>
				<tr class="table-active">
					<th scope="col">Conta</th>
					<th scope="col">Valor</th>
					<th scope="col">Tipo de Despesa</th>
					<th scope="col">Data de Pagamento</th>
					<th scope="col">Data de Pagamento Esperado</th>
				</tr>
			</thead>
			<tbody>
				<?php
					while ($user_data = mysqli_fetch_assoc($result)) {
						echo "<tr>";
						echo "<td>".$user_data['CONTA_DESP']."</td>";
						echo "<td>".$user_data['VALOR_DESP']."</td>";
						echo "<td>".$user_data['TIPO_DESP']."</td>";
						echo "<td>".$user_data['DATAPAGAMENTO_DESP']."</td>";
						echo "<td>".$user_data['DATAPAGAMENTOESPERADO_DESP']."</td>";
						echo "<td><a type='button' class='btn btn-light' href='editaDespesa.php?id=".$user_data['ID']."'>Editar</a></td>";
						echo "<td><a type='button' class='btn btn-danger' href='excluiDespesa.php?id=".$user_data['ID']."'>Excluir</a></td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>		
	</div>

	<h3>Selecione uma opção</h3>
	<button id= "botao" type="button" class="btn btn-primary"><a class="btn btn-primary" href="cadastroDespesa.php" role="button">Cadastrar Despesa</a></button>
	<br><br>
	<a id="botao"href="../paginainicial.html" type="button" class="btn btn-secondary"> Voltar</a>
</body>
</html>