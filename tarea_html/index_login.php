<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style_login.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>Login</title>
</head>
<body>
        <a style="position: absolute; top:0;" href="../index.php"><i class="bx bx-chevron-left equis"></i></a>
    <main>
        
        <div class="login">
            <img src="icon foto.png" alt="">
            <form class="usuario" action="login.php" method="post">
                <div class="group">
                    <input name="email" required="" type="email" class="input">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Email</label>
                </div>  
                <div class="group xd">
                    <input name="contrasenia" required="" type="password" class="input">
                    <span class="highlight"></span>
                    <span class="bar"></span>
                    <label>Password</label>
                    <?php
                    if(isset($_GET["error"])){
                        echo "<span class='tooltip'>La contraseña o el mail es incorrecto</span>";
                    };
                    ?>
                </div>
                <a href="../index.php"><button class="boton">Login</button></a>
                <div class="f">
                    <a class="forgot" href="index_register.php">You dont have an account?</a>
                </div>
            </form>
        </div>
    </main>
</body>
</html>