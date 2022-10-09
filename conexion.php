<?php    
    $host = "localhost";
    $dbName = "fruver";
    $user ="root";
    $pass = "";
    $var = "mysql:host={$host};dbname={$dbName};";
    $conexion = new PDO($var,$user,$pass);

?>