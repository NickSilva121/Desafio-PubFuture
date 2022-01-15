<?php
	$dbHost = "Localhost";
	$dbUsername = "root";
	$dbPassword = "";
	$banco = "pubfuture";
	$conexao= mysqli_connect($dbHost, $dbUsername, $dbPassword, $banco);

	if (!$conexao){
		die("Connection Failed: " . mysqli_connect_error());
	}
?>