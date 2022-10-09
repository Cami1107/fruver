<?php
    if (isset($_GET)) {
        require_once('../conexion.php');
        $sql = "SELECT u.*, r.* from usuarios u inner join roles r on u.rol_id = r.id_rol;";
        $traerInfo = $conexion->prepare($sql);
        $traerInfo->execute();
        $leer = $traerInfo->fetchAll(PDO::FETCH_ASSOC);
        for ($i = 0; $i < count($leer); $i++) {
            $estado = $leer[$i]['estatus'];
            if ($estado == 0) {
                $leer[$i]['estatus'] = 'inactivo';
            } else {
                $leer[$i]['estatus'] = 'Activo';
            }
        }
        echo json_encode($leer, JSON_UNESCAPED_UNICODE);
    }else{
        echo "{}";
    }

?>