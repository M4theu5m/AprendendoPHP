<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="arquivo">
        <input type="submit" name="submit" value="Enviar">
    </form>

    <?php 
    if(isset($_POST['submit'])){
        echo $_FILES['arquivo']['name'];
        echo '<br/>';
        echo $_FILES['arquivo']['size'];
        echo '<br/>';
        echo $_FILES['arquivo']['type'];
        if(move_uploaded_file($_FILES['arquivo']['tmp_name'], $_FILES['arquivo']['name'])) {
            echo '<br/>sucesso';
        }
    }
    ?>
</body>
</html>