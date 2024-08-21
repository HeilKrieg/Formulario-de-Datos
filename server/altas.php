<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server altas</title>
    <link rel="stylesheet" href="../css/respuesta-alta.css">
</head>

<?php

// Inicializar mensajes de error
$errors = array();
$hasError = false;

// Verificar campos obligatorios
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (empty($_POST['usuario'])) {
        $errors['usuario'] = "El campo usuario es obligatorio.";
        $hasError = true;
    }

    if (empty($_POST['clave'])) {
        $errors['clave'] = "El campo clave es obligatorio.";
        $hasError = true;
    }

    if (empty($_POST['apellido'])) {
        $errors['apellido'] = "El campo apellido es obligatorio.";
        $hasError = true;
    }

    if (empty($_POST['nombre'])) {
        $errors['nombre'] = "El campo nombre es obligatorio.";
        $hasError = true;
    }

    if (empty($_POST['fecha'])) {
        $errors['fecha'] = "El campo fecha de nacimiento es obligatorio.";
        $hasError = true;
    }

    if (empty($_FILES["foto"]["tmp_name"])) {
        $errors['foto'] = "El campo foto es obligatorio.";
        $hasError = true;
    }

    // Si no hay errores, procesar el registro
    if (!$hasError) {
        $use = $_POST['usuario'];
        $cla = $_POST['clave'];
        $ape = $_POST['apellido'];
        $nom = $_POST['nombre'];
        $fe = $_POST['fecha'];
        $foto = $_FILES["foto"]["tmp_name"];
        $fotoTamanio = $_FILES["foto"]["size"];

        $result = insertar($use, $cla, $ape, $nom, $fe, $foto, $fotoTamanio);

        if ($result) {
            echo '<div class="Rcontainer">
            <div class="Rbox">
                <h2 class="Rtitulo">Registro exitoso</h2>
                <a href="../from/menu.php" class="cerrar">Cerrar</a>
            </div>
        </div>';
        } else {
            echo '<div class="Rcontainer">
            <div class="Rbox">
                <h2 class="Rtitulo">Error de registro</h2>
                <h3 class="Rcuerpo">No se pudo registrar el usuario.</h3>
                <a href="../from/menu.php" class="cerrar">Cerrar</a>
            </div>
        </div>';
        }
    }
}
?>

<!-- Formulario de Registro -->
<form action="alta.php" method="POST" enctype="multipart/form-data">
    <div class="form-group">
        <label for="usuario">Usuario:</label>
        <input type="text" name="usuario" id="usuario" value="<?php echo $_POST['usuario'] ?? ''; ?>">
        <?php if (isset($errors['usuario'])): ?>
            <p class="error"><?php echo $errors['usuario']; ?></p>
        <?php endif; ?>
    </div>
    
    <div class="form-group">
        <label for="clave">Clave:</label>
        <input type="password" name="clave" id="clave">
        <?php if (isset($errors['clave'])): ?>
            <p class="error"><?php echo $errors['clave']; ?></p>
        <?php endif; ?>
    </div>
    
    <div class="form-group">
        <label for="apellido">Apellido:</label>
        <input type="text" name="apellido" id="apellido" value="<?php echo $_POST['apellido'] ?? ''; ?>">
        <?php if (isset($errors['apellido'])): ?>
            <p class="error"><?php echo $errors['apellido']; ?></p>
        <?php endif; ?>
    </div>
    
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $_POST['nombre'] ?? ''; ?>">
        <?php if (isset($errors['nombre'])): ?>
            <p class="error"><?php echo $errors['nombre']; ?></p>
        <?php endif; ?>
    </div>
    
    <div class="form-group">
        <label for="fecha">Fecha de Nacimiento:</label>
        <input type="date" name="fecha" id="fecha" value="<?php echo $_POST['fecha'] ?? ''; ?>">
        <?php if (isset($errors['fecha'])): ?>
            <p class="error"><?php echo $errors['fecha']; ?></p>
        <?php endif; ?>
    </div>
    
    <div class="form-group">
        <label for="foto">Foto:</label>
        <input type="file" name="foto" id="foto">
        <?php if (isset($errors['foto'])): ?>
            <p class="error"><?php echo $errors['foto']; ?></p>
        <?php endif; ?>
    </div>

    <div class="form-group">
        <button type="submit">Registrar</button>
    </div>
</form>

</body>
</html>
