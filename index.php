<?php
//datos de conexion
$host ="localhost";
$user ="root";
$password="";
$bd = "persona1";//la base de datos

//crear la conexion
$conexion= new mysqli($host, $user, $password, $bd);
?>
<!DOCTYPE html>
<html>
<head>
    <title>MOSTRAR DATOS</title>
</head>
<body>
    <table border=2>
    <tr>
        <td>id</td>
        <td>nombre</td>
        <td>email</td>
    </tr>

    <?php
$sql="SELECT * from persona";
$result=mysqli_query($conexion,$sql);
while($mostrar=mysqli_fetch_array($result)){
    ?>

    <tr>
        <td><?php echo $mostrar ['id']?></td>
        <td><?php echo $mostrar ['nombre']?></td>
        <td><?php echo $mostrar ['email']?></td>
    </tr>
    <?php

    }
    ?>
    </table>
    <br>
    <a href="crear.php">CREAR NUEVO USUARIO
</body>
</html>