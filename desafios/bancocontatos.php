<?php

$bdServidor = '127.0.0.1';
$bdUsuario = 'contatos';
$bdSenha = 'contatos';
$bdBanco = 'contatos';

$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

if (mysqli_connect_errno($conexao)) {
    echo "Problemas para conectar no banco. Erro: ";
    echo mysqli_connect_errno();
    die();
}

function buscar_contatos($conexao)
{
    $sqlBusca = 'SELECT * FROM contatos';
    $resultado = mysqli_query($conexao, $sqlBusca);

    $contatos = [];

    while ($contato = mysqli_fetch_assoc($resultado)) {
        $contatos[] = $contato;
    }

    return $contatos;
}

function buscar_contato($conexao, $id)
{
    $sqlBusca = 'SELECT * FROM tarefas WHERE id = ' . $id;
    $resultado = mysqli_query($conexao, $sqlBusca);

    return mysqli_fetch_assoc($resultado);
}

function editar_contato($conexao, $contato)
{
    $sqlEditar = " UPDATE contatos SET
                        nome = '{$contato['nome']}',
                        telefone = {$contato['telefone']},
                        email = '{$contato['email']}',
                        descricao = '{$contato['descricao']}',
                        nascimento = '{$contato['nascimento']}',
                        favorito = {$contato['favorito']}
                    WHERE id = {$contato['id']}
    ";

    mysqli_query($conexao, $sqlEditar);
}

function remover_contato($conexao, $id)
{
    $sqlRemover = "DELETE FROM contatos WHERE id = {$id}";

    mysqli_query($conexao, $sqlRemover);
}

function gravar_contato($conexao, $contato)
{
    $sqlGravar = "INSERT INTO contatos
        (nome, telefone, email, descricao, nascimento, favorito)
        VALUES
        (
            '{$contato['nome']}',
            {$contato['telefone']},
            '{$contato['email']}',
            '{$contato['descricao']}',
            '{$contato['nascimento']}',
            {$contato['favorito']}
        )
    ";

    mysqli_query($conexao, $sqlGravar);
}