<table>
    <tr>
        <th>Placa</th>
        <th>Marca</th>
        <th>Modelo</th>
        <th>Hora Entrada</th>
        <th>Hora Saída</th>
        <th>Opções</th>
    </tr>
    <?php foreach ($lista_veiculos as $veiculo) : ?>
        <tr>
            <td>
                <?php echo $veiculo['placa']; ?>
            </td>
            <td>
                <?php echo $veiculo['marca']; ?>
            </td>
            <td>
                <?php echo $veiculo['modelo']; ?>
            </td>
            <td>
                <?php echo $veiculo['entrada']; ?>
            </td>
            <td>
                <?php echo $veiculo['saida']; ?>   
            </td>
            <td>
                <a href="editar.php?id=<?php echo $veiculo['id']; ?>">
                    Editar
                </a>
                <a href="remover.php?id=<?php echo $veiculo['id']; ?>">
                    Remover
                </a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>