<?php
session_start();


include("include/database.php");
include("include/funciones.php");

$bloqueo = isset($_SESSION["cliente"]);
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
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Free HTML5 Template by FREEHTML5.CO" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

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

	<link rel="stylesheet" href="css/estilos.css">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.24/dist/sweetalert2.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.24/dist/sweetalert2.all.min.js"></script>




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
							<h2 class="to-animate">Donde amamos cocinar <a href="http://freehtml5.co/"
									target="_blank">para Ti</a></h2>
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
						<a href="#" data-nav-section="home"><i class="fas fa-home"></i> Inicio</a>
						<a href="#" data-nav-section="about"><i class="fas fa-info-circle"></i> Acerca de</a>
						<a href="#" data-nav-section="features"><i class="fas fa-concierge-bell"></i> Especialidades</a>
					</div>
					<div class="fh5co-logo">
						<a href="index.php">Delisious<p class="menusito"> </p>food</a>
					</div>
					<div class="fh5co-menu-2">
						<a href="#" data-nav-section="menu"><i class="fas fa-utensils"></i> Menu</a>
						<a href="#" data-nav-section="reservation"><i class="fas fa-calendar-check"></i> Reservación</a>
						<?php if (isset($_SESSION["cliente"])) { ?>
							<a onclick="redireccionarSalir()" style="cursor: pointer;font-size: 12px;"><i
									class="fas fa-user"></i> Salir (<?php echo $_SESSION["cliente"]; ?>)</a>
						<?php } else { ?>
							<a onclick="redireccionar()" style="cursor: pointer;"><i class="fas fa-user"></i> Inicio de
								Sesión</a>

						<?php } ?>

					</div>
				</div>
			</div>
		</div>
		<div id="fh5co-about" data-section="about">
			<div class="fh5co-2col fh5co-bg to-animate-2" style="background-image: url(images/res_img_1.jpg)"></div>
			<div class="fh5co-2col fh5co-text">
				<h2 class="heading to-animate">¿Quiénes Somos?</h2>
				<p class="to-animate"><span class="firstcharacter">E</span>n Delicious Food, creemos que la mejor
					experiencia gastronómica comienza con ingredientes frescos, recetas auténticas y un ambiente
					acogedor. Somos un restaurante apasionado por la buena comida, donde cada platillo es preparado con
					dedicación para brindar a nuestros clientes un sabor inigualable.</p>
				<p class="text-center to-animate"><a href="#" class="btn btn-primary btn-outline">Regresar</a></p>

			</div>
		</div>

		<div id="fh5co-sayings">
			<div class="container">
				<div class="row to-animate">

					<div class="flexslider">
						<ul class="slides">

							<li>
								<blockquote>
									<p>&ldquo;¡Ven a descubrir el auténtico placer de la buena comida con nosotros!;</p>
									<p class="quote-author">&mdash; Nathan Myhrvold</p>
								</blockquote>
							</li>
							<li>
								<blockquote>
									<p>&ldquo;No se recuerda un día, se recuerdan los momentos.&rdquo;</p>
									<p class="quote-author">&mdash; Cesar Pavese</p>
								</blockquote>
							</li>
							<li>
								<blockquote>
									<p>&ldquo;Comer es una necesidad, pero cocinar es un arte.;</p>
									<p class="quote-author">&mdash; François de La Rochefoucauld.</p>
								</blockquote>
							</li>


						</ul>
					</div>

				</div>
			</div>
		</div>

		<div id="fh5co-featured" data-section="features">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">Platos Destacados</h2>
						<p class="sub-heading to-animate">Ya sea que busques un almuerzo reconfortante, una cena
							especial o simplemente un rincón para disfrutar de buena compañía, en Delicious Food siempre
							encontrarás calidad, pasión y un servicio excepcional.</p>
					</div>
				</div>
				<div class="row">
					<div class="fh5co-grid">
						<div class="fh5co-v-half to-animate-2">
							<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(images/res_img_1.jpg)">
							</div>
							<div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">
								<h2>Fresh Mushrooms</h2>
								<span class="pricing">$7.50</span>
								<p>Delicados y frescos champiñones salteados a la perfección, realzados con finas
									hierbas y un toque de mantequilla
									aromática. Un clásico lleno de sabor y textura irresistible.</p>
							</div>
						</div>
						<div class="fh5co-v-half">
							<div class="fh5co-h-row-2 to-animate-2">
								<div class="fh5co-v-col-2 fh5co-bg-img"
									style="background-image: url(images/res_img_2.jpg)"></div>
								<div class="fh5co-v-col-2 fh5co-text arrow-left">
									<h2>Grilled Chiken Salad</h2>
									<span class="pricing">$12.00</span>
									<p>Jugoso pollo a la parrilla servido sobre una mezcla fresca de lechugas, tomates
										cherry y crujientes crutones, aderezado con
										una vinagreta especial. Una opción ligera, saludable y llena de sabor.</p>
								</div>
							</div>
							<div class="fh5co-h-row-2 fh5co-reversed to-animate-2">
								<div class="fh5co-v-col-2 fh5co-bg-img"
									style="background-image: url(images/res_img_8.jpg)"></div>
								<div class="fh5co-v-col-2 fh5co-text arrow-right">
									<h2>Cheese and Garlic Toast</h2>
									<span class="pricing">$4.50</span>
									<p>Crujiente pan tostado con una irresistible mezcla de ajo y mantequilla, cubierto
										con queso
										derretido dorado al horno. Perfecto como entrada o acompañamiento.</p>
								</div>
							</div>
						</div>

						<div class="fh5co-v-half">
							<div class="fh5co-h-row-2 fh5co-reversed to-animate-2">
								<div class="fh5co-v-col-2 fh5co-bg-img"
									style="background-image: url(images/res_img_7.jpg)"></div>
								<div class="fh5co-v-col-2 fh5co-text arrow-right">
									<h2>Organic Egg</h2>
									<span class="pricing">$4.99</span>
									<p>Huevo orgánico de granja, fresco y nutritivo, ideal para comenzar el día con un
										desayuno saludable. Disponible
										en tu preparación favorita: revuelto, frito o pochado.</p>
								</div>
							</div>
							<div class="fh5co-h-row-2 to-animate-2">
								<div class="fh5co-v-col-2 fh5co-bg-img"
									style="background-image: url(images/res_img_6.jpg)"></div>
								<div class="fh5co-v-col-2 fh5co-text arrow-left">
									<h2>Salad with Crispy Chicken</h2>
									<span class="pricing">$8.50</span>
									<p>Ensalada fresca con una mezcla de lechugas crujientes, tomates cherry, zanahorias
										ralladas y trozos de pollo empanizado dorado. Acompañada
										de aderezo a elección para un toque final irresistible.</p>
								</div>
							</div>
						</div>
						<div class="fh5co-v-half to-animate-2">
							<div class="fh5co-v-col-2 fh5co-bg-img" style="background-image: url(images/res_img_3.jpg)">
							</div>
							<div class="fh5co-v-col-2 fh5co-text fh5co-special-1 arrow-left">
								<h2>Tomato Soup with Chicken</h2>
								<span class="pricing">$12.99</span>
								<p>FDeliciosa sopa de tomate casera con tiernos trozos de pollo, sazonada con hierbas
									frescas y un toque de crema
									para un sabor suave y reconfortante. Perfecta para cualquier ocasión.</p>
							</div>
						</div>

					</div>
				</div>

			</div>
		</div>

		<div id="fh5co-type" style="background-image: url(images/slide_3.jpg);" data-stellar-background-ratio="0.5">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-3 to-animate">
						<div class="fh5co-type">
							<h3 class="with-icon icon-1">Frutas</h3>
							<p>En nuestro restaurante, celebramos la frescura y el sabor natural de las frutas. Disfruta
								de jugos recién hechos, postres frutales y combinaciones que resaltan lo mejor de cada
								estación. ¡Un toque dulce y refrescante en cada bocado!</p>
						</div>
					</div>
					<div class="col-md-3 to-animate">
						<div class="fh5co-type">
							<h3 class="with-icon icon-2">Comida Marina</h3>
							<p>Sabores que vienen del mar directo a tu mesa. Nuestros mariscos y pescados son
								seleccionados con la mejor calidad para ofrecerte platillos frescos y deliciosos. </p>
						</div>
					</div>
					<div class="col-md-3 to-animate">
						<div class="fh5co-type">
							<h3 class="with-icon icon-3">Vegetables</h3>
							<p>La frescura de la naturaleza en cada plato. Utilizamos vegetales seleccionados para
								brindarte ensaladas vibrantes, guarniciones llenas de sabor y opciones saludables que
								complementan cualquier comida. </p>
						</div>
					</div>
					<div class="col-md-3 to-animate">
						<div class="fh5co-type">
							<h3 class="with-icon icon-4">Carnes</h3>
							<p>Para los amantes de la buena carne, ofrecemos cortes jugosos y llenos de sabor.
								Preparados con el mejor sazón y cocinados a la perfección, cada platillo es una
								experiencia para los sentidos.</p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fh5co-menus" data-section="menu">
			<div class="container">
				<div class="row text-center fh5co-heading row-padded">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="heading to-animate">Food Menu</h2>
						<p class="sub-heading to-animate">Una demostración de nuestros platillos para el deleito de
							nuestros comensales.</p>
					</div>
				</div>

				<div class="row row-padded">
					<div class="col-md-6">
						<div class="fh5co-food-menu to-animate-2">
							<h2 class="fh5co-"><i class="fa-solid fa-utensils"> </i> platillos</h2>

							<?php
							$consulta = "SELECT * FROM plato";
							$ejecutar = mysqli_query($con, $consulta);

							while ($fila = mysqli_fetch_array($ejecutar)) {
								$id = $fila["id"];
								$nombre = ($fila["nombre"]);
								$descripción = ($fila["descripción"]);
								$precio = $fila["precio"];
								$img = $fila["img"];
								?>
								<ul>
									<li>
										<div class="fh5co-food-desc">
											<figure>
												<img src="uploads/<?php echo $img ?>" class="img-responsive"
													alt="Free HTML5 Templates by FREEHTML5.co">
											</figure>
											<div>
												<h3><?php echo $nombre ?></h3>
												<p><?php echo $descripción ?></p>
											</div>
										</div>
										<div class="fh5co-food-pricing">
											<?php echo $precio ?>$
										</div>
									</li>
								</ul>
							<?php } ?>
						</div>
					</div>


					<div class="row">
						<div class="col-md-4 col-md-offset-4 text-center to-animate-2">
							<p><a href="#" class="btn btn-primary btn-outline">inicio</a></p>
						</div>
					</div>
				</div>
			</div>

			<div id="fh5co-events" data-section="events" style="background-image: url(images/slide_2.jpg);"
				data-stellar-background-ratio="0.5">

			</div>


			<div id="fh5co-contact" data-section="reservation">
				<div class="container">
					<div class="row text-center fh5co-heading row-padded">
						<div class="col-md-8 col-md-offset-2">
							<h2 class="heading to-animate">Tabla de reservación</h2>
							<p class="sub-heading to-animate">Antes de realizar tu reservación, completa el siguiente
								formulario con tus datos y preferencias. ¡Nos encantará recibirte!</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 to-animate-2">
							<h3>Información de Contacto</h3>
							<ul class="fh5co-contact-info">
								<li><i class="icon-phone"></i> +52 55 48280104</li>
								<li><i class="icon-envelope"></i>Deli@gmail.com</li>
								<li class="fh5co-contact-address ">
									<i class="icon-home"></i>
									Curro Riveraa, <br> Mz 85, Lt 5
								</li>
								<li><i class="fa-solid fa-location-dot"></i></i>Ubicación</li>
								<li><iframe
										src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3763.1982508067376!2d-98.98827252611552!3d19.403838341601425!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1e3315788b631%3A0x667690c1499579bf!2sUTN%20-%20Universidad%20Tecnol%C3%B3gica%20de%20Nezahualc%C3%B3yotl!5e0!3m2!1ses-419!2smx!4v1741982953644!5m2!1ses-419!2smx"
										width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy"
										referrerpolicy="no-referrer-when-downgrade"></iframe></li>
							</ul>
						</div>
						<div class="col-md-6 to-animate-2">
							<h3>Formulario de Reservación</h3>
							<form method="post" action="">
								<div class="form-group ">
									<label for="name" class="sr-only">Nombre</label>
									<input id="name" class="form-control" placeholder="Nombre" type="text" name="nombre"
										<?php echo !$bloqueo ? 'disabled' : ''; ?>>
								</div>
								<div class="form-group ">
									<label for="email" class="sr-only">Email</label>
									<input id="email" class="form-control" placeholder="Email" type="email" name="email"
										<?php echo !$bloqueo ? 'disabled' : ''; ?>>
								</div>
								<div class="form-group">
									<label for="ocacion" class="sr-only">Ocación</label>
									<input id="ocacion" class="form-control" placeholder="Ocación" type="ocacion"
										name="ocacion" <?php echo !$bloqueo ? 'disabled' : ''; ?>>
								</div>
								<div class="form-group ">
									<label for="date" class="sr-only">Fecha y hora</label>
									<input id="date" class="form-control" placeholder="Fecha &amp; hora" type="text"
										name="fecha" <?php echo !$bloqueo ? 'disabled' : ''; ?>>
								</div>
								<div class="form-group">
									<label for="telefono" class="sr-only">Teléfono</label>
									<input id="telefono" class="form-control" placeholder="Telefono" type="telefono"
										name="telefono" <?php echo !$bloqueo ? 'disabled' : ''; ?>>
								</div>



								<div class="form-group ">
									<label for="mensaje" class="sr-only">Mensaje</label>
									<textarea id="mensaje" cols="30" rows="5" class="form-control" placeholder="Mensaje"
										name="mensaje" <?php echo !$bloqueo ? 'disabled' : ''; ?>></textarea>
								</div>
								<div class="form-group ">
									<button class="btn btn-primary" onclick=" Reservacion()" value="Generar" <?php echo !$bloqueo ? 'disabled' : ''; ?>>Generar Reserva</butto>
								</div>
							</form>
						</div>
					</div>
				</div>
				<h2 class="tabla-titulo">Reservaciones</h2><br>
				<table class="tabla-usuarios">
					<tr>
						<th>Nombre del Usuario</th>
						<th>Ocasión</th>
						<th>Fecha y hora</th>
						<th>Borrar</th>
					</tr>
					<?php
					if (isset($_SESSION["cliente"])) {
						$usuario = $_SESSION["cliente"]; // Obtener el nombre del usuario desde la sesión
					
						// Consulta para obtener las reservaciones del usuario logueado
						$consulta = "SELECT * FROM cotisacion_reserva WHERE name = '$usuario'";
						$ejecutar = mysqli_query($con, $consulta);
						$i = 0;
						while ($fila = mysqli_fetch_array($ejecutar)) {
							$id = $fila["id"];
							$nombre = $fila["name"];
							$ocacion = $fila["ocacion"];
							$fecha = $fila["fecha"];
							$i++;
							?>
							<tr align="center" id="row_<?php echo $id ?>">
								<td><?php echo $nombre ?></td>
								<td><?php echo $ocacion ?></td>
								<td><?php echo $fecha ?></td>
								<td>
									<button onclick="eliminarReserva(<?php echo $id ?>)">
										<i class="fa fa-trash"></i> Eliminar
									</button>
								</td>
							</tr>
							<?php
						}
					} else {
						echo "<tr><td colspan='4'>Inicia sesión para ver tus reservaciones</td></tr>";
					}
					?>
				</table>
			</div>


		</div>

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

			function redireccionar() {
				window.location.href = "registro_inicio.php"
			}

			function redireccionarSalir() {
				fetch('logout.php')
					.then(response => response.text())
					.then(data => {
						console.log(data); // Mensaje del servidor
						window.location.href = "index.php"; // Redirige al login
					})
					.catch(error => console.error("Error al cerrar sesión:", error));
			}


		</script>
		<!-- Main JS -->
		<script src="js/main.js"></script>

		<script>
			function Reservacion() {
				event.preventDefault(); // Evita que la página se recargue

				var nombre = document.getElementById("name").value;
				var email = document.getElementById("email").value;
				var ocacion = document.getElementById("ocacion").value;
				var fecha = document.getElementById("date").value;
				var telefono = document.getElementById("telefono").value;
				var mensaje = document.getElementById("mensaje").value;

				if (!nombre || !email || !ocacion || !fecha || !telefono || !mensaje) {
					Swal.fire("Por favor, completa todos los campos.");
					return;
				}

				// Formatear fecha correctamente
				var date = document.getElementById("date").value;
				var formattedDate = date.replace("T", " ") + ":00";

				var formData = new FormData();
				formData.append("name", nombre);
				formData.append("email", email);
				formData.append("ocacion", ocacion);
				formData.append("fecha", formattedDate);
				formData.append("telefono", telefono);
				formData.append("mensaje", mensaje);

				fetch("include/Reserva.php", {
					method: "POST",
					body: formData
				})
					.then(response => response.text())
					.then(data => { // Ver qué responde el servidor
						Swal.fire({
							title: "¡Reserva exitosa!",
							icon: "success",
							draggable: true
						});

						// Limpiar los campos del formulario
						document.getElementById("name").value = "";
						document.getElementById("email").value = "";
						document.getElementById("ocacion").value = "";
						document.getElementById("date").value = "";
						document.getElementById("telefono").value = "";
						document.getElementById("mensaje").value = "";
					})
					.catch(error => {
						console.error("Error:", error);
						Swal.fire({
							icon: "error",
							title: "Oops...",
							text: "¡No se pudo realizar su reserva!",
							footer: '<a href="#">Intentelo más tarde </a>'
						});
					});
			}

		</script>

		<script>
			function eliminarReserva(id) {
				var confirmacion = confirm("¿Seguro de que quieres Borrar este registro?");
				if (confirmacion) {
					var formData = new FormData();
					formData.append("id", id);
					$.ajax({
						url: 'include/borrarR.php',
						type: 'POST',
						data: formData, 
						processData: false, 
						contentType: false, 
						success: function (data) {
							Swal.fire({
								icon: 'success',
								title: 'Registro Eliminado',
								showConfirmButton: false,
								timer: 1500
							}).then(function () {
								location.reload();  
							})
						}
					});
				}
			}
		</script>



</body>

</html>