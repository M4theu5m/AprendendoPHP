<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparador de idades</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <form method="POST">
        =*=*=*=*= Pessoa 1 =*=*=*=*=<br />
        Nome:<br /><input type="text" name="nome_pessoa_um"><br />
        Idade:<br /><input type="text" name="idade_pessoa_um" class="caixa_idade"><br />

        =*=*=*=*= Pessoa 2 =*=*=*=*=<br />
        Nome:<br /><input type="text" name="nome_pessoa_dois"><br />
        Idade:<br /><input type="text" name="idade_pessoa_dois" class="caixa_idade"><br />

        <label for="opcao_escolhida">Escolha uma opção:</label>
        <select id="opcao_escolhida" name="opcao_escolhida">
            <option value="comparar_idades">Comparar idade</option>
            <option value="sao_maiores_de_idade">São maiores de idade</option>
        </select>
        <br />

        <input type="submit" value="Enviar">
    </form>

    <?php
    if (isset($_POST['opcao_escolhida'])) {
        $nome_um = $_POST['nome_pessoa_um'];
        $idade_um = $_POST['idade_pessoa_um'];
        $nome_dois = $_POST['nome_pessoa_dois'];
        $idade_dois = $_POST['idade_pessoa_dois'];
        $opcao_escolhida = $_POST['opcao_escolhida'];

        if ($opcao_escolhida == "comparar_idades") {
            if ($idade_um > $idade_dois) {
                echo $nome_um.' é mais velho que '.$nome_dois;
            } 
            else if ($idade_um == $idade_dois) {
                echo 'ambos tem a mesma idade';
            } else{
                echo "$nome_dois é mais velho que $nome_um";
            }
        }


        if ($opcao_escolhida == "sao_maiores_de_idade") {
            if ($idade_um >= 18) {
                echo $nome_um . " é maior de idade";
            } else {
                echo $nome_um . " é menor de idade";
            }
            echo '<br/>';

            if ($idade_dois >= 18) {
                echo $nome_dois . " é maior de idade";
            } else {
                echo $nome_dois . " é menor de idade";
            }
        }
    }
    ?>
</body>

</html>
