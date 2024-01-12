<?php 
require_once("class_bancodedados.php");
class Pessoas{
    var $objBD;
    function novaPessoa($nome, $profissao){
        $umSql = "INSERT INTO tbpessoas VALUES (0, '$nome', '$profissao')";
        $this->objBD = new BancoDeDados();
        return $this->objBD->executaQuery($umSql);
    }
}
?>