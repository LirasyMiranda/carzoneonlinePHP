<?php
	$email = $_POST["email"];
    $contrasenia = $_POST["contrasenia"];
    $servername = "127.0.0.1";
    $database = "CarZoneOnline";
    $username = "alumno";
    $password = "alumnoipm";
    $conexion = mysqli_connect($servername, $username, $password, $database); // se crea la conexion


    if (!$conexion) {
        die("Conexion fallida: " . mysqli_connect_error());
    }
    else{
        $query = "select contrasenia from usuario where email = '$email';";
        $resultado=mysqli_query($conexion, $query);

        $fila = mysqli_fetch_assoc($resultado);
                // Verificar si la contraseña y el usuario coinciden
        if (mysqli_num_rows($resultado) == 0){
            header("Location: index_login.php?error=1");
        }
        else {
        if ($contrasenia === $fila["contrasenia"]) {
            session_start();
            $_SESSION["iniciada"] = true;
            header("Location: ../index.php");
        } else {
            header("Location: index_login.php?error=1");
        }
    }




    }

    
    mysqli_close($conexion);
?>
