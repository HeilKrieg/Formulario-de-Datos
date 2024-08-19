<?php
header("Cache-Control: no-cache, must-revalidate"); // HTTP/1.1
header("Expires: Sat, 1 Jul 2000 05:00:00 GMT"); // Fecha en el pasado
?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Menu general</title>
	<meta http-equiv="Expires" content="0">
	<meta http-equiv="Last-Modified" content="0">
	<meta http-equiv="Cache-Control" content="no-cache, mustrevalidate">
	<meta http-equiv="Pragma" content="no-cache">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link
		href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Dancing+Script&family=Dosis:wght@300&family=Fuggles&display=swap"
		rel="stylesheet">
	<link rel="stylesheet" href="../css/menu.css">
	<link rel="stylesheet" href="../css/formAltas.css">

</head>

<body>
	<div id="contenedor">

		<div class="header">

			<div class="top">
				<!-- Logo -->
				<div id="logo">

					<h1 id="title">Administra Usuario</h1>
					<p>Gestiona los usurios de este sistema</p>
				</div>

				<!-- Nav -->
				<nav id="nav">
					<ul>
						<li><a href="#altas" id="altas-link"><span class="icono-container">Altas<img class="icono"
										src="../images/icono-alta.png"></span></a></li>
						<li><a href="#bajas" id="bajas-link"><span class="icono-container">Bajas<img class="icono"
										src="../images/icono-baja.png"></span></a></li>
						<li><a href="#modificacion" id="modificacion-link"><span
									class="icono-container">ModificacionMe<img class="icono"
										src="../images/icono-modificar.png"></span></a></li>
						<li><a href="#listar" id="listar-link"><span class="icono-container">Listar<img class="icono"
										src="../images/icono-listar.png"></span></a>
						</li>
					</ul>
				</nav>

			</div>
		</div>

		<div class="main">
			<div class="image-menu"><img id="menuLateral" src="../images/menu.png" alt="" /></div>
			<section class="banner">
				<div class="container">
					<h2 class="titulo">Administración de Usuario</h2>
				</div>
			</section>

			<!-- Intro -->
			<section id="altas" class="one dark cover">
				<div class="container">
					<?php
					include("form-altas.php");
					?>
				</div>
			</section>

			<!-- Portfolio -->
			<section id="bajas" class="two">
				<div class="container">
					<?php
					include("form-bajas.php");
					?>
				</div>
			</section>

			<!-- About Me -->
			<section id="modificacion" class="three">
				<div class="container">
					<?php
					include("form-modificacion.php");
					?>
				</div>
			</section>

			<!-- Contact -->
			<section id="listar" class="four">
				<div class="container">
					<?php
					include("listar.php");
					?>
				</div>
			</section>

			<!-- Footer -->
			<footer id="footer">
				<!-- Copyright -->
				<ul class="copyright">
					<li>&copy; Untitled. All rights reserved.</li>
					<li>Design: <a href="">VSLA Developer</a></li>
					<li></li>
				</ul>
			</footer>
		</div>
	</div>

	<script src="../js/menu.js"></script>
	<script src="../js/form-altas.js"></script>
	<script src="../js/form-baja.js"></script>
	<script src="../js/form-modificar.js"></script>
	<script src="../js/animacionInput.js"></script>
</body>

</html>