<?php

include "bancocontatos.php";

remover_contato($conexao, $_GET['id']);

header('Location: contatos.php');