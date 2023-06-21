<?php

include("conexion.php");

$rut   = $_POST["txt_rut"];
$contrasenna = $_POST["txt_contrasenna"];

//Login
if(isset($_POST["btningresar"]))
{
	
	$query = mysqli_query($conn,"SELECT * FROM usuarios WHERE rut = '$rut' AND contrasenna='$contrasenna'");
	
	$sqlgrabar2 = "UPDATE usuarioactivo SET rut='" . $rut .  "'  WHERE id=1";
	
	mysqli_query($conn,$sqlgrabar2);
	
	$nr = mysqli_num_rows($query);
	if($nr==1)
	{
		while($usuarios = mysqli_fetch_array($query))
        {
			$tipo = $usuarios['tipo'];
			$nombre = $usuarios['nombre'];
			$apellido = $usuarios['apellido'];
			$rut = $usuarios['rut'];
			$curso = $usuarios['curso'];

			$sqlgrabar3 = "UPDATE usuarioactivo SET curso='" . $curso .  "'  WHERE rut='" . $rut .  "'";
			
			mysqli_query($conn,$sqlgrabar3);

			echo "<script>
			switch ('".$tipo."') {
				case 'Administrador':
					alert('Bienvenido(a) Administrador(a) ".$nombre." ".$apellido."');
				  break;
				case 'Apoderado':
					alert('Bienvenido(a) Apoderado ".$nombre." ".$apellido."');
					break;
				case 'Docente':
					alert('Bienvenido(a) Docente ".$nombre." ".$apellido."');
					break;
				case 'Estudiante':
					alert('Bienvenido(a) Estudiante ".$nombre." ".$apellido."');
					break;
				case 'Funcionario':
					alert('Bienvenido(a) Funcionario ".$nombre." ".$apellido."');
					break;
				default:
				  	alert('Algo salio mal');
				  	break;
			}
					window.location='administrador.php';
			</script>";

        }
		
	} else
	{
		echo "<script> alert('Usuario no existe'); window.location='index.php' </script>";
	}
}

?>