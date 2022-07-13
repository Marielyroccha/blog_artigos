<?php

require '../config.php';
require '../src/redireciona.php';
require '../src/Artigo.php';

if($_SERVER['REQUEST_METHOD'] === 'POST'){

   $artigo = new Artigo($mysql);
   $artigo->adicionar($_POST['titulo'], $_POST['conteudo']);

   redireciona('/projects/blog/admin/index.php');
}


?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" type="text/css" href="teste.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <meta charset="UTF-8">
    <title>Adicionar Artigo</title>
</head>

<body>
    <div id="container">
        <h1>Adicionar Artigo</h1>
        <form class="form-floating" action="adicionar-artigo.php" method="POST">
            <p>
            
                <label for="">Digite o título do artigo</label>
                <input class="campo-form" type="text" name="titulo" id="titulo" />
            </p>
            <p>
                <label for="">Digite o conteúdo do artigo</label>
                <textarea class="form-control" type="text" name="conteudo" id="floatingTextarea2" style="height: 100px"></textarea>
            </p>
            <p>
                <button class="btn btn-success">Criar Artigo</button>
            </p>
        </form>
    </div>
</body>

</html>