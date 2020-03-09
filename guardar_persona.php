<?php
//datos de conexion
$host ="localhost";
$user ="root";
$password="";
$bd = "persona1";//la base de datos

//crear la conexion
$con = new mysqli($host, $user, $password, $bd);

//prueba de conexion
if($con->connect_error){
    echo "base de datos no disponible";
}else{
    echo"conectado a la base de datos <br>";
}
$nombre= $_POST["nombre"];
$email= $_POST["email"];
/*echo "la informacion enviada es:<br>
    Nombre: $nombre <br>Email $email";*/

$query = "insert into persona(nombre,email) values('$nombre','$email')";//se inseta a la tabla persona
if($con->query($query)){//if($con->query($query)==true
    echo "persona guardada correctamente";
}else{
echo "no se ha podido guardar la persona" . $con->error;
}
$con->close();

header('location: crear.php');// me redireciona al inicio


//tarea 
//en el index imprimir los datos de la base de datos y crear un voton que diga nuevo y
//redireccione al crear. php y en crear.php un boton que diga volver y me lleve a index
//l4g03 guaradr en bigint
?>