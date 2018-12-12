<?php
$mysqli = new mysqli('localhost', 'root', '', 'forge');
mysqli_set_charset($mysqli,'utf8');
if ($mysqli->connect_errno) {
	echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$result = $mysqli->query("SELECT id FROM clientes WHERE cedula = '".$_POST['cedula']."'");
$row = mysqli_fetch_array($result);
if($row['id'] == NULL){
	$mysqli->query("INSERT INTO clientes(nombres, apellidos, cedula, email, telefono, ciudad_id) VALUES ('".strtolower($_POST['nombres'])."', '".strtolower($_POST['apellidos'])."', '".$_POST['cedula']."', '".strtolower($_POST['email'])."', '".$_POST['telefono']."','".$_POST['ciudad']."')");
	echo '<script>alert("Cliente Creado!");</script>';
	echo '<script>window.location="/oscarch/public/"</script>';
}
else{
	echo '<script>alert("El Cliente Ya Existe!");</script>';
	echo '<script>window.location="/oscarch/public/"</script>';
}
?>