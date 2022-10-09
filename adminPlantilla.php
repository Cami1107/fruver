<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruver Xpress</title>

    <!-- Conexión con boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- Conexión con CSS -->
    <link rel="stylesheet" href="CSS/Estilo.css">

    <!-- Fuentes de Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300&family=Open+Sans&family=Oswald:wght@200;300;400;500;600;700&family=Roboto:ital,wght@0,100;1,100&display=swap" rel="stylesheet">
    
    <!-- cdn icons bootstrap v1.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


</head>

<body>
    <div>
        <!-- Codigo para el header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-fruver">
                <div class="container">
                    <a href="index.html"><img src="Multimedia/logo-carrito.png" alt="logo carrito"></a>
                    <a href="index.html">
                        <h2>Fruver Xpress</h2>
                    </a>
                    <!-- Solo se muestra cuando es diseño Responsive -->
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse collapse-fruver" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#servicios">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#categorias">Categorias</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contacts">Perfil</a>
                            </li>
                        </ul>
                    </div>
                    <a href="logOut.php">Cerrar Sesion</a>
                </div>
            </nav>


        </header>
        <!-- Codigo para el main -->
        <main>
            <div class="container">
                 <button 
                    type="button" 
                    class="btn btn-success mb-3" 
                    data-bs-toggle="modal" 
                    data-bs-target="#editarModal"
                    data-type="create"
                >
                <i class="bi bi-plus-lg"></i> Crear Nuevo Usuario
                </button>
                <table id="usersTable" class="table table-hover">
                    <tr class="table-success">
                        <th>tipoDoc_usuario</th>
                        <th>identificacion_usuario</th>
                        <th>nombre_usuario</th>
                        <th>apellido_usuario</th>
                        <th>correo_usuario</th>
                        <th>telefono_usuario</th>
                        <th>direccion_usuario</th>
                        <th>estatus</th>
                        <th>Tipo Rol</th>
                        <th colspan="2"></th>
                    </tr>
                    <template v-for="user in store.allUsers">
                        <tr>
                            <td>{{ user.tipoDoc_usuario }}</td>
                            <td>{{ user.identificacion_usuario }}</td>
                            <td>{{ user.nombre_usuario }}</td>
                            <td>{{ user.apellido_usuario }}</td>
                            <td>{{ user.correo_usuario }}</td>
                            <td>{{ user.telefono_usuario }}</td>
                            <td>{{ user.direccion_usuario }}</td>
                            <td>{{ user.estatus }}</td>
                            <td>{{ user.nombre_rol }}</td>
                            <td colspan="2">
                                <div class="d-flex">
                                    <button 
                                        :user-id="user.id_usuario" 
                                        type="button" 
                                        class="btn btn-success" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#editarModal"
                                        data-type="update"
                                    >
                                        <i :user-id="user.id_usuario" class="bi bi-pencil-square"></i>
                                    </button>
                                    <button 
                                        :user-id="user.id_usuario" 
                                        type="button" 
                                        class="btn btn-danger ms-1" 
                                        data-bs-toggle="modal" 
                                        data-bs-target="#deleteModal"
                                    >
                                        <i :user-id="user.id_usuario" class="bi bi-trash-fill"></i>
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </template>
                </table>
            </div>


        </main>

        <!-- Codigo para el Footer -->
        <footer>
            <div class="container">
                <div id="contacts">
                    <ul>
                        <h2>Categorias</h2>
                        <li><a href="#">
                                <p>Aseo</p>
                            </a></li>
                        <li><a href="frutas.html">
                                <p>Frutas y verduras</p>
                            </a></li>
                        <li><a href="#">
                                <p>Granos</p>
                            </a></li>
                        <li><a href="#">
                                <p>Huevos y lacteos</p>
                            </a></li>
                        <li><a href="#">
                                <p>Licores</p>
                            </a></li>
                        <li><a href="#">
                                <p>Mecato</p>
                            </a></li>
                    </ul>
                    <ul>
                        <li>
                            <h2>Contacto</h2>
                            <a href="#">
                                <p>darizaduarte@gmail.com</p>
                            </a>
                            <a href="#">
                                <p>calle 188 15a 47</p>
                            </a>
                            <a href="#">
                                <p> 2022 Derechos reservados</p>
                            </a>
                        <li>

                        </li>
                    </ul>

                    <ul>
                        <li>
                            <h2>Redes sociales</h2>
                            <div class="iconosimg">
                                <a href="https://www.whatsapp.com/?lang=es"><img src="Multimedia/whatsapp.png" alt=""></a>
                                <a href="https://www.instagram.com/"><img src="Multimedia/Instagram.png" alt=""></a>
                                <a href="https://es-la.facebook.com
                                    "><img src="Multimedia/facebook.png" alt=""></a>
                            </div>
                        </li>
                        <li>

                        </li>
                    </ul>
                </div>
        </footer>
    </div>
    <!-- Codigo para el modal editar y crear -->
    <div class="modal fade" id="editarModal" tabindex="-1" aria-labelledby="editarModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content" id="userApp">
                <div class="modal-header">
                    <h5 class="modal-title" >{{store.modalMode}}</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <input type="hidden" value="">
                        <div class="row">
                            <div class="col-md-6 mb-6">
                                <label for="tipoDoc_usuario" class="form-label">Número de Documento</label>
                                <input type="text" class="form-control" id="numDoc" aria-describedby="emailHelp" name="numDoc" v-model="store.actualUser.identificacion_usuario">
                            </div>
                            <div class="col-md-6 mb-6">
                                <label for="tipoDoc_usuario" class="form-label">Tipo de Documento</label>
                                <select class="form-control" id="tipoDoc_usuario" aria-describedby="emailHelp" name="tipoDoc_usuario" v-model="store.actualUser.tipoDoc_usuario">
                                    <option value="Cedula Ciudadania">Cedula Ciudadania</option>
                                    <option value="Tarjeta Identidad">Tarjeta Identidad</option>
                                    <option value="Cedula Extranjeria">Cedula Extranjeria</option>
                                </select>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-6">
                                <label for="nombre_usuario" class="form-label">Nombre</label>
                                <input type="text" class="form-control" id="nombre_usuario" aria-describedby="emailHelp" name="nombre_usuario" v-model="store.actualUser.nombre_usuario"> <!-- v-model es sintaxis de vue para conectar datos de forma dinamica -->
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="apellido_usuario" class="form-label">Apellido</label>
                                <input type="text" class="form-control" id="apellido_usuario" aria-describedby="emailHelp" name="apellido_usuario" v-model="store.actualUser.apellido_usuario">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-6">
                                <label for="telefono_usuario" class="form-label">Telefono</label>
                                <input type="text" class="form-control" id="telefono_usuario" aria-describedby="emailHelp" name="telefono_usuario" v-model="store.actualUser.telefono_usuario">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="direccion_usuario" class="form-label">Direccion</label>
                                <input type="text" class="form-control" id="direccion_usuario" aria-describedby="emailHelp" name="direccion_usuario" v-model="store.actualUser.direccion_usuario">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-6">
                                <label for="correo_usuario" class="form-label">correo</label>
                                <input type="email" class="form-control" id="correo_usuario" aria-describedby="emailHelp" name="correo_usuario" v-model="store.actualUser.correo_usuario">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="direccion_usuario" class="form-label">estado</label>
                                <select class="form-control" id="estado_usuario" aria-describedby="emailHelp" name="estado_usuario" v-model="store.actualUser.estatus">
                                    <option value="1">activo</option>
                                    <option value="0">inactivo</option>                                    
                                </select>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <label for="doc_usuario" class="form-label">Rol</label>
                                <select name="rolUsuario" id="rolUsuario" class="form-select form-select-md mb-3" aria-label=".form-select-lg example" v-model="store.actualUser.rol_id">
                                    <?php
                                    require_once('conexion.php');
                                    $sql = "SELECT * from roles;";
                                    $traerRol = $conexion->prepare($sql);
                                    $traerRol->execute();
                                    $leerRol = $traerRol->fetchAll(PDO::FETCH_ASSOC);

                                    foreach ($leerRol as $key => $datos) {
                                        echo "<option value='{$datos['id_rol']}'>{$datos['nombre_rol']}</option>";
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="row" v-if="store.modalMode=='Crear Usuario'">
                            <div class="col-6">
                                <label class="form-label">Contraseña:</label>     
                                <input  class="form-control" type="password" >
                            </div>
                            <div class="col-6">
                                <label class="form-label">Confirmar contraseña:</label> 
                                <input class="form-control" type="password" v-model="store.actualUser.contraseña_usuario">
                            </div>
                        
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                            <button type="button" class="btn btn-success" data-bs-dismiss="modal" v-on:click="store.updateUser()">{{store.modalMode}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal ELIMINAR-->
    <div class="modal fade" id="deleteModal" tabindex="-1" aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Eliminar Usuario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>Esta acción irerversible, ¿Seguro qué quieres continuar?</p>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="delete_user_id" id="delete_user_id" value="">
                        <button type="button" class="btn btn-info" data-bs-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal" onclick="store.deleteUser()">Eliminar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Javascript Antes de cerrar el body-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="Assets/js/vue/vue.js" type="text/javascript"></script>
    <script src="Assets/js/store.js" type="text/javascript"></script>
    <script src="Assets/js/editar.js" type="text/javascript"></script>
    <script src="Assets/js/components/allUsers_component.js" type="text/javascript"></script>
    <script src="Assets/js/components/user_component.js" type="text/javascript"></script>
</body>

</html>