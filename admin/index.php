<?php

require '../config.php';
include '../src/Artigo.php';
$artigo = new Artigo($mysql);
$artigos = $artigo->exibirTodos();

?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Página administrativa</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div class="container-sm">
        <h2>Página Administrativa</h2>
        <div>
            <?php foreach($artigos as $art) { ?>
            <div id="artigo-admin">
                <p><?php echo $art['titulo']; ?></p>
                <nav>
                    <a class="btn btn-primary" href="editar-artigo.php?id=<?php echo $art['id']; ?>">Editar</a>
                    <a class="btn btn-danger" href="excluir-artigo.php?id=<?php echo $art['id']; ?>">Excluir</a>
                </nav>
            </div>
            <?php } ?>
        </div>
        <a class="btn btn-success" href="adicionar-artigo.php">Adicionar Artigo</a>
        <a class="btn btn-success" href="../index.php">Voltar</a>
    </div>
</body>

</html>