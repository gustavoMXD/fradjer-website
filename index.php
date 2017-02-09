<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <title>Fradjer Studios</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Material Design Bootstrap -->
    <link href="css/mdb.min.css" rel="stylesheet">

    <!-- Template styles -->
    <style rel="stylesheet">
        /* TEMPLATE STYLES */
        /* Necessary for full page carousel*/
        
        html,
        body,
        .view {
            height: 100%;
        }
        /* Navigation*/
        
        .navbar {
            background-color: transparent;
        }
        
        .scrolling-navbar {
            -webkit-transition: background .5s ease-in-out, padding .5s ease-in-out;
            -moz-transition: background .5s ease-in-out, padding .5s ease-in-out;
            transition: background .5s ease-in-out, padding .5s ease-in-out;
        }
        
        .top-nav-collapse {
            background-color: #1C2331;
        }
        
        footer.page-footer {
            background-color: #1C2331;
            margin-top: 0;
        }
        
        @media only screen and (max-width: 768px) {
            .navbar {
                background-color: #1C2331;
            }
        }
        /* Carousel*/
        
        .carousel,
        .carousel-item,
        .active {
            height: 100%;
        }
        
        .carousel-inner {
            height: 100%;
        }
        
        .carousel-item:nth-child(1) {
            background-image: url("img/background/fradjer-logo.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .carousel-item:nth-child(2) {
            background-image: url("img/background/fradjer-logo2.png");
            background-repeat: no-repeat;
            background-size: cover;
        }
        
        .carousel-item:nth-child(3) {
            background-image: url("img/background/camara.jpg");
            background-repeat: no-repeat;
            background-size: cover;
        }
        /*Caption*/
        
        .flex-center {
            color: #fff;
        }
        
        @media (min-width: 776px) {
            .carousel .view ul li {
                display: inline;
            }
            .carousel .view .full-bg-img ul li .flex-item {
                margin-bottom: 1.5rem;
            }
        }
    </style>

</head>

<body>

    <!--Navbar-->
    <nav class="navbar navbar-dark navbar-fixed-top scrolling-navbar">

        <!-- Collapse button-->
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#collapseEx">
            <i class="fa fa-bars"></i>
        </button>

        <div class="container">

            <!--Collapse content-->
            <div class="collapse navbar-toggleable-xs" id="collapseEx">
                <!--Navbar Brand-->
                <a class="navbar-brand" href="index.php">FRADJER STUDIOS</a>
                <!--Links-->
                <ul class="nav navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Inicio<span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Proyectos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="nosotros.php">Nosotros</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Tienda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contacto</a>
                    </li>
                </ul>
                
                <ul class="nav navbar-nav nav-flex-icons">
                    <li class="nav-item">
                        <a class="nav-link" href="login.html"><i class="fa fa-sign-in" aria-hidden="true"></i> Iniciar sesión</a>
                    </li>
                </ul>
            </div>
            <!--/.Collapse content-->

        </div>

    </nav>
    <!--/.Navbar-->

    <!--Carousel Wrapper-->
    <div id="carousel-example-1" class="carousel slide carousel-fade" data-ride="carousel" data-interval="false">
        <!--Indicators-->
        <ol class="carousel-indicators">
            <li data-target="#carousel-example-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-1" data-slide-to="1"></li>
            <li data-target="#carousel-example-1" data-slide-to="2"></li>
        </ol>
        <!--/.Indicators-->

        <!--Slides-->
        <div class="carousel-inner" role="listbox">

            <!--First slide-->
            <div class="carousel-item active">
                <!--Mask-->
                <div class="view hm-black-light">
                    <div class="full-bg-img flex-center">
                        <ul class="animated fadeInUp col-md-12">
                            <li>
                                <h1 class="h1-responsive flex-item"><b>¡NUNCA DEJES DE SONREIR!</b></h1>
                                <li>
                                    <p class="flex-item">Un estudio independiente de entretenimiento con calidad</p>
                                </li>
                                <li>
                                    <a href="#" class="btn btn-primary btn-lg flex-item teal accent-4">Registrate!</a>
                                </li>
                                <li>
                                    <a href="nosotros.html" class="btn btn-default btn-lg flex-item cyan darken-4">Sobre nosotros</a>
                                </li>
                        </ul>
                    </div>
                </div>
                <!--/.Mask-->
            </div>
            <!--/.First slide-->

            <!--Second slide -->
            <div class="carousel-item">
                <!--Mask-->
                <div class="view hm-black-light">
                    <div class="full-bg-img flex-center">
                        <ul class="animated fadeInUp col-md-12">
                            <li>
                                <h1 class="h1-responsive">Se parte de nosotros!</h1>
                            </li>
                            <li>
                                <p>Unete como socio para recibir información, correos, notas y más detalles sobre nuestros próximos proyectos</p>
                            </li>
                            <li>
                                <a target="_blank" href="registro.html" class="btn btn-primary btn-lg">Ser socio!</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/.Mask-->
            </div>
            <!--/.Second slide -->

            <!--Third slide-->
            <div class="carousel-item">
                <!--Mask-->
                <div class="view hm-black-light">
                    <div class="full-bg-img flex-center">
                        <ul class="animated fadeInUp col-md-12">
                            <li>
                                <h1 class="h1-responsive">PROYECTOS</h1></li>
                            <li>
                                <p>Nuestras primeras obras como estudio independiente de calidad y enfocado al entretenimiento libre</p>
                            </li>
                            <li>
                                <a target="_blank" href="http://youtube.com" class="btn btn-default btn-lg">Ver tráiler</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!--/.Mask-->
            </div>
            <!--/.Third slide-->
        </div>
        <!--/.Slides-->

        <!--Controls-->
        <a class="left carousel-control" href="#carousel-example-1" role="button" data-slide="prev">
            <span class="icon-prev" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#carousel-example-1" role="button" data-slide="next">
            <span class="icon-next" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!--/.Controls-->
    </div>
    <!--/.Carousel Wrapper-->
    <!--/.Main layout-->



    <!--Footer-->
    <footer class="page-footer center-on-small-only">
        <!--Copyright-->
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2015 Copyright: <a href="">Fradjer Studios S.A.</a>
            </div>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer-->


    <!-- SCRIPTS -->

    <!-- JQuery -->
    <script type="text/javascript" src="js/jquery-2.2.3.min.js"></script>

    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src="js/tether.min.js"></script>

    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="js/mdb.min.js"></script>


</body>

</html>