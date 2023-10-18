<?php 

    session_start();

    include_once("../Config/Conexion.php");

    $email = $_POST['email'];
    $password = $_POST['password'];
    $password = hash("sha512", $password);

    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE Correo = '$email' AND Contraseña = '$password'");

    if (mysqli_num_rows($verificar_usuario) > 0) {
        $_SESSION['usuario'] = $email;
        header("location: ../Views/Crud.php");
        exit();
    } else {
        echo '<script>
            alert("Error, usuario no encontrado, verifique sus datos o registrese");
            window.location = "../index.php";
        </script>';
        exit();
    }

?>