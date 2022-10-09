<?php

    $host = "localhost";
    $dbName = "fruver";
    $user ="root";
    $pass = "";

    $var = "mysql:host={$host};dbname={$dbName};";
    $conexion = new PDO($var,$user,$pass);
    $sql = "SELECT * FROM usuarios WHERE identificacion_usuario={$_POST['numDoc']} OR correo_usuario='{$_POST['correo']}'";
    $traerInfo = $conexion->prepare($sql);
    $traerInfo->execute();
    $leer = $traerInfo->fetchAll(PDO::FETCH_ASSOC);

    /* var_dump($_POST); */
    if(empty($leer)){

        $nombre = $_POST['nombre'];
        $apellido = $_POST['apellido'];
        $tipoDoc = $_POST['tipoDoc'];
        $num_doc = $_POST['numDoc'];
        $numTel = $_POST['numTel'];
        $direc = $_POST['direc'];
        $correo  = $_POST['correo'];
        $contrasena  = $_POST['contrasena'];
        $confirmContrasena  = $_POST['confirmContrasena'];
        $rol  = $_POST['rolSet'];

        if ($contrasena == $confirmContrasena) {
            $sql= "INSERT INTO `usuarios`(`id_usuario`, `tipoDoc_usuario`, `identificacion_usuario`, `nombre_usuario`, `apellido_usuario`, `correo_usuario`, `telefono_usuario`, `direccion_usuario`, `contraseña_usuario`, `rol_id`) VALUES (NULL,?,?,?,?,?,?,?,?,?)";
            $arrayDatos = array($tipoDoc,$num_doc,$nombre,$apellido,$correo,$numTel,$direc,$contrasena,$rol);
            $insert = $conexion->prepare($sql);
            $insert->execute($arrayDatos);  
            header("Location: iniciosesion.php");
        }else{
            echo "<script>
                    alert('Las contraseñas no coinciden');
                    window.location.replace('registro.php');
                </script>";   
        } 

     }else{
        echo "<script>
                alert('la identificacion o el correo ya existe');
                window.location.replace('registro.php');
            </script>"; 
        
     } 

?>