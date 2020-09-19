<?php

	$nome = $_POST['nome'];
	$idade = $_POST['idade'];
	$nome_dono = $_POST['nome_dono'];
	$telefone = $_POST['telefone'];
	
	include('cabecalho_conexao.php');
	
	$SQL = "INSERT INTO animal (nome, idade, nome_do_dono, telefone) 
			VALUE ('$nome', $idade, '$nome_dono', $telefone)";
			
	$texto = "Aluno Inserido com Sucesso<br>";
	
	include('rodape_conexao.php');
?>