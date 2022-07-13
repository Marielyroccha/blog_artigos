<?php

require 'config.php';
require 'src/Artigo.php';

$obg_artigo = new Artigo($mysql);
$artigo = $obg_artigo->encontrarPorId($_GET['id']);


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Meu Blog</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="teste.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
</head>

<body>
    <div id="container">
        <h1>
            <?php echo $artigo['titulo']; ?>
        </h1>
        <p class="conteudo">
            <?php echo nl2br($artigo['conteudo']); ?>
        </p>
        <div class="btn-home">
            <a href="index.php" class="btn btn-danger">Home</a>
        </div>
    </div>
</body>

</html>