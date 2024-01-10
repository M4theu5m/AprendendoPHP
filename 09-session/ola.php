<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Olá</title>
</head>
<body>
    <?php 
    session_start();
    echo "Olá, ".$_SESSION['usuario']. "<br/>";
    $_SESSION['cliques']++;
    echo "Você já apertou ".$_SESSION['cliques']." vezes <br/>";
    echo "Aperte <a href='index.php'>aqui<a/> para voltar";

    ?>
</body>
</html>