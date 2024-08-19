<?php
include('../../modelo/usuario.php');
$respuesta = getUsuarioUserNames();
echo json_encode($respuesta, true);
?>