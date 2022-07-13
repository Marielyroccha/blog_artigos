<?php

require 'config.php';
include 'src/Artigo.php';
$artigo = new Artigo($mysql);
$artigos = $artigo->exibirTodos();

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
    <h1>Meu Blog</h1>
    <a href="./admin/index.php" class="btn btn-secundary">Administrar</a>
    <a href="./admin/adicionar-artigo.php" class="btn btn-secundary">Adicionar Artigo</a>
        <div id="container">
            <?php foreach ($artigos as $artigo) : ?>
                <div class="card" style="width: 18rem;">
                    <img srcset="<?php echo $artigo['Imagem'];?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <a href= "artigo.php?id=<?php echo $artigo['id'];?>">
                        <h5><?php echo $artigo['titulo']; ?></h5>
                        </a>
                        <p class="card-text" <?php echo nl2br ($artigo['conteudo']); ?>></p>
                        <a href="artigo.php?id=<?php echo $artigo['id'];?>" class="btn btn-danger">Ler Mais</a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>