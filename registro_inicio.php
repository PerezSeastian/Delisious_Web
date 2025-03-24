<?php



?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Delisious App</title>
    <link rel="icon" href="images/Logo Parrilla Argentina Circular Marrón y Negro.ico">


    <!-- 
    //////////////////////////////////////////////////////

    FREE HTML5 TEMPLATE 
    DESIGNED & DEVELOPED by FREEHTML5.CO
        
    Website: 		http://freehtml5.co/
    Email: 			info@freehtml5.co
    Twitter: 		http://twitter.com/fh5co
    Facebook: 		https://www.facebook.com/fh5co

    //////////////////////////////////////////////////////
     -->

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link
        href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic,700italic|Merriweather:300,400italic,300italic,400,700italic'
        rel='stylesheet' type='text/css'>

    <!-- Animate.css -->
    <link rel="stylesheet" href="css/animate.css">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="css/icomoon.css">
    <!-- Simple Line Icons -->
    <link rel="stylesheet" href="css/simple-line-icons.css">
    <!-- Datetimepicker -->
    <link rel="stylesheet" href="css/bootstrap-datetimepicker.min.css">
    <!-- Flexslider -->
    <link rel="stylesheet" href="css/flexslider.css">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="css/bootstrap.css">

    <link rel="stylesheet" href="css/style.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">



    <!-- Modernizr JS -->
    <script src="js/modernizr-2.6.2.min.js"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="js/respond.min.js"></script>
    <![endif]-->

</head>

<body>






    <div id="fh5co-container">
        <div id="fh5co-home" class="js-fullheight" data-section="home">
            <div class="flexslider">

                <div class="fh5co-overlay"></div>
                <div class="fh5co-text">
                    <div class="container">
                        <div class="row">
                            <h1 class="to-animate">
                                <p class="tamaño">Delisious Food</p>
                            </h1>
                            <h2 class="to-animate">Inicia tu experiencia <a href="" target="_blank">Ahora</a></h2>
                        </div>
                    </div>
                </div>
                <ul class="slides">
                    <li style="background-image: url(images/slide_1.jpg);" data-stellar-background-ratio="0.5"></li>
                    <li style="background-image: url(images/slide_2.jpg);" data-stellar-background-ratio="0.5"></li>
                    <li style="background-image: url(images/slide_3.jpg);" data-stellar-background-ratio="0.5"></li>
                </ul>

            </div>

        </div>

        <div class="js-sticky">
            <div class="fh5co-main-nav">
                <div class="container-fluid">
                    <div class="fh5co-menu-1">
                        <a href="index.php"> </a>
                    </div>
                    <div class="fh5co-logo">
                        <a href="index.html">Delisious<p class="menusito"> </p>food</a>
                    </div>
                    <div class="fh5co-menu-2">
                        <a onclick="redireccionarIndex()" style="cursor:pointer;"> <i class="fas fa-home"></i>
                            Inicio</a>

                    </div>
                </div>

            </div>
        </div>

        <body>
            <div id="fh5co-contact" data-section="login">
                <div class="container">
                    <div class="row text-center fh5co-heading row-padded">
                        <div class="col-md-8 col-md-offset-2">
                            <h2 class="heading to-animate" id="form-title">Iniciar Sesión</h2>
                            <p class="sub-heading to-animate">Accede a tu cuenta o regístrate para disfrutar de nuestros
                                servicios.</p>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6 col-md-offset-3 to-animate-2">
                            <div id="login_datos">
                                <div class="form-group">
                                    <label for="login-email" class="sr-only">Email</label>
                                    <input id="email" class="form-control" placeholder="Email" type="email"
                                        name="email">
                                </div>
                                <div class="form-group">
                                    <label for="login-password" class="sr-only">Contraseña</label>
                                    <input id="password" class="form-control" placeholder="Contraseña" type="password"
                                        name="password">
                                </div>

                                <div class="form-group">
                                    <button class="btn btn-primary" onclick="Login()">Iniciar Session</button>
                                </div>
                                <div id="mensaje_error" style="color: red;text-align: center;"></div>
                                <div class="d-flex justify-content-between align-items-center">
                                    <a href="#" onclick="toggleForm()">¿No tienes cuenta? Regístrate aquí</a>
                                    <a href="index.php" class="btn btn-link">
                                        <i class="fas fa-arrow-left"></i> Regresar
                                    </a>
                                </div>
                            </div>

                            <div id="register-form" style="display: none;">
                                <div class="form-group">
                                    <label for="register-name" class="sr-only">Nombre</label>
                                    <input id="register-name" class="form-control" placeholder="Nombre completo"
                                        name="name" type="text">
                                </div>
                                <div class="form-group">
                                    <label for="register-email" class="sr-only">Email</label>
                                    <input id="register-email" class="form-control" placeholder="Email" name="email"
                                        type="email">
                                </div>
                                <div class="form-group">
                                    <label for="register-password" class="sr-only">Contraseña</label>
                                    <input id="register-password" class="form-control" placeholder="Contraseña"
                                        name="password" type="password">
                                </div>
                                <div class="form-group">
                                    <button class="btn btn-primary w-100 py-3" onclick="GuardarRegistro()">Guardar
                                        Registro</button>
                                </div>
                                <div class="d-flex align-items-center">
                                    <a href="#" onclick="toggleForm(1)">¿Ya tienes cuenta? Inicia sesión aquí</a>
                                    <a href="index.php" class="btn btn-link ms-auto">
                                        <i class="fas fa-arrow-left"></i> Regresar
                                    </a>
                                </div>
                            </div>

                            <div class="text-center">

                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <script>
                function toggleForm(x) {
                    if (x == 1) {

                        $("#register-form").hide();
                        $("#login_datos").show();
                    } else {

                        $("#login_datos").hide();
                        $("#register-form").show()
                    }

                }
            </script>


            <div id="fh5co-footer">
                <div class="container">
                    <div class="row row-padded">
                        <div class="col-md-12 text-center">
                            <p class="to-animate">&copy; 2025 Proyect Innovation.</a>
                            </p>
                            <p class="text-center to-animate"><a href="#" class="js-gotop">Go To Top</a></p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <ul class="fh5co-social">
                                <li class="to-animate-2"><a href="#"><i class="icon-facebook"></i></a></li>
                                <li class="to-animate-2"><a href="#"><i class="icon-twitter"></i></a></li>
                                <li class="to-animate-2"><a href="#"><i class="icon-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>






            <!-- jQuery -->
            <script src="js/jquery.min.js"></script>
            <!-- jQuery Easing -->
            <script src="js/jquery.easing.1.3.js"></script>
            <!-- Bootstrap -->
            <script src="js/bootstrap.min.js"></script>
            <!-- Bootstrap DateTimePicker -->
            <script src="js/moment.js"></script>
            <script src="js/bootstrap-datetimepicker.min.js"></script>
            <!-- Waypoints -->
            <script src="js/jquery.waypoints.min.js"></script>
            <!-- Stellar Parallax -->
            <script src="js/jquery.stellar.min.js"></script>

            <!-- Flexslider -->
            <script src="js/jquery.flexslider-min.js"></script>
            <script>
                $(function () {
                    $('#date').datetimepicker();
                });
            </script>
            <!-- Main JS -->
            <script src="js/main.js"></script>

        </body>

