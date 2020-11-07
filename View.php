<?php

require_once 'conexao.php';
	
		if (mysqli_connect_errno($con)){
	
			echo "Erro ao conectar com o banco de dados: " . mysqli_connect_error();
	
		}else{
            $sql = "SELECT * FROM tbUsuarios";

			$resultado = mysqli_query($con,$sql);

			echo "<h2>Dados</h2>";

		while($tbUsuarios = mysqli_fetch_array($resultado)){
    
            echo "Codigo:" . " " . $tbUsuarios['codUsu'] . "<br><br/>" . 
		"Nome:" . " " . $tbUsuarios['nomeUsu'] . "<br><br/>" . 
		"Login:" . $tbUsuarios['loginUsu'] . "<br><br/>" . 
        "Senha: " . $tbUsuarios['senhaUsu'] . "<br><br/>" . "<hr>";
        }
        
		mysqli_close($con);
	}
?>
