<?php
    
    require_once 'conexao.php';

		if (mysqli_connect_errno($con)){
	
			echo "Erro ao conectar com o banco de dados: " . mysqli_connect_error();
	
		}else{

        $sql1 = "UPDATE tbUsuarios SET nome = "CSNG" WHERE nome = "César Santana Ng" ";
        
        mysqli_query($con,$sql1);
            
        $sql2 = "SELECT * FROM tbClientes WHERE nome = "CSNG"";

        $resultado = mysqli_query($con,$sql2);

			echo "<h2>Dados</h2>";

		while($tbClientes = mysqli_fetch_array($resultado)){

		echo "Nome:" . " " . $tbClientes['nome'] . "<br><br/>" . "Tel:" . $tbClientes['telCel'] . "<hr/>" . "<br><br/>";
		}
	
		mysqli_close($con);
	}
?>