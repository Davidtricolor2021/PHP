<?php

$bdServidor = '127.0.0.1';
$bdUsuario = 'root';
$bdSenha = '';
$bdBanco = 'estacionamento';

$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if (mysqli_connect_errno($conexao)) {
    echo "Problemas para conectar no banco. Verifique os dados!";
    die();
}

function buscar_veiculos($conexao)
{
    $sqlBusca = 'SELECT * FROM veiculos';
    $resultado = mysqli_query($conexao, $sqlBusca);

    $veiculoss = array();

    while ($veiculo = mysqli_fetch_assoc($resultado)) {
        $veiculos[] = $veiculo;
    }

    return $veiculos;
}

function buscar_veiculo($conexao, $id)
{
    $sqlBusca = 'SELECT * FROM veiculos WHERE id = ' . $id;
    $resultado = mysqli_query($conexao, $sqlBusca);
    return mysqli_fetch_assoc($resultado);
}

function gravar_veiculo($conexao, $veiculo)
{
    $sqlGravar = "
        INSERT INTO veiculos
        (placa, marca, modelo, entrada, saida)
        VALUES
        (
            '{$veiculo['placa']}',
            '{$veiculo['marca']}',
            '{$veiculo['modelo']}',
            '{$veiculo['entrada']}',
            '{$veiculo['saida']}'
        )
    ";

    mysqli_query($conexao, $sqlGravar);
}

function editar_veiculo($conexao, $veiculo)
{
    $sqlEditar = " UPDATE veiculos SET
            placa = '{$veiculo['placa']}',
            marca = '{$veiculo['marca']}',
            modelo = '{$veiculo['modelo']}',
            entrada = '{$veiculo['entrada']}',
            saida = '{$veiculo['saida']}'
        WHERE id = {$veiculo['id']}
    ";

    mysqli_query($conexao, $sqlEditar);
}

function remover_veiculo($conexao, $id)
{
    $sqlRemover = "DELETE FROM veiculos WHERE id = {$id}";

    mysqli_query($conexao, $sqlRemover);
}