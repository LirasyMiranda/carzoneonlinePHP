


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style_reggister.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <a style="position: absolute; top:0;" href="index_login.php"><i class="bx bx-chevron-left equis"></i></a>
    <main>
        <div class="login">
            <h1 class="xd">Register</h1>
            <form class="usuario" action="register.php" method="post">
                <div class="group">
                    <input name="email" id="email" required type="email" class="input">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Email</label>
                </div>  
                <div class="group xd">
                    <input name="usuario" id="usuario" required type="text" class="input">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>usuario</label>
                </div>  
                <div class="group xd">
                    <input name="contrasenia" id="contrasenia" required type="password" class="input">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Password</label>
                </div>  
                <?php
                    if(isset($_GET["error"])){
                        echo "<span class='tooltip'>Las contraseñas no coinciden</span>";
                    };
                    ?>
                <div class="group xd">
                    <input name="contrasenia2" id="contrasenia2" required="" type="password" class="input">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Confirm Password</label>
                </div>  

                <button class="boton">Register</button>
                <div class="f">
                    <a class="forgot" href="index_login.php">¿Do you already have an account? Login here</a>
                </div>
                <p id="mensaje" class="mensaje"></p> <!-- Mensaje de validación -->
            </form>
        </div>
    </main>


    </script>
</body>
</html>