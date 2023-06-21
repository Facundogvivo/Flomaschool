<?php

include("conexion_asistencia.php");

$alumno   = $_POST["txt_alumno"];
$conducta   = $_POST["txt_asistencia"];
$fecha_asistencia = $_POST["fecha_asistencia"];
$descripcion = $_POST["txt_descripcion"];


while ($columna = mysqli_fetch_array( $resultado1a ))
	{
		$nombre = $columna[1];
		$apellido = $columna[2];
		$asistencia = $columna[18];
		$inasistenica = $columna[19];
		$atrasos = $columna[20];
		$reuniones = $columna[21];

		if($alumno == $columna[1] . " " . $columna[2]) {
			switch ($conducta) {
				case "asistencia":
					
					$sqlgrabar1 = "UPDATE lista1basicoa SET asistencias='" . $asistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "inasistencia":
						
					$sqlgrabar1 = "UPDATE lista1basicoa SET inasistencias='" . $inasistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "atrasos":
					
					$sqlgrabar1 = "UPDATE lista1basicoa SET atrasos='" . $atrasos + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "reuniones":
					
					$sqlgrabar1 = "UPDATE lista1basicoa SET reuniones='" . $reuniones + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
			}	

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='asistencia1basicoa.php' </script>";
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
		$asistencia = $columna[18];
		$inasistenica = $columna[19];
		$atrasos = $columna[20];
		$reuniones = $columna[21];

		if($alumno == $columna[1] . " " . $columna[2]) {
			switch ($conducta) {
				case "asistencia":
					
					$sqlgrabar1 = "UPDATE lista2basicoa SET asistencias='" . $asistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "inasistencia":
						
					$sqlgrabar1 = "UPDATE lista2basicoa SET inasistencias='" . $inasistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "atrasos":
					
					$sqlgrabar1 = "UPDATE lista2basicoa SET atrasos='" . $atrasos + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "reuniones":
					
					$sqlgrabar1 = "UPDATE lista2basicoa SET reuniones='" . $reuniones + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
			}	

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='asistencia2basicoa.php' </script>";
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
		$asistencia = $columna[18];
		$inasistenica = $columna[19];
		$atrasos = $columna[20];
		$reuniones = $columna[21];

		if($alumno == $columna[1] . " " . $columna[2]) {
			switch ($conducta) {
				case "asistencia":
					
					$sqlgrabar1 = "UPDATE lista3basicoa SET asistencias='" . $asistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "inasistencia":
						
					$sqlgrabar1 = "UPDATE lista3basicoa SET inasistencias='" . $inasistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "atrasos":
					
					$sqlgrabar1 = "UPDATE lista3basicoa SET atrasos='" . $atrasos + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "reuniones":
					
					$sqlgrabar1 = "UPDATE lista3basicoa SET reuniones='" . $reuniones + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
			}	

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='asistencia3basicoa.php' </script>";
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
		$asistencia = $columna[18];
		$inasistenica = $columna[19];
		$atrasos = $columna[20];
		$reuniones = $columna[21];

		if($alumno == $columna[1] . " " . $columna[2]) {
			switch ($conducta) {
				case "asistencia":
					
					$sqlgrabar1 = "UPDATE lista4basicoa SET asistencias='" . $asistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "inasistencia":
						
					$sqlgrabar1 = "UPDATE lista4basicoa SET inasistencias='" . $inasistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "atrasos":
					
					$sqlgrabar1 = "UPDATE lista4basicoa SET atrasos='" . $atrasos + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "reuniones":
					
					$sqlgrabar1 = "UPDATE lista4basicoa SET reuniones='" . $reuniones + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
			}	

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='asistencia4basicoa.php' </script>";
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
		$asistencia = $columna[18];
		$inasistenica = $columna[19];
		$atrasos = $columna[20];
		$reuniones = $columna[21];

		if($alumno == $columna[1] . " " . $columna[2]) {
			switch ($conducta) {
				case "asistencia":
					
					$sqlgrabar1 = "UPDATE lista5basicoa SET asistencias='" . $asistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "inasistencia":
						
					$sqlgrabar1 = "UPDATE lista5basicoa SET inasistencias='" . $inasistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "atrasos":
					
					$sqlgrabar1 = "UPDATE lista5basicoa SET atrasos='" . $atrasos + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "reuniones":
					
					$sqlgrabar1 = "UPDATE lista5basicoa SET reuniones='" . $reuniones + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
			}	

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='asistencia5basicoa.php' </script>";
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
		$asistencia = $columna[18];
		$inasistenica = $columna[19];
		$atrasos = $columna[20];
		$reuniones = $columna[21];

		if($alumno == $columna[1] . " " . $columna[2]) {
			switch ($conducta) {
				case "asistencia":
					
					$sqlgrabar1 = "UPDATE lista6basicoa SET asistencias='" . $asistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "inasistencia":
						
					$sqlgrabar1 = "UPDATE lista6basicoa SET inasistencias='" . $inasistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "atrasos":
					
					$sqlgrabar1 = "UPDATE lista6basicoa SET atrasos='" . $atrasos + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "reuniones":
					
					$sqlgrabar1 = "UPDATE lista6basicoa SET reuniones='" . $reuniones + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
			}	

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='asistencia6basicoa.php' </script>";
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
		$asistencia = $columna[18];
		$inasistenica = $columna[19];
		$atrasos = $columna[20];
		$reuniones = $columna[21];

		if($alumno == $columna[1] . " " . $columna[2]) {
			switch ($conducta) {
				case "asistencia":
					
					$sqlgrabar1 = "UPDATE lista7basicoa SET asistencias='" . $asistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "inasistencia":
						
					$sqlgrabar1 = "UPDATE lista7basicoa SET inasistencias='" . $inasistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "atrasos":
					
					$sqlgrabar1 = "UPDATE lista7basicoa SET atrasos='" . $atrasos + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "reuniones":
					
					$sqlgrabar1 = "UPDATE lista7basicoa SET reuniones='" . $reuniones + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
			}	

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='asistencia7basicoa.php' </script>";
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
		$asistencia = $columna[18];
		$inasistenica = $columna[19];
		$atrasos = $columna[20];
		$reuniones = $columna[21];

		if($alumno == $columna[1] . " " . $columna[2]) {
			switch ($conducta) {
				case "asistencia":
					
					$sqlgrabar1 = "UPDATE lista8basicoa SET asistencias='" . $asistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "inasistencia":
						
					$sqlgrabar1 = "UPDATE lista8basicoa SET inasistencias='" . $inasistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "atrasos":
					
					$sqlgrabar1 = "UPDATE lista8basicoa SET atrasos='" . $atrasos + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "reuniones":
					
					$sqlgrabar1 = "UPDATE lista8basicoa SET reuniones='" . $reuniones + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
			}	

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='asistencia8basicoa.php' </script>";
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
		$asistencia = $columna[18];
		$inasistenica = $columna[19];
		$atrasos = $columna[20];
		$reuniones = $columna[21];

		if($alumno == $columna[1] . " " . $columna[2]) {
			switch ($conducta) {
				case "asistencia":
					
					$sqlgrabar1 = "UPDATE lista1medioa SET asistencias='" . $asistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "inasistencia":
						
					$sqlgrabar1 = "UPDATE lista1medioa SET inasistencias='" . $inasistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "atrasos":
					
					$sqlgrabar1 = "UPDATE lista1medioa SET atrasos='" . $atrasos + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "reuniones":
					
					$sqlgrabar1 = "UPDATE lista1medioa SET reuniones='" . $reuniones + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
			}	

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='asistencia1medioa.php' </script>";
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
		$asistencia = $columna[18];
		$inasistenica = $columna[19];
		$atrasos = $columna[20];
		$reuniones = $columna[21];

		if($alumno == $columna[1] . " " . $columna[2]) {
			switch ($conducta) {
				case "asistencia":
					
					$sqlgrabar1 = "UPDATE lista2medioa SET asistencias='" . $asistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "inasistencia":
						
					$sqlgrabar1 = "UPDATE lista2medioa SET inasistencias='" . $inasistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "atrasos":
					
					$sqlgrabar1 = "UPDATE lista2medioa SET atrasos='" . $atrasos + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "reuniones":
					
					$sqlgrabar1 = "UPDATE lista2medioa SET reuniones='" . $reuniones + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
			}	

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='asistencia2medioa.php' </script>";
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
		$asistencia = $columna[18];
		$inasistenica = $columna[19];
		$atrasos = $columna[20];
		$reuniones = $columna[21];

		if($alumno == $columna[1] . " " . $columna[2]) {
			switch ($conducta) {
				case "asistencia":
					
					$sqlgrabar1 = "UPDATE lista3medioa SET asistencias='" . $asistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "inasistencia":
						
					$sqlgrabar1 = "UPDATE lista3medioa SET inasistencias='" . $inasistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "atrasos":
					
					$sqlgrabar1 = "UPDATE lista3medioa SET atrasos='" . $atrasos + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "reuniones":
					
					$sqlgrabar1 = "UPDATE lista3medioa SET reuniones='" . $reuniones + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
			}	

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='asistencia3medioa.php' </script>";
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
		$asistencia = $columna[18];
		$inasistenica = $columna[19];
		$atrasos = $columna[20];
		$reuniones = $columna[21];

		if($alumno == $columna[1] . " " . $columna[2]) {
			switch ($conducta) {
				case "asistencia":
					
					$sqlgrabar1 = "UPDATE lista4medioa SET asistencias='" . $asistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "inasistencia":
						
					$sqlgrabar1 = "UPDATE lista4medioa SET inasistencias='" . $inasistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "atrasos":
					
					$sqlgrabar1 = "UPDATE lista4medioa SET atrasos='" . $atrasos + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "reuniones":
					
					$sqlgrabar1 = "UPDATE lista4medioa SET reuniones='" . $reuniones + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
			}	

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='asistencia4medioa.php' </script>";
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
		$asistencia = $columna[18];
		$inasistenica = $columna[19];
		$atrasos = $columna[20];
		$reuniones = $columna[21];

		if($alumno == $columna[1] . " " . $columna[2]) {
			switch ($conducta) {
				case "asistencia":
					
					$sqlgrabar1 = "UPDATE lista1basicob SET asistencias='" . $asistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "inasistencia":
						
					$sqlgrabar1 = "UPDATE lista1basicob SET inasistencias='" . $inasistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "atrasos":
					
					$sqlgrabar1 = "UPDATE lista1basicob SET atrasos='" . $atrasos + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "reuniones":
					
					$sqlgrabar1 = "UPDATE lista1basicob SET reuniones='" . $reuniones + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
			}	

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='asistencia1basicob.php' </script>";
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
		$asistencia = $columna[18];
		$inasistenica = $columna[19];
		$atrasos = $columna[20];
		$reuniones = $columna[21];

		if($alumno == $columna[1] . " " . $columna[2]) {
			switch ($conducta) {
				case "asistencia":
					
					$sqlgrabar1 = "UPDATE lista2basicob SET asistencias='" . $asistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "inasistencia":
						
					$sqlgrabar1 = "UPDATE lista2basicob SET inasistencias='" . $inasistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "atrasos":
					
					$sqlgrabar1 = "UPDATE lista2basicob SET atrasos='" . $atrasos + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "reuniones":
					
					$sqlgrabar1 = "UPDATE lista2basicob SET reuniones='" . $reuniones + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
			}	

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='asistencia2basicob.php' </script>";
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
		$asistencia = $columna[18];
		$inasistenica = $columna[19];
		$atrasos = $columna[20];
		$reuniones = $columna[21];

		if($alumno == $columna[1] . " " . $columna[2]) {
			switch ($conducta) {
				case "asistencia":
					
					$sqlgrabar1 = "UPDATE lista3basicob SET asistencias='" . $asistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "inasistencia":
						
					$sqlgrabar1 = "UPDATE lista3basicob SET inasistencias='" . $inasistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "atrasos":
					
					$sqlgrabar1 = "UPDATE lista3basicob SET atrasos='" . $atrasos + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "reuniones":
					
					$sqlgrabar1 = "UPDATE lista3basicob SET reuniones='" . $reuniones + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
			}	

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='asistencia3basicob.php' </script>";
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
		$asistencia = $columna[18];
		$inasistenica = $columna[19];
		$atrasos = $columna[20];
		$reuniones = $columna[21];

		if($alumno == $columna[1] . " " . $columna[2]) {
			switch ($conducta) {
				case "asistencia":
					
					$sqlgrabar1 = "UPDATE lista4basicob SET asistencias='" . $asistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "inasistencia":
						
					$sqlgrabar1 = "UPDATE lista4basicob SET inasistencias='" . $inasistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "atrasos":
					
					$sqlgrabar1 = "UPDATE lista4basicob SET atrasos='" . $atrasos + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "reuniones":
					
					$sqlgrabar1 = "UPDATE lista4basicob SET reuniones='" . $reuniones + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
			}	

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='asistencia4basicob.php' </script>";
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
		$asistencia = $columna[18];
		$inasistenica = $columna[19];
		$atrasos = $columna[20];
		$reuniones = $columna[21];

		if($alumno == $columna[1] . " " . $columna[2]) {
			switch ($conducta) {
				case "asistencia":
					
					$sqlgrabar1 = "UPDATE lista5basicob SET asistencias='" . $asistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "inasistencia":
						
					$sqlgrabar1 = "UPDATE lista5basicob SET inasistencias='" . $inasistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "atrasos":
					
					$sqlgrabar1 = "UPDATE lista5basicob SET atrasos='" . $atrasos + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "reuniones":
					
					$sqlgrabar1 = "UPDATE lista5basicob SET reuniones='" . $reuniones + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
			}	

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='asistencia5basicob.php' </script>";
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
		$asistencia = $columna[18];
		$inasistenica = $columna[19];
		$atrasos = $columna[20];
		$reuniones = $columna[21];

		if($alumno == $columna[1] . " " . $columna[2]) {
			switch ($conducta) {
				case "asistencia":
					
					$sqlgrabar1 = "UPDATE lista6basicob SET asistencias='" . $asistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "inasistencia":
						
					$sqlgrabar1 = "UPDATE lista6basicob SET inasistencias='" . $inasistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "atrasos":
					
					$sqlgrabar1 = "UPDATE lista6basicob SET atrasos='" . $atrasos + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "reuniones":
					
					$sqlgrabar1 = "UPDATE lista6basicob SET reuniones='" . $reuniones + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
			}	

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='asistencia6basicob.php' </script>";
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
		$asistencia = $columna[18];
		$inasistenica = $columna[19];
		$atrasos = $columna[20];
		$reuniones = $columna[21];

		if($alumno == $columna[1] . " " . $columna[2]) {
			switch ($conducta) {
				case "asistencia":
					
					$sqlgrabar1 = "UPDATE lista7basicob SET asistencias='" . $asistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "inasistencia":
						
					$sqlgrabar1 = "UPDATE lista7basicob SET inasistencias='" . $inasistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "atrasos":
					
					$sqlgrabar1 = "UPDATE lista7basicob SET atrasos='" . $atrasos + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "reuniones":
					
					$sqlgrabar1 = "UPDATE lista7basicob SET reuniones='" . $reuniones + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
			}	

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='asistencia7basicob.php' </script>";
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
		$asistencia = $columna[18];
		$inasistenica = $columna[19];
		$atrasos = $columna[20];
		$reuniones = $columna[21];

		if($alumno == $columna[1] . " " . $columna[2]) {
			switch ($conducta) {
				case "asistencia":
					
					$sqlgrabar1 = "UPDATE lista8basicob SET asistencias='" . $asistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "inasistencia":
						
					$sqlgrabar1 = "UPDATE lista8basicob SET inasistencias='" . $inasistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "atrasos":
					
					$sqlgrabar1 = "UPDATE lista8basicob SET atrasos='" . $atrasos + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "reuniones":
					
					$sqlgrabar1 = "UPDATE lista8basicob SET reuniones='" . $reuniones + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
			}	

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='asistencia8basicob.php' </script>";
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
		$asistencia = $columna[18];
		$inasistenica = $columna[19];
		$atrasos = $columna[20];
		$reuniones = $columna[21];

		if($alumno == $columna[1] . " " . $columna[2]) {
			switch ($conducta) {
				case "asistencia":
					
					$sqlgrabar1 = "UPDATE lista1mediob SET asistencias='" . $asistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "inasistencia":
						
					$sqlgrabar1 = "UPDATE lista1mediob SET inasistencias='" . $inasistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "atrasos":
					
					$sqlgrabar1 = "UPDATE lista1mediob SET atrasos='" . $atrasos + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "reuniones":
					
					$sqlgrabar1 = "UPDATE lista1mediob SET reuniones='" . $reuniones + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
			}	

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='asistencia1mediob.php' </script>";
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
		$asistencia = $columna[18];
		$inasistenica = $columna[19];
		$atrasos = $columna[20];
		$reuniones = $columna[21];

		if($alumno == $columna[1] . " " . $columna[2]) {
			switch ($conducta) {
				case "asistencia":
					
					$sqlgrabar1 = "UPDATE lista2mediob SET asistencias='" . $asistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "inasistencia":
						
					$sqlgrabar1 = "UPDATE lista2mediob SET inasistencias='" . $inasistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "atrasos":
					
					$sqlgrabar1 = "UPDATE lista2mediob SET atrasos='" . $atrasos + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "reuniones":
					
					$sqlgrabar1 = "UPDATE lista2mediob SET reuniones='" . $reuniones + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
			}	

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='asistencia2mediob.php' </script>";
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
		$asistencia = $columna[18];
		$inasistenica = $columna[19];
		$atrasos = $columna[20];
		$reuniones = $columna[21];

		if($alumno == $columna[1] . " " . $columna[2]) {
			switch ($conducta) {
				case "asistencia":
					
					$sqlgrabar1 = "UPDATE lista3mediob SET asistencias='" . $asistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "inasistencia":
						
					$sqlgrabar1 = "UPDATE lista3mediob SET inasistencias='" . $inasistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "atrasos":
					
					$sqlgrabar1 = "UPDATE lista3mediob SET atrasos='" . $atrasos + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "reuniones":
					
					$sqlgrabar1 = "UPDATE lista3mediob SET reuniones='" . $reuniones + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
			}	

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='asistencia3mediob.php' </script>";
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
		$asistencia = $columna[18];
		$inasistenica = $columna[19];
		$atrasos = $columna[20];
		$reuniones = $columna[21];

		if($alumno == $columna[1] . " " . $columna[2]) {
			switch ($conducta) {
				case "asistencia":
					
					$sqlgrabar1 = "UPDATE lista4mediob SET asistencias='" . $asistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "inasistencia":
						
					$sqlgrabar1 = "UPDATE lista4mediob SET inasistencias='" . $inasistencia + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "atrasos":
					
					$sqlgrabar1 = "UPDATE lista4mediob SET atrasos='" . $atrasos + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
				case "reuniones":
					
					$sqlgrabar1 = "UPDATE lista4mediob SET reuniones='" . $reuniones + 1 .  "'  WHERE nombre='$nombre' AND apellido= '$apellido'";
		
					break;
			}	

			if(mysqli_query($conn,$sqlgrabar1))
			{
				echo "<script> alert('Usuario registrado con exito: $alumno'); window.location='asistencia4mediob.php' </script>";
			}else 
			{
				echo "Error: ".$sql."<br>".mysql_error($conn);
			}

		}
		
	}

?>
