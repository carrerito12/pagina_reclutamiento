<?php
include 'conexionlocal.php';

// Create connection
			$conn = new mysqli(servername, username, password, dbname);
			// Check connection
			if ($conn->connect_error) {
			    die("Connection failed: " . $conn->connect_error);
			}

function borrar($id_soldado)
{
	global $conn;
	$sql = "DELETE FROM abastecimiento
			WHERE id_soldado = {$id_soldado};"

	$conn->query($sql);

}