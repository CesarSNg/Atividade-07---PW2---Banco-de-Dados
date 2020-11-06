<?php
	$localhost = 'localhost';
	$user = 'root';
	$senha = "";
	$db = "dbUsuarios";

		$con = mysqli_connect($localhost,$user,$senha,$db);
	
		if (mysqli_connect_error()){
	
			echo "Erro ao conectar com o banco de dados: " . mysqli_connect_error();
	
		}
		else{

		//echo "Banco de dados conectado. ";
		}

 ?>