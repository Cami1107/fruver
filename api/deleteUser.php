<?php

    if(isset($_POST['userId'])){
        $userID = $_POST["userId"];
        require_once("../conexion.php");
        $sql = "DELETE FROM usuarios WHERE id_usuario = '{$userID}'";
        $leer = $conexion->prepare($sql);
        if ($leer->execute()){
            $response=array("estatus"=>true);
        }
        else{
            $response=array("estatus"=>false);
            // var_dump($leer->errorInfo());
        }
        echo json_encode($response,JSON_UNESCAPED_UNICODE);

    }else{
        echo "{}";
    }

?>