<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Conteudo da página</h1>
    <?php
    setcookie("nomedocookie", "nomedoFulano", time() + 3600);
    if (isset($_COOKIE['nomedocookie'])){
        echo "Bom dia, ".$_COOKIE['nomedocookie']."<br/>";
    } else {
        echo "Antes, crie o Cookie <br/>";
    }

    //Para apagar o cookie precisamos apenas setar com um tempo negativo

    setcookie("nomedocookie", "", time() + -3600);
    if (isset($_COOKIE['nomedocookie'])){
        echo "Bom dia, ".$_COOKIE['nomedocookie']."<br/>";
    } else {
        echo "Antes, crie o Cookie <br/>";
    }
    ?>
</body>

</html>