<!DOCTYPE html>

<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="corpo">
	<?php
	include ('conexao.php');
	$valor= $_POST['valor'];
	$datarecebimento= $_POST['datarecebimento'];
	$datarecebimentoesperado= $_POST['datarecebimentoesperado'];
	$descricao= $_POST['descricao'];
	$conta= $_POST['conta'];
	$tiporeceita= $_POST['tiporeceita'];

	$sql = "INSERT INTO receita (valor, dataRecebimento, dataRecebimentoEsperado, descricao, conta, tipoReceita) VALUES ('$valor', '$datarecebimento', '$datarecebimentoesperado', '$descricao', '$conta', '$tiporeceita');";

	$query= mysqli_query($conexao, $sql);

	if($query){
		echo"<p id='subtitulo'>Cadastro feito com sucesso!</p>";
		nl2br("\n");
		mysqli_close($conexao);
		echo "<br><br><a id='but' type='button' class='btn btn-secondary'href='receitas.php'>Voltar</a>";
	}
	else{
		echo"Erro no cadastro!";
		echo "<a type='button' class='btn btn-secondary' href='receitas.php'>Voltar</a>";
	}
	?>
</body>
</html>