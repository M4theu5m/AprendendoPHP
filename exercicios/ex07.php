<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    $indice = 0;

    for($indice = 0; $indice <= 20; $indice++){
        echo "<li>".($indice * 30)."</li>";
    }

    // for($indice; $indice < 10; $indice++){
    //     echo "Índice: $indice <br/>";
    // }
    ?>
</body>

</html>