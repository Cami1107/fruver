<?php

    if(isset($_GET['userId'])){
        $userID = $_GET["userId"];
        require_once("../conexion.php");
        $sql = "SELECT * FROM usuarios WHERE id_usuario = '{$userID}'";
        $leer = $conexion->prepare($sql);
        $leer->execute();
        $user = $leer->fetch(PDO::FETCH_ASSOC);
        echo json_encode($user,JSON_UNESCAPED_UNICODE);

    }else{
        echo "{}";
    }

?>

