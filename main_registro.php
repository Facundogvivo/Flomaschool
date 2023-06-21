<?php

include("conexion.php");

$tipo = $_POST["txt_tipo"];
$nombre   = $_POST["txt_nombre"];
$apellido = $_POST["txt_apellido"];
$rut   = $_POST["txt_rut"];
$contrasenna = $_POST["txt_contrasenna"];
$curso   = $_POST["txt_curso"];
if (isset($_POST['inline-checkbox1A'])) {
        echo '<script>alert("Tienes un(a) hijo(a) en 1° básico A");</script>';
		$b1a   = $_POST["inline-checkbox1A"];
} 

$b1b   = $_POST["inline-checkbox1B"];
$b2a   = $_POST["inline-checkbox2A"];
$b2b   = $_POST["inline-checkbox2B"];
$b3a   = $_POST["inline-checkbox3A"];
$b3b   = $_POST["inline-checkbox3B"];
$b4a   = $_POST["inline-checkbox4A"];
$b4b   = $_POST["inline-checkbox4B"];
$b5a   = $_POST["inline-checkbox5A"];
$b5b   = $_POST["inline-checkbox5B"];
$b6a   = $_POST["inline-checkbox6A"];
$b6b   = $_POST["inline-checkbox6B"];
$b7a   = $_POST["inline-checkbox7A"];
$b7b   = $_POST["inline-checkbox7B"];
$b8a   = $_POST["inline-checkbox8A"];
$b8b   = $_POST["inline-checkbox8B"];
$m1a   = $_POST["inline-checkbox9A"];
$m1b   = $_POST["inline-checkbox9B"];
$m2a   = $_POST["inline-checkbox10A"];
$m2b   = $_POST["inline-checkbox10B"];
$m3a   = $_POST["inline-checkbox11A"];
$m3b   = $_POST["inline-checkbox11B"];
$m4a   = $_POST["inline-checkbox12A"];
$m4b   = $_POST["inline-checkbox12B"];


$sqlgrabar = "INSERT INTO usuarios (tipo, nombre, apellido, rut, contrasenna, curso, 1basicoa, 1basicob, 2basicoa, 2basicob, 3basicoa, 3basicob, 4basicoa, 4basicob,5basicoa, 5basicob, 6basicoa, 6basicob, 7basicoa, 7basicob, 8basicoa, 8basicob, 1medioa, 1mediob, 2medioa, 2mediob, 3medioa, 3mediob, 4medioa, 4mediob) values ('$tipo','$nombre','$apellido','$rut','$contrasenna','$curso','$b1a','$b1b','$b2a','$b2b','$b3a','$b3b','$b4a','$b4b','$b5a','$b5b','$b6a','$b6b','$b7a','$b7b','$b8a','$b8b','$m1a','$m1b','$m2a','$m2b','$m3a','$m3b','$m4a','$m4b')";
	

// para estudiante
if($tipo == "Estudiante") {
	switch ($curso) {
		case "1°A":
			
			$sqlgrabar1 = "INSERT INTO lista1basicoa (nombre, apellido) values ('$nombre','$apellido')";

			break;
		case "1°B":
			
			$sqlgrabar1 = "INSERT INTO lista1basicob (nombre, apellido) values ('$nombre','$apellido')";

			break;
		case "2°A":
			
			$sqlgrabar1 = "INSERT INTO lista2basicoa (nombre, apellido) values ('$nombre','$apellido')";

			break;
		case "2°B":
			
			$sqlgrabar1 = "INSERT INTO lista2basicob (nombre, apellido) values ('$nombre','$apellido')";

			break;
		case "3°A":
			
			$sqlgrabar1 = "INSERT INTO lista3basicoa (nombre, apellido) values ('$nombre','$apellido')";

			break;
		case "3°B":
			
			$sqlgrabar1 = "INSERT INTO lista3basicob (nombre, apellido) values ('$nombre','$apellido')";

			break;
		case "4°A":
			
			$sqlgrabar1 = "INSERT INTO lista4basicoa(nombre, apellido) values ('$nombre','$apellido')";

			break;
		case "4°B":
			
			$sqlgrabar1 = "INSERT INTO lista4basicob(nombre, apellido) values ('$nombre','$apellido')";

			break;
		case "5°A":
			
			$sqlgrabar1 = "INSERT INTO lista5basicoa(nombre, apellido) values ('$nombre','$apellido')";

			break;
		case "5°B":
			
			$sqlgrabar1 = "INSERT INTO lista5basicob(nombre, apellido) values ('$nombre','$apellido')";

			break;
		case "6°A":
			
			$sqlgrabar1 = "INSERT INTO lista6basicoa(nombre, apellido) values ('$nombre','$apellido')";

			break;
		case "6°B":
			
			$sqlgrabar1 = "INSERT INTO lista6basicob(nombre, apellido) values ('$nombre','$apellido')";

			break;
		case "7°A":
			
			$sqlgrabar1 = "INSERT INTO lista7basicoa(nombre, apellido) values ('$nombre','$apellido')";

			break;
		case "7°B":
			
			$sqlgrabar1 = "INSERT INTO lista7basicob(nombre, apellido) values ('$nombre','$apellido')";

			break;
		case "8°A":
			
			$sqlgrabar1 = "INSERT INTO lista8basicoa(nombre, apellido) values ('$nombre','$apellido')";

			break;
		case "8°B":
			
			$sqlgrabar1 = "INSERT INTO lista8basicob(nombre, apellido) values ('$nombre','$apellido')";

			break;
		case "IA":
			
			$sqlgrabar1 = "INSERT INTO lista1medioa(nombre, apellido) values ('$nombre','$apellido')";

			break;
		case "IB":
			
			$sqlgrabar1 = "INSERT INTO lista1mediob(nombre, apellido) values ('$nombre','$apellido')";

			break;
		case "IIA":
			
			$sqlgrabar1 = "INSERT INTO lista2medioa(nombre, apellido) values ('$nombre','$apellido')";

			break;
		case "IIB":
			
			$sqlgrabar1 = "INSERT INTO lista2mediob(nombre, apellido) values ('$nombre','$apellido')";

			break;
		case "IIIA":
			
			$sqlgrabar1 = "INSERT INTO lista3medioa(nombre, apellido) values ('$nombre','$apellido')";

			break;
		case "IIIB":
			
			$sqlgrabar1 = "INSERT INTO lista3mediob(nombre, apellido) values ('$nombre','$apellido')";

			break;
		case "IVA":
			
			$sqlgrabar1 = "INSERT INTO lista4medioa(nombre, apellido) values ('$nombre','$apellido')";

			break;
		case "IVB":
			
			$sqlgrabar1 = "INSERT INTO lista4mediob(nombre, apellido) values ('$nombre','$apellido')";

			break;
	}	
} 
// fin para estudiante

if(mysqli_query($conn,$sqlgrabar))
{
	echo "<script> alert('Usuario registrado con exito: $nombre $apellido'); window.location='registro.php' </script>";
}else 
{
	echo "Error: ".$sql."<br>".mysql_error($conn);
}


if(mysqli_query($conn,$sqlgrabar1))
{
	echo "<script> alert('Usuario registrado con exito: $nombre $apellido'); window.location='registro.php' </script>";
}else 
{
	echo "Error: ".$sql."<br>".mysql_error($conn);
}


?>
