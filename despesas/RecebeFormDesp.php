<!DOCTYPE html>
<head>
	<link rel="stylesheet" type="text/css" href="estilo.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="corpo">
	<?php
include ('conexao.php');
$valor= $_POST['valor'];
$datapagamento= $_POST['datapagamento'];
$datapagamentoesperado= $_POST['datapagamentoesperado'];
$conta= $_POST['conta'];
$tipodespesa= $_POST['tipodespesa'];

$sql = "INSERT INTO despesas (VALOR_DESP, DATAPAGAMENTO_DESP, DATAPAGAMENTOESPERADO_DESP, CONTA_DESP, TIPO_DESP) VALUES ('$valor', '$datapagamento', '$datapagamentoesperado', '$conta', '$tipodespesa');";

$query= mysqli_query($conexao, $sql);

if($query){
	echo"<p id='subtitulo'>Cadastro feito com sucesso!</p>";
	nl2br("\n");
	mysqli_close($conexao);
	echo nl2br("<br><a id='but' type='button' class='btn btn-secondary' href='despesas.php'>Voltar</a>");
} else{
	echo"Erro no cadastro!";
}
?>
</body>
</html>