<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>FlomaSchool | Registro de usuarios</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    </head>
    <body class="bg-dark justify-content-center align-items-center" style="height: 100vh;">
        <div class="container bg-white rounded shadow p-4 col-xl-4 col-jg-6">
            <h2 class="w-100 text-center mb-4">Registro de usuarios</h2>
            <hr style="color: #000">
            <form action="main_registro.php" method="POST">
                <div class="mb-3">
                    <label for="txt_tipo" class="form-label">Tipo</label>
                    <select class="form-control text-uppercase" id="txt_tipo" name="txt_tipo">
                        <option value="0" style="display:none;">Seleccionar</option>
                        <option value="Administrador">&#128049; Administrador</option>
                        <option value="Apoderado">&#128052; Apoderado</option>
                        <option value="Docente">&#128040; Docente</option>
                        <option value="Estudiante">&#128060; Estudiante</option>
                        <option value="Funcionario">&#128054; Funcionario</option>
                    </select>
                </div>
                <div class="mb-3">
                    <label for="txt_nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control text-uppercase" id="txt_nombre" name="txt_nombre" placeholder="Ingrese el nombre" required>
                </div>
                <div class="mb-3">
                    <label for="txt_apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control text-uppercase" id="txt_apellido" name="txt_apellido" placeholder="Ingrese el apellido" required>
                </div>
                <div class="mb-3">
                    <label for="txt_rut" class="form-label">Rut</label>
                    <input type="text" class="form-control text-uppercase" id="txt_rut" name="txt_rut" placeholder="Ingrese el rut" required>
                </div>
                <div class="mb-3">
                    <label for="txt_contrasenna" class="form-label">Contraseña</label>
                    <input type="password" class="form-control text-uppercase" id="txt_contrasenna" name="txt_contrasenna" placeholder="Ingrese la contraseña" required>
                </div>
                <div class="mb-3" style="display: none;" id="cursoAlumno">
                    <label for="txt_curso" class="form-label">Curso</label>
                    <select class="form-control text-uppercase" id="txt_curso" name="txt_curso">
                        <option value="0" style="display:none;">Seleccionar</option>
                        <option value="1°A">&#128336; 1° básico A</option>
                        <option value="1°B">&#128336; 1° básico B</option>
                        <option value="2°A">&#128337; 2° básico A</option>
                        <option value="2°B">&#128337; 2° básico B</option>
                        <option value="3°A">&#128338; 3° básico A</option>
                        <option value="3°B">&#128338; 3° básico B</option>
                        <option value="4°A">&#128339; 4° básico A</option>
                        <option value="4°B">&#128339; 4° básico B</option>
                        <option value="5°A">&#128340; 5° básico A</option>
                        <option value="5°B">&#128340; 5° básico B</option>
                        <option value="6°A">&#128341; 6° básico A</option>
                        <option value="6°B">&#128341; 6° básico B</option>
                        <option value="7°A">&#128342; 7° básico A</option>
                        <option value="7°B">&#128342; 7° básico B</option>
                        <option value="8°A">&#128343; 8° básico A</option>
                        <option value="8°B">&#128343; 8° básico B</option>
                        <option value="IA">&#128344; I medio A</option>
                        <option value="IB">&#128344; I medio B</option>
                        <option value="IIA">&#128345; II medio A</option>
                        <option value="IIB">&#128345; II medio B</option>
                        <option value="IIIA">&#128346; III medio A</option>
                        <option value="IIIB">&#128346; III medio B</option>
                        <option value="IVA">&#128347; IV medio A</option>
                        <option value="IVB">&#128347; IV medio B</option>
                    </select>
                </div>
                <div class="mb-3 row form-group" style="display: none;" id="cursoHijos">
                    <label for="txt_curso" class="form-label">Curso de sus hijos</label>
                    <p style="text-align: center">
                        <input type="checkbox" id="inline-checkbox1A" name="inline-checkbox1A" value="1A" class="form-check-input"> 1° básico A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" id="inline-checkbox1B" name="inline-checkbox1B" value="1B" class="form-check-input"> 1° básico B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" id="inline-checkbox2A" name="inline-checkbox2A" value="2A" class="form-check-input"> 2° básico A
                    </p>
                    <p style="text-align: center">
                        <input type="checkbox" id="inline-checkbox2B" name="inline-checkbox2B" value="2B" class="form-check-input"> 2° básico B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" id="inline-checkbox3A" name="inline-checkbox3A" value="3A" class="form-check-input"> 3° básico A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" id="inline-checkbox3B" name="inline-checkbox3B" value="3B" class="form-check-input"> 3° básico B
                    </p>
                    <p style="text-align: center">
                        <input type="checkbox" id="inline-checkbox4A" name="inline-checkbox4A" value="4A" class="form-check-input"> 4° básico A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" id="inline-checkbox4B" name="inline-checkbox4B" value="4B" class="form-check-input"> 4° básico B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" id="inline-checkbox5A" name="inline-checkbox5A" value="5A" class="form-check-input"> 5° básico A
                    </p>
                    <p style="text-align: center">
                        <input type="checkbox" id="inline-checkbox5B" name="inline-checkbox5B" value="5B" class="form-check-input"> 5° básico B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" id="inline-checkbox6A" name="inline-checkbox6A" value="6A" class="form-check-input"> 6° básico A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" id="inline-checkbox6B" name="inline-checkbox6B" value="6B" class="form-check-input"> 6° básico B
                    </p>
                    <p style="text-align: center">
                        <input type="checkbox" id="inline-checkbox7A" name="inline-checkbox7A" value="7A" class="form-check-input"> 7° básico A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" id="inline-checkbox7B" name="inline-checkbox7B" value="7B" class="form-check-input"> 7° básico B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" id="inline-checkbox8A" name="inline-checkbox8A" value="8A" class="form-check-input"> 8° básico A
                    </p>
                    <p style="text-align: center">
                        <input type="checkbox" id="inline-checkbox8B" name="inline-checkbox8B" value="8B" class="form-check-input"> 8° básico B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" id="inline-checkbox9A" name="inline-checkbox9A"  value="9A" class="form-check-input"> I medio A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" id="inline-checkbox9B" name="inline-checkbox9B"  value="9B" class="form-check-input"> I medio B
                    </p>
                    <p style="text-align: center">
                        <input type="checkbox" id="inline-checkbox10A" name="inline-checkbox10A" value="10A" class="form-check-input"> II medio A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" id="inline-checkbox10B" name="inline-checkbox10B" value="10B" class="form-check-input"> II medio B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" id="inline-checkbox11A" name="inline-checkbox11A" value="11A" class="form-check-input"> III medio A
                    </p>
                    <p style="text-align: center">
                        <input type="checkbox" id="inline-checkbox11B" name="inline-checkbox11B" value="11B" class="form-check-input"> III medio B&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" id="inline-checkbox12A" name="inline-checkbox12A" value="12A" class="form-check-input"> IV medio A&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="checkbox" id="inline-checkbox12B" name="inline-checkbox12B" value="12B" class="form-check-input"> IV medio B
                    </p>
                </div>
                <input type="submit" class="btn btn-success w-100 text-uppercase fw-bold" value="Registrar usuario" name="btnregistrar">
                <div class="register-link m-t-15 text-center">
                    <p>¿Ya tienes una cuenta ? <a href="index.php" style="float:right"> Iniciar sesión</a></p>
                </div>
            </form>
        </div>
        <script src="app.js"></script>
        <script>
            const selector = document.getElementById('txt_tipo');
            const inputOcultoEstudiante = document.getElementById('cursoAlumno');
            const inputOcultoApoderado = document.getElementById('cursoHijos');

            selector.addEventListener('change', function() {
            const opcionSeleccionada = selector.value;
            
            if (opcionSeleccionada === 'Estudiante') {
                inputOcultoEstudiante.style.display = 'block';
                inputOcultoApoderado.style.display = 'none';
            } else if (opcionSeleccionada === 'Apoderado') {
                inputOcultoEstudiante.style.display = 'none';
                inputOcultoApoderado.style.display = 'block';
            } else {
                inputOcultoEstudiante.style.display = 'none';
                inputOcultoApoderado.style.display = 'none';
            }
            });
        </script>
    </body>
</html>