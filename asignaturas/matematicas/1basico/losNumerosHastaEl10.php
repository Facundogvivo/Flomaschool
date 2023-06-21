<!doctype html>
<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>FlomaSchool | Matemática 1° basico</title>
    <meta name="description" content="FlomaSchool - Plataforma digital para establecimientos educacionales">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" href="../../../assets/images/flomas.jpg">
    <link rel="shortcut icon" href="../../../assets/images/flomas.jpg">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="../../../assets/css/cs-skin-elastic.css">
    <link rel="stylesheet" href="../../../assets/css/style.css">

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800' rel='stylesheet' type='text/css'>

    <script>
        // VARIABLES //
        var a = 0;
        var contador = 1;
        var correctos = 0;
        var incorrectos = 0;
        var numero1;
        var numero2;
        var resultado;
        var tr, td, tabla;
        var globo;
        // GUARDAR IMAGENES EN EL ARRAY //
        var cambia_imagen = new Array();
        cambia_imagen[0] = "../../../assets/images/ejercicios/globo1.png";
        cambia_imagen[1] = "../../../assets/images/ejercicios/globo2.png";
        cambia_imagen[2] = "../../../assets/images/ejercicios/globo3.png";
        cambia_imagen[3] = "../../../assets/images/ejercicios/globo4.png";
        cambia_imagen[4] = "../../../assets/images/ejercicios/globo5.png";
        cambia_imagen[5] = "../../../assets/images/ejercicios/globo6.png";
        cambia_imagen[6] = "../../../assets/images/ejercicios/globo7.png";
        cambia_imagen[7] = "../../../assets/images/ejercicios/globo8.png";
        cambia_imagen[8] = "../../../assets/images/ejercicios/globo9.png";
        //----- OPCION 1 -----//
        function nuevo() { 
            document.getElementById("num").value = aleatorio(1,10); 
        }  
        function color(boton){
            switch(boton.value){
                case "":
                    boton.value = " ";
                    boton.style.backgroundColor = "yellow";
                    a = a + 1;
                break;
                case " ":
                    boton.value = "";
                    boton.style.backgroundColor = "#2e518b";
                    a = a - 1;
                break;
            }
        }
        function activar(){ 
            document.getElementById("suma").value = a; 
        }
        function calcular() {
            numero1 =   parseInt(document.getElementById("num").value);
            numero2 =   parseInt(document.getElementById("suma").value);

            if(numero1 == numero2) {

                resultado = "Correcto";
                tabla = document.getElementById('dataTable');
                tr = tabla.insertRow(tabla.rows.length);
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  contador ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  numero1 ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  "=" ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  numero2 ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  resultado ;
                correcto();
                correctos = correctos + 1;
                document.getElementById('ejCorrecto').innerHTML = correctos;
                incorrectos = incorrectos;
                document.getElementById('ejIncorrecto').innerHTML = incorrectos;

            } else {

                resultado = "Incorrecto";
                tabla = document.getElementById('dataTable');
                tr = tabla.insertRow(tabla.rows.length);
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  contador ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  numero1 ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  "=" ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  numero2 ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  resultado ;
                incorrecto();
                incorrectos = incorrectos + 1
                document.getElementById('ejIncorrecto').innerHTML = incorrectos;
                correctos = correctos
                document.getElementById('ejCorrecto').innerHTML = correctos;

            };          

            contador++;
            a = 0;  
            borrar();
            nuevo();
            document.getElementById("ejtotales").innerHTML = incorrectos + correctos;
        }
        function borrar() {
            document.getElementById("num").value = "";
            document.getElementById("boton1").style.background = "#2e518b";     
            document.getElementById("boton2").style.background = "#2e518b";
            document.getElementById("boton3").style.background = "#2e518b";
            document.getElementById("boton4").style.background = "#2e518b";
            document.getElementById("boton5").style.background = "#2e518b";
            document.getElementById("boton6").style.background = "#2e518b";
            document.getElementById("boton7").style.background = "#2e518b";
            document.getElementById("boton8").style.background = "#2e518b";
            document.getElementById("boton9").style.background = "#2e518b";
            document.getElementById("boton10").style.background = "#2e518b";
            document.getElementById("boton1").value = "";
            document.getElementById("boton2").value = "";
            document.getElementById("boton3").value = "";
            document.getElementById("boton4").value = "";
            document.getElementById("boton5").value = "";
            document.getElementById("boton6").value = "";
            document.getElementById("boton7").value = "";
            document.getElementById("boton8").value = "";
            document.getElementById("boton9").value = "";
            document.getElementById("boton10").value = "";
        }


        //----- OPCION 2 -----//
        function cambiar(){
            globo =  aleatorio(0,8);
            document.getElementById("ia").src = cambia_imagen[globo]; 
            document.getElementById("num2").value = globo + 1;
        }
        function calcular2() {
            numero1 =   parseInt(document.getElementById("num2").value);
            numero2 =   parseInt(document.getElementById("suma2").value);
            if(numero1 == numero2) {
                resultado = "Correcto";
                tabla = document.getElementById('dataTable');
                tr = tabla.insertRow(tabla.rows.length);
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  contador ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML = numero1 ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  "=" ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  numero2 ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML = resultado ;                
                correcto(); 
                correctos = correctos + 1;
                document.getElementById('ejCorrecto').innerHTML = correctos; 
                incorrectos = incorrectos;
                document.getElementById('ejIncorrecto').innerHTML = incorrectos; 
            } else {
                resultado = "Incorrecto";
                tabla = document.getElementById('dataTable');
                tr = tabla.insertRow(tabla.rows.length);
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  contador ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML = numero1 ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  "=" ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  numero2 ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML = resultado ;
                incorrecto();  
                incorrectos = incorrectos + 1;
                document.getElementById('ejIncorrecto').innerHTML = incorrectos;
                correctos = correctos
                document.getElementById('ejCorrecto').innerHTML = correctos;
            };      
            contador++;
            cambiar();
            document.getElementById("suma2").value = "";
            document.getElementById("ejtotales").innerHTML = incorrectos + correctos;
        }
        //----- OPCION 3 -----//
        function cambiars(){
            globo =  aleatorio(0,8);
            document.getElementById("ias3").src = cambia_imagen[globo]; 
            document.getElementById("num3").value = globo + 1;
            a = globo + 1;
        }
        function cambiari(){
            globo =  aleatorio(0,8);
            document.getElementById("iai3").src = cambia_imagen[globo]; 
            document.getElementById("suma3").value = globo + 1;
            b = globo + 1;
        }
        function calcularIgual() {
            numero1 =   parseInt(document.getElementById("num3").value);
            numero2 =   parseInt(document.getElementById("suma3").value);
            if(numero1 == numero2) {
                resultado = "Correcto";
                tabla = document.getElementById('dataTable');
                tr = tabla.insertRow(tabla.rows.length);
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  contador ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML = numero1 ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  "=" ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  numero2 ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML = resultado ;                     
                correcto();
                correctos = correctos + 1;
                document.getElementById('ejCorrecto').innerHTML = correctos; 
                incorrectos = incorrectos;
                document.getElementById('ejIncorrecto').innerHTML = incorrectos; 
            } else {
                resultado = "Incorrecto";
                tabla = document.getElementById('dataTable');
                tr = tabla.insertRow(tabla.rows.length);
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  contador ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML = numero1 ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  "=" ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  numero2 ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML = resultado ;
                incorrecto();   
                incorrectos = incorrectos + 1;
                document.getElementById('ejIncorrecto').innerHTML = incorrectos;  
                correctos = correctos;
                document.getElementById('ejCorrecto').innerHTML = correctos; 
            };     
            contador++;
            cambiari();
            cambiars(); 
            document.getElementById("ejtotales").innerHTML = incorrectos + correctos;
        }
        function calcularMayorQue() {
            numero1 =   parseInt(document.getElementById("num3").value);
            numero2 =   parseInt(document.getElementById("suma3").value);
            if(numero1 > numero2) {
                resultado = "Correcto";
                tabla = document.getElementById('dataTable');
                tr = tabla.insertRow(tabla.rows.length);
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  contador ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML = numero1 ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  ">" ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  numero2 ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML = resultado ;             
                correcto();  
                correctos = correctos + 1;
                document.getElementById('ejCorrecto').innerHTML = correctos; 
                incorrectos = incorrectos;
                document.getElementById('ejIncorrecto').innerHTML = incorrectos; 
            } else {
                resultado = "Incorrecto";
                tabla = document.getElementById('dataTable');
                tr = tabla.insertRow(tabla.rows.length);
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  contador ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML = numero1 ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  ">" ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  numero2 ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML = resultado ;
                incorrecto();
                incorrectos = incorrectos + 1;
                document.getElementById('ejIncorrecto').innerHTML = incorrectos;  
                correctos = correctos;
                document.getElementById('ejCorrecto').innerHTML = correctos;
            };    
            contador++;
            cambiari();
            cambiars();  
            document.getElementById("ejtotales").innerHTML = incorrectos + correctos;
        }
        function calcularMenorQue() {
            numero1 =   parseInt(document.getElementById("num3").value);
            numero2 =   parseInt(document.getElementById("suma3").value);
            if(numero1 < numero2) {
                resultado = "Correcto";
                tabla = document.getElementById('dataTable');
                tr = tabla.insertRow(tabla.rows.length);
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  contador ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML = numero1 ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  "<" ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  numero2 ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML = resultado ;              
                correcto(); 
                correctos = correctos + 1;
                document.getElementById('ejCorrecto').innerHTML = correctos; 
                incorrectos = incorrectos;
                document.getElementById('ejIncorrecto').innerHTML = incorrectos; 
            } else {
                resultado = "Incorrecto";
                tabla = document.getElementById('dataTable');
                tr = tabla.insertRow(tabla.rows.length);
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  contador ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML = numero1 ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  "<" ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML =  numero2 ;
                td = tr.insertCell(tr.cells.length);
                td.innerHTML = resultado ;
                incorrecto();
                incorrectos = incorrectos + 1;
                document.getElementById('ejIncorrecto').innerHTML = incorrectos;  
                correctos = correctos;
                document.getElementById('ejCorrecto').innerHTML = correctos;
            };     
            contador++;
            cambiari();
            cambiars(); 
            document.getElementById("ejtotales").innerHTML = incorrectos + correctos;
        }
    </script>
