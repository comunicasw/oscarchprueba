<?php
$mysqli = new mysqli('localhost', 'root', '', 'forge');
mysqli_set_charset($mysqli,'utf8');
if ($mysqli->connect_errno) {
	echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
$mysqli->query("DELETE FROM ciudad WHERE id = '".$_POST['ciudadid']."'");
echo '<script>alert("Ciudad Borrada!");</script>';
echo '<script>window.location="/oscarch/public/"</script>';
?>