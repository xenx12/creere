
<?php



$server = 'us-cdbr-iron-east-01.cleardb.net';
$username = 'b95929a40c3659';
$password = 'de9e8f43';
$db = 'heroku_b79eecc5c4a1f44';

		$mysqli = new mysqli($server, $username, $password, $db);
		if ($mysqli -> connect_errno) {
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		
echo "conectado" . $mysqli;
?>