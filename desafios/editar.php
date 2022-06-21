<?php

session_start();

require "bancocontatos.php";
require "ajudantes.php";

$exibir_tabela = false;

if (array_key_exists('nome', $_GET) && $_GET['nome'] != '') {
    $contato = [
        'id' => $_GET['id'],
        'nome' => $_GET['nome'],
        'telefone' => '',
        'email' => '',
        'descricao' => '',
        'nascimento' => '',
        'favorito' => 0,
    ];

    if (array_key_exists('telefone', $_GET)) {
        $contato['telefone'] = $_GET['telefone'];
    }

    if (array_key_exists('email', $_GET)) {
        $contato['email'] = $_GET['email'];
    }

    if (array_key_exists('descricao', $_GET)) {
        $contato['descricao'] = $_GET['descricao'];
    }
        
    if (array_key_exists('nascimento', $_GET)) {
        $contato['nascimento'] = traduz_data_para_banco($_GET['nascimento']);
    }
    
    if (array_key_exists('favorito', $_GET)) {
        $contato['favorito'] = 1; // verificar no github
    }
    
    editar_contato($conexao, $contato);
    header('Location: contatos.php');
    die();
}

$contato = buscar_contato($conexao, $_GET['id']);

require "template_contatos.php";