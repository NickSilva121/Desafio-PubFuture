<!DOCTYPE html>
<html>
<head>
	<title>Sistema PubFuture</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="corpo">
	<?php
		include('conexao.php');
		$id = $_POST['id'];
		$saldo= $_POST['saldo'];
		$conta= $_POST['conta'];
		$tipoconta= $_POST['tipoConta'];
		$if= $_POST['instituicaofinanceira'];

		$sql = "UPDATE contas SET NR_CONTA='$conta', SALDO_CONTA='$saldo', TIPO_CONTA='$tipoconta', INSTITUICAOFINANCEIRA_CONTA='$if' WHERE ID_CONTA='$id';";

		$query= mysqli_query($conexao, $sql);

		if($query){
			echo "<p id='subtitulo'>Conta atualizada com sucesso!</p>";
			mysqli_close($conexao);
			echo "<br><br><a id='but' type='button' class='btn btn-secondary'href='contas.php'>Voltar</a>";
		} 
		else{
			echo "<p id='subtitulo'>Erro no cadastro!</p>";
			echo "<br><br><a id='but' type='button' class='btn btn-secondary'href='contas.php'>Voltar</a>";
		}
	?>
</body>
</html>