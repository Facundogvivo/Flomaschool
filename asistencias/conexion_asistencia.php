<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "flomaschool";

$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$conn)
{
	die("No hay conexion:" .mysqli_connect_error());
}

//lista

	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $dbhost, $dbuser, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $dbname ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

	// establecer y realizar consulta. guardamos en variable.
	$consulta1a = "SELECT * FROM lista1basicoa";
	$resultado1a = mysqli_query( $conexion, $consulta1a ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	// establecer y realizar consulta. guardamos en variable.
	$consulta1b = "SELECT * FROM lista1basicob";
	$resultado1b = mysqli_query( $conexion, $consulta1b ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	// establecer y realizar consulta. guardamos en variable.
	$consulta2a = "SELECT * FROM lista2basicoa";
	$resultado2a = mysqli_query( $conexion, $consulta2a ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	// establecer y realizar consulta. guardamos en variable.
	$consulta2b = "SELECT * FROM lista2basicob";
	$resultado2b = mysqli_query( $conexion, $consulta2b ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	// establecer y realizar consulta. guardamos en variable.
	$consulta3a = "SELECT * FROM lista3basicoa";
	$resultado3a = mysqli_query( $conexion, $consulta3a ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	// establecer y realizar consulta. guardamos en variable.
	$consulta3b = "SELECT * FROM lista3basicob";
	$resultado3b = mysqli_query( $conexion, $consulta3b ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	// establecer y realizar consulta. guardamos en variable.
	$consulta4a = "SELECT * FROM lista4basicoa";
	$resultado4a = mysqli_query( $conexion, $consulta4a ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	// establecer y realizar consulta. guardamos en variable.
	$consulta4b = "SELECT * FROM lista4basicob";
	$resultado4b = mysqli_query( $conexion, $consulta4b ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	// establecer y realizar consulta. guardamos en variable.
	$consulta5a = "SELECT * FROM lista5basicoa";
	$resultado5a = mysqli_query( $conexion, $consulta5a ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	// establecer y realizar consulta. guardamos en variable.
	$consulta5b = "SELECT * FROM lista5basicob";
	$resultado5b = mysqli_query( $conexion, $consulta5b ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	// establecer y realizar consulta. guardamos en variable.
	$consulta6a = "SELECT * FROM lista6basicoa";
	$resultado6a = mysqli_query( $conexion, $consulta6a ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	// establecer y realizar consulta. guardamos en variable.
	$consulta6b = "SELECT * FROM lista6basicob";
	$resultado6b = mysqli_query( $conexion, $consulta6b ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	// establecer y realizar consulta. guardamos en variable.
	$consulta7a = "SELECT * FROM lista7basicoa";
	$resultado7a = mysqli_query( $conexion, $consulta7a ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	// establecer y realizar consulta. guardamos en variable.
	$consulta7b = "SELECT * FROM lista7basicob";
	$resultado7b = mysqli_query( $conexion, $consulta7b ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	// establecer y realizar consulta. guardamos en variable.
	$consulta8a = "SELECT * FROM lista8basicoa";
	$resultado8a = mysqli_query( $conexion, $consulta8a ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	// establecer y realizar consulta. guardamos en variable.
	$consulta8b = "SELECT * FROM lista8basicob";
	$resultado8b = mysqli_query( $conexion, $consulta8b ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	// establecer y realizar consulta. guardamos en variable.
	$consultaIa = "SELECT * FROM lista1medioa";
	$resultadoIa = mysqli_query( $conexion, $consultaIa ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	// establecer y realizar consulta. guardamos en variable.
	$consultaIb = "SELECT * FROM lista1mediob";
	$resultadoIb = mysqli_query( $conexion, $consultaIb ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	// establecer y realizar consulta. guardamos en variable.
	$consultaIIa = "SELECT * FROM lista2medioa";
	$resultadoIIa = mysqli_query( $conexion, $consultaIIa ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	// establecer y realizar consulta. guardamos en variable.
	$consultaIIb = "SELECT * FROM lista2mediob";
	$resultadoIIb = mysqli_query( $conexion, $consultaIIb ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	// establecer y realizar consulta. guardamos en variable.
	$consultaIIIa = "SELECT * FROM lista3medioa";
	$resultadoIIIa = mysqli_query( $conexion, $consultaIIIa ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	// establecer y realizar consulta. guardamos en variable.
	$consultaIIIb = "SELECT * FROM lista3mediob";
	$resultadoIIIb = mysqli_query( $conexion, $consultaIIIb ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	// establecer y realizar consulta. guardamos en variable.
	$consultaIVa = "SELECT * FROM lista4medioa";
	$resultadoIVa = mysqli_query( $conexion, $consultaIVa ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	// establecer y realizar consulta. guardamos en variable.
	$consultaIVb = "SELECT * FROM lista4mediob";
	$resultadoIVb = mysqli_query( $conexion, $consultaIVb ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	//Conducta
	
	
?>