</head>

<body>
    <div clas="estadoCorrecto" id="estadoCorrecto" style="display: none;">
        <img src="../../../assets/images/felicitaciones.gif" width="100%" style="border-radius: 10px;">
    </div>
    <div clas="estadoIncorrecto" id="estadoIncorrecto" style="display: none;">
        <img src="../../../assets/images/Intentalo.gif" width="100%" style="border-radius: 10px;">
    </div>
    <!-- Left Panel -->
    <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="../../../administrador.php"><i class="menu-icon fa fa-laptop"></i>&#127968; FlomaSchool </a>
                    </li>
                    <li class="menu-title" hidden id="tituloMenuCasino">Casino</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown" hidden id="menuCasino">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bookmark"></i> &#127860; Casino</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="../../../casino/calendarioCasino.php">&#127869;&#65039; Calendarios</a></li>
                        </ul>
                    </li>
                    <li class="menu-title" hidden id="tituloMenuExtracurriculares">Extracurriculares</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown" hidden id="menuExtracurriculares">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bookmark"></i> &#127894;&#65039; Extracurriculares</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="../../../otros/talleres.php">&#128994; Talleres</a></li>
                            <li><a href="../../../otros/scout.php">&#128993; Scout</a></li>
                        </ul>
                    </li>
                    <li class="menu-title" hidden id="tituloMenuCursos">Cursos</li><!-- /.menu-title -->
                    <li class="menu-item-has-children dropdown" hidden id="menu1basicoa">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bookmark"></i> &#10004;&#65039; 1° básico A</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="../../asignaturas1basicoa.php">&#127827; Asignatura</a></li>
                            <li><a href="../../../asistencias/asistencia1basicoa.php">&#127817; Asistencias</a></li>
                            <li><a href="../../../calificaciones/calificaciones1basicoa.php">&#127824; Calificaciones</a></li>
                            <li><a href="../../../conductas/conducta1basicoa.php">&#127822; Conductas</a></li>
                            <li><a href="../../../enfermeria/enfermeria1basicoa.php">&#129657; Enfermería</a></li>
                            <li><a href="../../../horarios/horario1basicoa.php">&#127816; Horario</a></li>
                            <li><a href="../../../listas/lista1basicoa.php">&#127815; Lista</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown" hidden id="menu1basicob">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bookmark"></i> &#10004;&#65039; 1° básico B</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="../../asignaturas1basicob.php">&#127827; Asignatura</a></li>
                            <li><a href="../../../asistencias/asistencia1basicob.php">&#127817; Asistencias</a></li>
                            <li><a href="../../../calificaciones/calificaciones1basicob.php">&#127824; Calificaciones</a></li>
                            <li><a href="../../../conductas/conducta1basicob.php">&#127822; Conductas</a></li>
                            <li><a href="../../../enfermeria/enfermeria1basicob.php">&#129657; Enfermería</a></li>
                            <li><a href="../../../horarios/horario1basicob.php">&#127816; Horario</a></li>
                            <li><a href="../../../listas/lista1basicob.php">&#127815; Lista</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown" hidden id="menu2basicoa">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bookmark"></i> &#10004;&#65039; 2° básico A</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="../../asignaturas2basicoa.php">&#127827; Asignatura</a></li>
                            <li><a href="../../../asistencias/asistencia2basicoa.php">&#127817; Asistencias</a></li>
                            <li><a href="../../../calificaciones/calificaciones2basicoa.php">&#127824; Calificaciones</a></li>
                            <li><a href="../../../conductas/conducta2basicoa.php">&#127822; Conductas</a></li>
                            <li><a href="../../../enfermeria/enfermeria2basicoa.php">&#129657; Enfermería</a></li>
                            <li><a href="../../../horarios/horario2basicoa.php">&#127816; Horario</a></li>
                            <li><a href="../../../listas/lista2basicoa.php">&#127815; Lista</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown" hidden id="menu2basicob">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bookmark"></i> &#10004;&#65039; 2° básico B</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="../../asignaturas2basicob.php">&#127827; Asignatura</a></li>
                            <li><a href="../../../asistencias/asistencia2basicob.php">&#127817; Asistencias</a></li>
                            <li><a href="../../../calificaciones/calificaciones2basicob.php">&#127824; Calificaciones</a></li>
                            <li><a href="../../../conductas/conducta2basicob.php">&#127822; Conductas</a></li>
                            <li><a href="../../../enfermeria/enfermeria2basicob.php">&#129657; Enfermería</a></li>
                            <li><a href="../../../horarios/horario2basicob.php">&#127816; Horario</a></li>
                            <li><a href="../../../listas/lista2basicob.php">&#127815; Lista</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown" hidden id="menu3basicoa">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bookmark"></i> &#10004;&#65039; 3° básico A</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="../../asignaturas3basicoa.php">&#127827; Asignatura</a></li>
                            <li><a href="../../../asistencias/asistencia3basicoa.php">&#127817; Asistencias</a></li>
                            <li><a href="../../../calificaciones/calificaciones3basicoa.php">&#127824; Calificaciones</a></li>
                            <li><a href="../../../conductas/conducta3basicoa.php">&#127822; Conductas</a></li>
                            <li><a href="../../../enfermeria/enfermeria3basicoa.php">&#129657; Enfermería</a></li>
                            <li><a href="../../../horarios/horario3basicoa.php">&#127816; Horario</a></li>
                            <li><a href="../../../listas/lista3basicoa.php">&#127815; Lista</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown" hidden id="menu3basicob">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bookmark"></i> &#10004;&#65039; 3° básico B</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="../../asignaturas3basicob.php">&#127827; Asignatura</a></li>
                            <li><a href="../../../asistencias/asistencia3basicob.php">&#127817; Asistencias</a></li>
                            <li><a href="../../../calificaciones/calificaciones3basicob.php">&#127824; Calificaciones</a></li>
                            <li><a href="../../../conductas/conducta3basicob.php">&#127822; Conductas</a></li>
                            <li><a href="../../../enfermeria/enfermeria3basicob.php">&#129657; Enfermería</a></li>
                            <li><a href="../../../horarios/horario3basicob.php">&#127816; Horario</a></li>
                            <li><a href="../../../listas/lista3basicob.php">&#127815; Lista</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown" hidden id="menu4basicoa">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bookmark"></i> &#10004;&#65039; 4° básico A</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="../../asignaturas4basicoa.php">&#127827; Asignatura</a></li>
                            <li><a href="../../../asistencias/asistencia4basicoa.php">&#127817; Asistencias</a></li>
                            <li><a href="../../../calificaciones/calificaciones4basicoa.php">&#127824; Calificaciones</a></li>
                            <li><a href="../../../conductas/conducta4basicoa.php">&#127822; Conductas</a></li>
                            <li><a href="../../../enfermeria/enfermeria4basicoa.php">&#129657; Enfermería</a></li>
                            <li><a href="../../../horarios/horario4basicoa.php">&#127816; Horario</a></li>
                            <li><a href="../../../listas/lista4basicoa.php">&#127815; Lista</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown" hidden id="menu4basicob">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bookmark"></i> &#10004;&#65039; 4° básico B</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="../../asignaturas4basicob.php">&#127827; Asignatura</a></li>
                            <li><a href="../../../asistencias/asistencia4basicob.php">&#127817; Asistencias</a></li>
                            <li><a href="../../../calificaciones/calificaciones4basicob.php">&#127824; Calificaciones</a></li>
                            <li><a href="../../../conductas/conducta4basicob.php">&#127822; Conductas</a></li>
                            <li><a href="../../../enfermeria/enfermeria4basicob.php">&#129657; Enfermería</a></li>
                            <li><a href="../../../horarios/horario4basicob.php">&#127816; Horario</a></li>
                            <li><a href="../../../listas/lista4basicob.php">&#127815; Lista</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown" hidden id="menu5basicoa">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bookmark"></i> &#10004;&#65039; 5° básico A</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="../../asignaturas5basicoa.php">&#127827; Asignatura</a></li>
                            <li><a href="../../../asistencias/asistencia5basicoa.php">&#127817; Asistencias</a></li>
                            <li><a href="../../../calificaciones/calificaciones5basicoa.php">&#127824; Calificaciones</a></li>
                            <li><a href="../../../conductas/conducta5basicoa.php">&#127822; Conductas</a></li>
                            <li><a href="../../../enfermeria/enfermeria5basicoa.php">&#129657; Enfermería</a></li>
                            <li><a href="../../../horarios/horario5basicoa.php">&#127816; Horario</a></li>
                            <li><a href="../../../listas/lista5basicoa.php">&#127815; Lista</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown" hidden id="menu5basicob">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bookmark"></i> &#10004;&#65039; 5° básico B</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="../../asignaturas5basicob.php">&#127827; Asignatura</a></li>
                            <li><a href="../../../asistencias/asistencia5basicob.php">&#127817; Asistencias</a></li>
                            <li><a href="../../../calificaciones/calificaciones5basicob.php">&#127824; Calificaciones</a></li>
                            <li><a href="../../../conductas/conducta5basicob.php">&#127822; Conductas</a></li>
                            <li><a href="../../../enfermeria/enfermeria5basicob.php">&#129657; Enfermería</a></li>
                            <li><a href="../../../horarios/horario5basicob.php">&#127816; Horario</a></li>
                            <li><a href="../../../listas/lista5basicob.php">&#127815; Lista</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown" hidden id="menu6basicoa">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bookmark"></i> &#10004;&#65039; 6° básico A</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="../../asignaturas6basicoa.php">&#127827; Asignatura</a></li>
                            <li><a href="../../../asistencias/asistencia6basicoa.php">&#127817; Asistencias</a></li>
                            <li><a href="../../../calificaciones/calificaciones6basicoa.php">&#127824; Calificaciones</a></li>
                            <li><a href="../../../conductas/conducta6basicoa.php">&#127822; Conductas</a></li>
                            <li><a href="../../../enfermeria/enfermeria6basicoa.php">&#129657; Enfermería</a></li>
                            <li><a href="../../../horarios/horario6basicoa.php">&#127816; Horario</a></li>
                            <li><a href="../../../listas/lista6basicoa.php">&#127815; Lista</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown" hidden id="menu6basicob">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bookmark"></i> &#10004;&#65039; 6° básico B</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="../../asignaturas6basicob.php">&#127827; Asignatura</a></li>
                            <li><a href="../../../asistencias/asistencia6basicob.php">&#127817; Asistencias</a></li>
                            <li><a href="../../../calificaciones/calificaciones6basicob.php">&#127824; Calificaciones</a></li>
                            <li><a href="../../../conductas/conducta6basicob.php">&#127822; Conductas</a></li>
                            <li><a href="../../../enfermeria/enfermeria6basicob.php">&#129657; Enfermería</a></li>
                            <li><a href="../../../horarios/horario6basicob.php">&#127816; Horario</a></li>
                            <li><a href="../../../listas/lista6basicob.php">&#127815; Lista</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown" hidden id="menu7basicoa">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bookmark"></i> &#10004;&#65039; 7° básico A</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="../../asignaturas7basicoa.php">&#127827; Asignatura</a></li>
                            <li><a href="../../../asistencias/asistencia7basicoa.php">&#127817; Asistencias</a></li>
                            <li><a href="../../../calificaciones/calificaciones7basicoa.php">&#127824; Calificaciones</a></li>
                            <li><a href="../../../conductas/conducta7basicoaphp">&#127822; Conductas</a></li>
                            <li><a href="../../../enfermeria/enfermeria7basicoa.php">&#129657; Enfermería</a></li>
                            <li><a href="../../../horarios/horario7basicoa.php">&#127816; Horario</a></li>
                            <li><a href="../../../listas/lista7basicoa.php">&#127815; Lista</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown" hidden id="menu7basicob">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bookmark"></i> &#10004;&#65039; 7° básico B</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="../../asignaturas7basicob.php">&#127827; Asignatura</a></li>
                            <li><a href="../../../asistencias/asistencia7basicob.php">&#127817; Asistencias</a></li>
                            <li><a href="../../../calificaciones/calificaciones7basicob.php">&#127824; Calificaciones</a></li>
                            <li><a href="../../../conductas/conducta7basicob.php">&#127822; Conductas</a></li>
                            <li><a href="../../../enfermeria/enfermeria7basicob.php">&#129657; Enfermería</a></li>
                            <li><a href="../../../horarios/horario7basicob.php">&#127816; Horario</a></li>
                            <li><a href="../../../listas/lista7basicob.php">&#127815; Lista</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown" hidden id="menu8basicoa">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bookmark"></i> &#10004;&#65039; 8° básico A</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="../../asignaturas8basicoa.php">&#127827; Asignatura</a></li>
                            <li><a href="../../../asistencias/asistencia8basicoa.php">&#127817; Asistencias</a></li>
                            <li><a href="../../../calificaciones/calificaciones8basicoa.php">&#127824; Calificaciones</a></li>
                            <li><a href="../../../conductas/conducta8basicoa.php">&#127822; Conductas</a></li>
                            <li><a href="../../../enfermeria/enfermeria8basicoa.php">&#129657; Enfermería</a></li>
                            <li><a href="../../../horarios/horario8basicoa.php">&#127816; Horario</a></li>
                            <li><a href="../../../listas/lista8basicoa.php">&#127815; Lista</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown" hidden id="menu8basicob">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bookmark"></i> &#10004;&#65039; 8° básico B</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="../../asignaturas8basicob.php">&#127827; Asignatura</a></li>
                            <li><a href="../../../asistencias/asistencia8basicob.php">&#127817; Asistencias</a></li>
                            <li><a href="../../../calificaciones/calificaciones8basicob.php">&#127824; Calificaciones</a></li>
                            <li><a href="../../../conductas/conducta8basicob.php">&#127822; Conductas</a></li>
                            <li><a href="../../../enfermeria/enfermeria8basicob.php">&#129657; Enfermería</a></li>
                            <li><a href="../../../horarios/horario8basicob.php">&#127816; Horario</a></li>
                            <li><a href="../../../listas/lista8basicob.php">&#127815; Lista</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown" hidden id="menu1medioa">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bookmark"></i> &#10004;&#65039; I Medio A</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="../../asignaturas1medioa.php">&#127827; Asignatura</a></li>
                            <li><a href="../../../asistencias/asistencia1medioa.php">&#127817; Asistencias</a></li>
                            <li><a href="../../../calificaciones/calificaciones1medioa.php">&#127824; Calificaciones</a></li>
                            <li><a href="../../../conductas/conducta1medioa.php">&#127822; Conductas</a></li>
                            <li><a href="../../../enfermeria/enfermeria1medioa.php">&#129657; Enfermería</a></li>
                            <li><a href="../../../horarios/horario1medioa.php">&#127816; Horario</a></li>
                            <li><a href="../../../listas/lista1medioa.php">&#127815; Lista</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown" hidden id="menu1mediob">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bookmark"></i> &#10004;&#65039; I Medio B</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="../../asignaturas1mediob.php">&#127827; Asignatura</a></li>
                            <li><a href="../../../asistencias/asistencia1mediob.php">&#127817; Asistencias</a></li>
                            <li><a href="../../../calificaciones/calificaciones1mediob.php">&#127824; Calificaciones</a></li>
                            <li><a href="../../../conductas/conducta1mediob.php">&#127822; Conductas</a></li>
                            <li><a href="../../../enfermeria/enfermeria1mediob.php">&#129657; Enfermería</a></li>
                            <li><a href="../../../horarios/horario1mediob.php">&#127816; Horario</a></li>
                            <li><a href="../../../listas/lista1mediob.php">&#127815; Lista</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown" hidden id="menu2medioa">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bookmark"></i> &#10004;&#65039; II Medio A</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="../../asignaturas2medioa.php">&#127827; Asignatura</a></li>
                            <li><a href="../../../asistencias/asistencia2medioa.php">&#127817; Asistencias</a></li>
                            <li><a href="../../../calificaciones/calificaciones2medioa.php">&#127824; Calificaciones</a></li>
                            <li><a href="../../../conductas/conducta2medioa.php">&#127822; Conductas</a></li>
                            <li><a href="../../../enfermeria/enfermeria2medioa.php">&#129657; Enfermería</a></li>
                            <li><a href="../../../horarios/horario2medioa.php">&#127816; Horario</a></li>
                            <li><a href="../../../listas/lista2medioa.php">&#127815; Lista</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown" hidden id="menu2mediob">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bookmark"></i> &#10004;&#65039; II Medio B</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="../../asignaturas2mediob.php">&#127827; Asignatura</a></li>
                            <li><a href="../../../asistencias/asistencia2mediob.php">&#127817; Asistencias</a></li>
                            <li><a href="../../../calificaciones/calificaciones2mediob.php">&#127824; Calificaciones</a></li>
                            <li><a href="../../../conductas/conducta2mediob.php">&#127822; Conductas</a></li>
                            <li><a href="../../../enfermeria/enfermeria2mediob.php">&#129657; Enfermería</a></li>
                            <li><a href="../../../horarios/horario2mediob.php">&#127816; Horario</a></li>
                            <li><a href="../../../listas/lista2mediob.php">&#127815; Lista</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown" hidden id="menu3medioa">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bookmark"></i> &#10004;&#65039; III Medio A</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="../../asignaturas3medioa.php">&#127827; Asignatura</a></li>
                            <li><a href="../../../asistencias/asistencia3medioa.php">&#127817; Asistencias</a></li>
                            <li><a href="../../../calificaciones/calificaciones3medioa.php">&#127824; Calificaciones</a></li>
                            <li><a href="../../../conductas/conducta3medioa.php">&#127822; Conductas</a></li>
                            <li><a href="../../../enfermeria/enfermeria3medioa.php">&#129657; Enfermería</a></li>
                            <li><a href="../../../horarios/horario3medioa.php">&#127816; Horario</a></li>
                            <li><a href="../../../listas/lista3medioa.php">&#127815; Lista</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown" hidden id="menu3mediob">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bookmark"></i> &#10004;&#65039; III Medio B</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="../../asignaturas3mediob.php">&#127827; Asignatura</a></li>
                            <li><a href="../../../asistencias/asistencia3mediob.php">&#127817; Asistencias</a></li>
                            <li><a href="../../../calificaciones/calificaciones3mediob.php">&#127824; Calificaciones</a></li>
                            <li><a href="../../../conductas/conducta3mediob.php">&#127822; Conductas</a></li>
                            <li><a href="../../../enfermeria/enfermeria3mediob.php">&#129657; Enfermería</a></li>
                            <li><a href="../../../horarios/horario3mediob.php">&#127816; Horario</a></li>
                            <li><a href="../../../listas/lista3mediob.php">&#127815; Lista</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown" hidden id="menu4medioa">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bookmark"></i> &#10004;&#65039; IV Medio A</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="../../asignaturas4medioa.php">&#127827; Asignatura</a></li>
                            <li><a href="../../../asistencias/asistencia4medioa.php">&#127817; Asistencias</a></li>
                            <li><a href="../../../calificaciones/calificaciones4medioa.php">&#127824; Calificaciones</a></li>
                            <li><a href="../../../conductas/conducta4medioa.php">&#127822; Conductas</a></li>
                            <li><a href="../../../enfermeria/enfermeria4medioa.php">&#129657; Enfermería</a></li>
                            <li><a href="../../../horarios/horario4medioa.php">&#127816; Horario</a></li>
                            <li><a href="../../../listas/lista4medioa.php">&#127815; Lista</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children dropdown" hidden id="menu4mediob">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-bookmark"></i> &#10004;&#65039; IV Medio B</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><a href="../../asignaturas4mediob.php">&#127827; Asignatura</a></li>
                            <li><a href="../../../asistencias/asistencia4mediob.php">&#127817; Asistencias</a></li>
                            <li><a href="../../../calificaciones/calificaciones4mediob.php">&#127824; Calificaciones</a></li>
                            <li><a href="../../../conductas/conducta4mediob.php">&#127822; Conductas</a></li>
                            <li><a href="../../../enfermeria/enfermeria4mediob.php">&#129657; Enfermería</a></li>
                            <li><a href="../../../horarios/horario4mediob.php">&#127816; Horario</a></li>
                            <li><a href="../../../listas/lista4mediob.php">&#127815; Lista</a></li>
                        </ul>
                    </li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->
    <!-- Right Panel -->
    <div id="right-panel" class="right-panel">
        <!-- Header-->
        <header id="header" class="header">
            <div class="top-left">
                <div class="navbar-header">
                    <a class="navbar-brand" href="./"><img src="../../../assets/images/flomas.jpg" alt="Logo" style="height: 40px;"></a>
                    <a class="navbar-brand hidden" href="./"><img src="../../../assets/images/flomas.jpg" alt="Logo" style="height: 40px;">
                    <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                </div>
            </div>
            <div class="top-right">
                <div class="header-menu">

                    <div class="user-area dropdown float-right">
                    <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            
                    <?php

                        include("../../../conexion.php");

                        // Bucle while que recorre cada registro y muestra cada campo en la tabla.
                        while ($columna = mysqli_fetch_array( $resultado1 ))
                        {
                            $usuarioActivo = $columna['rut'];
                            
                        }
                        while ($columna1 = mysqli_fetch_array( $resultado ))
                        {
                            if($usuarioActivo == $columna1['rut']){

                                echo $columna1['nombre'] . " " . $columna1['apellido'] . " ";

                            }

                        }
                        ?>

                            <img class="user-avatar rounded-circle" src="../../../assets/images/admin.jpg" alt="User Avatar" style="margin-left: 10px;">
                        </a>

                        <div class="user-menu dropdown-menu">
                            <a class="nav-link" href="../../../perfil.php"><i class="fa fa- user"></i>Mi perfil</a>

                            <a class="nav-link" href="../../../index.php"><i class="fa fa-power -off"></i>Salir</a>
                        </div>
                    </div>

                </div>
            </div>
        </header>
        <!-- /#header -->
        <!-- Content -->
        <div class="content">
            <div class="animated fadeIn">
                <div class="row">
                    <div class="col-lg-9 col-md-6">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="stat-widget-five">
                                            <div class="stat-icon dib flat-color-1">
                                                <i class="pe-7s-check"></i>
                                            </div>
                                            <div class="stat-content">
                                                <div class="text-left dib">
                                                    <div class="stat-text" id="ejCorrecto">0</div>
                                                    <div class="stat-heading">Correctas</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="stat-widget-five">
                                            <div class="stat-icon dib flat-color-2">
                                                <i class="pe-7s-close-circle"></i>
                                            </div>
                                            <div class="stat-content">
                                                <div class="text-left dib">
                                                    <div class="stat-text" id="ejIncorrecto">0</div>
                                                    <div class="stat-heading">Incorrectas</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="stat-widget-five">
                                            <div class="stat-icon dib flat-color-3">
                                                <i class="pe-7s-less"></i>
                                            </div>
                                            <div class="stat-content">
                                                <div class="text-left dib">
                                                    <div class="stat-text" id="ejtotales">0</div>
                                                    <div class="stat-heading">Total</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>.: Los número hasta el 10 :.</h4>
                                </div>
                                <div class="card-body">
                                    <div class="default-tab">
                                        <nav>
                                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                                <a class="nav-item nav-link active" id="nav-uno-tab" data-toggle="tab" href="#nav-uno" role="tab" aria-controls="nav-uno" aria-selected="true">Lección 1</a>
                                                <a class="nav-item nav-link" id="nav-dos-tab" data-toggle="tab" href="#nav-dos" role="tab" aria-controls="nav-dos" aria-selected="false">Lección 2</a>
                                                <a class="nav-item nav-link" id="nav-tres-tab" data-toggle="tab" href="#nav-tres" role="tab" aria-controls="nav-tres" aria-selected="false">Lección 3</a>
                                            </div>
                                        </nav>
                                        <div class="tab-content pl-3 pt-2" id="nav-tabContent">
                                            <div class="tab-pane fade show active" id="nav-uno" role="tabpanel" aria-labelledby="nav-uno-tab">
                                                <p>Debe pintar la cantidad mostrada en el cuadro.</p>
                                                <table border="0" style="margin: auto;text-align:center;">
                                                    <tr>
                                                        <td colspan="5" style="padding: 10px;">
                                                            <input type="button" class="boton" onclick="nuevo();" value="Nuevo">    
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5" style="padding: 10px;">
                                                            <input type="text" class="aleatorio" id="num">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px;">
                                                            <input type="button" class="casilla" onclick="color(this), activar()" id="boton1">
                                                        </td>
                                                        <td style="padding: 10px;">
                                                            <input type="button" class="casilla" onclick="color(this), activar()" id="boton2">
                                                        </td>
                                                        <td style="padding: 10px;">
                                                            <input type="button" class="casilla" onclick="color(this), activar()" id="boton3">
                                                        </td>
                                                        <td style="padding: 10px;">
                                                            <input type="button" class="casilla" onclick="color(this), activar()" id="boton4">
                                                        </td>
                                                        <td style="padding: 10px;">
                                                            <input type="button" class="casilla" onclick="color(this), activar()" id="boton5">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding: 10px;">
                                                            <input type="button" class="casilla" onclick="color(this), activar()" id="boton6">
                                                        </td>
                                                        <td style="padding: 10px;">
                                                            <input type="button" class="casilla" onclick="color(this), activar()" id="boton7">
                                                        </td>
                                                        <td style="padding: 10px;">
                                                            <input type="button" class="casilla" onclick="color(this), activar()" id="boton8">
                                                        </td>
                                                        <td style="padding: 10px;">
                                                            <input type="button" class="casilla" onclick="color(this), activar()" id="boton9">
                                                        </td>
                                                        <td style="padding: 10px;">
                                                            <input type="button" class="casilla" onclick="color(this), activar()" id="boton10">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="5" style="padding: 10px;">
                                                            <input type="text" id="suma" style="visibility: hidden;"><br>
                                                            <input type="button" class="boton" value="Calcular" onclick="calcular();">
                                                        </td>
                                                    </tr>
                                                </table>
                                            </div>
                                            <div class="tab-pane fade" id="nav-dos" role="tabpanel" aria-labelledby="nav-dos-tab">
                                                <p>Debe escribir en el cuadro la cantidad de globos mostrada.</p>
                                                <table border="0" style="margin: auto;text-align:center;">
                                                    <tr>
                                                        <td colspan="2" style="padding: 10px;">
                                                            <input type="button" class="boton" onclick="cambiar();" value="Nuevo">
                                                        </td>
                                                    <tr>
                                                        <td style="width: 85%;">
                                                            <img src="../../../assets/images/cuedis.png" id="ia" height="100">
                                                        </td>
                                                        <td style="width: 15%;">
                                                            <input type="text" class="aleatorio casilla" id="suma2" height="100" width="100">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" style="padding: 10px;">
                                                            <input type="button" class="boton" value="Calcular" onclick="calcular2();">
                                                        </td>
                                                    </tr>
                                                </table>
                                                <input type="text" id="num2"style="visibility: hidden;">
                                            </div>
                                            <div class="tab-pane fade" id="nav-tres" role="tabpanel" aria-labelledby="nav-tres-tab">
                                                <p>Debe seleccionar el símbolo ">" o "<" o "=" según corresponda.</p>
                                                <table border="0" style="margin: auto;text-align:center;width: 100%;">
                                                    <tr>
                                                        <td style="width: 100%; padding: 10px;" colspan="3">
                                                            <input type="button" class="boton" onclick="cambiars(); cambiari();" value="Nuevo">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 100%;" colspan="3">
                                                            <img src="../../../assets/images/cuedis.png" id="ias3" height="100">
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td align="right">
                                                            <span style="font-size: 2em">↑</span>
                                                            <input type="text" class="aleatorio" id="num3" height="100" width="100">
                                                        </td>
                                                        <td>
                                                            <input type="button" class="casilla" value="<" onclick="calcularMenorQue();" id="menorQue" style="font-size: 2em">
                                                            <input type="button" class="casilla" value=">" onclick="calcularMayorQue();" id="mayorQue" style="font-size: 2em">
                                                            <input type="button" class="casilla" value="=" onclick="calcularIgual();" id="igual" style="font-size: 2em">
                                                        </td>
                                                        <td align="left">
                                                            <input type="text" class="aleatorio" id="suma3" height="100" width="100">
                                                            <span style="font-size: 2em">↓</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="width: 100%; padding: 10px;" colspan="3">
                                                            <img src="../../../assets/images/cuedis.png" id="iai3" height="100">
                                                        </td>
                                                    </tr>
                                                </table>   
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Resultado</h4>
                                </div>
                                <div class="card-body">
                                        <p>En este cuadro se puede ver los ejercicios realizados.</p>
                                        <table  border="0" style="width: 100%; text-align:center; margin: auto;overflow: auto;" id="dataTable">
                                            <tr>
                                                <td colspan="5"><hr></td>
                                            </tr>
                                            <tr>
                                                <td>#</td>
                                                <td>Número 1</td>
                                                <td>Símbolo</td>
                                                <td>Número 2</td>
                                                <td>Resultado</td>
                                            </tr>
                                            <tr>
                                                <td colspan="5"><hr></td>
                                            </tr>
                                        </table>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="col-lg-12 col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <strong>Matemáticas 1° básico</strong>
                                </div>
                                <div class="card-body" style="text-align: center;">
                                    <table class="table">
                                        <tr>
                                            <td>Los números hasta el 10<br><a href="losNumerosHastaEl10.php"><button class="badge badge-warning" style="border: none;">&#9992;&#65039;</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>Componer y descomponer números<br><a href="componerDescomponerNumeros.php"><button class="badge badge-warning" style="border: none;">&#9992;&#65039;</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>Números ordinales<br><a href="numerosOrdinales.php"><button class="badge badge-warning" style="border: none;">&#9992;&#65039;</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>Sumar<br><a href="sumar.php"><button class="badge badge-warning" style="border: none;">&#9992;&#65039;</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>Restar<br><a href="restar.php"><button class="badge badge-warning" style="border: none;">&#9992;&#65039;</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>Figuras 2D y 3D<br><a href="figuras2D3D.php"><button class="badge badge-warning" style="border: none;">&#9992;&#65039;</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>Números mayores a 10<br><a href="numerosMayoresA10.php"><button class="badge badge-warning" style="border: none;">&#9992;&#65039;</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>Patrones<br><a href="patrones.php"><button class="badge badge-warning" style="border: none;">&#9992;&#65039;</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>Contar hasta 100<br><a href="contarHastaEl100.php"><button class="badge badge-warning" style="border: none;">&#9992;&#65039;</button></a></td>
                                        </tr>
                                        <tr>
                                            <td>Longitud<br><a href="longitud.php"><button class="badge badge-warning" style="border: none;">&#9992;&#65039;</button></a></td>
                                        </tr>
                                        </table>
                                </div>
                            </div><!-- /# card -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content -->
        <div class="clearfix"></div>
        <!-- Footer -->
        <footer class="site-footer">
            <div class="footer-inner bg-white">
                <div class="row">
                    <div class="col-sm-6">
                        Copyright &copy; 2023 Facundo Gonzalez Vivo
                    </div>
                    <div class="col-sm-6 text-right">
                        Diseñado por Facundo Gonzalez Vivo
                    </div>
                </div>
            </div>
        </footer>
        <!-- /.site-footer -->
    </div>
    <!-- /#right-panel -->

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
    <script src="../../../assets/js/main.js"></script>
    <script src="../../../assets/js/app.js"></script>
    <script src="../../../assets/js/listaUsuarios.js"></script>

    <!--  Chart js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.7.3/dist/Chart.bundle.min.js"></script>

    <!--Chartist Chart-->
    <script src="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartist-plugin-legend@0.6.2/chartist-plugin-legend.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.flot@0.8.3/jquery.flot.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-pie@1.0.0/src/jquery.flot.pie.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/flot-spline@0.0.1/js/jquery.flot.spline.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/simpleweather@3.1.0/jquery.simpleWeather.min.js"></script>
    <script src="../../../assets/js/init/weather-init.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/moment@2.22.2/moment.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.js"></script>
    <script src="../../../assets/js/init/fullcalendar-init.js"></script>

       <!-- Scripts -->
       <script src="../../../assets/js/main.js"></script>
   
   <?php

       include("../../../verificacion.php");

   ?>
   

</body>
</html>
