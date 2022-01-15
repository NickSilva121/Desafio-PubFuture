<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Sistema PubFuture</title>
</head>
<body class="corpo">
	<?php
		include ('conexao.php');
		$conta= $_POST['conta'];
		$saldo= $_POST['saldo'];
		$tipoconta= $_POST['tipoConta'];
		$instituicaofinanceira= $_POST['instituicaofinanceira'];

		$sql = "INSERT INTO contas (NR_CONTA, SALDO_CONTA, TIPO_CONTA, INSTITUICAOFINANCEIRA_CONTA) VALUES ('$conta', '$saldo', '$tipoconta', '$instituicaofinanceira');";

		$query= mysqli_query($conexao, $sql);

		if($query){
			echo"<p id=subtitulo>Cadastro feito com sucesso!</p";
			mysqli_close($conexao);
			echo "<br><br><br><a id='but' type='button' class='btn btn-secondary' href='contas.php'>Voltar</a>";
		} else{
			echo"Erro no cadastro!";
			echo "<br><br><br><a id='but' type='button' class='btn btn-secondary' href='contas.php'>Voltar</a>";
		}
	?>
</body>
</html>
