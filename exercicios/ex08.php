<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .cor-diferente {
            background-color: #1E90FF;
        }
    </style>
</head>

<body>
    <?php
    $i = 0;
    do {
        if (($i == 2) || ($i == 6) || ($i == 10)) {
            echo "<div class='cor-diferente'>$i<br/></div>";
        } else {
            echo "<div>$i<br/></div>";
        }
        $i++;
    } while ($i < 12);
    ?>
</body>

</html>