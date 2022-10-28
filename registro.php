<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruver Xpress</title>

    <!-- Conexión con boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Conexión con CSS -->
    <link rel="stylesheet" href="CSS/registro.css">

    <!-- Fuentes de Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Dongle:wght@300&family=Open+Sans&family=Oswald:wght@200;300;400;500;600;700&family=Roboto:ital,wght@0,100;1,100&display=swap"
        rel="stylesheet">

    <!-- Javascript Antes de cerrar el body-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
</head>

<body>
    <!-- Codigo para el header -->
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-fruver">
            <div class="container">
                <a href="index.html"><img src="Multimedia/logo-carrito.png" alt="logo carrito"></a>
                <a href="index.html">
                    <h2>Fruver Xpress</h2>
                </a>
                <!-- Solo se muestra cuando es diseño Responsive -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse collapse-fruver" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="index.html">Contacto</a>
                        </li>
                    </ul>
                </div>
                <a href="iniciosesion.html"><img src="Multimedia/login.png" alt="login"></a>
                <a class="Ingreso" href="iniciosesion.html">Ingreso</a>
            </div>
        </nav>




    </header>
    <!-- Codigo para el main -->
    <main>
        <div class="container">
            <div class="contForm">
                <form action="registrar.php"method="POST">
                    <center><legend>Registro</legend></center>
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
                            <td>{{ user.rol_id }}</td>
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
                    <div class="mb-3">
                        <label class="form-label">Nombres:</label>
                        <input type="text" name="nombre" class="form-control" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Apellidos:</label>
                        <input type="text" name="apellido" class="form-control" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tipo Documento</label>
                        <select type="option" class="form-select" name="tipoDoc">
                            <option value="Cedula Ciudadania">Cedula de ciudadania</option>
                            <option value="Cedula Extrangeria">Cedula de extranjeria</option>
                            <option value="Tarjeta Identidad">Tarjeta de indentidad</option>
                            <option value="Pasaporte">Pasaporte</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Numero de documento:</label>
                        <input type="text" name="numDoc" class="form-control" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Numero de telefono:</label>
                        <input type="text" name="numTel" class="form-control" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Dirección:</label>
                        <input type="text" name="direc" class="form-control" placeholder="">
                    </div>
                    <!--<div class="mb-3">
                        <label class="form-label">Barrio:</label>
                        <select type="option" class="form-select">
                            <option>Verbenal</option>
                            <option>Santandersito</option>
                            <option>San antonio</option>
                            <option>Lijaca</option>
                            <option>Codito</option>
                            <option>Usaquen</option>
                        </select>
                    </div> -->
                    <div class="mb-3">
                        <label class="form-label">Correo:</label>
                        <input type="email" name="correo" class="form-control" placeholder="">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Contraseña:</label>
                        <input type="password" class="form-control" placeholder="ingresa tu contraseña" name="contrasena">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Confirmar contraseña:</label>
                        <input type="password" class="form-control" placeholder="" name="confirmContrasena">
                    </div>
                    <div class="mb-3">
                        <input type="hidden" class="form-control" placeholder="" value="3" name="rolSet">
                    </div>
                    <div class="mb-3">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox">
                            <label class="form-check-label">
                                Acepto terminos y condiciones
                            </label>
                        </div>
                    </div>
                    <center><button type="submit" class="btn btn-primary">Registrarme</button></center>

                </form>
            </div>       
        </div>

    </main>
    <!-- Codigo para el Footer -->
    <footer>
        <div class="container">
            <div id="contacts">
                    <ul>
                        <h2>Categorias</h2>
                        <li><a href="#"><p>Aseo</p></a></li>
                        <li><a href="frutas.html"><p>Frutas y verduras</p></a></li>
                        <li><a href="#"><p>Granos</p></a></li>
                        <li><a href="#"><p>Huevos y lacteos</p></a></li>
                        <li><a href="#"><p>Licores</p></a></li>
                        <li><a href="#"><p>Mecato</p></a></li>
                    </ul>
                    <ul>
                        <li>
                            <h2>Contacto</h2>
                            <a href="#"><p>darizaduarte@gmail.com</p></a>
                            <a href="#"><p>calle 188 15a 47</p></a>
                            <a href="#"><p> 2022 Derechos reservados</p></a>
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


</body>

</html>
