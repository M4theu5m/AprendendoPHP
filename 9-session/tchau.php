<?php 
session_start();
echo "Tchau, ".$_SESSION['usuario']."<br/>";
$_SESSION['cliques']++;
echo "Você já apertou ".$_SESSION['cliques']." vezes <br/>";
echo "Para voltar, aperte <a href='index.php'>aqui<a/>";
?>