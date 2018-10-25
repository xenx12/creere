<?php

require("conexion.php");

$cedula = $_POST["cedula"];

$checkcedula=mysqli_query($mysqli,"SELECT * FROM personas WHERE cedula='$cedula'");
$check_cedula=mysqli_num_rows($checkcedula);
if($check_cedula>0){
    echo '{"resultado" : "Ingrese otra cedula, Esta ya fue registrada."}';
}else{
    
    echo '{"resultado": "true"}';
    
}

?>