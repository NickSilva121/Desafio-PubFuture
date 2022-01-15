<?php
	session_start();
	include('conexao.php');

	$sql = "SELECT * FROM contas ORDER BY INSTITUICAOFINANCEIRA_CONTA DESC";

	$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Sistema PubFuture</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body class="corpo">
	<h1>Tabela de Contas</h1>
	<div class="tabela">
		<table class="table table-dark table-striped">
			<thead>
				<tr class="table-active">
					<th scope="col">Conta</th>
					<th scope="col">Saldo</th>
					<th scope="col">Tipo de Conta</th>
					<th scope="col">Instituição Financeira</th>
				</tr>
			</thead>
			<tbody>
				<?php
					while ($user_data = mysqli_fetch_assoc($result)) {
						echo "<tr class='table-active'>";
						echo "<td>".$user_data['NR_CONTA'];
						echo "<td>".$user_data['SALDO_CONTA'];
						echo "<td>".$user_data['TIPO_CONTA']."</td>";
						echo "<td>".$user_data['INSTITUICAOFINANCEIRA_CONTA']."</td>";
						echo "<td><a type='button' class='btn btn-light' href='editaConta.php?id=".$user_data['ID_CONTA']."'>Editar</a></td>";
						echo "<td><a type='button' class='btn btn-danger' href='excluiConta.php?id=".$user_data['ID_CONTA']."'>Excluir</a></td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>		
	</div>

	<h3>Selecione uma opção</h3>
	<a id="botao" type="button" class="btn btn-primary" href="cadastroConta.html">Cadastrar Conta</a>
	<a id="botao" type="button" class="btn btn-primary" href="transfereConta.php">Transferência de Saldo entre Contas</a>
	<br><br>
	<h3><a type="button" class="btn btn-secondary" href="../paginainicial.html">Voltar</a></h3>
</body>
</html>