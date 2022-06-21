<form method="POST">
    <input type="hidden" name="id" value="<?php echo $veiculo['id']; ?>" />
    <fieldset>
        <legend>Novo Registro</legend>
        <label>
            Placa:
            <input type="text" name="placa" value="<?php echo $veiculo['placa']; ?>" />
        </label>
        <label>
            Marca:
            <input type="text" name="marca" value="<?php echo $veiculo['marca']; ?>" />
        </label>
        <label>
            Modelo:
            <input type="text" name="modelo" value="<?php echo $veiculo['modelo']; ?>" />
        </label>
        <label>
            Hora Entrada:
            <input type="text" name="entrada" value="<?php echo $veiculo['entrada']; ?>" />
        </label>
        <label>
            Hora Saída:
            <input type="text" name="saida" value="<?php echo $veiculo['saida']; ?>" />
        </label>
        
        <input type="submit" value="<?php echo ($veiculo['id'] > 0) ? 'Atualizar' : 'Cadastrar'; ?>" />
    </fieldset>
</form>