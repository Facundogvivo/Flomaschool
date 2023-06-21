<?php

include("conexion_conducta.php");

$alumno   = $_POST["txt_alumno"];
$conducta   = $_POST["txt_conducta"];
$fecha_conducta = $_POST["txt_fecha_conducta"];
$descripcion = $_POST["txt_descripcion"];


while ($columna = mysqli_fetch_array( $resultado1a ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$positivas = $columna[3];
		$negativas = $columna[4];

		if($alumno == $columna[1] . " " . $columna[2]) {


			
			
				if($conducta == "positiva"){
					
				$sqlgrabar1 = "INSERT INTO conducta1basicoa ( conducta, alumno, fecha, descripcion) values ( 'P', '$alumno','$fecha_conducta','$descripcion')";

					
				$sqlgrabar = "UPDATE lista1basicoa SET positivas='" . $positivas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta1basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta1basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
	
				} else {
	
					$sqlgrabar1 = "INSERT INTO conducta1basicoa ( conducta, alumno, fecha, descripcion) values ( 'N', '$alumno','$fecha_conducta','$descripcion')";

					$sqlgrabar = "UPDATE lista1basicoa SET negativas='" . $negativas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta1basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta1basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}

				}
		}
		
	}
while ($columna = mysqli_fetch_array( $resultado2a ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$positivas = $columna[3];
		$negativas = $columna[4];

		if($alumno == $columna[1] . " " . $columna[2]) {
	
				if($conducta == "positiva"){
					
				$sqlgrabar1 = "INSERT INTO conducta2basicoa ( conducta, alumno, fecha, descripcion) values ( 'P', '$alumno','$fecha_conducta','$descripcion')";

					
				$sqlgrabar = "UPDATE lista2basicoa SET positivas='" . $positivas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta2basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta2basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
	
				} else {
	
					$sqlgrabar1 = "INSERT INTO conducta2basicoa ( conducta, alumno, fecha, descripcion) values ( 'N', '$alumno','$fecha_conducta','$descripcion')";

					$sqlgrabar = "UPDATE lista2basicoa SET negativas='" . $negativas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta2basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta2basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}

				}
		}
		
	}
while ($columna = mysqli_fetch_array( $resultado3a ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$positivas = $columna[3];
		$negativas = $columna[4];

		if($alumno == $columna[1] . " " . $columna[2]) {


			
			
				if($conducta == "positiva"){
					
				$sqlgrabar1 = "INSERT INTO conducta3basicoa ( conducta, alumno, fecha, descripcion) values ( 'P', '$alumno','$fecha_conducta','$descripcion')";

					
				$sqlgrabar = "UPDATE lista3basicoa SET positivas='" . $positivas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta3basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta3basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
	
				} else {
	
					$sqlgrabar1 = "INSERT INTO conducta3basicoa ( conducta, alumno, fecha, descripcion) values ( 'N', '$alumno','$fecha_conducta','$descripcion')";

					$sqlgrabar = "UPDATE lista3basicoa SET negativas='" . $negativas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta3basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta3basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}

				}
		}
		
	}
while ($columna = mysqli_fetch_array( $resultado4a ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$positivas = $columna[3];
		$negativas = $columna[4];

		if($alumno == $columna[1] . " " . $columna[2]) {


			
			
				if($conducta == "positiva"){
					
				$sqlgrabar1 = "INSERT INTO conducta4basicoa ( conducta, alumno, fecha, descripcion) values ( 'P', '$alumno','$fecha_conducta','$descripcion')";

					
				$sqlgrabar = "UPDATE lista4basicoa SET positivas='" . $positivas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta4basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta4basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
	
				} else {
	
					$sqlgrabar1 = "INSERT INTO conducta4basicoa ( conducta, alumno, fecha, descripcion) values ( 'N', '$alumno','$fecha_conducta','$descripcion')";

					$sqlgrabar = "UPDATE lista4basicoa SET negativas='" . $negativas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta4basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta4basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}

				}
		}
		
	}
while ($columna = mysqli_fetch_array( $resultado5a ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$positivas = $columna[3];
		$negativas = $columna[4];

		if($alumno == $columna[1] . " " . $columna[2]) {


			
			
				if($conducta == "positiva"){
					
				$sqlgrabar1 = "INSERT INTO conducta5basicoa ( conducta, alumno, fecha, descripcion) values ( 'P', '$alumno','$fecha_conducta','$descripcion')";

					
				$sqlgrabar = "UPDATE lista5basicoa SET positivas='" . $positivas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta5basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta5basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
	
				} else {
	
					$sqlgrabar1 = "INSERT INTO conducta5basicoa ( conducta, alumno, fecha, descripcion) values ( 'N', '$alumno','$fecha_conducta','$descripcion')";

					$sqlgrabar = "UPDATE lista5basicoa SET negativas='" . $negativas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta5basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta5basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}

				}
		}
		
	}
