<?php
    include "verificar_logado.php";
?>
<h1>Cadastrar novo item</h1>

<form action="inserir.php" method="get">
    <label>Descrição: </label> <br>
    <textarea name="descricao_digitada"
              cols="70"
              rows="3">
    </textarea>
    <br><br>
    <label>Setor:</label><br>
    <select name="setor_selecionado">
        <option value="">Selecione</option>
        <option value="Administrativo">Administrativo</option>
        <option value="Suporte">Suporte</option>
        <option value="NAD">NAD</option>
        <option value="NEP">NEP</option>
        <option value="Financeiro">Financeiro</option>
        <option value="Atendimento">Atendimento</option>
    </select><br><br>

    <label>Categoria:</label><br>
    <input type="text" name="categoria"><br><br>
    <button type="submit">Salvar</button>
</form>