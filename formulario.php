<form>
    <input type="hidden" name="id" value="<?php echo $tarefa['id'];?>"/>
    <fieldset>
        <legend>Nova tarefa</legend>

        <!--Tarefa-->
        <label class="inputs">
            Tarefa:
            <input class="input" type="text" name="nome"
            value="<?php echo $tarefa['nome'];?>"/>
        </label>

        <!--Descrição-->
        <label>
            Descrição (Opicional):
            <textarea name="descricao">
                <?php echo $tarefa['descricao']?>
            </textarea>
        </label>

        <!--Prazo-->
        <label class="inputs">
            Prazo (Opicional):
            <input class="input" type="date" name="prazo"
            value="<?php echo traduz_data_para_exibir($tarefa['prazo']);?>"/>
        </label>

        <!-- Campo de prioridade-->
        <fieldset>
            <legend>Prioridade:</legend>
            <label class="inputs">
                <input type="radio" name="prioridade" value="1"
                <?php echo ($tarefa['prioridade'] == 1)
                    ? 'checked'
                    : '';
                ?>/>Baixa
                <input type="radio" name="prioridade" value="2" 
                <?php echo ($tarefa['prioridade'] == 2)
                    ? 'checked'
                    : '';
                ?>/>Média
                <input type="radio" name="prioridade" value="3"
                <?php echo ($tarefa['prioridade'] == 3)
                    ? 'checked'
                    : '';
                ?>/>Alta
            </label>
        </fieldset>

        <!--Tarefa concluída-->
        <label class="inputs">
            Tarefa Concluída:
            <input type="checkbox" name="concluida" value="1" 
            <?php echo ($tarefa['concluida'] == 1)
                ? 'checked'
                : '';
            ?>/>
        </label>

        <input id="btnsubmit" type="submit" 
        value="<?php echo ($tarefa['id'] > 0) ? 'Atualizar' : 'Cadastrar'?>" />
    </fieldset>
</form>