while ($columna = mysqli_fetch_array( $resultado6a ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$positivas = $columna[3];
		$negativas = $columna[4];

		if($alumno == $columna[1] . " " . $columna[2]) {


			
			
				if($conducta == "positiva"){
					
				$sqlgrabar1 = "INSERT INTO conducta6basicoa ( conducta, alumno, fecha, descripcion) values ( 'P', '$alumno','$fecha_conducta','$descripcion')";

					
				$sqlgrabar = "UPDATE lista6basicoa SET positivas='" . $positivas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta6basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta6basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
	
				} else {
	
					$sqlgrabar1 = "INSERT INTO conducta6basicoa ( conducta, alumno, fecha, descripcion) values ( 'N', '$alumno','$fecha_conducta','$descripcion')";

					$sqlgrabar = "UPDATE lista6basicoa SET negativas='" . $negativas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta6basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta6basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}

				}
		}
		
	}
while ($columna = mysqli_fetch_array( $resultado7a ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$positivas = $columna[3];
		$negativas = $columna[4];

		if($alumno == $columna[1] . " " . $columna[2]) {


			
			
				if($conducta == "positiva"){
					
				$sqlgrabar1 = "INSERT INTO conducta7basicoa ( conducta, alumno, fecha, descripcion) values ( 'P', '$alumno','$fecha_conducta','$descripcion')";

					
				$sqlgrabar = "UPDATE lista7basicoa SET positivas='" . $positivas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta7basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta7basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
	
				} else {
	
					$sqlgrabar1 = "INSERT INTO conducta7basicoa ( conducta, alumno, fecha, descripcion) values ( 'N', '$alumno','$fecha_conducta','$descripcion')";

					$sqlgrabar = "UPDATE lista7basicoa SET negativas='" . $negativas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta7basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta7basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}

				}
		}
		
	}
while ($columna = mysqli_fetch_array( $resultado8a ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$positivas = $columna[3];
		$negativas = $columna[4];

		if($alumno == $columna[1] . " " . $columna[2]) {


			
			
				if($conducta == "positiva"){
					
				$sqlgrabar1 = "INSERT INTO conducta8basicoa ( conducta, alumno, fecha, descripcion) values ( 'P', '$alumno','$fecha_conducta','$descripcion')";

					
				$sqlgrabar = "UPDATE lista8basicoa SET positivas='" . $positivas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta8basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta8basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
	
				} else {
	
					$sqlgrabar1 = "INSERT INTO conducta8basicoa ( conducta, alumno, fecha, descripcion) values ( 'N', '$alumno','$fecha_conducta','$descripcion')";

					$sqlgrabar = "UPDATE lista8basicoa SET negativas='" . $negativas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta8basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta8basicoa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}

				}
		}
		
	}
while ($columna = mysqli_fetch_array( $resultadoIa ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$positivas = $columna[3];
		$negativas = $columna[4];

		if($alumno == $columna[1] . " " . $columna[2]) {


			
			
				if($conducta == "positiva"){
					
				$sqlgrabar1 = "INSERT INTO conducta1medioa ( conducta, alumno, fecha, descripcion) values ( 'P', '$alumno','$fecha_conducta','$descripcion')";

					
				$sqlgrabar = "UPDATE lista1medioa SET positivas='" . $positivas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta1medioa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta1medioa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
	
				} else {
	
					$sqlgrabar1 = "INSERT INTO conducta1medioa ( conducta, alumno, fecha, descripcion) values ( 'N', '$alumno','$fecha_conducta','$descripcion')";

					$sqlgrabar = "UPDATE lista1medioa SET negativas='" . $negativas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta1medioa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta1medioa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}

				}
		}
		
	}
