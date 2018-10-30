<!DOCTYPE html>
<html lang="en">
<head>
    
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <link href="https://fonts.googleapis.com/css?family=Acme|Fredoka+One|Pacifico" rel="stylesheet">
    <title>Admin - Creere</title>
</head>
<body>
<div class="row">
<div class="input-field col s6 offset-s3">
      <input placeholder="23423545" id="cedulaM" type="text" class="validate">
      <label for="cedula">Cedula</label>
      <div class="btn waves-effect waves-light amber" onclick="mostrarCodigo()" >Mostrar
 <i class="material-icons right">send</i>
</div>
</div>
<div class="row">

  <div class="col s6 offset-s3">
  <table>
        <thead>
          <tr>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Direccion</th>
              <th>Cedula</th>
              <th>Codigo</th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td id="nombre">null</td>
            <td id="apellido">null</td>
            <td id="direccion">null</td>
            <td id="cedula">null</td>
            <td id="codigo">null</td>
          </tr>
          
        </tbody>
      </table>
  </div>

</div>


  


<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>

<script>
$(document).ready(function() {
    M.updateTextFields();


    
  });


function mostrarCodigo(){
    if ($('#cedulaM').val() == "")
    {
      
      M.toast({html: 'Debe llenar todos los campos'});

    }else{

      

      $.post("mostrartodo.php",
        {
            cedula: $('#cedulaM').val()
        },
        function(data, status){
          console.log("gola");

          console.log(data);


          let datos = JSON.parse(data);

           if (datos.estatus == "true"){
            $("#nombre").text(datos.nombre);
            $("#apellido").text(datos.apellido);
            $("#direccion").text(datos.direccion);
            $("#codigo").text(datos.codigo); 
            $("#cedula").text(datos.cedula); 

            
           // M.toast({html: "Tu Codigo es: " + datos.resultado});
         
                
                
            }else{
              
             M.toast({html: datos.resultado});
             $("#nombre").text("null");
            $("#apellido").text("null");
            $("#direccion").text("null");
            $("#codigo").text("null"); 
            $("#cedula").text("null"); 

            }
            
      });
  }

}

</script>    
</body>
</html>