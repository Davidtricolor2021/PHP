<?php

session_start();

include "banco.php";

$exibir_tabela = false;

if (array_key_exists('placa', $_POST) && $_POST['placa'] != '') {
    $veiculo = [];

    $veiculo['placa'] = $_POST['placa'];

    if (array_key_exists('marca', $_POST)) {
        $veiculo['marca'] = $_POST['marca'];
    } else {
        $veiculo['marca'] = '';
    }

    if (array_key_exists('modelo', $_POST)) {
        $veiculo['modelo'] = $_POST['modelo'];
    } else {
        $veiculo['modelo'] = '';
    }

    if (array_key_exists('entrada', $_POST)) {
        $veiculo['entrada'] = $_POST['entrada'];
    } else {
        $veiculo['entrada'] = '';
    }

    if (array_key_exists('saida', $_POST)) {
        $veiculo['saida'] = $_POST['saida'];
    } else {
        $veiculo['saida'] = '';
    }

    editar_veiculo($conexao, $veiculo);
    header('Location: veiculos.php');
    die();
}

$veiculo = buscar_veiculo($conexao, $_GET['id']);

include "template.php";