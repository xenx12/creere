<?php

require("conexion.php");

$cedula = $_POST["cedula"];
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$direccion = $_POST["direccion"];
$codigo = "A123";
$check_codigo= 1;

while($check_codigo>0){

    $aleatorio = rand(100,999);
    $letra =  chr(rand(ord("A"), ord("Z")));
    $codigo = $letra.$aleatorio;

    $checkcodigo=mysqli_query($mysqli,"SELECT * FROM personas WHERE codigo='$codigo'");
    $check_codigo=mysqli_num_rows($checkcodigo);

}


mysqli_query($mysqli,"INSERT INTO personas VALUES('$cedula','$nombre','$apellido','$direccion','$codigo')");

echo '{"resultado": "'.$codigo.'"}';

?>