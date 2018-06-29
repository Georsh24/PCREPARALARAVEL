<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
  <link rel="stylesheet" href="css/estilos.css">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="icomoon/style.css">
  <link href="https://fonts.googleapis.com/css?family=Amatic+SC|Kalam|Shadows+Into+Light" rel="stylesheet">

  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- Styles -->

</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">

    <!--<div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif
-->

    <div class="container-fuid encabezado" style="background-color: #ff4040;color:#fff;height:20%;">

        <div>
            <a>
                <img class="imglogo" src="Pcrepara Logo.png" width="100%">
            </a>
        </div>

    </div>

    <nav class="navbar navbar-inverse " data-spy="affix" data-offset-top="150">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand textencabezado" href="index.php">PCREPARA</a>
            </div>
            <div>
                <div class="collapse navbar-collapse" id="myNavbar">
                    <ul class="nav navbar-nav">
                        <li>
                            <a class="textencabezado" href="index.php #section1">Inicio</a>
                        </li>
                        <li>
                            <a class="textencabezado" href="index.php #section2">Promociones</a>
                        </li>
                        <li>
                            <a class="textencabezado" href="index.php #section3">Nuestro Equipo</a>
                        </li>
                        <li>
                            <a class="textencabezado" href="index.php #section41">Contactanos</a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">

                        <li>
                            <a class="textencabezado" href="/login">Iniciar Sesion</a>
                        </li>
                        <li>
                            <a class="textencabezado" href="/register">Registro</a>
                        </li>
                      
                </div>
            </div>
        </div>
    </nav>

    <div id="section1" class="container-fluid">



        <div class=" imginicio">
            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">

                    <div class="item active imginicio">
                        <img src="2.jpg" alt="Los Angeles" style="width:100%; height: 400px;">
                        <div class="carousel-caption">
                            <h3>Los Angeles</h3>
                            <p>LA is always so much fun!</p>
                        </div>
                    </div>

                    <div class="item imginicio">
                        <img src="3.jpg" alt="Chicago" style="width:100%; height: 400px;">
                        <div class="carousel-caption">
                            <h3>Chicago</h3>
                            <p>Thank you, Chicago!</p>
                        </div>
                    </div>

                    <div class="item imginicio">
                        <img src="2.jpg" alt="New York" style="width:100%; height: 400px;">
                        <div class="carousel-caption">
                            <h3>New York</h3>
                            <p>We love the Big Apple!</p>
                        </div>
                    </div>

                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
        <div class="cotainer">
            <div class="contextmov">
                <p class="textp">PC </p>
                <ul class="textul">
                    <li class="textli">Seguridad</li>
                    <li class="textli">Calidad</li>
                    <li class="textli">Precio</li>
                </ul>
                <p class="textp">para </p>
            </div>
        </div>


    </div>

    </div>


    <div id="section2" class="container-fluid">
     
       
        </div>
    </div>
    <div id="section3" class="container-fluid">
        <div class="container">
            <h1>Nuestro Equipo</h1>
            <div class="w3-row w3-center">
                <div class="w3-col l4  w3-center">
                    <div class="w3-container">
                        <h2>Desarrollo/Soporte</h2>
                        <div class="w3-row">
                            <div class="w3-col s6 w3-center">
                                <div class="w3-card-4" style="width:100%">
                                    <img src="avatares/avatar-12.png" alt="Norway" style="width:100%">
                                    <div class="w3-container w3-center">
                                        <p>Jorge Alejandro Fernández Rivera</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w3-col s6 w3-center">
                                <div class="w3-card-4" style="width:100%">
                                    <img src="avatares/avatar.png" alt="Norway" style="width:100%">
                                    <div class="w3-container w3-center">
                                        <p>Jean Loui Rodriguez Gomez</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="w3-col l4  w3-center">
                    <div class="w3-container">
                        <h2>Desarrollo/Soporte</h2>
                        <div class="w3-row">
                            <div class="w3-col s6 w3-center">
                                <div class="w3-card-4" style="width:100%">
                                    <img src="avatares/avatar-1.png" alt="Norway" style="width:100%">
                                    <div class="w3-container w3-center">
                                        <p>Miguel Ibañez</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w3-col s6 w3-center">
                                <div class="w3-card-4" style="width:100%">
                                    <img src="avatares/avatar-2.png" alt="Norway" style="width:100%">
                                    <div class="w3-container w3-center">
                                        <p>Lorenzo Arellano</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="w3-col l4  w3-center">
                    <div class="w3-container">
                        <h2>Administracion</h2>
                        <div class="w3-row">
                            <div class="w3-col s6 w3-center">
                                <div class="w3-card-4" style="width:100%">
                                    <img src="avatares/avatar-7.png" alt="Norway" style="width:100%">
                                    <div class="w3-container w3-center">
                                        <p>Abel Rodríguez Navarro</p>
                                    </div>
                                </div>
                            </div>
                            <div class="w3-col s6 w3-center">
                                <div class="w3-card-4" style="width:100%">
                                    <img src="avatares/avatar-23.png" alt="Norway" style="width:100%">
                                    <div class="w3-container w3-center">
                                        <p>Emma Edith Rodríguez</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <h1>Estamos para servirte!
                    <h1>
                        <a href="#section41">
                            <img class="iconc" src="flechaabajo.png">
                        </a>
                        <br>
                        <br>
                        <br>
                        <br>
                        <br>
                        <div class="section4"></div>
                        <br>
                        <br>
            </div>
        </div>



    </div>
    </div>
    <div id="section41" class="container-fluid">
        <div class=" piecontactanos">
            <h1>Contactanos</h1>
            <div class="col-8">
                <p>© Copyright 2018. Todos los Derechos Reservados. Desarrollado por: </p>
                <p> www.jorgeelchido.com</p>
                <p>Da click en el siguente boton</p>
            </div>
        </div>

        <div class="container-icons">
            <a href="">
                <div class="row-icon icon1">
                    <h4>Google+</h4>
                    <label class="">
                        <img class="label1" src="imgcontact/google-plus.png">
                    </label>
                </div>
            </a>
            <a href="">
                <div class="row-icon icon2">
                    <h4>Youtube</h4>
                    <label class="">
                        <img class="label2" src="imgcontact/youtube.png">
                    </label>
                </div>
            </a>
            <a href="">
                <div class="row-icon icon3">
                    <h4>Instagram</h4>
                    <label class="">
                        <img class="label3" src="imgcontact/instagram.png">
                    </label>
                </div>
            </a>
            <a href="">
                <div class="row-icon icon4">
                    <h4>Whatsapp</h4>
                    <label class=" ">
                        <img class="label4" src="imgcontact/whatsapp.png">
                    </label>
                </div>
            </a>
            <a href="">
                <div class="row-icon icon5">
                    <h4>Facebook</h4>
                    <label class=" ">
                        <img class="label5" src="imgcontact/facebook.png">
                    </label>
                </div>
            </a>
            <a href="">
                <div class="row-icon icon6">
                    <h4>Ubicacion</h4>
                    <label class=" ">
                        <img class="label6" src="imgcontact/location.png">
                    </label>
                </div>
            </a>

            <h2 class="iconop">
                <img src="imgcontact/phone-book.png" style="width:50px;" </h2>
        </div>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/jquerty.js"></script>
</body>

</html>