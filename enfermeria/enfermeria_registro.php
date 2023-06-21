<?php

include("conexion_enfermeria.php");

$alumno   = $_POST["txt_alumno"];
$fecha_enfermeria = $_POST["txt_fecha_enfermeria"];
$descripcion = $_POST["txt_descripcion"];


while ($columna = mysqli_fetch_array( $resultado1a ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$enfermeria = $columna[16];

		if($alumno == $columna[1] . " " . $columna[2]) {


			$sqlgrabar1 = "INSERT INTO conducta1basicoa (conducta, alumno, fecha, descripcion) values ('E','$alumno','$fecha_enfermeria','$descripcion')";

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria1basicoa.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
	
				$sqlgrabar = "UPDATE lista1basicoa SET enfermeria='" . $enfermeria + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria1basicoa.php' </script>";
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
		$enfermeria = $columna[16];

		if($alumno == $columna[1] . " " . $columna[2]) {


			$sqlgrabar1 = "INSERT INTO conducta2basicoa (conducta, alumno, fecha, descripcion) values ('E','$alumno','$fecha_enfermeria','$descripcion')";

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria2basicoa.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
	
			$sqlgrabar = "UPDATE lista2basicoa SET enfermeria='" . $enfermeria + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

			if(mysqli_query($conn,$sqlgrabar))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria2basicoa.php' </script>";
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
		$enfermeria = $columna[16];

		if($alumno == $columna[1] . " " . $columna[2]) {


			$sqlgrabar1 = "INSERT INTO conducta3basicoa (conducta, alumno, fecha, descripcion) values ('E','$alumno','$fecha_enfermeria','$descripcion')";

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria3basicoa.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
	
				$sqlgrabar = "UPDATE lista3basicoa SET enfermeria='" . $enfermeria + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria3basicoa.php' </script>";
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
		$enfermeria = $columna[16];

		if($alumno == $columna[1] . " " . $columna[2]) {


			$sqlgrabar1 = "INSERT INTO conducta4basicoa (conducta, alumno, fecha, descripcion) values ('E','$alumno','$fecha_enfermeria','$descripcion')";

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria4basicoa.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
	
				$sqlgrabar = "UPDATE lista4basicoa SET enfermeria='" . $enfermeria + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria4basicoa.php' </script>";
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
		$enfermeria = $columna[16];

		if($alumno == $columna[1] . " " . $columna[2]) {


			$sqlgrabar1 = "INSERT INTO conducta5basicoa (conducta, alumno, fecha, descripcion) values ('E','$alumno','$fecha_enfermeria','$descripcion')";

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria5basicoa.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
	
				$sqlgrabar = "UPDATE lista5basicoa SET enfermeria='" . $enfermeria + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria5basicoa.php' </script>";
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
		$enfermeria = $columna[16];

		if($alumno == $columna[1] . " " . $columna[2]) {


			$sqlgrabar1 = "INSERT INTO conducta6basicoa (conducta, alumno, fecha, descripcion) values ('E','$alumno','$fecha_enfermeria','$descripcion')";

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria6basicoa.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
	
				$sqlgrabar = "UPDATE lista6basicoa SET enfermeria='" . $enfermeria + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria6basicoa.php' </script>";
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
		$enfermeria = $columna[16];

		if($alumno == $columna[1] . " " . $columna[2]) {


			$sqlgrabar1 = "INSERT INTO conducta7basicoa (conducta, alumno, fecha, descripcion) values ('E','$alumno','$fecha_enfermeria','$descripcion')";

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria7basicoa.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
	
				$sqlgrabar = "UPDATE lista7basicoa SET enfermeria='" . $enfermeria + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria7basicoa.php' </script>";
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
		$enfermeria = $columna[16];

		if($alumno == $columna[1] . " " . $columna[2]) {


			$sqlgrabar1 = "INSERT INTO conducta8basicoa (conducta, alumno, fecha, descripcion) values ('E','$alumno','$fecha_enfermeria','$descripcion')";

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria8basicoa.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
	
				$sqlgrabar = "UPDATE lista8basicoa SET enfermeria='" . $enfermeria + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria8basicoa.php' </script>";
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
		$enfermeria = $columna[16];

		if($alumno == $columna[1] . " " . $columna[2]) {


			$sqlgrabar1 = "INSERT INTO conducta1medioa (conducta, alumno, fecha, descripcion) values ('E','$alumno','$fecha_enfermeria','$descripcion')";

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria1medioa.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
	
				$sqlgrabar = "UPDATE lista1medioa SET enfermeria='" . $enfermeria + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria1medioa.php' </script>";
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
		$enfermeria = $columna[16];

		if($alumno == $columna[1] . " " . $columna[2]) {


			$sqlgrabar1 = "INSERT INTO conducta2medioa (conducta, alumno, fecha, descripcion) values ('E','$alumno','$fecha_enfermeria','$descripcion')";

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria2medioa.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
	
				$sqlgrabar = "UPDATE lista2medioa SET enfermeria='" . $enfermeria + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria2medioa.php' </script>";
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
		$enfermeria = $columna[16];

		if($alumno == $columna[1] . " " . $columna[2]) {


			$sqlgrabar1 = "INSERT INTO conducta3medioa (conducta, alumno, fecha, descripcion) values ('E','$alumno','$fecha_enfermeria','$descripcion')";

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria3medioa.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
	
				$sqlgrabar = "UPDATE lista3medioa SET enfermeria='" . $enfermeria + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria3medioa.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
		
		}
		
	}
while ($columna = mysqli_fetch_array( $resultadoIVa h))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$enfermeria = $columna[16];

		if($alumno == $columna[1] . " " . $columna[2]) {


			$sqlgrabar1 = "INSERT INTO conducta4medioa (conducta, alumno, fecha, descripcion) values ('E','$alumno','$fecha_enfermeria','$descripcion')";

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria4medioa.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
	
				$sqlgrabar = "UPDATE lista4medioa SET enfermeria='" . $enfermeria + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria4medioa.php' </script>";
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
		$enfermeria = $columna[16];

		if($alumno == $columna[1] . " " . $columna[2]) {


			$sqlgrabar1 = "INSERT INTO conducta1basicob (conducta, alumno, fecha, descripcion) values ('E','$alumno','$fecha_enfermeria','$descripcion')";

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria1basicob.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
	
				$sqlgrabar = "UPDATE lista1basicob SET enfermeria='" . $enfermeria + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria1basicob.php' </script>";
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
		$enfermeria = $columna[16];

		if($alumno == $columna[1] . " " . $columna[2]) {


			$sqlgrabar1 = "INSERT INTO conducta2basicob (conducta, alumno, fecha, descripcion) values ('E','$alumno','$fecha_enfermeria','$descripcion')";

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria2basicob.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
	
			$sqlgrabar = "UPDATE lista2basicob SET enfermeria='" . $enfermeria + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

			if(mysqli_query($conn,$sqlgrabar))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria2basicob.php' </script>";
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
		$enfermeria = $columna[16];

		if($alumno == $columna[1] . " " . $columna[2]) {


			$sqlgrabar1 = "INSERT INTO conducta3basicob (conducta, alumno, fecha, descripcion) values ('E','$alumno','$fecha_enfermeria','$descripcion')";

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria3basicob.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
	
				$sqlgrabar = "UPDATE lista3basicob SET enfermeria='" . $enfermeria + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria3basicob.php' </script>";
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
		$enfermeria = $columna[16];

		if($alumno == $columna[1] . " " . $columna[2]) {


			$sqlgrabar1 = "INSERT INTO conducta4basicob (conducta, alumno, fecha, descripcion) values ('E','$alumno','$fecha_enfermeria','$descripcion')";

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria4basicob.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
	
				$sqlgrabar = "UPDATE lista4basicob SET enfermeria='" . $enfermeria + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria4basicob.php' </script>";
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
		$enfermeria = $columna[16];

		if($alumno == $columna[1] . " " . $columna[2]) {


			$sqlgrabar1 = "INSERT INTO conducta5basicob (conducta, alumno, fecha, descripcion) values ('E','$alumno','$fecha_enfermeria','$descripcion')";

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria5basicob.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
	
				$sqlgrabar = "UPDATE lista5basicob SET enfermeria='" . $enfermeria + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria5basicob.php' </script>";
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
		$enfermeria = $columna[16];

		if($alumno == $columna[1] . " " . $columna[2]) {


			$sqlgrabar1 = "INSERT INTO conducta6basicob (conducta, alumno, fecha, descripcion) values ('E','$alumno','$fecha_enfermeria','$descripcion')";

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria6basicob.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
	
				$sqlgrabar = "UPDATE lista6basicob SET enfermeria='" . $enfermeria + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria6basicob.php' </script>";
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
		$enfermeria = $columna[16];

		if($alumno == $columna[1] . " " . $columna[2]) {


			$sqlgrabar1 = "INSERT INTO conducta7basicob (conducta, alumno, fecha, descripcion) values ('E','$alumno','$fecha_enfermeria','$descripcion')";

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria7basicob.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
	
				$sqlgrabar = "UPDATE lista7basicob SET enfermeria='" . $enfermeria + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria7basicob.php' </script>";
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
		$enfermeria = $columna[16];

		if($alumno == $columna[1] . " " . $columna[2]) {


			$sqlgrabar1 = "INSERT INTO conducta8basicob (conducta, alumno, fecha, descripcion) values ('E','$alumno','$fecha_enfermeria','$descripcion')";

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria8basicob.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
	
				$sqlgrabar = "UPDATE lista8basicob SET enfermeria='" . $enfermeria + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria8basicob.php' </script>";
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
		$enfermeria = $columna[16];

		if($alumno == $columna[1] . " " . $columna[2]) {


			$sqlgrabar1 = "INSERT INTO conducta1mediob (conducta, alumno, fecha, descripcion) values ('E','$alumno','$fecha_enfermeria','$descripcion')";

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria1mediob.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
	
				$sqlgrabar = "UPDATE lista1mediob SET enfermeria='" . $enfermeria + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria1mediob.php' </script>";
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
		$enfermeria = $columna[16];

		if($alumno == $columna[1] . " " . $columna[2]) {


			$sqlgrabar1 = "INSERT INTO conducta2mediob (conducta, alumno, fecha, descripcion) values ('E','$alumno','$fecha_enfermeria','$descripcion')";

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria2mediob.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
	
				$sqlgrabar = "UPDATE lista2mediob SET enfermeria='" . $enfermeria + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria2mediob.php' </script>";
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
		$enfermeria = $columna[16];

		if($alumno == $columna[1] . " " . $columna[2]) {


			$sqlgrabar1 = "INSERT INTO conducta3mediob (conducta, alumno, fecha, descripcion) values ('E','$alumno','$fecha_enfermeria','$descripcion')";

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria3mediob.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
	
				$sqlgrabar = "UPDATE lista3mediob SET enfermeria='" . $enfermeria + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria3mediob.php' </script>";
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
		$enfermeria = $columna[16];

		if($alumno == $columna[1] . " " . $columna[2]) {


			$sqlgrabar1 = "INSERT INTO conducta4mediob (conducta, alumno, fecha, descripcion) values ('E','$alumno','$fecha_enfermeria','$descripcion')";

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria4mediob.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}
	
				$sqlgrabar = "UPDATE lista4mediob SET enfermeria='" . $enfermeria + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";

					if(mysqli_query($conn,$sqlgrabar))
					{
						echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='enfermeria4mediob.php' </script>";
					}else 
					{
						echo "Error: ".$sql."<br>".mysql_error($conn);
					}
		
		}
		
	}


?>
