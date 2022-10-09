<?php
    // Pasar un string con un json para tranformarlo a objeto

    if(isset($_POST['create'])){
        $data=json_decode($_POST["data"]);
        // echo $data->ejemplo;
        require_once("../conexion.php");
        $query= "INSERT INTO `usuarios` (`id_usuario`, `tipoDoc_usuario`, `identificacion_usuario`, `nombre_usuario`, `apellido_usuario`, `correo_usuario`, `telefono_usuario`, `direccion_usuario`, `contraseña_usuario`, `estatus`, `rol_id`) VALUES (null,'{$data->tipoDoc_usuario}','{$data->identificacion_usuario}','{$data->nombre_usuario}','{$data->apellido_usuario}','{$data->correo_usuario}','{$data->telefono_usuario}','{$data->direccion_usuario}','{$data->contraseña_usuario}','{$data->estatus}',{$data->rol_id})";

        echo $query;
        $leer = $conexion->prepare($query);
        if ($leer->execute()){
            $response=array("estatus"=>true);
        }
        else{
            $response=array("estatus"=>false);
            var_dump($leer->errorInfo());
        }
        echo json_encode($response,JSON_UNESCAPED_UNICODE);
        
    }else{
        echo "{}";
    }
?>

