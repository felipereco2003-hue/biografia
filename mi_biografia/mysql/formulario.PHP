
<?php
$servidor = "localhost";
 $usuario = "root";
 $clave = "";
 $basedatos = "datos";
 
 $conexion = mysqli_connect($servidor, $usuario, $clave, $basedatos);
 
 if (!$conexion)  {
    die ("Error de conexion:" . mysqli_connect_error ());
    }
    
    $nombre= $_POST["nombre"];
    $correo= $_POST["correo"];
    $mensaje= $_POST["mensaje"];
   
    $sql = "INSERT INTO usuario(nombre, correo, mensaje)
        values('$nombre', '$correo', '$mensaje')";
       
       
       if (mysqli_query($conexion,$sql))   {
             echo"Mensaje enviado correctamente";
        } else{
            echo "Error:" . mysqli_error($conexion);
            }
            
            mysqli_close($conexion);

?>
