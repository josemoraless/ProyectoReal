<?php

include 'encrypt.php';

function password_random($length = 6)
	{
		$charset = "abcdefghijklmnopqrstuvwyz0123456789%&$/()#!?";
		$password = "";
		for($i=0;$i<$length;$i++)
		{
			$rand = rand() % strlen($charset);
			$password .= substr($charset, $rand,1);
		}
		return $password;
	}
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
$contrasegna=password_random(10);
$tipo_usuario=$_GET['Tipo_Usuario'];

$contrasegnaCifrada=SED::encryption($contrasegna);


$sql="SELECT count(Id_Usuario) FROM  datos_usuario";
$ejecutar=mysqli_query($conexion,$sql);

$result=mysqli_fetch_array($ejecutar);
$id=$result[0];

//$contenido = "Nombre: " . $nombreCompleto . "\nApellido: " . $apellido . "\nTelefono: " . $telefono . "\nEmail: " . $email . "\nContraseña: " . $contrasegna;

$subject = "Simple Email Test via PHP";
$body = "Hi,nn This is test email send by PHP Script";
$headers = "From: jmmp19@gmail.com";
 
if (mail($email, $subject, $body, $headers)) {
    echo "Email successfully sent to $to_email...";
} else {
    echo "Email sending failed...";
}

//$insertar="INSERT INTO datos_usuario VALUES ('$id','$nombreCompleto', '$apellido', '$telefono','$email','$contrasegnaCifrada', '$tipo_usuario')";



/*$ejecucion=mysqli_query($conexion,$insertar);

if($ejecucion==false){
	printf("error: %s\n",mysqli_error($conexion));
}else{
	
mysqli_close($conexion);
//header("Location: index.php");


}
*/
?>



