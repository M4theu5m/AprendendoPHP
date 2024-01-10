<?php 
// $banco = new PDO('mysql:host=hostdobancodedados;dbname=basededados', 'root', '');

foreach(PDO::getAvailableDrivers() as $driver){
    echo $driver."<br/>";
}
?>