<?php
include ('conexao.php');
$contaorigem= $_POST['contaOrigem'];
$contadestino= $_POST['contaDestino'];
$saldo= $_POST['saldo'];

$sql = "UPDATE contas set SALDO_CONTA = (SALDO_CONTA + '$saldo') WHERE NR_CONTA = '$contadestino';";

$query= mysqli_query($conexao, $sql);

$sql1 = "UPDATE contas set SALDO_CONTA = (SALDO_CONTA - '$saldo') WHERE NR_CONTA = '$contaorigem';";

$query1 = mysqli_query($conexao, $sql1);

if($query and $query1){
	echo"Transferência realizada com sucesso!";
	nl2br("\n");
	mysqli_close($conexao);
	echo nl2br("<a href='contas.php'> \n\n <-- Voltar</a>");
} else{
	echo"Erro na Transferência!";
}
?>