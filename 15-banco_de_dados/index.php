<?php 
require_once("class/class_pessoas.php");

$objPessoa = new Pessoas;
$nome = "Matheus";
$profissao = 'Programador';
$objPessoa->novaPessoa($nome, $profissao);
?>