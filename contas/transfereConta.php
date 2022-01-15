<?php
	session_start();
	include('conexao.php');

	$sql = "SELECT * FROM contas ORDER BY INSTITUICAOFINANCEIRA_CONTA DESC";

	$result = $conexao->query($sql);
?>

<!DOCTYPE html>
<head>
	<title>Transferência de Conta</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="corpo">
	<h1>Transferência entre Contas</h1>
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
						echo "<tr>";
						echo "<td>".$user_data['NR_CONTA'];
						echo "<td>".$user_data['SALDO_CONTA'];
						echo "<td>".$user_data['TIPO_CONTA']."</td>";
						echo "<td>".$user_data['INSTITUICAOFINANCEIRA_CONTA']."</td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>		
	</div>
	<div class="campo">
		<form action="RecebeTransf.php" method="POST">
			<br><label id="ident">Conta de Origem</label><br>
			<input type="text" name="contaOrigem">
			<br><label id="ident">Conta de Destino</label><br>
			<input type="text" name="contaDestino">
			<br><label id="ident">Saldo a ser transferido</label><br>
			<input type="text" name="saldo">
			<input class="btn btn-success" id="botao" type="submit" name="Transferir">
		</form>
	</div>
	<br>
	<a id="bot2" type="button" class="btn btn-secondary" href="contas.php">Voltar</a>
</body>