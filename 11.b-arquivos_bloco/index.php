<?php
// $editor = fopen('texto.txt', 'w');
// fwrite($editor, "Olá mundo! \n");
// fwrite($editor, "Frase 2 \n");
// unlink('texto.txt');

// $editor = fopen('arquivo.txt', 'w');
// fwrite($editor, "Escravos de jó jogavam caxangá\n");
// fwrite($editor, "Escravos de jó jogavam caxangá\n");
// fwrite($editor, "Tira. Põe. Deixa ficar...\n");
// fwrite($editor, "Guerreiros com guerreiros fazem zigue-zigue-zá\n");
// fwrite($editor, "Guerreiro com guerreiros fazem zigue zigue zá \n");

// if(file_exists('arquivo.txt')){
//     $leitor = fopen("arquivo.txt", "r");
//     //$frase = fgets($leitor, 500); //fgets lê apenas uma linha
//     while($frase = fgets($leitor, 500)){
//         echo $frase;
//         echo "<br/>";
//     }
// } else {
//     echo "Arquivo inexistente";
// }

// if(file_exists("acessos.txt")){
//     $editor = fopen("acessos.txt", 'r+');
//     $acessos = fgets($editor, 500);
//     $acessos++;
//     fseek($editor, 0);
//     fwrite($editor, $acessos);
//     fclose($editor);
// } else {
//     $editor = fopen("acessos.txt",'w');
//     fwrite($editor, "1");
//     fclose($editor);
//     echo '1';
// }

// $editor = fopen('carros.txt', 'w');
// fwrite($editor, "Chavete\n");
// fwrite($editor, "Del Rey\n");
// fwrite($editor, "Corcel\n");
// fwrite($editor, "Manza\n");
// fwrite($editor, "Fiat 147\n");
// fwrite($editor, "Opala\n");
// fclose($editor);

$contador = 0;
foreach (file('carros.txt') as $arquivovirtual => $cadalinha) {
    $contador++;
    echo $contador.' - '.$cadalinha;
    echo"<br/>";
}

?>