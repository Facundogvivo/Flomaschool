<?php
                    
    include("conexion.php");

    // Bucle while que recorre cada registro y muestra cada campo en la tabla.
    while ($columna = mysqli_fetch_array( $resultado1 ))
    {
        $usuarioActivo = $columna['rut'];
        
    }
    while ($columna1 = mysqli_fetch_array( $resultado ))
    {
        if($usuarioActivo == $columna1['rut']){

            $cursoActivo = $columna1['curso'];
            $tipo =  $columna1['tipo'];
            $b1a   = $columna1["1basicoa"];
            $b1b   = $columna1["1basicob"];
            $b2a   = $columna1["2basicoa"];
            $b2b   = $columna1["2basicob"];
            $b3a   = $columna1["3basicoa"];
            $b3b   = $columna1["3basicob"];
            $b4a   = $columna1["4basicoa"];
            $b4b   = $columna1["4basicob"];
            $b5a   = $columna1["5basicoa"];
            $b5b   = $columna1["5basicob"];
            $b6a   = $columna1["6basicoa"];
            $b6b   = $columna1["6basicob"];
            $b7a   = $columna1["7basicoa"];
            $b7b   = $columna1["7basicob"];
            $b8a   = $columna1["8basicoa"];
            $b8b   = $columna1["8basicob"];
            $m1a   = $columna1["1medioa"];
            $m1b   = $columna1["1mediob"];
            $m2a   = $columna1["2medioa"];
            $m2b   = $columna1["2mediob"];
            $m3a   = $columna1["3medioa"];
            $m3b   = $columna1["3mediob"];
            $m4a   = $columna1["4medioa"];
            $m4b   = $columna1["4mediob"];
        }

    }

    echo " 
    <script>

        document.getElementById('tituloMenuCasino').removeAttribute('hidden');
        document.getElementById('menuCasino').removeAttribute('hidden');
        
        document.getElementById('tituloMenuExtracurriculares').removeAttribute('hidden');
        document.getElementById('menuExtracurriculares').removeAttribute('hidden');
        
        document.getElementById('tituloMenuCursos').removeAttribute('hidden');
        
    </script>";

    // para administrador
    if($tipo == "Administrador") {

        echo "<script>document.getElementById('agregar').removeAttribute('hidden');</script>";
        
        echo " 
        <script>
            
            document.getElementById('menu1basicoa').removeAttribute('hidden');
            document.getElementById('menu1basicob').removeAttribute('hidden');
            document.getElementById('menu2basicoa').removeAttribute('hidden');
            document.getElementById('menu2basicob').removeAttribute('hidden');
            document.getElementById('menu3basicoa').removeAttribute('hidden');
            document.getElementById('menu3basicob').removeAttribute('hidden');
            document.getElementById('menu4basicoa').removeAttribute('hidden');
            document.getElementById('menu4basicob').removeAttribute('hidden');
            document.getElementById('menu5basicoa').removeAttribute('hidden');
            document.getElementById('menu5basicob').removeAttribute('hidden');
            document.getElementById('menu6basicoa').removeAttribute('hidden');
            document.getElementById('menu6basicob').removeAttribute('hidden');
            document.getElementById('menu7basicoa').removeAttribute('hidden');
            document.getElementById('menu7basicob').removeAttribute('hidden');
            document.getElementById('menu8basicoa').removeAttribute('hidden');
            document.getElementById('menu8basicob').removeAttribute('hidden');
            document.getElementById('menu1medioa').removeAttribute('hidden');
            document.getElementById('menu1mediob').removeAttribute('hidden');
            document.getElementById('menu2medioa').removeAttribute('hidden');
            document.getElementById('menu2mediob').removeAttribute('hidden');
            document.getElementById('menu3medioa').removeAttribute('hidden');
            document.getElementById('menu3mediob').removeAttribute('hidden');
            document.getElementById('menu4medioa').removeAttribute('hidden');
            document.getElementById('menu4mediob').removeAttribute('hidden');

            document.getElementById('idEstudiantes').removeAttribute('hidden');
            document.getElementById('idDocentes').removeAttribute('hidden');
            document.getElementById('idFuncionarios').removeAttribute('hidden');

            document.getElementById('card1basicoa').removeAttribute('hidden');
            document.getElementById('card1basicob').removeAttribute('hidden');
            document.getElementById('card2basicoa').removeAttribute('hidden');
            document.getElementById('card2basicob').removeAttribute('hidden');
            document.getElementById('card3basicoa').removeAttribute('hidden');
            document.getElementById('card3basicob').removeAttribute('hidden');
            document.getElementById('card4basicoa').removeAttribute('hidden');
            document.getElementById('card4basicob').removeAttribute('hidden');
            document.getElementById('card5basicoa').removeAttribute('hidden');
            document.getElementById('card5basicob').removeAttribute('hidden');
            document.getElementById('card6basicoa').removeAttribute('hidden');
            document.getElementById('card6basicob').removeAttribute('hidden');
            document.getElementById('card7basicoa').removeAttribute('hidden');
            document.getElementById('card7basicob').removeAttribute('hidden');
            document.getElementById('card8basicoa').removeAttribute('hidden');
            document.getElementById('card8basicob').removeAttribute('hidden');
            document.getElementById('card1medioa').removeAttribute('hidden');
            document.getElementById('card1mediob').removeAttribute('hidden');
            document.getElementById('card2medioa').removeAttribute('hidden');
            document.getElementById('card2mediob').removeAttribute('hidden');
            document.getElementById('card3medioa').removeAttribute('hidden');
            document.getElementById('card3mediob').removeAttribute('hidden');
            document.getElementById('card4medioa').removeAttribute('hidden');
            document.getElementById('card4mediob').removeAttribute('hidden');

        </script>";

    }
    // fin para administrador
    
    // para apoderado
    if($tipo == "Apoderado") {
        if($b1a == '1A') {
            
            echo " 
            <script>
            document.getElementById('menu1basicoa').removeAttribute('hidden');
            document.getElementById('card1basicoa').removeAttribute('hidden');
            </script>";

        }
        if($b1b == '1B') {
            
            echo " 
            <script>
            document.getElementById('menu1basicob').removeAttribute('hidden');
            document.getElementById('card1basicob').removeAttribute('hidden');
            </script>";

        }
        if($b2a == '2A') {
            
            echo " 
            <script>
            document.getElementById('menu2basicoa').removeAttribute('hidden');
            document.getElementById('card2basicoa').removeAttribute('hidden');
            </script>";

        }
        if($b2b == '2B') {
            
            echo " 
            <script>
            document.getElementById('menu2basicob').removeAttribute('hidden');
            document.getElementById('card2basicob').removeAttribute('hidden');
            </script>";

        }
        if($b3a == '3A') {
            
            echo " 
            <script>
            document.getElementById('menu3basicoa').removeAttribute('hidden');
            document.getElementById('card3basicoa').removeAttribute('hidden');
            </script>";

        }
        if($b3b == '3B') {
            
            echo " 
            <script>
            document.getElementById('menu3basicob').removeAttribute('hidden');
            document.getElementById('card3basicob').removeAttribute('hidden');
            </script>";

        }
        if($b4a == '4A') {
            
            echo " 
            <script>
            document.getElementById('menu4basicoa').removeAttribute('hidden');
            document.getElementById('card4basicoa').removeAttribute('hidden');
            </script>";

        }
        if($b4b == '4B') {
            
            echo " 
            <script>
            document.getElementById('menu4basicob').removeAttribute('hidden');
            document.getElementById('card4basicob').removeAttribute('hidden');
            </script>";

        }
        if($b5a == '5A') {
            
            echo " 
            <script>
            document.getElementById('menu5basicoa').removeAttribute('hidden');
            document.getElementById('card5basicoa').removeAttribute('hidden');
            </script>";

        }
        if($b5b == '5B') {
            
            echo " 
            <script>
            document.getElementById('menu5basicob').removeAttribute('hidden');
            document.getElementById('card5basicob').removeAttribute('hidden');
            </script>";

        }
        if($b6a == '6A') {
            
            echo " 
            <script>
            document.getElementById('menu6basicoa').removeAttribute('hidden');
            document.getElementById('card6basicoa').removeAttribute('hidden');
            </script>";

        }
        if($b6b == '6B') {
            
            echo " 
            <script>
            document.getElementById('menu6basicob').removeAttribute('hidden');
            document.getElementById('card6basicob').removeAttribute('hidden');
            </script>";

        }
        if($b7a == '7A') {
            
            echo " 
            <script>
            document.getElementById('menu7basicoa').removeAttribute('hidden');
            document.getElementById('card7basicoa').removeAttribute('hidden');
            </script>";

        }
        if($b7b == '7B') {
            
            echo " 
            <script>
            document.getElementById('menu7basicob').removeAttribute('hidden');
            document.getElementById('card7basicob').removeAttribute('hidden');
            </script>";

        }
        if($b8a == '8A') {
            
            echo " 
            <script>
            document.getElementById('menu8basicoa').removeAttribute('hidden');
            document.getElementById('card8basicoa').removeAttribute('hidden');
            </script>";

        }
        if($b8b == '8B') {
            
            echo " 
            <script>
            document.getElementById('menu8basicob').removeAttribute('hidden');
            document.getElementById('card8basicob').removeAttribute('hidden');
            </script>";

        }
        if($m1a == '9A') {
            
            echo " 
            <script>
            document.getElementById('menu1medioa').removeAttribute('hidden');
            document.getElementById('card1medioa').removeAttribute('hidden');
            </script>";

        }
        if($m1b == '9B') {
            
            echo " 
            <script>
            document.getElementById('menu1mediob').removeAttribute('hidden');
            document.getElementById('card1mediob').removeAttribute('hidden');
            </script>";

        }
        if($m2a == '10A') {
            
            echo " 
            <script>
            document.getElementById('menu2medioa').removeAttribute('hidden');
            document.getElementById('card2medioa').removeAttribute('hidden');
            </script>";

        }
        if($m2b == '10B') {
            
            echo " 
            <script>
            document.getElementById('menu2mediob').removeAttribute('hidden');
            document.getElementById('card2mediob').removeAttribute('hidden');
            </script>";

        }
        if($m3a == '11A') {
            
            echo " 
            <script>
            document.getElementById('menu3medioa').removeAttribute('hidden');
            document.getElementById('card3medioa').removeAttribute('hidden');
            </script>";

        }
        if($m3b == '11B') {
            
            echo " 
            <script>
            document.getElementById('menu3mediob').removeAttribute('hidden');
            document.getElementById('card3mediob').removeAttribute('hidden');
            </script>";

        }
        if($m4a == '12A') {
            
            echo " 
            <script>
            document.getElementById('menu4medioa').removeAttribute('hidden');
            document.getElementById('card4medioa').removeAttribute('hidden');
            </script>";

        }
        if($m4b == '12B') {
            
            echo " 
            <script>
            document.getElementById('menu4mediob').removeAttribute('hidden');
            document.getElementById('card4mediob').removeAttribute('hidden');
            </script>";

        }

    }
    // fin para apoderado
     
    // para estudiante
    if($tipo == "Estudiante") {
        echo " 
        <script>
            switch ('".$cursoActivo."') {
                case '1°A':
                    document.getElementById('menu1basicoa').removeAttribute('hidden');
                    document.getElementById('card1basicoa').removeAttribute('hidden');
                break;
                case '1°B':
                    document.getElementById('menu1basicob').removeAttribute('hidden');
                    document.getElementById('card1basicob').removeAttribute('hidden');
                break;
                case '2°A':
                    document.getElementById('menu2basicoa').removeAttribute('hidden');
                    document.getElementById('card2basicoa').removeAttribute('hidden');
                break;
                case '2°B':
                    document.getElementById('menu2basicob').removeAttribute('hidden');
                    document.getElementById('card2basicob').removeAttribute('hidden');
                break;
                case '3°A':
                    document.getElementById('menu3basicoa').removeAttribute('hidden');
                    document.getElementById('card3basicoa').removeAttribute('hidden');
                break;
                case '3°B':
                    document.getElementById('menu3basicob').removeAttribute('hidden');
                    document.getElementById('card3basicob').removeAttribute('hidden');
                break;
                case '4°A':
                    document.getElementById('menu4basicoa').removeAttribute('hidden');
                    document.getElementById('card4basicoa').removeAttribute('hidden');
                break;
                case '4°B':
                    document.getElementById('menu4basicob').removeAttribute('hidden');
                    document.getElementById('card4basicob').removeAttribute('hidden');
                break;
                case '5°A':
                    document.getElementById('menu5basicoa').removeAttribute('hidden');
                    document.getElementById('card5basicoa').removeAttribute('hidden');
                break;
                case '5°B':
                    document.getElementById('menu5basicob').removeAttribute('hidden');
                    document.getElementById('card5basicob').removeAttribute('hidden');
                break;
                case '6°A':
                    document.getElementById('menu6basicoa').removeAttribute('hidden');
                    document.getElementById('card6basicoa').removeAttribute('hidden');
                break;
                case '6°B':
                    document.getElementById('menu6basicob').removeAttribute('hidden');
                    document.getElementById('card6basicob').removeAttribute('hidden');
                break;
                case '7°A':
                    document.getElementById('menu7basicoa').removeAttribute('hidden');
                    document.getElementById('card7basicoa').removeAttribute('hidden');
                break;
                case '7°B':
                    document.getElementById('menu7basicob').removeAttribute('hidden');
                    document.getElementById('card7basicob').removeAttribute('hidden');
                break;
                case '8°A':
                    document.getElementById('menu8basicoa').removeAttribute('hidden');
                    document.getElementById('card8basicoa').removeAttribute('hidden');
                break;
                case '8°B':
                    document.getElementById('menu8basicob').removeAttribute('hidden');
                    document.getElementById('card8basicob').removeAttribute('hidden');
                break;
                case 'IA':
                    document.getElementById('menu1medioa').removeAttribute('hidden');
                    document.getElementById('card1medioa').removeAttribute('hidden');
                break;
                case 'IB':
                    document.getElementById('menu1mediob').removeAttribute('hidden');
                    document.getElementById('card1mediob').removeAttribute('hidden');
                break;
                case 'IIA':
                    document.getElementById('menu2medioa').removeAttribute('hidden');
                    document.getElementById('card2medioa').removeAttribute('hidden');
                break;
                case 'IIB':
                    document.getElementById('menu2mediob').removeAttribute('hidden');
                    document.getElementById('card2mediob').removeAttribute('hidden');
                break;
                case 'IIIA':
                    document.getElementById('menu3medioa').removeAttribute('hidden');
                    document.getElementById('card3medioa').removeAttribute('hidden');
                break;
                case 'IIIB':
                    document.getElementById('menu3mediob').removeAttribute('hidden');
                    document.getElementById('card3mediob').removeAttribute('hidden');
                break;
                case 'IVA':
                    document.getElementById('menu4medioa').removeAttribute('hidden');
                    document.getElementById('card4medioa').removeAttribute('hidden');
                break;
                case 'IVB':
                    document.getElementById('menu4mediob').removeAttribute('hidden');
                    document.getElementById('card4mediob').removeAttribute('hidden');
                break;
            }
        </script>";


    }
    // fin para estudiante   
?>