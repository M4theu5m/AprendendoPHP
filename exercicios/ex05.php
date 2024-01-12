<?php 
$dia = 8;

switch ($dia):
    case 1: 
        echo 'segunda-feira';
        break;
    case 2:
        echo 'terça-feira';
        break;
    case 3:
        echo 'quarta-feira';
        break;
    case 4:
        echo 'quinta-feira';
        break;
    case 5:
        echo 'sexta-feira';
        break;
    case 6:
        echo 'sábado';
        break;
    case 7:
        echo 'domingo';
        break;
    default:
        echo 'número inválido';
    endswitch;
?>