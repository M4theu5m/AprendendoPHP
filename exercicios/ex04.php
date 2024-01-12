<?php 
$nome = 'Matheus';
$idade = 20;

if ($idade > 18){
    echo "Olá $nome, você pode participar do projeto.";
} else {
    echo "Olá $nome, você não pode participar do projeto.";
}

echo '<br/><br/>';

$salario = 1700;

if ($salario < 1200){
    $salario += 300;
} else if (($salario > 1200) && ($salario < 1600)){
    $salario += 250;
} else {
    $salario += 200;
}

echo $salario;
?>