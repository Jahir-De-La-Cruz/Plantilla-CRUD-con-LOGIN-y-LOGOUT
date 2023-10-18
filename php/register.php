<?php 

    // Incluir el archivo de la conexion a la bd
    include_once("../Config/Conexion.php");

    // Recibir los valores de los inputs y guardarlos en variables
    $nombre = $_POST['nombreCompleto'];
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // Encriptar la contraseña
    $password = hash("sha512", $password);

    // Insertar los registros en la base de datos
    $sql = "INSERT INTO usuarios (NombreCompleto, Usuario, Correo, Contraseña) VALUES 
    ('$nombre','$usuario','$email','$password')";

    // Verificar que no se repita el usuario
    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Correo ='$email' ");
    if (mysqli_num_rows($verificar_correo) > 0 ) {
        echo '<script>
                alert("Este correo ya existe");
                window.location = "../registrarse.php";
            </script>';
        exit();
    }

    // Verificar que no se repita el usuario
    $verificar_user = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Usuario = '$usuario'");
    if (mysqli_num_rows($verificar_user) > 0) {
        echo '<script>
            alert("El usuario ingresado ya existe dentro de la Base de Datos! Intente de nuevo");
            window.location = "../registrarse.php";
        </script>';
        exit();
    }

    $comprobar = $conexion -> query($sql);

    if ($comprobar === TRUE) {
        echo '<script>
            alert("Usuario almacenado exitosamente");
            window.location = "../index.php";
        </script>';
    } else {
        echo '<script>
            alert("Error al Registrar el Usuario");
            window.location = "../registrarse.php";
        </script>';
    }

    mysqli_close($conexion);

?>