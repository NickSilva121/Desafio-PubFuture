<?php
session_start();
include_once("conexao.php");
$id = $_GET["id"];
$result_user = "SELECT * FROM despesas WHERE ID = '$id';";
$resultado_user = mysqli_query($conexao, $result_user);
$row_usuario = mysqli_fetch_assoc($resultado_user);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Edição de Despesa</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">	
</head>
<body class="corpo">
	<div class="campo">
		<form action="RecebeFormDespEdit.php" method="POST">
			<h1>Edição de Despesas</h1>
			<input type="hidden" name="id" value="<?php echo $row_usuario['ID'];?>">
			<br><label id="ident">Valor</label><br>
			<input type="text" name="valor" value="<?php echo $row_usuario['VALOR_DESP'];?>">
			<br><label id="ident">Data de Pagamento</label><br>
			<input type="date" name="datapagamento" value="<?php echo $row_usuario['DATAPAGAMENTO_DESP'];?>">
			<br><label id="ident">Data de Pagamento Esperado</label><br>
			<input type="date" name="datapagamentoesperado" value="<?php echo $row_usuario['DATAPAGAMENTOESPERADO_DESP'];?>">
			<br><label id="ident">Conta</label><br>
			<input type="text" name="conta" value="<?php echo $row_usuario['CONTA_DESP'];?>">
			<br><label id="ident">Tipo de Despesa</label><br>
			<select name="tipodespesa">
				<option value="<?php echo $row_usuario['TIPO_DESP'];?>"><?php echo $row_usuario['TIPO_DESP'];?></option>
				<option value="Alimentação">Alimentação</option>
				<option value="Educação">Educação</option>
				<option value="Lazer">Lazer</option>
				<option value="Moradia">Moradia</option>
				<option value="Roupa">Roupa</option>
				<option value="Saúde">Saúde</option>
				<option value="Transporte">Transporte</option>
				<option value="Outros">Outros</option>
			</select>
			<input id="botao" type="submit" class="btn btn-success" name="Cadastrar">
			<br><br>
			<a id="bot2" type="button" class="btn btn-secondary" href="despesas.php">Voltar</a>
		</form>
	</div>
</body>