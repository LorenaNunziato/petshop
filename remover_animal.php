<?php
	$pront = $_GET['pront'];
	
	include('cabecalho_conexao.php');
	
	$SQL = "DELETE FROM animal WHERE id=$pront";
	//echo SQL;

	include('rodape_conexao.php');
	
	header('location:cons_todos_animais.php');
?>