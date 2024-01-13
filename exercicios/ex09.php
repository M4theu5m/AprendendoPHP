<?php 
// $array = ['banana', 'maca', 'pera', 'melancia', 'abacaxi', 'manga'];

// echo "<select>";
// foreach ($array as $frutas) {
//     echo "<option>$frutas</option>'";
// }
// echo "</select>"

$equipamentos = ['Mouse', 'Teclado', 'Monitor', 'Gabinete', 'Estabilizador', 'Caixa de som'];

for($i = (count($equipamentos)-1); $i >= 0; $i--){
    // if(($i == 1) || ($i == 3)){
    //     echo $equipamentos[$i].'<br/>';
    // }
    echo $equipamentos[$i]."</br>";
}
?>