
<?php

include 'encrypt.php';


/*
$servername="single-6020.banahosting.com";
$database="cvouxwhb_BushelpBBDD";
$username="cvouxwhb_alexBusHelp";
$password="ZkNmZVdHUkMrSlZ0WVhMMjBacHpaZz09";
*/
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

$nombreCompleto=mysqli_real_escape_string($conexion,$_GET['Nombre']);
$apellido=$_GET['Apellido'];
$telefono=$_GET['Telefono'];
$email=$_GET['Email'];
$contrasegna=$_GET['Contrasegna'];
$tipo_usuario=$_GET['Tipo_Usuario'];

$contrasegnaCifrada=SED::encryption($contrasegna);


$sql="SELECT count(Id_Usuario) FROM  datos_usuario";
$ejecutar=mysqli_query($conexion,$sql);

$result=mysqli_fetch_array($ejecutar);
$id=$result[0];


$insertar="INSERT INTO datos_usuario VALUES ('$id','$nombreCompleto', '$apellido', '$telefono','$email','$contrasegnaCifrada', '$tipo_usuario')";



$ejecucion=mysqli_query($conexion,$insertar);

if($ejecucion==false){
	printf("error: %s\n",mysqli_error($conexion));
}else{
	
mysqli_close($conexion);
header("Location: index.php");


}

?>



