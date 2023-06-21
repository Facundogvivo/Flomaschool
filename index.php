<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FlomaSchool | Inicio sesión</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">


</head>
<body class="bg-dark justify-content-center align-items-center" style="height: 100vh;">
    <div class="container bg-white rounded shadow p-4 col-xl-4 col-jg-6">
        <h2 class="w-100 text-center mb-4">Inicio de sesión</h2>
        <hr style="color: #000">
        <form action="main_login.php" method="POST">
            <div class="mb-3">
                <label for="txt_rut" class="form-label">Rut</label>
                <input type="text" class="form-control text-uppercase" id="txt_rut" name="txt_rut" placeholder="Ingrese el rut" required>
            </div>
            <div class="mb-3">
                <label for="txt_contrasenna" class="form-label">Contraseña</label>
                <input type="password" class="form-control text-uppercase" id="txt_contrasenna" name="txt_contrasenna" placeholder="Ingrese la contraseña" required>
            </div>
            
            <input type="submit" class="btn btn-success w-100 text-uppercase fw-bold" value="Ingresar" name="btningresar">
            
            <div class="register-link m-t-15 text-center">
                <p>¿No tienes una cuenta ? <a href="registro.php" style="float:right"> Crear una cuenta</a></p>
            </div>
        </form>
    </div>
</body>
</html>