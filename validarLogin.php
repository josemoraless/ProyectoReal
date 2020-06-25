<?php

include 'encrypt.php';

/*$servername="single-6020.banahosting.com";
$database="cvouxwhb_BushelpBBDD";
$username="cvouxwhb_alexBusHelp";
$password="ZkNmZVdHUkMrSlZ0WVhMMjBacHpaZz09";*/
$servername="localhost";
$database="proyectobalonmano";
$username="root";
$password="";
//conectamos con el servidor
$conexion= mysqli_connect($servername,$username,$password,$database);


if (!$conexion) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}


$email=$_GET['Email'];
$contrasegna=$_GET['Contraseña'];


//HALLA LA CONTRASEÑA Y CORREO DEL USUARIO
if ($stmt = $conexion->prepare("SELECT Contraseña from datos_usuario where Email=?")) {
    /* ligar parámetros para marcadores */
    $stmt->bind_param("s", $email);
    /* ejecutar la consulta */
    $stmt->execute();
    /* ligar variables de resultado */
    $stmt->bind_result($contrasegna2);
    /* obtener valor */
    $stmt->fetch();
    /* cerrar sentencia */
    $stmt->close();
}


//HALLAR A QUE NOMBRE USUARIO
if ($stmt2 = $conexion->prepare("SELECT Nombre from datos_usuario where Email=?")) {
    /* ligar parámetros para marcadores */
    $stmt2->bind_param("s", $email);
    /* ejecutar la consulta */
    $stmt2->execute();
    /* ligar variables de resultado */
    $stmt2->bind_result($Nombre);
    /* obtener valor */
    $stmt2->fetch();
    /* cerrar sentencia */
    $stmt2->close();
}


//HALLA EL TIPO DEL USUARIO QUE SE CONECTA
if ($stmt6 = $conexion->prepare("SELECT Tipo_Usuario from datos_usuario where Email=?")) {
    /* ligar parámetros para marcadores */
    $stmt6->bind_param("s", $email);
    /* ejecutar la consulta */
    $stmt6->execute();
    /* ligar variables de resultado */
    $stmt6->bind_result($Tipo_Usuario);
    /* obtener valor */
    $stmt6->fetch();
    /* cerrar sentencia */
    $stmt6->close();
}
?>



<?php
session_start();

$_SESSION['Nombre']=$Nombre;
$_SESSION['Tipo_Usuario']=$Tipo_Usuario;

$contrasegnaDescifrada=SED::Decryption($contrasegna2);

if($contrasegnaDescifrada==$contrasegna){

if($Tipo_Usuario == 'Admin'){
mysqli_close($conexion);

header("Location: entrarAdmin.php");


}else if($Tipo_Usuario=='Entrenador'){
	mysqli_close($conexion);
	//header("Location: entrarEntrenador.php");
}
}
else if($Tipo_Usuario == 'Arbitro'){
	mysqli_close($conexion);
	//header("Location: entrarArbitro.php");
}else{
    echo'<script type="text/javascript">
        alert("Error al introducir los datos, vuelva a introducirlos");
        window.location.href="index.php";
        </script>';
}
?>
