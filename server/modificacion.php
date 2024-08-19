<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Server altas</title>
	<link rel="stylesheet" href="../css/respuesta-alta.css">
</head>

<?php


include("../modelo/usuario.php");

$use = $_POST['usuario'];
$cla = $_POST['clave'];
$ape = $_POST['apellido'];
$nom = $_POST['nombre'];
$fe = $_POST['fecha'];
$foto = $_FILES["foto"]["tmp_name"];
$fotoTamanio = $_FILES["foto"]["size"];

$result = modificar($use, $cla, $ape, $nom, $fe, $foto, $fotoTamanio);

if (!$result) {
	echo '<div class="Rcontainer">
    <div class="Rbox">
        <h2 class="Rtitulo">Esta es una respuesta del servidor</h2>
        <h3 class="Rcuerpo">' . $result . '</h3>
        <a href="../from/menu.php" class="cerrar">Cerrar</a>
    </div>
</div>';
} else {
	return include("../from/respuestas-server/respuesta-modificar.php");
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>

<body>
	<a href="form-modificacion.php">Volver</a>

</body>

</html>