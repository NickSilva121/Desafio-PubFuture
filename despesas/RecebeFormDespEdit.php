<!DOCTYPE html>
<head>
	<title>Sistema PubFuture</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilo.css">
</head>
<body class="corpo">
	<?php
		include ('conexao.php');
		$id = $_POST['id'];
		$valor= $_POST['valor'];
		$datapagamento= $_POST['datapagamento'];
		$datapagamentoesperado= $_POST['datapagamentoesperado'];
		$conta= $_POST['conta'];
		$tipodespesa= $_POST['tipodespesa'];

		$sql = "UPDATE despesas SET VALOR_DESP='$valor', DATAPAGAMENTO_DESP='$datapagamento', DATAPAGAMENTOESPERADO_DESP= '$datapagamentoesperado', CONTA_DESP='$conta', TIPO_DESP='$tipodespesa' WHERE ID='$id';";

		$query= mysqli_query($conexao, $sql);

		if($query){
			echo"<p id='subtitulo'>Cadastro feito com sucesso!</p>";
			mysqli_close($conexao);
			echo nl2br("<br><a id='but' type='button' class='btn btn-secondary' href='despesas.php'>Voltar</a>");
		} else{
			echo"Erro no cadastro!";
		}
	?>
</body>
</html>