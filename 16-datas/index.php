<?php 
// $a = checkdate (2, 29, 2000);
// if($a) {
//     echo "Data válida!";
// } else {
//     echo "Data inválida!";
// }

// $d = date ('d / m / y -- H : i : s -- Z', 0);
// echo $d;

// $d =  mktime (6, 20, 5, 6,2, 2003);
// $d = date ('d, m, Y ||| H:i:s', mktime(6,20,5,6,2,2003));
// echo $d;

// $d = date('d, m, Y');
// echo $d;

setlocale(LC_ALL, 'portuguese');
echo strftime('%A');
?>