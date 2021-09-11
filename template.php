<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Gerenciador de Tarefas</title>
        <link rel="stylesheet" type="text/css" href="tarefa.css"  />
    </head>
    <body>
        <!--Título-->
        <h1>Gerenciador de Tarefas</h1>

        <!--Formulário-->
        <?php include "formulario.php"?>

        <!--Tabela-->
        <?php if ($exibir_tabela) : ?>
            <?php include "tabela.php" ?>
        <?php endif; ?>
    </body>
</html>
