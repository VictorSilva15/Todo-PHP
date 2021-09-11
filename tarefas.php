<?php
    session_start();

    //Incluindo os códigos dos arquivos banco.php e ajudantes.php
    include "banco.php";
    include "ajudantes.php";

    $exibir_tabela = true;

    if (isset($_GET['nome']) && $_GET['nome'] != "") {
        //Declarando a variável $tarefa como uma array()
        $tarefa = array();

        //capturando o valor de 'nome' e inserindo dentro de tarefa
        $tarefa['nome'] = $_GET['nome'];

        //Descrição
        if(isset($_GET['descricao'])){
            $tarefa['descricao'] = $_GET['descricao'];
        }else{
            $tarefa['descricao'] = '';
        }

        //Prazo
        if(isset($_GET['prazo'])){
            $tarefa['prazo'] = $_GET['prazo'];
        }else{
            $tarefa['prazo'] = '';
        }
        //Prioridade
        $tarefa['prioridade'] = $_GET['prioridade'];

        if(isset($_GET['concluida'])){
            $tarefa['concluida'] = 1;
        }else{
            $tarefa['concluida'] = 0;
        }

        //gravando os novos dados no banco
        gravar_tarefa($conexao, $tarefa);
    }

    //variavel recebendo os valores de retorno da função buscar_tarefa()
    $lista_tarefas = buscar_tarefas($conexao);

    //Criando tarefa vazia para evitar erros no formulário
    $tarefa = [
        'id' => 0,
        'nome' => '',
        'descricao' => '',
        'prazo' => '',
        'prioridade' => 1,
        'concluida' => 0
    ];

    //chamando template.php
    include "template.php";
?>
