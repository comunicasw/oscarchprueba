<meta charset="utf-8">
<?php
$mysqli = new mysqli('localhost', 'root', '', 'forge');
mysqli_set_charset($mysqli,'utf8');
if ($mysqli->connect_errno) {
	echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$mysqli->query("UPDATE ciudad SET nombre='".strtolower($_POST['nombre'])."' WHERE id = '".$_POST['ciudadid']."'");
echo '<script>alert("Ciudad Actualizada!");</script>	';
echo '<script>window.location="/oscarch/public/"</script>';
?>