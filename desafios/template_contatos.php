<html>
    <head>
        <meta charset="utf-8" />
        <title>Lista de Contatos</title>
        <link rel="stylesheet" href="tarefas.css" type="text/css" />
    </head>
    <body>
        <h1>Lista de Contatos</h1>
        
        <?php include('formulario.php'); ?>

        <?php if ($exibir_tabela) : ?>
            <?php include ('tabela.php'); ?>
        <?php endif; ?>
    </body>
</html>