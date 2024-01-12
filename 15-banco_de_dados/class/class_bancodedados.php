<?php 
class BancoDeDados {
    var $conexao;

    function __construct() {
        try {
            $this->conexao = new PDO('mysql:host=localhost;dbname=testeoo', 'root', '');
        } catch (PDOException $e) {
            die("Não conectou ao BD: " . $e->getMessage());
        }
    }

    function executaQuery($umSql) {
        return $this->conexao->exec($umSql);
    }
}
?>