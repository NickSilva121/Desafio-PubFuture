<!DOCTYPE html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<title>Sistema PubFuture</title>
</head>
<body class="corpo">
	<?php
	include ('conexao.php');
	$id = $_GET["id"];

	$sql = "DELETE FROM `receita` WHERE `receita`.`ID` = '$id';";

	$query= mysqli_query($conexao, $sql);

	if($query){
		echo"<p id='subtitulo'>Receita Excluída com sucesso!<p>";
		nl2br("\n");
		mysqli_close($conexao);
		echo "<br><a id='but' type='button' class='btn btn-secondary' href='receitas.php'>Voltar</a>";
	} else{
		echo"Erro!";
		echo "<br><a id='but' type='button' class='btn btn-secondary' href='receitas.php'>Voltar</a>";
	}
	?>
</body>
</html>