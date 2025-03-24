<?php
session_start();
include("include/database.php");
include("include/funciones.php");
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

	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.24/dist/sweetalert2.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.24/dist/sweetalert2.all.min.js"></script>




	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

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
						<h2 class="to-animate">Panel de Administrador </h2>
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
					<a href="#" data-nav-section="usuario"><i class="fas fa-info-circle"></i> Tabla de usuarios</a>
					<a href="#" data-nav-section="reservation"><i class="fas fa-concierge-bell"></i> Tabla de
						Reservaciones </a>
				</div>
				<div class="fh5co-logo">
					<a href="index.php">Delisious<p class="menusito"> </p>food</a>
				</div>
				<div class="fh5co-menu-2">
					<a href="#" data-nav-section="menu"><i class="fas fa-utensils"></i> Tabla del Menu</a>
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

	<div id="fh5co-menus" data-section="usuario">
		<h2 class="tabla-titulo">Tabla de Usuarios</h2><br>
		<table class="tabla-usuarios">
			<tr>
				<th>ID</th>
				<th>Nombre del Usuario</th>
				<th>Correo</th>
				<th>Contraseña</th>
				<th>Fecha de registro</th>
				<th>Editar</th>
				<th>Borrar</th>
			</tr>
			<?php
			$consulta = "SELECT * FROM clientes";
			$ejecutar = mysqli_query($con, $consulta);
			$i = 0;
			while ($fila = mysqli_fetch_array($ejecutar)) {
				$id = $fila["id"];
				$nombre = $fila["name"];
				$email = $fila["email"];
				$password = $fila["password"];
				$altaa_cliente = $fila["altaa_cliente"];
				$i++;

				?>
				<tr align="center" id="row_<?php echo $id ?>">
					<td><?php echo $id ?></td>
					<td><?php echo $nombre ?></td>
					<td><?php echo $email ?></td>
					<td><?php echo $password ?></td>
					<td><?php echo $altaa_cliente ?></td>
					<td><button
							onclick="actualizarUsuario(<?php echo $id ?>, '<?php echo $nombre ?>', '<?php echo $email ?>', '<?php echo $password ?>')"><i
								class="fa fa-edit"></i></button></td>
					<td><button><i class="fa fa-trash" onclick="eliminarUsuario(<?php echo $id ?>)"></i> </button></td>
				</tr>
			<?php } ?>
		</table>

		<center>
			<h3>Editar Usuario</h3>
			<form id="formEditar" action="borrar.php" method="POST" style="display:none;">
				<input type="hidden" id="edit_id" name="id" />
				<label for="edit_nombre">Nombre</label>
				<input type="text" id="edit_nombre" name="nombre" />
				<label for="edit_email">Correo</label>
				<input type="email" id="edit_email" name="email" />
				<label for="edit_password">Contraseña</label>
				<input type="password" id="edit_password" name="password" />
				<button type="button" onclick="enviarActualizacion()">Actualizar</button>
			</form>
		</center>
	</div>

</div>

<div id="fh5co-sayings">

</div>


<div id="fh5co-type" style="background-image: url(images/slide_3.jpg);" data-stellar-background-ratio="0.5">

</div>

