<?php

require("conexion.php");

$cedula = $_POST["cedula"];



$checkcedula=mysqli_query($mysqli,"SELECT * FROM personas WHERE cedula='$cedula'");
$check_cedula=mysqli_num_rows($checkcedula);
if($check_cedula>0){

    while($row = mysqli_fetch_assoc($checkcedula)) {
       
        echo '{"direccion": "'.$row["direccion"].'","apellido": "'.$row["apellido"].'","nombre": "'.$row["nombre"].'","codigo": "'.$row["codigo"].'", "estatus" : "true"}';
    }
    
}else{
    
    echo '{"resultado" : "Esta cedula no se encuentra registrada.", "estatus" : "false"}';

    
}

?>