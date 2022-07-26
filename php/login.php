<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
            content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <title>Restaurant</title>
        <link rel="stylesheet" href="../css/style1.css">
        <link rel="stylesheet" href="../css/estilologin.css">
        
    
    </head>
    
    <body>
        <script src="https://kit.fontawesome.com/7541ec7306.js" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/7541ec7306.js" crossorigin="anonymous"></script>
        
            <!-- Header -->
            <header class="header full-box">
                <div class="header-brand text-center full-box">
                    <a href="../html/index.html">
                        <img src="../imagenes/logo.jpeg" alt="logo" class="img-fluid">
                    </a>
                </div>
    
                <div class="header-options full-box">
                    <nav class="header-navbar full-box poppins-regular font-weight-bold">
                        <ul class="list-unstyled full-box">
                            <li>
                                <a href="../html/index.html">Inicio<span class="full-box"></span></a>
                            </li>
                            <li>
                                <a href="../html/menu.html">Menú<span class="full-box"></span></a>
                            </li>
                            
                        </ul>
                    </nav>
                    
                </div>
            </header>
            <h1>Inicia sesión para pedir tus platillos</h1>
<div class="loginbox">
   
    <img src="../imagenes/logo.jpeg" alt="" class="avatar">
    <h1>Ingresar</h1>
    <form action="../php/validar.php" method="POST">
        <p>Usuario</p>
        <input type="text" placeholder="Usuario" name="correo">
        <p>Contraseña</p>
        <input type="password" placeholder="Contraseña" name="pass">
        <input type="submit" value="login">
        <br><br>
        <a href="../html/registration.html">¿No tienes cuenta? Registrate aqui</a>

    </form>

</div>
</body>
</html>