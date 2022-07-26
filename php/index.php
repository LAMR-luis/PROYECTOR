<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

	<title>MILAGRO CAFE</title>

	<!-- Normalize V8.0.1 -->
	<link rel="stylesheet" href="../css/normalize.css">

	<!-- MDBootstrap V5 -->
	<link rel="stylesheet" href="../css/mdb.min.css">

	<!-- Font Awesome V5.15.1 -->
	<link rel="stylesheet" href="../css/all.css">

	<!-- Sweet Alert V10.13.0 -->
	<script src="../js/sweetalert2.js" ></script>

	<!-- General Styles -->
	
	<link rel="stylesheet" href="../css/style.css">
<link rel="shortcut icon" type="text/css" href="../imagenes/milagro.jpeg">
</head>
<body>
<script src="https://kit.fontawesome.com/7541ec7306.js" crossorigin="anonymous"></script>
	<!-- Header -->
	<header class="header full-box">
	    <div class="header-brand text-center full-box">
	        <a href="index.html">
	            <img src="../imagenes/logo.jpeg" alt="logo" class="img-fluid"> 
	        </a>
	    </div>

	    <div class="header-options full-box">
	        <nav class="header-navbar full-box poppins-regular font-weight-bold" >
	            <ul class="list-unstyled full-box">
	                <li>
	                    <a href="../html/index.html" >Inicio<span class="full-box" ></span></a>
	                </li>
	                <li>
	                    <a href="../html/menu.html" >Menú<span class="full-box" ></span></a>
	                </li>
	                <li>
	                    <a href="../html/login.html" >Login<span class="full-box" ></span></a>
	                </li>
	            </ul>
	        </nav>
	        <div class="header-button full-box text-center btn-login-menu" >
	            <i class="fas fa-user-alt" onclick="show_popup_login()" data-mdb-toggle="tooltip" data-mdb-placement="bottom" title="Login" ></i>
	            
	        </div>
	        <a href="../html/carrito.html" class="header-button full-box text-center" data-mdb-toggle="tooltip" data-mdb-placement="bottom" title="Carrito" >
	            <i class="fas fa-shopping-bag"></i>
	            <span class="badge bg-warning rounded-pill bag-count" >2</span>
	        </a>
	    </div>
	</header>


	<!-- Content -->
	<div class="banner">
	    <div class="banner-body">
	        <h3 class="text-uppercase">BIENVENIDO A RESTAURANTE "EL MILAGRO CAFE"</h3>
	        <p>Los mejores platillos y la mejor calidad los encuentras en MILAGRO CAFE</p>
	        <a href="../html/menu.html" class="btn btn-warning"><i class="fas fa-hamburger fa-fw"></i> &nbsp; Ir al menu</a>
	    </div>
	</div>

	

	<hr>

	<div class="container container-web-page">
	    <div class="row justify-content-md-center">
	        <div class="col-12 col-md-6">
	            <figure class="full-box">
	                <center><img src="../imagenes/registro.png" alt="registration" class="img-fluid" width="70" height="50"></center>
	            </figure>
	        </div>
	        <div class="w-100"></div>
	        <div class="col-12 col-md-6">
	            <h3 class="text-center text-uppercase poppins-regular font-weight-bold">Crea tu cuenta</h3>
	            <p class="text-justify">
	                Crea tu cuenta para poder realizar pedidos de platillos hasta la puesta de tu casa, es muy fácil y rápido.
	            </p>
	            <p class="text-center">
	                <a href="../html/registration.html" class="btn btn-primary" >Crear cuenta</a>
	            </p>
	        </div>
	    </div>
	</div>

	<!-- Footer -->
	<footer class="footer">
	    <div class="container">
	        <div class="row">
	            <div class="col-12 col-md-4">
	                <ul class="list-unstyled" >
	                    <li><h5 class="font-weight-bold" ><i class="far fa-copyright"></i> COPYRIGTH</h5></li>
	                    <li> Todos los derechos reservados </li>
	                </ul>
	            </div>
	            <div>
	            <div class="col-12 col-md-4">
	                <ul class="list-unstyled" >
	                    <li><h5 class="font-weight-bold" >METEPEC</h5></li>
	                    <li><i class="fas fa-map-marker-alt fa-fw"></i> Orquidia #30,52176 Metepec,Estado de México,Méxic</li>
	                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3766.256428668586!2d-99.59710428563982!3d19.27121175081642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd8a5480a97b0d%3A0x7697068e3cd44412!2sOrqu%C3%ADdeas%2030%2C%20Izcalli%20II%2C%2052176%20Metepec%2C%20M%C3%A9x.!5e0!3m2!1ses!2smx!4v1656637231699!5m2!1ses!2smx" width="1500" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
	                </ul>
	            </div>
	            </div>
	            <div class="col-12 col-md-4">
	                <ul class="list-unstyled" >
	                    <li><h5 class="font-weight-bold" >Siguenos en:</h5> </li>
	                    <li>
	                        <a href="https://www.facebook.com/El-Milagro-Caf%C3%A9-105016778599259/" class="footer-link" target="_blank" >
	                            <i class="fab fa-facebook fa-fw"></i> Facebook
	                        </a>
	                    </li>

	                    <li>
	                        <a href="https://instagram.com/el_milagro_cafe?utm_medium=copy_link" class="footer-link" target="_blank" >
	                           <i class="fa-brands fa-instagram-square"></i>
	                                Instagram
	                        </a>
	                    </li>
	                    <li><h5 class="font-weight-bold"> Contactanos:</li>
	                    <li > <i class="fas fa-phone-square"></i> Telefono </li>
	                    <li><i class="fa-brands fa-whatsapp"></i><a href="https://api.whatsapp.com/send?phone=+527291020228&text=Hola buenas tardes Nombre:     Telefono:    ">(729)1020228</a></li>

	                </ul>
	            </div>
	        </div>
	    </div>
	</footer>
	<style> 
      #map {
        height: 100%;
      }
     
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
  </style> 



	<!-- MDBootstrap V5 -->
	<script src="./js/mdb.min.js" ></script>

	<!-- General scripts -->
	<script src="./js/main.js" ></script>
</body>
</html>



