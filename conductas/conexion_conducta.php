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
	
	// establecer y realizar consulta. guardamos en variable.
	$consulta1ac = "SELECT * FROM conducta1basicoa";
	$resultado1ac = mysqli_query( $conexion, $consulta1ac ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	// establecer y realizar consulta. guardamos en variable.
	$consulta1bc = "SELECT * FROM conducta1basicob";
	$resultado1bc = mysqli_query( $conexion, $consulta1bc ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	// establecer y realizar consulta. guardamos en variable.
	$consulta2ac = "SELECT * FROM conducta2basicoa";
	$resultado2ac = mysqli_query( $conexion, $consulta2ac ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	// establecer y realizar consulta. guardamos en variable.
	$consulta2bc = "SELECT * FROM conducta2basicob";
	$resultado2bc = mysqli_query( $conexion, $consulta2bc ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	// establecer y realizar consulta. guardamos en variable.
	$consulta3ac = "SELECT * FROM conducta3basicoa";
	$resultado3ac = mysqli_query( $conexion, $consulta3ac ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	// establecer y realizar consulta. guardamos en variable.
	$consulta3bc = "SELECT * FROM conducta3basicob";
	$resultado3bc = mysqli_query( $conexion, $consulta3bc ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
	// establecer y realizar consulta. guardamos en variable.
	$consulta4ac = "SELECT * FROM conducta4basicoa";
	$resultado4ac = mysqli_query( $conexion, $consulta4ac ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	// establecer y realizar consulta. guardamos en variable.
	$consulta4bc = "SELECT * FROM conducta4basicob";
	$resultado4bc = mysqli_query( $conexion, $consulta4bc ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	// establecer y realizar consulta. guardamos en variable.
	$consulta5ac = "SELECT * FROM conducta5basicoa";
	$resultado5ac = mysqli_query( $conexion, $consulta5ac ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	// establecer y realizar consulta. guardamos en variable.
	$consulta5bc = "SELECT * FROM conducta5basicob";
	$resultado5bc = mysqli_query( $conexion, $consulta5bc ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	// establecer y realizar consulta. guardamos en variable.
	$consulta6ac = "SELECT * FROM conducta6basicoa";
	$resultado6ac = mysqli_query( $conexion, $consulta6ac ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	// establecer y realizar consulta. guardamos en variable.
	$consulta6bc = "SELECT * FROM conducta6basicob";
	$resultado6bc = mysqli_query( $conexion, $consulta6bc ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	// establecer y realizar consulta. guardamos en variable.
	$consulta7ac = "SELECT * FROM conducta7basicoa";
	$resultado7ac = mysqli_query( $conexion, $consulta7ac ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	// establecer y realizar consulta. guardamos en variable.
	$consulta7bc = "SELECT * FROM conducta7basicob";
	$resultado7bc = mysqli_query( $conexion, $consulta7bc ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	// establecer y realizar consulta. guardamos en variable.
	$consulta8ac = "SELECT * FROM conducta8basicoa";
	$resultado8ac = mysqli_query( $conexion, $consulta8ac ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	// establecer y realizar consulta. guardamos en variable.
	$consulta8bc = "SELECT * FROM conducta8basicob";
	$resultado8bc = mysqli_query( $conexion, $consulta8bc ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	// establecer y realizar consulta. guardamos en variable.
	$consultaIac = "SELECT * FROM conducta1medioa";
	$resultadoIac = mysqli_query( $conexion, $consultaIac ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	// establecer y realizar consulta. guardamos en variable.
	$consultaIbc = "SELECT * FROM conducta1mediob";
	$resultadoIbc = mysqli_query( $conexion, $consultaIbc ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	// establecer y realizar consulta. guardamos en variable.
	$consultaIIac = "SELECT * FROM conducta2medioa";
	$resultadoIIac = mysqli_query( $conexion, $consultaIIac ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	// establecer y realizar consulta. guardamos en variable.
	$consultaIIbc = "SELECT * FROM conducta2mediob";
	$resultadoIIbc = mysqli_query( $conexion, $consultaIIbc ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	// establecer y realizar consulta. guardamos en variable.
	$consultaIIIac = "SELECT * FROM conducta3medioa";
	$resultadoIIIac = mysqli_query( $conexion, $consultaIIIac ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	// establecer y realizar consulta. guardamos en variable.
	$consultaIIIbc = "SELECT * FROM conducta3mediob";
	$resultadoIIIbc = mysqli_query( $conexion, $consultaIIIbc ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	// establecer y realizar consulta. guardamos en variable.
	$consultaIVac = "SELECT * FROM conducta4medioa";
	$resultadoIVac = mysqli_query( $conexion, $consultaIVac ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	// establecer y realizar consulta. guardamos en variable.
	$consultaIVbc = "SELECT * FROM conducta4mediob";
	$resultadoIVbc = mysqli_query( $conexion, $consultaIVbc ) or die ( "Algo ha ido mal en la consulta a la base de datos");

	
?>