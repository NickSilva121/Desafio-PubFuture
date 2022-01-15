<?php
session_start();
include_once("conexao.php");
$id = $_GET["id"];
$result_user = "SELECT * FROM receita WHERE ID = '$id';";
$resultado_user = mysqli_query($conexao, $result_user);
$row_usuario = mysqli_fetch_assoc($resultado_user);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Edição de Receita</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="corpo">
	<div class="campo">
		<form action="RecebeFormEdit.php" method="POST">
			<h1>Edição de receita</h1>
			<p id="subtitulo">Preencha as seguintes informações:</p>
			<input type="hidden" name="id" value="<?php echo $row_usuario['ID'];?>"
			<br><label id="ident">Valor</label><br>
			<input type="text" name="valor" value="<?php echo $row_usuario['valor'];?>">
			<br><label id="ident">Data de Recebimento</label><br>
			<input type="date" name="datarecebimento" value="<?php echo $row_usuario['dataRecebimento'];?>">
			<br><label id="ident">Data de Recebimento Esperado</label><br>
			<input type="date" name="datarecebimentoesperado" value="<?php echo $row_usuario['dataRecebimentoEsperado'];?>">
			<br><label id="ident">Descrição</label><br>
			<input type="text" name="descricao" value="<?php echo $row_usuario['descricao'];?>">
			<br><label id="ident">Conta</label><br>
			<input type="text" name="conta" value="<?php echo $row_usuario['conta'];?>">
			<br><label id="ident">Tipo de Receita</label><br>
			<select name="tiporeceita">
				<option value="<?php echo $row_usuario['tipoReceita'];?>"><?php echo $row_usuario['tipoReceita'];?></option>
				<option value="Salário">Salário</option>
				<option value="Presente">Presente</option>
				<option value="Prêmio">Prêmio</option>
				<option value="Outros">Outros</option>
			</select>
			<input id="botao1"type="submit" class="btn btn-success" name="Editar">
		</form>
	</div>	
	<br><br>
	<a id="bot2" type="button" class="btn btn-secondary" href="receitas.php">Voltar</a></button>
</body>
</html>