<?php
	// Executa o comando SQL
	$query = mysqli_query($con, $SQL);
	if($query){
		echo "Operacao concluida";
		echo "<a href='menu.php'>Voltar</a>";
	} else {
		echo mysqli_error($con);
	}

	mysqli_close($con);
?>