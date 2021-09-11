<?php 

function traduz_prioridade($prioridade){

	return $prioridade == "1" 
	? "Baixa" : ($prioridade == "2" 
	? "Média" : "Alta");
}

function traduz_concluida($concluida){
	if($concluida == 1){
		return "Sim";
	}

	return "Não";
}

function traduz_data_para_exibir($data){

	if($data == '' OR $data == '0000-00-00'){
		return "Indefinido";
	}

	$dados = explode('-', $data);

	$data_exibir = "{$dados[2]}/{$dados[1]}/{$dados[0]}";

	return $data_exibir;
}