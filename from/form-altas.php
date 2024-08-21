<div class="form">
	<h3 class="altaTitulo">FORMULARIO DE ALTA</h3>
	<form class="altaInput" action="../server/altas.php" method="POST" enctype="multipart/form-data">
		<div class="grupoInputs">
			<img onclick="seleccionarArchivo()" src="../images/fotoPerfil.png" id="imgPerfil" alt="">
			<input type="file" class="inputFile" name="foto"><br>
		</div>

		<div class="grupoInputs">
			<input type="text" placeholder="usuario" name="usuario"><br>
		</div>

		<div class="grupoInputs">
			<label>Contraseña</label>
			<input type="password" placeholder="clave" name="clave"><br>
		</div>

		<div class="grupoInputs">
			<input type="text" placeholder="Apellido" name="apellido"><br>
		</div>

		<div class="grupoInputs">
			<input type="text" placeholder="nombre" name="nombre"><br>
		</div>

		<div class="grupoInputs">
			<input type="date" placeholder="fecha" name="fecha"><br>
		</div>

		<div class="btn-submit">
			<input class="btn" type="submit" value="Grabar"><br>
		</div>
	</form>
</div>

<?php
include("usuario.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener datos del formulario
    $use = $_POST['usuario'];
    $cla = $_POST['clave'];
    $ape = $_POST['apellido'];
    $nom = $_POST['nombre'];
    $fe = $_POST['fecha'];


    $resultado = insertar($use, $cla, $ape, $nom, $fe, );

    if ($resultado) {
        echo "Usuario registrado exitosamente.";
    } else {
        echo "Error al registrar el usuario.";
    }
}
?>
