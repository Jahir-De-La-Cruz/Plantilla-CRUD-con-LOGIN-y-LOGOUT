<?php

    session_start();

    if (isset($_SESSION['usuario'])) {
        header("location: Views/Crud.php");
    }

?>

<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Registrarse Gratis</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <section class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex align-items-center justify-content-center h-100">
                    <div class="col-md-8 col-lg-7 col-xl-6">
                        <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.svg"
                            class="img-fluid" alt="Phone image">
                    </div>
                    <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1">
                        <form action="php/register.php" method="POST" autocomplete="off">
                            <h1 class="text-center p-4">Registrate Gratis</h1>
                            <!-- Name input -->
                            <div class="form-outline mb-3">
                                <input type="text" class="form-control form-control-lg" name="nombreCompleto">
                                <label class="form-label">Nombre Completo</label>
                            </div>

                            <div class="form-outline mb-3">
                                <input type="text" class="form-control form-control-lg" name="usuario">
                                <label class="form-label">Usuario</label>
                            </div>

                            <!-- Email input -->
                            <div class="form-outline mb-3">
                                <input type="email" class="form-control form-control-lg" name="email">
                                <label class="form-label">Correo Personal</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-3">
                                <input type="password" class="form-control form-control-lg" name="password">
                                <label class="form-label">Contraseña</label>
                            </div>

                            <div class="d-flex justify-content-around align-items-center mb-3">
                                <a href="#!">Olvidaste tu contraseña?</a>
                            </div>
                            <!-- Submit button -->
                            <div class="container text-center">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Registrarse</button>
                                <a href="index.php" class="btn btn-danger btn-lg">Ya tengo una cuenta</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>