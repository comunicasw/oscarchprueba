<?php
	$mysqli = new mysqli('localhost', 'root', '', 'forge');
	mysqli_set_charset($mysqli,'utf8');
	if ($mysqli->connect_errno) {
		echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
	}
	else{
		echo 'sisas saisa'; 
	}
?>