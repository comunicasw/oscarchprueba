<?php
$mysqli = new mysqli('localhost', 'root', '', 'forge');
mysqli_set_charset($mysqli,'utf8');
if ($mysqli->connect_errno) {
	echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$mysqli->query("UPDATE clientes SET nombres='".strtolower($_POST['nombres'])."' ,apellidos='".strtolower($_POST['apellidos'])."',cedula='".strtolower($_POST['cedula'])."',email='".strtolower($_POST['email'])."',telefono='".$_POST['telefono']."',ciudad_id='".$_POST['ciudad']."' WHERE id = '".$_POST['clienteid']."'");
echo '<script>alert("Cliente Actualizado!");</script>	';
echo '<script>window.location="/oscarch/public/"</script>';
?>