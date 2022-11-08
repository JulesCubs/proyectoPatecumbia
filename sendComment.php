<?php
$nombre = $_POST['nombre'];
$comentario = $_POST['comentario']

echo($nombre);
echo($comentario);

$conn = mysqli_connect('localhost', 'root', '', 'database');

$nombre = mysqli_real_escape_string($conn, $nombre);
$comentario = mysqli_real_escape_string($conn, $comentario);

$resultado = mysqli_query($conn, 'INSERT INTO comentarios(nombre, comentario) VALUES("'  .  $nombre  .  '", "'  .  $comentario .  '")');

if ($resultado)
    echo('Comentario enviado con exito!');
else
    echo('Error intentando enviar el comentario');

mysqli_close($conn);
?>