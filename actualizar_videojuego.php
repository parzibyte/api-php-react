<?php
include_once "cors.php";
$videojuego = json_decode(file_get_contents("php://input"));
include_once "funciones.php";
$resultado = actualizarVideojuego($videojuego);
echo json_encode($resultado);

