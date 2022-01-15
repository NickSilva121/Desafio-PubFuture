<?php
	session_start();
	include('conexao.php');
	$id =$_GET["id"];
	$sql1 = "SELECT * FROM contas WHERE ID_CONTA != $id";
	$result = $conexao->query($sql1);

	$sql2 = "SELECT * FROM contas WHERE ID_CONTA = $id";
	$result2 = $conexao->query($sql2);
?>

<!DOCTYPE html>
<head>
	<title>Transferência de Conta</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<h1>Transferência entre Contas</h1>
	<h2>Selecione a conta destino</h2>
	<div>
		<table class="table">
			<thead>
				<tr>
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
						echo "<td><a href='conta.Destino.php?id=".$user_data['ID_CONTA']."'>Transferir</a></td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>		
	</div>
	<div>
		<table class="table">
			<thead>
				<tr>
					<th scope="col">Conta</th>
					<th scope="col">Saldo</th>
					<th scope="col">Tipo de Conta</th>
					<th scope="col">Instituição Financeira</th>
				</tr>
			</thead>
			<tbody>
				<?php
					echo "<h3>Conta Origem</h3>";
					while ($user_data1 = mysqli_fetch_assoc($result2)){
						echo "<tr>";
						echo "<td>".$user_data1['NR_CONTA'];
						echo "<td>".$user_data1['SALDO_CONTA'];
						echo "<td>".$user_data1['TIPO_CONTA']."</td>";
						echo "<td>".$user_data1['INSTITUICAOFINANCEIRA_CONTA']."</td>";
						echo "<td><a href='contaDestino.php?id=".$user_data1['ID_CONTA']."'>Transferir</a></td>";
						echo "</tr>";
					}
				?>
			</tbody>
		</table>		
	</div>
	<h3><a href="contas.php"><-- Voltar</h3>
</body>