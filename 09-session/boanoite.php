<?php 
session_start();
echo "Boa noite ".$_SESSION['usuario']."<br/>";
$_SESSION['usuario']++;
echo "Você já apertou ".$_SESSION['cliques']." vezes <br/>";
echo "Para voltar aperte <a href='index.php'>aqui<a/>";
?>