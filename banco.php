<?php 

	$bdServidor = '127.0.0.1';
	$bdUsuario = 'sistematarefas';
	$bdSenha = 'Mel00715#$';
	$bdBanco = 'tarefas';
	$bdPorta = '3307';

	$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco, $bdPorta);


	if(!$conexao){
		die("conexao falhou: ". mysqli_connect_error());
	}


	function buscar_tarefas($conexao)
	{
		$sqlBusca = "SELECT * FROM `listatarefas`;";
		$resultado = mysqli_query($conexao, $sqlBusca);

		$tarefas = array();

		while($tarefa = mysqli_fetch_assoc($resultado)){
			array_push($tarefas, $tarefa);
		}
		return $tarefas;
	}

	function gravar_tarefa($conexao, $tarefa)
	{

		$sqlGravar = "
			INSERT INTO `listatarefas`
			(nome, descricao, prioridade, prazo, concluida)
			VALUES
			(
				'{$tarefa['nome']}',
				'{$tarefa['descricao']}',
				'{$tarefa['prioridade']}',
				'{$tarefa['prazo']}',
				'{$tarefa['concluida']}'
			)
		";

		mysqli_query($conexao, $sqlGravar);
	}

	function buscar_tarefa($conexao, $id){
		$sqlBusca = "SELECT * FROM listatarefas WHERE id =". $id;
		$resultado = mysqli_query($conexao, $sqlBusca);
		return mysqli_fetch_assoc($resultado);
	}

	function editar_tarefa($conexao, $tarefa){
		$sqlBusca = "
			UPDATE listatarefas SET
				nome = '{$tarefa['nome']}',
				descricao = '{$tarefa['descricao']}',
				prioridade = {$tarefa['prioridade']},
				prazo ='{$tarefa['prazo']}',
				concluida = {$tarefa['concluida']}
			WHERE id = {$tarefa['id']}
		";
		mysqli_query($conexao, $sqlBusca);
	}