<div id="fh5co-menus" data-section="menu">

	<h2 class="tabla-titulo">Tabla de Platillos</h2><br>
	<table class="tabla-usuarios">
		<tr>
			<th>ID</th>
			<th>Nombre del platillo</th>
			<th>Descripcion</th>
			<th>Precio</th>
			<th>imagen</th>
			<th>Editar</th>
			<th>Borrar</th>
		</tr>
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
			<tr align="center" id="row_<?php echo $id ?>">
				<td><?php echo $id ?></td>
				<td><?php echo $nombre ?></td>
				<td><?php echo $descripción ?></td>
				<td><?php echo $precio ?></td>
				<td><img src="uploads/<?php echo $img; ?>" alt="Imagen" width="100" height="100"></td>
				<td>
					<button
						onclick="llenarFormulario('<?php echo $id ?>', '<?php echo $nombre ?>', '<?php echo $descripción ?>', '<?php echo $precio ?>')">
						<i class="fa fa-edit"></i>
					</button>
				</td>
				<td><button><i class="fa fa-trash" onclick="eliminarPlatillo(<?php echo $id ?>)"></i> </button></td>

			</tr>
		<?php } ?>
	</table>

	<center>
		<h3>Agregar / Editar Platillo</h3>
		<form id="formPlatillo" action="include/agregarP.php" method="POST" enctype="multipart/form-data">
			<input type="hidden" id="platillo_id" name="id" />

			<label for="nombre">Nombre</label>
			<input type="text" id="nombre" name="nombre" required />

			<label for="descripción">Descripción</label>
			<input type="text" id="descripción" name="descripción" required />

			<label for="precio">Precio</label>
			<input type="number" id="precio" name="precio" required />

			<label for="img">Imagen</label>
			<input type="file" , id="img" , name="img" , required />

			<button type="submit">Guardar</button>
		</form>
	</center>

	<script>
		function llenarFormulario(id, nombre, descripción, precio, img) {
			document.getElementById("platillo_id").value = id;
			document.getElementById("nombre").value = nombre;
			document.getElementById("descripción").value = descripción;
			document.getElementById("precio").value = precio;

			let imgInput = document.getElementById("img");
			if (imgInput && img) {
				imgInput.setAttribute("data-previous", img);
			}
		}

		document.getElementById("formPlatillo").addEventListener("submit", function (event) {
			event.preventDefault(); 

			var id = document.getElementById("platillo_id").value;
			var nombre = document.getElementById("nombre").value;
			var descripción = document.getElementById("descripción").value;
			var precio = document.getElementById("precio").value;
			var imgInput = document.getElementById("img");

			var formData = new FormData();
			formData.append('action', 'Actualizar');
			formData.append('id', id);
			formData.append('nombre', nombre);
			formData.append('descripción', descripción);
			formData.append('precio', precio);

			if (imgInput.files.length > 0) {
				formData.append('img', imgInput.files[0]);
			} else {
				formData.append('img', imgInput.getAttribute("data-previous"));
			}

			$.ajax({
				url: 'include/agregarP.php',
				type: 'POST',
				data: formData,
				processData: false,
				contentType: false,
				success: function (data) {
					Swal.fire({
						icon: 'success',
						title: 'Platillo Actualizado',
						showConfirmButton: false,
						timer: 1500
					}).then(function () {
						location.reload();
					});
				}
			});
		});

	</script>

	<script>
		function eliminarPlatillo(id) {
			var confirmacion = confirm("¿Seguro de que quieres Borrar este platillo?");
			if (confirmacion) {
				$.ajax({
					url: 'include/borrarP.php',
					type: 'POST',
					data: {
						action: 'borrar',
						id: id
					},
					success: function (data) {

						Swal.fire({
							icon: 'success',
							title: 'Platillo Eliminado',
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



</div>


<div id="fh5co-featured" data-section="features">


</div>

<div id="fh5co-events" data-section="events" style="background-image: url(images/slide_2.jpg);"
	data-stellar-background-ratio="0.5">

</div>


<div id="fh5co-contact" data-section="reservation">
	<h2 class="tabla-titulo">Reservaciones</h2><br>
	<table class="tabla-usuarios">
		<tr>
			<th>Nombre del Usuario</th>
			<th>Ocasión</th>
			<th>Estado</th>
			<th>Editar</th>
		</tr>
		<?php
		$consulta = "SELECT * FROM cotisacion_reserva";
		$ejecutar = mysqli_query($con, $consulta);
		$i = 0;
		while ($fila = mysqli_fetch_array($ejecutar)) {
			$id = $fila["id"];
			$nombre = $fila["name"];
			$ocacion = $fila["ocacion"];
			$estatus = $fila["estatus"]; // '0' para denegado, '1' para aceptado
			$i++;
			?>
			<tr align="center" id="row_<?php echo $id ?>">
				<td><?php echo $nombre ?></td>
				<td><?php echo $ocacion ?></td>
				<td>
					<?php if ($estatus == 1): ?>
						<i id="status_icon_<?php echo $id ?>" class="fa fa-check" style="color: green;"></i> Aceptado
					<?php elseif ($estatus == 0): ?>
						<i id="status_icon_<?php echo $id ?>" class="fa fa-times" style="color: red;"></i> Denegado
					<?php else: ?>
						<i id="status_icon_<?php echo $id ?>" class="fa fa-circle" style="color: grey;"></i> Pendiente
					<?php endif; ?>
				</td>
				<td>
					<button onclick="actualizarReserva(<?php echo $id ?>, <?php echo $estatus ?>)">
						<i class="fa fa-edit"></i> Cambiar Estado
					</button>
				</td>
			</tr>
		<?php } ?>
	</table>
</div>
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

<!-- Main JS -->
<script src="js/main.js"></script>

<script>
	function eliminarUsuario(id) {
		var confirmacion = confirm("¿Seguro de que quieres Borrar este registro?");
		if (confirmacion) {
			$.ajax({
				url: 'include/borrar.php',
				type: 'POST',
				data: {
					action: 'borrar',
					id: id
				},
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

<script>

	function actualizarUsuario(id, nombre, email, password) {
		// Mostrar el formulario de edición
		document.getElementById("formEditar").style.display = "block";

		document.getElementById("edit_id").value = id;
		document.getElementById("edit_nombre").value = nombre;
		document.getElementById("edit_email").value = email;
		document.getElementById("edit_password").value = password;
	}


	function enviarActualizacion() {
		var id = document.getElementById("edit_id").value;
		var nombre = document.getElementById("edit_nombre").value;
		var email = document.getElementById("edit_email").value;
		var password = document.getElementById("edit_password").value;

		// Realizamos el envío con AJAX
		$.ajax({
			url: 'include/actualizar.php',
			type: 'POST',
			data: {
				action: 'actualizar',
				id: id,
				nombre: nombre,
				email: email,
				password: password
			},
			success: function (data) {

				$('#row_' + id).find('td').eq(1).text(nombre);
				$('#row_' + id).find('td').eq(2).text(email);
				$('#row_' + id).find('td').eq(3).text(password);


				Swal.fire({
					icon: 'success',
					title: 'Usuario Actualizado',
					showConfirmButton: false,
					timer: 1500
				});

				// Ocultar el formulario de edición
				document.getElementById("formEditar").style.display = "none";
			},
			error: function () {
				Swal.fire({
					icon: 'error',
					title: 'Error al actualizar',
					showConfirmButton: true
				});
			}
		});
	}
</script>

<script>
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

<script>
	function actualizarReserva(id, estatus) {
		var nuevoEstatus = (estatus == 1) ? 0 : 1;

		$.ajax({
			url: 'include/actualizarR.php',
			type: 'POST',
			data: {
				id: id,
				estatus: estatus
			},
			success: function (response) {
				console.log(response);
				Swal.fire({
					icon: 'success',
					title: 'Reserva Actualizada',
					showConfirmButton: false,
					timer: 1500
				})
			}
		});
	}

</script>


</body>


</html>