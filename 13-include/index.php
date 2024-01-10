<?php 
include ("logotipo.php");
if(isset($_GET["página"])){
    $x$_GET["pagina$x.php"];
    include("pagina$x.php");
} else {
    echo "<a href='index.php?pagina=1'>Pagina 1</a><br/>";
}
?>