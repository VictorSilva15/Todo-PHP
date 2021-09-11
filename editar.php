<?php
	session_start();

	include "banco.php";
	include "ajudantes.php";

	$exibir_tabela = false;


	if(array_key_exists('nome', $_GET) && $_GET['nome'] != '') {
		$tarefa = [];

		$tarefa['id'] = $_GET['id'];
		
		$tarefa['nome'] = $_GET['nome'];

		//Tarefas
		if(array_key_exists('descricao', $_GET)) {
			$tarefa['descricao'] = $_GET['descricao'];
		}else{
			$tarefa['descricao'] = '';
		}

		//Prazo
		if(array_key_exists('prazo', $_GET)){
			$tarefa['prazo'] = $_GET['prazo'];
		}else{
			$tarefa['prazo'] = '';
		}

		$tarefa['prioridade'] = $_GET['prioridade'];

		if(array_key_exists('concluida', $_GET)){
			$tarefa['concluida'] = 1;
		}else{
			$tarefa['concluida'] = 0;
		}

		editar_tarefa($conexao, $tarefa);
		header('Location: tarefas.php');
		die();
	}

	$tarefa = buscar_tarefa($conexao, $_GET['id']);

	require "template.php";


?>