</html>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

    function redireccionarIndex() {
        window.location.href = "index.php";
    }


    function Login() {

        var email = $("#email").val();
        if (email == "") {
            Swal.fire({ icon: 'error', title: 'Ingresa Email', showConfirmButton: false, timer: 1500 });
            //alert("campo vacio");
            return false;
        }

        var password = $("#password").val();
        if (password == "") {
            Swal.fire({ icon: 'error', title: 'Ingresa Password ', showConfirmButton: false, timer: 1500 });
            return false;
        }


        $.ajax({

            url: 'include/login.php',
            type: 'POST',
            data: {
                email: email,
                pas: password

            },
            success: function (data) {
                console.log(data);

                if(data == 2){
                    window.location.href = "indexAdmin.php"
                }else if (data == 1) {
                    window.location.href = "index.php";
                } else {
                    $("#mensaje_error").html("Passworod o Email incorrecto");
                }

            }

        });
    }

    function GuardarRegistro() {

        var name = $("#register-name").val();
        if (name == "") {
            Swal.fire({ icon: 'error', title: 'Ingresa Nombre Completo', showConfirmButton: false, timer: 1500 });
            return false;
        }


        var email = $("#register-email").val();
        if (email == "") {
            Swal.fire({ icon: 'error', title: 'Ingresa Email', showConfirmButton: false, timer: 1500 });
            return false;
        }

        var password = $("#register-password").val();
        if (password == "") {
            Swal.fire({ icon: 'error', title: 'Ingresa Password ', showConfirmButton: false, timer: 1500 });
            return false;
        }




        $.ajax({

            url: 'include/alta_cliente.php',
            type: 'POST',
            data: {
                name: name, email: email, password: password

            },
            success: function (data) {
                Swal.fire({
                    icon: 'success',
                    title: 'Registro Correcto',
                    showConfirmButton: false,
                    timer: 1500
                })

                setTimeout("location.href='registro_inicio.php'", 2000);

            }



        });

    }

</script>