while ($columna = mysqli_fetch_array( $resultadoIIa ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$positivas = $columna[3];
		$negativas = $columna[4];

		if($alumno == $columna[1] . " " . $columna[2]) {


			
			
				if($conducta == "positiva"){
					
				$sqlgrabar1 = "INSERT INTO conducta2medioa ( conducta, alumno, fecha, descripcion) values ( 'P', '$alumno','$fecha_conducta','$descripcion')";

					
				$sqlgrabar = "UPDATE lista2medioa SET positivas='" . $positivas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta2medioa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta2medioa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
	
				} else {
	
					$sqlgrabar1 = "INSERT INTO conducta2medioa ( conducta, alumno, fecha, descripcion) values ( 'N', '$alumno','$fecha_conducta','$descripcion')";

					$sqlgrabar = "UPDATE lista2medioa SET negativas='" . $negativas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta2medioa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta2medioa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}

				}
		}
		
	}
while ($columna = mysqli_fetch_array( $resultadoIIIa ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$positivas = $columna[3];
		$negativas = $columna[4];

		if($alumno == $columna[1] . " " . $columna[2]) {


			
			
				if($conducta == "positiva"){
					
				$sqlgrabar1 = "INSERT INTO conducta3medioa ( conducta, alumno, fecha, descripcion) values ( 'P', '$alumno','$fecha_conducta','$descripcion')";

					
				$sqlgrabar = "UPDATE lista3medioa SET positivas='" . $positivas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta3medioa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta3medioa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
	
				} else {
	
					$sqlgrabar1 = "INSERT INTO conducta3medioa ( conducta, alumno, fecha, descripcion) values ( 'N', '$alumno','$fecha_conducta','$descripcion')";

					$sqlgrabar = "UPDATE lista3medioa SET negativas='" . $negativas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta3medioa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta3medioa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}

				}
		}
		
	}
while ($columna = mysqli_fetch_array( $resultadoIVa ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$positivas = $columna[3];
		$negativas = $columna[4];

		if($alumno == $columna[1] . " " . $columna[2]) {


			
			
				if($conducta == "positiva"){
					
				$sqlgrabar1 = "INSERT INTO conducta4medioa ( conducta, alumno, fecha, descripcion) values ( 'P', '$alumno','$fecha_conducta','$descripcion')";

					
				$sqlgrabar = "UPDATE lista4medioa SET positivas='" . $positivas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta4medioa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta4medioa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
	
				} else {
	
					$sqlgrabar1 = "INSERT INTO conducta4medioa ( conducta, alumno, fecha, descripcion) values ( 'N', '$alumno','$fecha_conducta','$descripcion')";

					$sqlgrabar = "UPDATE lista4medioa SET negativas='" . $negativas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta4medioa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta4medioa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}

				}
		}
		
	}




while ($columna = mysqli_fetch_array( $resultado1b ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$positivas = $columna[3];
		$negativas = $columna[4];

		if($alumno == $columna[1] . " " . $columna[2]) {


			
			
				if($conducta == "positiva"){
					
				$sqlgrabar1 = "INSERT INTO conducta1basicob ( conducta, alumno, fecha, descripcion) values ( 'P', '$alumno','$fecha_conducta','$descripcion')";

					
				$sqlgrabar = "UPDATE lista1basicob SET positivas='" . $positivas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta1basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta1basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
	
				} else {
	
					$sqlgrabar1 = "INSERT INTO conducta1basicob ( conducta, alumno, fecha, descripcion) values ( 'N', '$alumno','$fecha_conducta','$descripcion')";

					$sqlgrabar = "UPDATE lista1basicob SET negativas='" . $negativas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta1basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta1basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}

				}
		}
		
	}
while ($columna = mysqli_fetch_array( $resultado2b ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$positivas = $columna[3];
		$negativas = $columna[4];

		if($alumno == $columna[1] . " " . $columna[2]) {
	
				if($conducta == "positiva"){
					
				$sqlgrabar1 = "INSERT INTO conducta2basicob ( conducta, alumno, fecha, descripcion) values ( 'P', '$alumno','$fecha_conducta','$descripcion')";

					
				$sqlgrabar = "UPDATE lista2basicob SET positivas='" . $positivas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta2basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta2basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
	
				} else {
	
					$sqlgrabar1 = "INSERT INTO conducta2basicob ( conducta, alumno, fecha, descripcion) values ( 'N', '$alumno','$fecha_conducta','$descripcion')";

					$sqlgrabar = "UPDATE lista2basicob SET negativas='" . $negativas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta2basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta2basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}

				}
		}
		
	}
