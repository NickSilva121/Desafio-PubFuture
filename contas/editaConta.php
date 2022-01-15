<?php
session_start();
include_once("conexao.php");
$id = $_GET["id"];
$result_user = "SELECT * FROM contas WHERE ID_CONTA = '$id';";
$resultado_user = mysqli_query($conexao, $result_user);
$row_usuario = mysqli_fetch_assoc($resultado_user);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Edição de Contas</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="corpo">
	<div class="campo">
		<form action="RecebeFormContaEdit.php" method="POST">
			<h1>Edição de Conta</h1>
			<br><label id="ident">Número da Conta</label><br>
			<input type="hidden" name="id" value="<?php echo $row_usuario['ID_CONTA'];?>">
			<input type="text" name="conta" value="<?php echo $row_usuario['NR_CONTA'];?>">
			<br><label id="ident">Saldo</label><br>
			<input type="text" name="saldo" value="<?php echo $row_usuario['SALDO_CONTA'];?>">
			<br><label id="ident">Tipo de Conta</label><br>
			<select name="tipoConta">
				<option value="<?php echo $row_usuario['TIPO_CONTA'];?>"><?php echo $row_usuario['TIPO_CONTA'];?></option>
				<option value="Carteira">Carteira</option>
				<option value="Conta Corrente">Conta Corrente</option>
				<option value="Poupança">Poupança</option>
			</select>
			<br><label id="ident">Instituição Financeira</label><br>
			<input type="text" name="instituicaofinanceira" value="<?php echo $row_usuario['INSTITUICAOFINANCEIRA_CONTA'];?>">
			<input id="botao" class="btn btn-success" type="submit" name="Editar">
		</form>
	</div>
	<a id="bot2" type="button" class="btn btn-secondary" href="contas.php">Voltar</a>
</body>
</html>