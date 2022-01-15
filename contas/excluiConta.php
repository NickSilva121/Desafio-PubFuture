<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Sistema PubFuture</title>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="corpo">
	<?php
		include ('conexao.php');
		$id = $_GET["id"];

		$sql = "DELETE FROM `contas` WHERE `contas`.`ID_CONTA` = '$id';";

		$query= mysqli_query($conexao, $sql);

		if($query){
			echo"<p id='subtitulo'>Conta Excluída com sucesso!</p>";
			mysqli_close($conexao);
			echo "<a id='but' class='btn btn-secondary btn-sm' href='contas.php'>Voltar</a>";
		} 
		else{
			echo"<p id='subtitulo'>Erro!</p>";
			echo "<a id='but' class='btn btn-secondary btn-sm' href='contas.php'>Voltar</a>";
		}
	?>
</body>
</html>
