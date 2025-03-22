<?php  

// Llamando a los campos
$usuario = $_POST['usuario'];
$nombre = $_POST['nombre'];
$correo = $_POST['correo'];
$comentario= $_POST['comentario'];

$conexion=mysqli_connect("localhost","root","","portafolio");  

$usuario= mysqli_real_escape_string($conexion,$usuario);
$nombre= mysqli_real_escape_string($conexion,$nombre);
$correo= mysqli_real_escape_string($conexion,$correo);
$comentario= mysqli_real_escape_string($conexion,$comentario);
$resultado=mysqli_query($conexion,'INSERT INTO tabla_portafolio (usuario, nombre, correo, comentario) VALUES ("'.$usuario.'","'.$nombre.'","'.$correo.'", "'.$comentario.'")');
header('Location: ../php/index.php');

?>