while ($columna = mysqli_fetch_array( $resultado3b ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$positivas = $columna[3];
		$negativas = $columna[4];

		if($alumno == $columna[1] . " " . $columna[2]) {


			
			
				if($conducta == "positiva"){
					
				$sqlgrabar1 = "INSERT INTO conducta3basicob ( conducta, alumno, fecha, descripcion) values ( 'P', '$alumno','$fecha_conducta','$descripcion')";

					
				$sqlgrabar = "UPDATE lista3basicob SET positivas='" . $positivas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta3basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta3basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
	
				} else {
	
					$sqlgrabar1 = "INSERT INTO conducta3basicob ( conducta, alumno, fecha, descripcion) values ( 'N', '$alumno','$fecha_conducta','$descripcion')";

					$sqlgrabar = "UPDATE lista3basicob SET negativas='" . $negativas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta3basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta3basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}

				}
		}
		
	}
while ($columna = mysqli_fetch_array( $resultado4b ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$positivas = $columna[3];
		$negativas = $columna[4];

		if($alumno == $columna[1] . " " . $columna[2]) {


			
			
				if($conducta == "positiva"){
					
				$sqlgrabar1 = "INSERT INTO conducta4basicob ( conducta, alumno, fecha, descripcion) values ( 'P', '$alumno','$fecha_conducta','$descripcion')";

					
				$sqlgrabar = "UPDATE lista4basicob SET positivas='" . $positivas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta4basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta4basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
	
				} else {
	
					$sqlgrabar1 = "INSERT INTO conducta4basicob ( conducta, alumno, fecha, descripcion) values ( 'N', '$alumno','$fecha_conducta','$descripcion')";

					$sqlgrabar = "UPDATE lista4basicob SET negativas='" . $negativas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta4basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta4basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}

				}
		}
		
	}
while ($columna = mysqli_fetch_array( $resultado5b ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$positivas = $columna[3];
		$negativas = $columna[4];

		if($alumno == $columna[1] . " " . $columna[2]) {


			
			
				if($conducta == "positiva"){
					
				$sqlgrabar1 = "INSERT INTO conducta5basicob ( conducta, alumno, fecha, descripcion) values ( 'P', '$alumno','$fecha_conducta','$descripcion')";

					
				$sqlgrabar = "UPDATE lista5basicob SET positivas='" . $positivas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta5basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta5basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
	
				} else {
	
					$sqlgrabar1 = "INSERT INTO conducta5basicob ( conducta, alumno, fecha, descripcion) values ( 'N', '$alumno','$fecha_conducta','$descripcion')";

					$sqlgrabar = "UPDATE lista5basicob SET negativas='" . $negativas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta5basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta5basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}

				}
		}
		
	}
while ($columna = mysqli_fetch_array( $resultado6b ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$positivas = $columna[3];
		$negativas = $columna[4];

		if($alumno == $columna[1] . " " . $columna[2]) {


			
			
				if($conducta == "positiva"){
					
				$sqlgrabar1 = "INSERT INTO conducta6basicob ( conducta, alumno, fecha, descripcion) values ( 'P', '$alumno','$fecha_conducta','$descripcion')";

					
				$sqlgrabar = "UPDATE lista6basicob SET positivas='" . $positivas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta6basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta6basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
	
				} else {
	
					$sqlgrabar1 = "INSERT INTO conducta6basicob ( conducta, alumno, fecha, descripcion) values ( 'N', '$alumno','$fecha_conducta','$descripcion')";

					$sqlgrabar = "UPDATE lista6basicob SET negativas='" . $negativas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta6basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta6basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}

				}
		}
		
	}
while ($columna = mysqli_fetch_array( $resultado7b ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$positivas = $columna[3];
		$negativas = $columna[4];

		if($alumno == $columna[1] . " " . $columna[2]) {


			
			
				if($conducta == "positiva"){
					
				$sqlgrabar1 = "INSERT INTO conducta7basicob ( conducta, alumno, fecha, descripcion) values ( 'P', '$alumno','$fecha_conducta','$descripcion')";

					
				$sqlgrabar = "UPDATE lista7basicob SET positivas='" . $positivas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta7basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta7basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
	
				} else {
	
					$sqlgrabar1 = "INSERT INTO conducta7basicob ( conducta, alumno, fecha, descripcion) values ( 'N', '$alumno','$fecha_conducta','$descripcion')";

					$sqlgrabar = "UPDATE lista7basicob SET negativas='" . $negativas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta7basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta7basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}

				}
		}
		
	}
