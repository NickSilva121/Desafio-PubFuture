<?php
$timezone = new DateTimeZone('America/Sao_Paulo');
$agora = new DateTime('now', $timezone);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Cadastro de Receita</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="corpo">
	<h1>Cadastro de receita</h1>	
	<br>
	<p id="subtitulo">Preencha as seguintes informações:</p>
	<div class="campo">
		<form action="RecebeForm.php" method="POST">
			<div class="campo">
			<br><label id=ident>Valor</label><br>
			<input type="text" name="valor" required>
			<br><label id="ident">Data de Recebimento</label><br>
			<input type="date" name="datarecebimento" value="<?php echo date('Y-m-d');?>">
			<br><label id="ident">Data de Recebimento Esperado</label><br>
			<input type="date" name="datarecebimentoesperado">
			<br><label id="ident">Descrição</label><br>
			<input type="text" name="descricao">
			<br><label id="ident">Conta</label><br>
			<input type="text" name="conta">
			<br><label id="ident">Tipo de Receita</label><br>
			<select name="tiporeceita">
				<option value="#">...</option>
				<option value="Salário">Salário</option>
				<option value="Presente">Presente</option>
				<option value="Prêmio">Prêmio</option>
				<option value="Outros">Outros</option>
			</select>
			<input id="botao1" class="btn btn-success" type="submit" name="Cadastrar">
		</form>
	</div>	
	<br>
	<a id="bot2" class="btn btn-secondary btn-sm"href="receitas.php">Voltar</a></button>
</body>