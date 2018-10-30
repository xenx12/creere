
<?php

$url = parse_url(getenv("CLEARDB_DATABASE_URL"));

$server = "localhost";
$username = "root";
$password = "";
$db = "creere";

		$mysqli = new mysqli($server, $username, $password, $db);
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		

?>