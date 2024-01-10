<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste</title>
</head>

<body>
    <!-- <form method="POST">
        Seu nome:
        <input type="text" name="nome"><br/>
        Idade: 
        <input type="text" name="idade"><br/>
        Sexo: 
        <input type="text" name="sexo"><br/>
        <input type="submit" value="Avançar">
    </form> -->

    <form method="GET">Digite uma mensagem: <br/>
        <input type="text" name="mensagem">
        <input type="submit" value="Enviar">
    </form>

    <?php
        // $nome = $_POST["nome"];
        // $idade = $_POST['idade'];
        // $sexo = $_POST['sexo'];
        // echo $nome.' executou o programa <br/>';
        // echo $nome.' tem '.$idade.' anos e seu sexo é '.$sexo;

        // if (!(isset($_GET["teste"]))){
        //     echo '<a href="index.php?teste=carros">Carros<a/><br/>';
        //     echo '<a href="index.php?teste=avioes">Avioes<a/><br/>';
        // } else {
        //     if ($_GET["teste"]=="carros"){
        //         echo 'Carros andam na terra';
        //     }
        //     if ($_GET["teste"]=="avioes"){
        //         echo 'Avioes andam no ar';
        //     }
        // }

            echo $_GET["mensagem"];
    ?>
</body>

</html>