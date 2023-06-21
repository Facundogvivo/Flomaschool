<?php

include("conexion_calificacion.php");


$alumno   = $_POST["txt_alumno"];
$lugar   = $_POST["txt_lugar"];
$nota   = $_POST["txt_nota"];

while ($columna = mysqli_fetch_array( $resultado1a ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$nota1 = $columna[5];
		$nota2 = $columna[6];
		$nota3 = $columna[7];
		$nota4 = $columna[8];
		$nota5 = $columna[9];
		$nota6 = $columna[10];
		$nota7 = $columna[11];
		$nota8 = $columna[12];

		if($alumno == $columna[1] . " " . $columna[2]) {
	
			$sqlgrabar = "UPDATE lista1basicoa SET " . $lugar . "='" . $nota .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
			
			if(mysqli_query($conn,$sqlgrabar))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='calificaciones1basicoa.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
		}
		
	}

while ($columna = mysqli_fetch_array( $resultado2a ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$nota1 = $columna[5];
		$nota2 = $columna[6];
		$nota3 = $columna[7];
		$nota4 = $columna[8];
		$nota5 = $columna[9];
		$nota6 = $columna[10];
		$nota7 = $columna[11];
		$nota8 = $columna[12];

		if($alumno == $columna[1] . " " . $columna[2]) {
	
			$sqlgrabar = "UPDATE lista2basicoa SET " . $lugar . "='" . $nota .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
			
			if(mysqli_query($conn,$sqlgrabar))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='calificaciones2basicoa.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
		}
		
	}

while ($columna = mysqli_fetch_array( $resultado3a ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$nota1 = $columna[5];
		$nota2 = $columna[6];
		$nota3 = $columna[7];
		$nota4 = $columna[8];
		$nota5 = $columna[9];
		$nota6 = $columna[10];
		$nota7 = $columna[11];
		$nota8 = $columna[12];

		if($alumno == $columna[1] . " " . $columna[2]) {
	
			$sqlgrabar = "UPDATE lista3basicoa SET " . $lugar . "='" . $nota .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
			
			if(mysqli_query($conn,$sqlgrabar))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='calificaciones3basicoa.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
		}
		
	}

while ($columna = mysqli_fetch_array( $resultado4a ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$nota1 = $columna[5];
		$nota2 = $columna[6];
		$nota3 = $columna[7];
		$nota4 = $columna[8];
		$nota5 = $columna[9];
		$nota6 = $columna[10];
		$nota7 = $columna[11];
		$nota8 = $columna[12];

		if($alumno == $columna[1] . " " . $columna[2]) {
	
			$sqlgrabar = "UPDATE lista4basicoa SET " . $lugar . "='" . $nota .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
			
			if(mysqli_query($conn,$sqlgrabar))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='calificaciones4basicoa.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
		}
		
	}

while ($columna = mysqli_fetch_array( $resultado5a ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$nota1 = $columna[5];
		$nota2 = $columna[6];
		$nota3 = $columna[7];
		$nota4 = $columna[8];
		$nota5 = $columna[9];
		$nota6 = $columna[10];
		$nota7 = $columna[11];
		$nota8 = $columna[12];

		if($alumno == $columna[1] . " " . $columna[2]) {
	
			$sqlgrabar = "UPDATE lista5basicoa SET " . $lugar . "='" . $nota .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
			
			if(mysqli_query($conn,$sqlgrabar))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='calificaciones5basicoa.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
		}
		
	}

while ($columna = mysqli_fetch_array( $resultado6a ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$nota1 = $columna[5];
		$nota2 = $columna[6];
		$nota3 = $columna[7];
		$nota4 = $columna[8];
		$nota5 = $columna[9];
		$nota6 = $columna[10];
		$nota7 = $columna[11];
		$nota8 = $columna[12];

		if($alumno == $columna[1] . " " . $columna[2]) {
	
			$sqlgrabar = "UPDATE lista6basicoa SET " . $lugar . "='" . $nota .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
			
			if(mysqli_query($conn,$sqlgrabar))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='calificaciones6basicoa.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
		}
		
	}

while ($columna = mysqli_fetch_array( $resultado7a ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$nota1 = $columna[5];
		$nota2 = $columna[6];
		$nota3 = $columna[7];
		$nota4 = $columna[8];
		$nota5 = $columna[9];
		$nota6 = $columna[10];
		$nota7 = $columna[11];
		$nota8 = $columna[12];

		if($alumno == $columna[1] . " " . $columna[2]) {
	
			$sqlgrabar = "UPDATE lista7basicoa SET " . $lugar . "='" . $nota .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
			
			if(mysqli_query($conn,$sqlgrabar))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='calificaciones7basicoa.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
		}
		
	}

while ($columna = mysqli_fetch_array( $resultado8a ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$nota1 = $columna[5];
		$nota2 = $columna[6];
		$nota3 = $columna[7];
		$nota4 = $columna[8];
		$nota5 = $columna[9];
		$nota6 = $columna[10];
		$nota7 = $columna[11];
		$nota8 = $columna[12];

		if($alumno == $columna[1] . " " . $columna[2]) {
	
			$sqlgrabar = "UPDATE lista8basicoa SET " . $lugar . "='" . $nota .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
			
			if(mysqli_query($conn,$sqlgrabar))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='calificaciones8basicoa.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
		}
		
	}

while ($columna = mysqli_fetch_array( $resultadoIa ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$nota1 = $columna[5];
		$nota2 = $columna[6];
		$nota3 = $columna[7];
		$nota4 = $columna[8];
		$nota5 = $columna[9];
		$nota6 = $columna[10];
		$nota7 = $columna[11];
		$nota8 = $columna[12];

		if($alumno == $columna[1] . " " . $columna[2]) {
	
			$sqlgrabar = "UPDATE lista1medioa SET " . $lugar . "='" . $nota .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
			
			if(mysqli_query($conn,$sqlgrabar))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='calificaciones1medioa.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
		}
		
	}

while ($columna = mysqli_fetch_array( $resultadoIIa ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$nota1 = $columna[5];
		$nota2 = $columna[6];
		$nota3 = $columna[7];
		$nota4 = $columna[8];
		$nota5 = $columna[9];
		$nota6 = $columna[10];
		$nota7 = $columna[11];
		$nota8 = $columna[12];

		if($alumno == $columna[1] . " " . $columna[2]) {
	
			$sqlgrabar = "UPDATE lista2medioa SET " . $lugar . "='" . $nota .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
			
			if(mysqli_query($conn,$sqlgrabar))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='calificaciones2medioa.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
		}
		
	}

while ($columna = mysqli_fetch_array( $resultadoIIIa ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$nota1 = $columna[5];
		$nota2 = $columna[6];
		$nota3 = $columna[7];
		$nota4 = $columna[8];
		$nota5 = $columna[9];
		$nota6 = $columna[10];
		$nota7 = $columna[11];
		$nota8 = $columna[12];

		if($alumno == $columna[1] . " " . $columna[2]) {
	
			$sqlgrabar = "UPDATE lista3medioa SET " . $lugar . "='" . $nota .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
			
			if(mysqli_query($conn,$sqlgrabar))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='calificaciones3medioa.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
		}
		
	}

while ($columna = mysqli_fetch_array( $resultadoIVa ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$nota1 = $columna[5];
		$nota2 = $columna[6];
		$nota3 = $columna[7];
		$nota4 = $columna[8];
		$nota5 = $columna[9];
		$nota6 = $columna[10];
		$nota7 = $columna[11];
		$nota8 = $columna[12];

		if($alumno == $columna[1] . " " . $columna[2]) {
	
			$sqlgrabar = "UPDATE lista4medioa SET " . $lugar . "='" . $nota .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
			
			if(mysqli_query($conn,$sqlgrabar))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='calificaciones4medioa.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
		}
		
	}


while ($columna = mysqli_fetch_array( $resultado1b ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$nota1 = $columna[5];
		$nota2 = $columna[6];
		$nota3 = $columna[7];
		$nota4 = $columna[8];
		$nota5 = $columna[9];
		$nota6 = $columna[10];
		$nota7 = $columna[11];
		$nota8 = $columna[12];

		if($alumno == $columna[1] . " " . $columna[2]) {
	
			$sqlgrabar = "UPDATE lista1basicob SET " . $lugar . "='" . $nota .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
			
			if(mysqli_query($conn,$sqlgrabar))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='calificaciones1basicob.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
		}
		
	}

while ($columna = mysqli_fetch_array( $resultado2b ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$nota1 = $columna[5];
		$nota2 = $columna[6];
		$nota3 = $columna[7];
		$nota4 = $columna[8];
		$nota5 = $columna[9];
		$nota6 = $columna[10];
		$nota7 = $columna[11];
		$nota8 = $columna[12];

		if($alumno == $columna[1] . " " . $columna[2]) {
	
			$sqlgrabar = "UPDATE lista2basicob SET " . $lugar . "='" . $nota .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
			
			if(mysqli_query($conn,$sqlgrabar))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='calificaciones2basicob.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
		}
		
	}

while ($columna = mysqli_fetch_array( $resultado3b ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$nota1 = $columna[5];
		$nota2 = $columna[6];
		$nota3 = $columna[7];
		$nota4 = $columna[8];
		$nota5 = $columna[9];
		$nota6 = $columna[10];
		$nota7 = $columna[11];
		$nota8 = $columna[12];

		if($alumno == $columna[1] . " " . $columna[2]) {
	
			$sqlgrabar = "UPDATE lista3basicob SET " . $lugar . "='" . $nota .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
			
			if(mysqli_query($conn,$sqlgrabar))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='calificaciones3basicob.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
		}
		
	}

while ($columna = mysqli_fetch_array( $resultado4b ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$nota1 = $columna[5];
		$nota2 = $columna[6];
		$nota3 = $columna[7];
		$nota4 = $columna[8];
		$nota5 = $columna[9];
		$nota6 = $columna[10];
		$nota7 = $columna[11];
		$nota8 = $columna[12];

		if($alumno == $columna[1] . " " . $columna[2]) {
	
			$sqlgrabar = "UPDATE lista4basicob SET " . $lugar . "='" . $nota .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
			
			if(mysqli_query($conn,$sqlgrabar))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='calificaciones4basicob.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
		}
		
	}

while ($columna = mysqli_fetch_array( $resultado5b ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$nota1 = $columna[5];
		$nota2 = $columna[6];
		$nota3 = $columna[7];
		$nota4 = $columna[8];
		$nota5 = $columna[9];
		$nota6 = $columna[10];
		$nota7 = $columna[11];
		$nota8 = $columna[12];

		if($alumno == $columna[1] . " " . $columna[2]) {
	
			$sqlgrabar = "UPDATE lista5basicob SET " . $lugar . "='" . $nota .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
			
			if(mysqli_query($conn,$sqlgrabar))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='calificaciones5basicob.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
		}
		
	}

while ($columna = mysqli_fetch_array( $resultado6b ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$nota1 = $columna[5];
		$nota2 = $columna[6];
		$nota3 = $columna[7];
		$nota4 = $columna[8];
		$nota5 = $columna[9];
		$nota6 = $columna[10];
		$nota7 = $columna[11];
		$nota8 = $columna[12];

		if($alumno == $columna[1] . " " . $columna[2]) {
	
			$sqlgrabar = "UPDATE lista6basicob SET " . $lugar . "='" . $nota .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
			
			if(mysqli_query($conn,$sqlgrabar))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='calificaciones6basicob.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
		}
		
	}

while ($columna = mysqli_fetch_array( $resultado7b ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$nota1 = $columna[5];
		$nota2 = $columna[6];
		$nota3 = $columna[7];
		$nota4 = $columna[8];
		$nota5 = $columna[9];
		$nota6 = $columna[10];
		$nota7 = $columna[11];
		$nota8 = $columna[12];

		if($alumno == $columna[1] . " " . $columna[2]) {
	
			$sqlgrabar = "UPDATE lista7basicob SET " . $lugar . "='" . $nota .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
			
			if(mysqli_query($conn,$sqlgrabar))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='calificaciones7basicob.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
		}
		
	}

while ($columna = mysqli_fetch_array( $resultado8b ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$nota1 = $columna[5];
		$nota2 = $columna[6];
		$nota3 = $columna[7];
		$nota4 = $columna[8];
		$nota5 = $columna[9];
		$nota6 = $columna[10];
		$nota7 = $columna[11];
		$nota8 = $columna[12];

		if($alumno == $columna[1] . " " . $columna[2]) {
	
			$sqlgrabar = "UPDATE lista8basicob SET " . $lugar . "='" . $nota .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
			
			if(mysqli_query($conn,$sqlgrabar))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='calificaciones8basicob.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
		}
		
	}

while ($columna = mysqli_fetch_array( $resultadoIb ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$nota1 = $columna[5];
		$nota2 = $columna[6];
		$nota3 = $columna[7];
		$nota4 = $columna[8];
		$nota5 = $columna[9];
		$nota6 = $columna[10];
		$nota7 = $columna[11];
		$nota8 = $columna[12];

		if($alumno == $columna[1] . " " . $columna[2]) {
	
			$sqlgrabar = "UPDATE lista1mediob SET " . $lugar . "='" . $nota .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
			
			if(mysqli_query($conn,$sqlgrabar))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='calificaciones1mediob.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
		}
		
	}

while ($columna = mysqli_fetch_array( $resultadoIIb ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$nota1 = $columna[5];
		$nota2 = $columna[6];
		$nota3 = $columna[7];
		$nota4 = $columna[8];
		$nota5 = $columna[9];
		$nota6 = $columna[10];
		$nota7 = $columna[11];
		$nota8 = $columna[12];

		if($alumno == $columna[1] . " " . $columna[2]) {
	
			$sqlgrabar = "UPDATE lista2mediob SET " . $lugar . "='" . $nota .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
			
			if(mysqli_query($conn,$sqlgrabar))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='calificaciones2mediob.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
		}
		
	}

while ($columna = mysqli_fetch_array( $resultadoIIIb ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$nota1 = $columna[5];
		$nota2 = $columna[6];
		$nota3 = $columna[7];
		$nota4 = $columna[8];
		$nota5 = $columna[9];
		$nota6 = $columna[10];
		$nota7 = $columna[11];
		$nota8 = $columna[12];

		if($alumno == $columna[1] . " " . $columna[2]) {
	
			$sqlgrabar = "UPDATE lista3mediob SET " . $lugar . "='" . $nota .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
			
			if(mysqli_query($conn,$sqlgrabar))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='calificaciones3mediob.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
		}
		
	}

while ($columna = mysqli_fetch_array( $resultadoIVb ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$nota1 = $columna[5];
		$nota2 = $columna[6];
		$nota3 = $columna[7];
		$nota4 = $columna[8];
		$nota5 = $columna[9];
		$nota6 = $columna[10];
		$nota7 = $columna[11];
		$nota8 = $columna[12];

		if($alumno == $columna[1] . " " . $columna[2]) {
	
			$sqlgrabar = "UPDATE lista4mediob SET " . $lugar . "='" . $nota .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
			
			if(mysqli_query($conn,$sqlgrabar))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='calificaciones4mediob.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
		}
		
	}
?>