while ($columna = mysqli_fetch_array( $resultado8b ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$positivas = $columna[3];
		$negativas = $columna[4];

		if($alumno == $columna[1] . " " . $columna[2]) {


			
			
				if($conducta == "positiva"){
					
				$sqlgrabar1 = "INSERT INTO conducta8basicob ( conducta, alumno, fecha, descripcion) values ( 'P', '$alumno','$fecha_conducta','$descripcion')";

					
				$sqlgrabar = "UPDATE lista8basicob SET positivas='" . $positivas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta8basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta8basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
	
				} else {
	
					$sqlgrabar1 = "INSERT INTO conducta8basicob ( conducta, alumno, fecha, descripcion) values ( 'N', '$alumno','$fecha_conducta','$descripcion')";

					$sqlgrabar = "UPDATE lista8basicob SET negativas='" . $negativas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta8basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta8basicob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}

				}
		}
		
	}
while ($columna = mysqli_fetch_array( $resultadoIb ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$positivas = $columna[3];
		$negativas = $columna[4];

		if($alumno == $columna[1] . " " . $columna[2]) {


			
			
				if($conducta == "positiva"){
					
				$sqlgrabar1 = "INSERT INTO conducta1mediob ( conducta, alumno, fecha, descripcion) values ( 'P', '$alumno','$fecha_conducta','$descripcion')";

					
				$sqlgrabar = "UPDATE lista1mediob SET positivas='" . $positivas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta1mediob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta1mediob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
	
				} else {
	
					$sqlgrabar1 = "INSERT INTO conducta1mediob ( conducta, alumno, fecha, descripcion) values ( 'N', '$alumno','$fecha_conducta','$descripcion')";

					$sqlgrabar = "UPDATE lista1mediob SET negativas='" . $negativas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta1mediob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta1mediob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}

				}
		}
		
	}
while ($columna = mysqli_fetch_array( $resultadoIIb ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$positivas = $columna[3];
		$negativas = $columna[4];

		if($alumno == $columna[1] . " " . $columna[2]) {


			
			
				if($conducta == "positiva"){
					
				$sqlgrabar1 = "INSERT INTO conducta2mediob ( conducta, alumno, fecha, descripcion) values ( 'P', '$alumno','$fecha_conducta','$descripcion')";

					
				$sqlgrabar = "UPDATE lista2mediob SET positivas='" . $positivas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta2mediob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta2mediob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
	
				} else {
	
					$sqlgrabar1 = "INSERT INTO conducta2mediob ( conducta, alumno, fecha, descripcion) values ( 'N', '$alumno','$fecha_conducta','$descripcion')";

					$sqlgrabar = "UPDATE lista2mediob SET negativas='" . $negativas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta2mediob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta2mediob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}

				}
		}
		
	}
while ($columna = mysqli_fetch_array( $resultadoIIIb ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$positivas = $columna[3];
		$negativas = $columna[4];

		if($alumno == $columna[1] . " " . $columna[2]) {


			
			
				if($conducta == "positiva"){
					
				$sqlgrabar1 = "INSERT INTO conducta3mediob ( conducta, alumno, fecha, descripcion) values ( 'P', '$alumno','$fecha_conducta','$descripcion')";

					
				$sqlgrabar = "UPDATE lista3mediob SET positivas='" . $positivas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta3mediob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta3mediob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
	
				} else {
	
					$sqlgrabar1 = "INSERT INTO conducta3mediob ( conducta, alumno, fecha, descripcion) values ( 'N', '$alumno','$fecha_conducta','$descripcion')";

					$sqlgrabar = "UPDATE lista3mediob SET negativas='" . $negativas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta3mediob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta3mediob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}

				}
		}
		
	}
while ($columna = mysqli_fetch_array( $resultadoIVb ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$positivas = $columna[3];
		$negativas = $columna[4];

		if($alumno == $columna[1] . " " . $columna[2]) {


			
			
				if($conducta == "positiva"){
					
				$sqlgrabar1 = "INSERT INTO conducta4mediob ( conducta, alumno, fecha, descripcion) values ( 'P', '$alumno','$fecha_conducta','$descripcion')";

					
				$sqlgrabar = "UPDATE lista4mediob SET positivas='" . $positivas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta4mediob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta4mediob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
	
				} else {
	
					$sqlgrabar1 = "INSERT INTO conducta4mediob ( conducta, alumno, fecha, descripcion) values ( 'N', '$alumno','$fecha_conducta','$descripcion')";

					$sqlgrabar = "UPDATE lista4mediob SET negativas='" . $negativas + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta4mediob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
					if(mysqli_query($conn,$sqlgrabar1))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='conducta4mediob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}

				}
		}
		
	}



?>