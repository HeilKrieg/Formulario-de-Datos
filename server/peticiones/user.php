<?php
include '../../modelo/usuario.php';
$json = json_decode(file_get_contents('php://input'), true);
if ($json['solicitud']) {
    $user = $json['solicitud'];
    $respuesta = getUsuarioUserName($user);
}
echo json_encode($respuesta, true);
?>