<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro de Receita</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body class="corpo">
	<div class="campo">
		<form action="RecebeFormDesp.php" method="POST">
			<h1>Cadastro de Despesas</h1>
			<br><label id="ident">Valor</label><br>
			<input type="text" name="valor">
			<br><label id="ident">Data de Pagamento</label><br>
			<input type="date" name="datapagamento" value="<?php echo date('Y-m-d'); ?>">
			<br><label id="ident">Data de Pagamento Esperado</label><br>
			<input type="date" name="datapagamentoesperado">
			<br><label id="ident">Conta</label><br>
			<input type="text" name="conta">
			<br><label id="ident">Tipo de Receita</label><br>
			<select name="tipodespesa">
				<option value="#">...</option>
				<option value="Alimentacao">Alimentação</option>
				<option value="Educacão">Educação</option>
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