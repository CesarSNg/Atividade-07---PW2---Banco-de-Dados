<?php

require_once 'conexao.php';

	$con = mysqli_connect($localhost,$user,$password,$db);
	
		if (mysqli_connect_errno($con)){
	
			echo "Erro ao conectar com o banco de dados: " . mysqli_connect_error();
	
		}
        $sql = "DELETE FROM tbUsuarios WHERE codUsu = "2"";
        
        mysqli_query($con,$sql);
            
		echo "Registro excluido!!!";
	
		mysqli_close($con);
	}
?>
