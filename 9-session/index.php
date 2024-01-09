<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="nome">Nome:</label>
        <input type="text" name="nome" required><br>

        <input type="submit" name="submit" value="Avançar">
    </form>

    <?php 
    session_start();
    if(!(isset($_SESSION['usuario']))){
        $nome = $_POST['nome'];
        $_SESSION['usuario'] = $nome;
        $_SESSION['cliques'] = 0;
    } else {
        $nome = $_SESSION['usuario'];
    }

    echo '<a href="ola.php">Mensagem de olá<a/><br/>';
    echo '<a href="tchau.php">Mensagem de tchau<a/><br/>';
    echo '<a href="boanoite.php">Mensagem de boa noite<a/><br/>';
    ?>
    
</body>
</html>