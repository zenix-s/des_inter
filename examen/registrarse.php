<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        .fondo {
            background: url(images/iphonefondo3.jpg);
            background-size: cover;
        }

        .fondoheader {
            background: #A19882;
        }

        .fondostock {
            background: #F8EDE3;
        }

        .fondoofertas {
            background: #6D9886;
        }

        .fondoequipo {
            background: #F8EDE3;
        }

        .fondofooter {
            background: #A19882;
        }

        .carousel-inner img {
            margin: auto;
        }

        .carousel-control-prev-icon {
            background-color: #000000;
        }

        .carousel-control-next-icon {
            background-color: #000000;
        }
    </style>

    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>
    <header>
        <!--HEADER-->
        <div class="fondoheader">
            <div class="col-12">
                <div class="row">
                    <!--LOGOTIPO-->
                    <div class="col-1"></div>
                    <div class="col-2 d-flex justify-content-start"><img src="images/logo-fld03.svg" width="100px">
                    </div>
                    <!--NAV-->
                    <div class="col-9 d-flex justify-content-end">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <div class="container-fluid">
                                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="navbar-toggler-icon"></span>
                                </button>
                                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                                        <li class="nav-item">
                                            <a class="lead nav-link active text-light" aria-current="page" href="#nosotros">Nosotros</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="lead nav-link text-light" href="#equipo">Equipo</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="lead nav-link text-light" href="#productos">Productos</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="lead nav-link text-light" href="#contacta">Contacta</a>
                                        </li>
                                    </ul>
                                    <form class="d-flex">
                                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                        <button class="lead btn btn-outline-light " type="submit">Buscar
                                            Productos</button>
                                    </form>
                                </div>
                            </div>
                        </nav>
                    </div>
                    <div class="col-1"></div>
                </div>
            </div>
        </div>
    </header>



    <!--CAJA DERECHA-->
    <div class="col-md-12 col-12">
        <div class="row">
            <!--TITULO-->
            <div class="col-12 d-flex justify-content-center">
                <h3 class="text-DARK mt-4 ms-3"><strong>REGISTRARSE</strong>
                </h3>
            </div>
            <div class="row">
                <!--INPUT-->
                <div class="lead col-12 d-flex justify-content-start text--DARK ms-3">USUARIO
                </div>
                <div class="input-group mb-3 ms-3">
                    <input type="text" class="form-control" name="usuario" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>

                <div class=" lead col-12 d-flex justify-content-start text--DARK ms-3">CONTRASEÑA

                </div>
                <div class="input-group mb-3 ms-3">
                    <input type="text" class="form-control" name="clave" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="lead col-12 d-flex justify-content-start text--DARK ms-3">CORREO
                </div>
                <div class="input-group mb-3 ms-3">
                    <input type="text" class="form-control" name="CORREO" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
                </div>
                <div class="input-group mb-3 ms-3">
                    <input type="submit" class="form-control" bg-primary aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="REGISTRAR">
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-1 col-sm-12"></div>
    </div>
    </div>

    </div>
    </section>
    <!--PRODUCTOS EN STOCK-->
    <section id="equipo">
        <div class="fondostock">
            <section class="bg-light text-dark py-5">
                <div class="container">
                    <h3 class="text-center"><strong>PRODUCTOS EN STOCK</strong></h3>
                    <div class="row ">
                        <div class="col-md-3 my-5">
                            <div class="card">
                                <div class="card-body">
                                    <p style="text-align: center" class="lead">Apple Macbook Pro </p>
                                    <p style="text-align: center" class="lead">MXK52Y/A</p>
                                    <img class="img-fluid rounded mx-auto d-block" src="images/macbook.jpg" width="200px" alt="" srcset="">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-5">
                            <div class="card">
                                <div class="card-body bg-secondary " height="300px">
                                    <p style="text-align: center" class="lead">Asus VivoBook (14)</p>
                                    <p style="text-align: center" class="lead">S433FL</p>
                                    <img class="img-fluid rounded mx-auto d-block" src="images/asus.png" width="200px" alt="" srcset="">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-5">
                            <div class="card">
                                <div class="card-body">
                                    <p style="text-align: center" class="lead">Portatil HP 15.6' FULL</p>
                                    <p style="text-align: center" class="lead">HD</p>
                                    <img class="img-fluid rounded mx-auto d-block" src="images/PORTATIL-HP-15S-FQ1125NS-I5-1035G18GBSSD512GB15.6FREEDOSGREY.jpg" width="200px" alt="" srcset="">

                                </div>
                            </div>
                        </div>
                        <div class="col-md-3 my-5 ">
                            <div class="card-body bg-secondary">
                                <p style="text-align: center" class="lead">Huawei MateBook X Pro</p>
                                <p style="text-align: center" class="lead">13' CORE i5</p>
                                <img class="img-fluid rounded mx-auto d-block" src="images/laptop-png-laptop-notebook-png-image-1358.png" width="200px" alt="" srcset="">

                            </div>
                        </div>
                    </div>

            </section>
        </div>
    </section>

    <!--EQUIPO TECNICO-->
    <section id="contacta">
        <div class="fondoequipo">
            <div class="col-12">
                <div class="row">
                    <!--TITULO-->
                    <div class="col-12 mt-3 d-flex justify-content-center">
                        <h3 class="text-dark"><strong>EQUIPO TECNICO</strong></h3>
                    </div>
                    <div class="col-12 mt-1 d-flex justify-content-center">
                        <p class="lead text-dark">El equipo técnico está a tu servicio las 24h del dia</p>
                    </div>
                    <!--FOTOS-->
                    <div class="row">
                        <div class="col-md-3 col-12 my-3">
                            <article class="card me-3 mb-3 ms-3">
                                <div class="card-body">
                                    <div class="col-12 d-flex justify-content-center">
                                        <img src="images/anon.png" class="rounded-circle" width="100px">
                                    </div>
                                    <div class="lead col-12  d-flex  justify-content-center">Juan Garcia</div>
                                    <div class="col-12 d-flex justify-content-center"><small>Contacta con Juan</small>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-md-3 col-12 my-3">
                            <article class="card me-3 mb-3 ms-3">
                                <div class="card-body">
                                    <div class="col-12 d-flex justify-content-center">
                                        <img src="images/anon.png" class="rounded-circle" width="100px">
                                    </div>
                                    <div class="lead col-12 d-flex justify-content-center">Lorena Martin</div>
                                    <div class="col-12 d-flex justify-content-center"><small>Contacta con Lorena</small>
                                    </div>

                                </div>
                            </article>
                        </div>
                        <div class="col-md-3 col-12 my-3">
                            <article class="card me-3 mb-3 ms-3">
                                <div class="card-body">
                                    <div class="col-12 d-flex justify-content-center">
                                        <img src="images/anon.png" class="rounded-circle" width="100px">
                                    </div>
                                    <div class="lead col-12  d-flex  justify-content-center">Luis Pedraza</div>
                                    <div class="col-12 d-flex justify-content-center"><small>Contacta con Luis</small>
                                    </div>

                                </div>
                            </article>
                        </div>
                        <div class="col-md-3 col-12 my-3">
                            <article class="card me-3 mb-3 ms-3">
                                <div class="card-body">
                                    <div class="col-12 d-flex justify-content-center">
                                        <img src="images/anon.png" class="rounded-circle" width="100px">
                                    </div>
                                    <div class="lead col-12  d-flex  justify-content-center">Elena Gonzalez</div>
                                    <div class="col-12 d-flex justify-content-center"><small>Contacta con Elena</small>
                                    </div>
                                </div>
                            </article>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        </div>
    </section>
    <!--FOOTER -->
    <div class="fondofooter">
        <div class="col-12">
            <div class="row">
                <div class="col-md-12 col-6 mt-3 d-flex justify-content-center">
                    <h2 class="lead text-light ms-3">APLICACION PARA LA ADMINISTRACIÓN DEL HARDWARE</h2>
                </div>
                <div class="col-md-12 col-6 d-flex justify-content-center">
                    <img src="images/kisspng-laptop-drawing-computer-monitors-laptops-5acdfa14b1e495.0598038115234483407287.png" width="100px">
                    <img src="images/kisspng-drawing-laptop-sketch-computer-graphics-notebook-sketch-transparent-png-amp-svg-vector-5cfafaf50e2fa4.4067186915599521170581.png" width="100px">
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
    </div>
</body>

<!--SCRIPT-->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

</html>