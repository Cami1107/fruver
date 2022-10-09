<?php session_start(); ?>



<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fruver Xpress</title>

    <!-- Conexión con boostrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- Conexión con CSS -->
    <link rel="stylesheet" href="CSS/frutas.css">

    <!-- Fuentes de Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dongle:wght@300&family=Open+Sans&family=Oswald:wght@200;300;400;500;600;700&family=Roboto:ital,wght@0,100;1,100&display=swap" rel="stylesheet">

    <!-- Javascript Antes de cerrar el body-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>
<?php
//var_dump($_SESSION);
if ($_SESSION['datos']['rol_id'] == 1 || $_SESSION['datos']['rol_id'] == 2 || $_SESSION['datos']['rol_id'] == 3) { ?>
    <body>
        <!-- Codigo para el header -->
        <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-fruver">
                <div class="container">
                    <a href="#"><img src="Multimedia/logo-carrito.png" alt="logo carrito"></a>
                    <a href="#">
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
                                <a class="nav-link" href="index.html">Servicios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.html">Categorias</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Contacto</a>
                            </li>
                        </ul>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <p class="col-md-6"><?= $_SESSION['datos']['nombre_usuario'] . " " . $_SESSION['datos']['apellido_usuario'] ?></p>
                        </div>
                        <div class="col-md-9">
                            <div class="row">
                                <div class="col-md-3">
                                    <a class="col-md-3" href="perfil.php"><img src="Multimedia/login.png" alt="login"></a>
                                </div>
                                <div class="col-md-9">
                                    <a class="col-md-3" href="logOut.php">Cerrar Sesion</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                </div>
            </nav>
        </header>
        <!-- Codigo para el main -->
        <main>
            <a href="#" class="btn-flotante">Carrito de compras</a>
            <div id="hero" class="container">
                <div class="cont-info">
                    <h3>FRUTAS Y VERDURAS</h3>
                    <h2>Elige tu mercado</h2>
                </div>
                <div class="img-frutas">
                    <img src="Multimedia/Fondo-frutas.png" class="d-block w-100" alt="Caro1">
                </div>
            </div>
            <section id="frutas">
                <div class="container">
                    <h2>Frutas</h2>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="card prod" style="width: 18rem;">
                                <img src="Multimedia/piña-fondo.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3>Piña</h3>
                                    <p class="card-info">3.000</p>
                                    <p class="card-info">unidad</p>
                                    <p class="card-infog">$20,21 por gramo</p>
                                    <input type="number" class="auto">
                                    <a href="#" class="btn btn-primary">Agregar a carrito</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card prod" style="width: 18rem;">
                                <img src="Multimedia/manzana.PNG" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3>Manzana</h3>
                                    <p class="card-info">2.000</p>
                                    <p class="card-info">unidad</p>
                                    <p class="card-infog">$20,21 por gramo</p>
                                    <input type="number" class="auto">
                                    <a href="#" class="btn btn-primary">Agregar a carrito</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card prod" style="width: 18rem;">
                                <img src="Multimedia/pera.PNG" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3>Pera</h3>
                                    <p class="card-info">1.500</p>
                                    <p class="card-info">unidad</p>
                                    <p class="card-infog">$20,21 por gramo</p>
                                    <input type="number" class="auto">
                                    <a href="#" class="btn btn-primary">Agregar a carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="verduras">
                <h2>Verduras</h2>
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="card prod" style="width: 18rem;">
                                <img src="Multimedia/espinaca.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3>Espinaca</h3>
                                    <p class="card-info">5.000</p>
                                    <p class="card-info">kilo</p>
                                    <p class="card-infog">$27,16 por gramo</p>
                                    <input type="number" class="auto">
                                    <a href="#" class="btn btn-primary">Agregar a carrito</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="card prod" style="width: 18rem;">
                                <img src="Multimedia/brocoli.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3>Brocoli</h3>
                                    <p class="card-info">3.000</p>
                                    <p class="card-info">unidad</p>
                                    <p class="card-infog">$24,21 por gramo</p>
                                    <input type="number" class="auto">
                                    <a href="#" class="btn btn-primary">Agregar a carrito</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="card prod" style="width: 18rem;">
                                <img src="Multimedia/repollo.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3>repollo</h3>
                                    <p class="card-info">1.000</p>
                                    <p class="card-info">gramos</p>
                                    <p class="card-infog">$12,21 por gramo</p>
                                    <input type="number" class="auto">
                                    <a href="#" class="btn btn-primary">Agregar a carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6">
                            <div class="card prod" style="width: 18rem;">
                                <img src="Multimedia/aguacate.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3>Aguacate</h3>
                                    <p class="card-info">3.800</p>
                                    <p class="card-info">unidad</p>
                                    <p class="card-infog">$22,36 por gramo</p>
                                    <input type="number" class="auto">
                                    <a href="#" class="btn btn-primary">Agregar a carrito</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="card prod" style="width: 18rem;">
                                <img src="Multimedia/cebolla.png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3>Cebolla</h3>
                                    <p class="card-info">3.800</p>
                                    <p class="card-info">unidad</p>
                                    <p class="card-infog">$22,36 por gramo</p>
                                    <input type="number" class="auto">
                                    <a href="#" class="btn btn-primary">Agregar a carrito</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-6">
                            <div class="card prod" style="width: 18rem;">
                                <img src="Multimedia/tomate (1).png" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h3>Tomate</h3>
                                    <p class="card-info">3.800</p>
                                    <p class="card-info">unidad</p>
                                    <p class="card-infog">$22,36 por gramo</p>
                                    <input type="number" class="auto">
                                    <a href="#" class="btn btn-primary">Agregar a carrito</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

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
                        <li><a href="frutas.php">
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
    </body>
<?php } ?>

</html>