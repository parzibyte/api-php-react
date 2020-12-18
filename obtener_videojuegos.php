<?php
include_once "cors.php";
include_once "funciones.php";
$videojuegos = obtenerVideojuegos();
echo json_encode($videojuegos);
