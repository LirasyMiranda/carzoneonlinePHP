<?php
session_start();
$logueado = false;
if(isset($_SESSION["iniciada"]) && $_SESSION["iniciada"]){
    $logueado = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Abel&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">    
<link rel="stylesheet" href="index.css">
<link rel="stylesheet" href="footer.css">
<link rel="stylesheet" href="alquileres.css">
<link rel="stylesheet" href="deportivo.css">
<link rel="stylesheet" href="Loading.css">
<script src="https://kit.fontawesome.com/83480b7348.js" crossorigin="anonymous"></script>
<link rel="shortcut icon" href="logo-nuevo2.0.png" type="image/x-icon">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<title>Car Zone</title>
</head>

<body class="hidden">

  
    <!-- LOADING -->
    <div id="loader" class="loader">
      <img src="logo-nuevo2.0.png" alt="Logo de la página" class="loader-logo">
      <section class="section-loader" id="onload">
        <div class="spinner">
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
          <span></span>
        </div>
        </section>  
    </div>
    <!-- Header mobile -->
<header class="header-mobile">
    <a href="index.php">
        <img class="logo" src="logo-nuevo2.0.png" alt="">
    </a>
    <div style="width: 100%;">
        <i class='bx bx-search' style="color: #ffffff;"></i>
        <div class="menu-icon" onclick="toggleMenu()">
            <i class='bx bx-menu' id="menu-icon" style='color:#ffffff'></i>
        </div>
    </div>
</header>

    <!-- Fondo mobile -->
<div class="div-fondo-mobile">
    <img class="fondo-mobile" src="auto-mobile2.jpg" alt="">
    <div class="capa"></div>
</div>
    <!-- Menu mobile -->
<ul class="menu">
    <li><a href="#info">INFO</a></li>
    <li><a href="#mod">MODELOS</a></li>
    <li><a href="#alq">ALQUILER</a></li>
    <li style="padding-top: 60px"><a href="https://www.instagram.com/politecnicomodelo/?hl=es-la"><i class='bx bxl-instagram'></i></a></li>
    <li><a href="https://x.com/ipmodelo"><i class='bx bxl-twitter'></i></i></a></li>
    <li><a href="https://www.youtube.com/@politecnicomodelo/featured"><i class='bx bxl-youtube'></i></i></a></li>
</ul>
    <!-- Last model mobile -->
    <div class="last-model-mobile">
        <h3>Last model</h3>
        <h2>AMG ONE</h2>
        <p>
            Mercedes AMG-ONE
        </p>
    </div>


    <!-- Header escritorio -->
    <header>
        <div class="header-escritorio">
                <img class="logo" src="logo-nuevo2.0.png" alt="LogoXD">
                <div class="group">
                    <svg class="icon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
                    <input placeholder="Search" type="search" class="input">
                  </div>
            <div class="header-screen">
                <li>
                    <a href="#mod">MODELOS</a>
                    <a href="#info">INFO</a>
                    <a href="#alq">ALQUILER</a>
                </li>
            </div>
            <div class="icons">
                <a style="color:#ffffff;" href="https://www.google.com/maps/place/Car+Zone/@40.6436943,-74.257946,3a,75y,134.12h,88.81t/data=!3m7!1e1!3m5!1sKJKV2VZfLyFN7lZlggF8iw!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fcb_client%3Dmaps_sv.tactile%26w%3D900%26h%3D600%26pitch%3D1.193780210206242%26panoid%3DKJKV2VZfLyFN7lZlggF8iw%26yaw%3D134.12484631776755!7i16384!8i8192!4m14!1m7!3m6!1s0x89c3b3806ed6c07d:0xdd0b3929d55856e5!2sCar+Zone!8m2!3d40.6434571!4d-74.2577234!16s%2Fg%2F11qpwr7tlq!3m5!1s0x89c3b3806ed6c07d:0xdd0b3929d55856e5!8m2!3d40.6434571!4d-74.2577234!16s%2Fg%2F11qpwr7tlq?coh=205410&entry=ttu&g_ep=EgoyMDI0MDgyOC4wIKXMDSoASAFQAw%3D%3D"><i class='bx bx-map'></i></a>
                                
                <?php 
                    if(!$logueado){ ?>
                        <a style="color:#ffffff;" href="tarea_html/index_login.php">
                        <button class="botonn">
                            Login
                            <div class="arrow-wrapper">
                                <div class="arrow"></div>
                            </div>
                        </button>
                        </a>
                <?php  
                }
                else{?>
                    <a style="color:#ffffff;" href=""><i class='bx bx-group'></i></a>
                    <?php  
                }
                ?>
                </a>
            </div>
        </div>     
    </header>

<!-- Carrusel -->
<div class="last-model">
        <ul>
            <li>
                <img src="auto.jpg" alt="">
                <div class="texto">
                    <h3>Ultimo modelo</h3>
                    <h2>AMG ONE</h2>
                    <p>
                        Mercedes AMG-ONE
                    </p>
                </div>
            </li>
            <li>
                <img src="bugatti.jpg" alt="">
                <div class="texto chiron">
                    <h3>El mas caro</h3>
                    <h2>Chiron</h2>
                    <p>
                        Bugatti Chiron
                    </p>
                </div>
            </li>
            <li>
                <img src="huracan.webp">
                <div class="texto">
                    <h3>El mas vendido</h3>
                    <h2>Huracan</h2>
                    <p>
                        Lamborghini Huracan
                    </p>
                </div>
            </li>
            <li class="li-model">
                <img src="koni1.jpg">
                <div class="texto">
                    <h3>The fastest model</h3>
                    <h2>Agera One</h2>
                    <p>
                        Koenigsegg agera one
                    </p>
                </div>
            </li>
        </ul>    
    </div>

    <!-- Categorias -->
    <div class="main-lastmodel-div"></div>
<main class="main-lastmodel">
    <div class="div-categorias">
        <ul class="categorias">
            <li>
                <a class="a-1" href="index.php">Regulares</a>
            </li>
            <li>
                <a class="a-2" href="deportivo.php">Deportivos</a>
            </li>
            <li>
                <a class="a-3" href="hyperdeportivo.php">Hiperdeportivos</a>
            </li>
        </ul>
    </div>
</main>
<div class="div-del-fixed"></div>


<!-- Main MODELOS REGULARES -->
<img class="vector-lineas" src="vecteezy_abstract-line-speed-background_4777364.jpg" alt="">
<main class="main-1">
    <section class="section-1">
        <!-- img escritorio -->
        <img class="img-deportivos-escritorio" src="lambo-audi.webp" alt="">
        <div>
            <span style="color: rgb(75, 75, 75);">Categoria premium</span>
            <h2 class="h2-regulares">Deportivos</h2>
            <h3 class="section-h3">
                Nuestros modelos de autos de categoría deportiva, como el Lamborghini huracan y el Audi r8, representan la perfecta combinación de elegancia y velocidad.
            </h3>
            <p class="p">
                Los autos deportivos son sinónimos de emoción y rendimiento en el mundo automotriz. Diseñados para ofrecer una experiencia de conducción inigualable, combinan potentes motores, diseños aerodinámicos y tecnología avanzada. Por ejemplo, el Lamborghini Huracán se destaca por su imponente motor V10 y su diseño agresivo, ofreciendo una aceleración que acelera el pulso. Por otro lado, el Audi R8 combina elegancia con potencia, gracias a su motor V10 y su sofisticada tecnología de tracción total.
            </p>
        </div>  
        <!-- img mobile -->
        <img class="img-deportivos-mobile" src="lambo-audi.webp" alt="">
    </section>

    <!-- MODELOS -->
     <section id="mod" class="section-modelos">
        <h1 class="h1-regulares">Modelos Deportivos.</h1>
        <div class="div-modelos">
            <div class="card">
                <div class="capa-card1">
                    <div class="nombres-modelos">
                        <h3>Adrenalina pura</h3>
                        <h1>Lambo Huracan</h1>
                        <h2 class="precios">
                            <span>$600 </span><span style="background: hsl(46, 84%, 39%);" class="semana">/$3600 semana</span>
                        </h2>
                        <div>
                            <a href="LamborghiniHuracan.php"><button class="button huracan">Explorar</button></a>
                            <button class="btn huracan">Consultar</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="capa-img"></div>
                <div class="capa-card2">
                    <div class="nombres-modelos">
                        <h3>Estilo sin rival.</h3>
                        <h1>Audi R8 Coupe</h1>
                        <h2 class="precios">
                            <span>$500 </span><span style="background: hsl(0, 0%, 31%);" class="semana">/$3200 semana</span>
                        </h2>
                        <div>
                            <a href="audir8.php"><button class="button r8">Explorar</button></a>
                            <a href="consulta.php"><button class="btn r8">Consultar</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="capa-img"></div>
                <div class="capa-card3">
                    <div class="nombres-modelos">
                        <h3>El arte de la velocidad.</h3>
                        <h1>Porsche 911 Carrera</h1>
                        <h2 class="precios">
                            <span>$450 </span><span style="background: hsl(0, 0%, 59%);" class="semana">/$2900 semana</span>
                        </h2>
                        <div>
                            <a href="Porsche911.php"><button class="button porsche">Explorar</button></a>
                            <a href="consulta.php"><button class="btn porsche">Consultar</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="div-modelos">
            <div class="card">
                <div class="capa-card4">
                    <div class="nombres-modelos">
                        <h3>Comodidad perfecta.</h3>
                        <h1>Tesla Model 3</h1>
                        <h2 class="precios">
                            <span>$200 </span><span style="background: hsl(0, 0%, 100%); color: rgb(0, 0, 0);" class="semana">/$1100 semana</span>
                        </h2>
                        <div>
                            <a href="TeslaModel3.php"><button class="button tesla">Explorar</button></a>
                            <a href="consulta.php"><button class="btn tesla">Consultar</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="capa-img"></div>
                <div class="capa-card5">
                    <div class="nombres-modelos">
                        <h3>Poder absoluto.</h3>
                        <h1>Nissan GTR R35</h1>
                        <h2 class="precios">
                            <span>$320 </span><span style="background: hsl(7, 86%, 34%);" class="semana">/$2100 semana</span>
                        </h2>
                        <div>
                            <a href="nissan.php"><button class="button gtr">Explorar</button></a>
                            <a href="consulta.php"><button class="btn gtr">Consultar</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="capa-img"></div>
                <div class="capa-card6">
                    <div class="nombres-modelos">
                        <h3>Legado renovado.</h3>
                        <h1>Supra MK5</h1>
                        <h2 class="precios">
                            <span>$250 </span><span style="background: hsl(0, 79%, 38%);" class="semana">/$1500 semana</span>
                        </h2>
                        <div>
                            <a href="supra.php"><button class="button supra">Explorar</button></a>
                            <a href="consulta.php"><button class="btn supra">Consultar</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
        
    
    
    
    
</main>
<img class="vector-zondas" src="vector-zondas.webp" alt="">

<main class="main-alquilers">
    <div id="alq"></div>
    <section class="section-map">
        <div class="section-map-div"></div>
        <div class="map">
            <i class="fa-solid fa-location-pin"></i>
            <h2>RENTADORA DE AUTOS</h2>
            <h3>Car Zone</h3> 
            <h4>Online</h4>
            <button class="boton-concesionario"><a style="text-decoration: none; width: 100%; height: 100%;" href="#datos">HACE TU ALQUILER</a></button>
        </div>
    </section>

    <div id="datos"></div>
    <section class="section-eleccion">
        <div class="div-div-eleccion">
            <div class="div-eleccion">
                <div class="eleccion modelos">
                    <h3 style="margin-left: 20px;">Modelo</h3>
                    <div class="inputs div-amodelos">
                        
                        <select class="amodelos amodelos-modelos" name="Elige el modelo" id="">
                            <option value="">Lamborghini Huracan</option>
                            <option value="">Audi R8 Coupe</option>
                            <option value="">Porsche 911</option>
                        </select>
                    </div>
                </div>
                <div class="eleccion entega">
                    <h3>Entrega</h3>
                    <div class="inputs">
                        <input class="input-eleccion" type="text" name="" id="" placeholder="Ingresá la direc. de entrega">
                    </div>
                </div>
                <div class="junte-de-hora">
                    <div class="eleccion fecha-alquiler">
                        <h3>Fecha-alquiler</h3>
                        <div class="inputs inputs-mobile">
                            <input class="input-eleccion" type="text" class="" placeholder="Elegí la fecha de alquiler" id="fecha-alquiler">
                            <script>
                                flatpickr("#fecha-alquiler", {
                                    dateFormat: "Y-m-d"
                                });
                            </script>                          
                        </div>
                        
                    </div>
                    <div class="eleccion horario hora-alquiler">
                        <select class="inputs inputs-mobile-fecha select-hora" name="hora-alquiler" id="">
                            <option value="08:00">08:00</option>
                            <option value="09:00">09:00</option>
                            <option value="10:00">10:00</option>
                            <option value="11:00">11:00</option>
                            <option value="12:00">12:00</option>
                            <option value="13:00">13:00</option>
                            <option value="14:00">14:00</option>
                            <option value="15:00">15:00</option>
                            <option value="16:00">16:00</option>
                            <option value="17:00">17:00</option>
                            <option value="18:00">18:00</option>
                            <option value="19:00">19:00</option>
                            <option value="20:00">20:00</option>
                        </select>
                    </div>
                </div>
                <div class="junte-de-hora">
                    <div class="eleccion fecha-devolucion">
                        <h3>Fecha-devolucion</h3>
                        <div class="inputs inputs-mobile">
                            <input class="input-eleccion" id="fecha-devolucion" type="text" placeholder="Elegí la fecha de devolución">
                            <script>
                                flatpickr("#fecha-devolucion", {
                                    dateFormat: "Y-m-d"
                                });
                            </script>
                        </div>
                    </div>
                    <div class="eleccion horario hora-devolucion">
                        <select class="inputs inputs-mobile-fecha select-hora2" name="hora-devolucion" id="">
                                <option value="08:00">08:00</option>
                                <option value="08:00">09:00</option>
                                <option value="08:00">10:00</option>
                                <option value="08:00">11:00</option>
                                <option value="08:00">12:00</option>
                                <option value="08:00">13:00</option>
                                <option value="08:00">14:00</option>
                                <option value="08:00">15:00</option>
                                <option value="08:00">16:00</option>
                                <option value="08:00">17:00</option>
                                <option value="08:00">18:00</option>
                                <option value="08:00">19:00</option>
                                <option value="08:00">20:00</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="div-enviar">
                <a href="deportivo.php"><button class="enviar">ENVIAR</button></a>
            </div>
        </div>
    </section>
    <div class="hr">
        <hr> 
    </div>

    
    <section id="info" class="section-beneficios">
        <div class="titulo-beneficios">
            <div>
                <div class="div-div-beneficios">
                    <h1>Beneficios de</h1><h2>Car Zone</h2>
                </div>
                <div>
                    <p class="p-titulo-beneficios">
                        La forma más económica e inteligente de desplazarte en auto, sin tener que realizar la gran inversión que implica la compra de un vehículo propio, y además, ahorrando en todos los gastos habituales asociados, como los seguros, patentes, mantenimiento, y reparaciones. Esto te permite disfrutar de la comodidad y flexibilidad de un auto cuando lo necesites, sin las preocupaciones y costos a largo plazo que suelen venir con la propiedad de uno.
                    </p>        
                </div>
            </div>
            <img src="lineas-decorativas-azul.png" alt="">
        </div>
        <div class="div-sub-beneficios">
            <div class="sub-beneficios">
                <i class="fa-solid fa-location-dot"></i>
                <h3>A domicilio</h3>
                <p>Pedí tu auto y te lo llevamos a donde vos estés. Ya sea a tu casa, tu oficina o a lo de un amigo o por donde vos quieras</p>
            </div>
            <div class="sub-beneficios">
                <i class="fa-solid fa-clock"></i>
                <h3>Sin demoras</h3>
                <p>En Car Zone Online sabemos que el tiempo no vuelve atrás, por eso evitamos que lo pierdas firmando papeleos, solo con algunos clicks ya lo tienes.</p>
            </div>
            <div class="sub-beneficios">
                <i class="fa-solid fa-lock"></i>
                <h3>Seguro</h3>
                <p>Todos nuestros alquileres tienen seguro contra todo riesgo con franquicia, boton antipanico y asistencia en carretera.</p>
            </div>
            <div class="sub-beneficios">
                <i class='bx bxs-car'></i>
                <h3>Calidad</h3>
                <p>La la mejor empresa de rentadoras de autos en terminos de calidad, autos top mundiales, en perfecto estado.</p>
            </div>
        </div>
    </section>
</main>


<!-- JAVASCRIPT -->
    <script>
        function toggleMenu() {
            const menu = document.querySelector('.menu');
            const menuIcon = document.getElementById('menu-icon');
            const headermobile = document.querySelector('.header-mobile');

            menu.classList.toggle('open');
            headermobile.classList.toggle('open');
            
            // Cambia el ícono del menú por una cruz al abrir el menú
            if (menu.classList.contains('open')) {
                menuIcon.classList.remove('bx-menu');
                menuIcon.classList.add('bx-x');
            } else {
                menuIcon.classList.remove('bx-x');
                menuIcon.classList.add('bx-menu');
            }
        }

        window.addEventListener('scroll', function() {
            const targetElement = document.querySelector('.div-del-fixed'); // El elemento que detona la acción
            const elementToChange = document.querySelector('.categorias'); // El elemento al que se le agrega la clase
            const lastmodel = document.querySelector('.main-lastmodel-div');

            const triggerPoint = targetElement.getBoundingClientRect().top;
    
            if (triggerPoint <= 0) {
                elementToChange.classList.add('categorias-fixed');
                lastmodel.classList.add('lastmodel-fixed');
            } else {
                elementToChange.classList.remove('categorias-fixed');
                lastmodel.classList.remove('lastmodel-fixed');
            }
        });
    </script>



<!-- Footer -->
<footer class="footer">
    <div class="footer-div1">
      <div class="footer-div-row">
        
        <div class="footer-div-links">
          <h4>Marcas</h4>
          <ul>
            <li><a href="https://www.bmw.com.ar/es/index.php">BMW</a></li>
            <li><a href="https://www.volkswagen.com.ar/es.html?adchan=sem&country=ar&publisher=google&adpl=consideration&campaign=vw-brand&format=exact&adcr=rsa&seatype=branded&adgroup=inst_[exact]_volkswagen&language=ar&adpay=paid&adap=rsa_volkswagen&adchan=sem&campaign=10040925_NC_IMC_PAO_DRW_VWB_VWB_BRD_ARG_NU_SEAH_PSEAC_TEAD_NU_GAD_GADW_CPC_NU_NU_NU_NU_CXD_ES_EX_PURB_VW-BRAND-10077386&adgroup=Inst_%5Bexact%5D_volkswagen&publisher=GOOGLE&adcr=volkswagen&adpl=GOOGLE&adlid=71700000038004276&country=AR&language=ES&&gad_source=1&gclid=CjwKCAjw5qC2BhB8EiwAvqa41q3raE4TcT_oQuhHBRfAw8QBmuxWWfyp_P3cfXMY0bWTycgAsVMtfRoC5KkQAvD_BwE&gclsrc=aw.ds">VOLKSWAGEN</a></li>
            <li><a href="https://www.lamborghini.com/es-en">LAMBORGHINI</a></li>
            <li><a href="https://www.audi.com.ar/ar/web/es.html">AUDI</a></li>
            <li><a href="https://www.porsche.com/latin-america-es/_argentina_/">PORSCHE</a></li>
            <li><a href="https://www.ferrari.com/es-ES">FERRARI</a></li>
            <li><a href="https://www.koenigsegg.com/home">KOENNISEGG</a></li>
            <li><a href="https://www.mercedes-benz.com.ar/">MERCEDES</a></li>
            <li><a href="https://www.bugatti.com/">BUGATTI</a></li>
            <li><a href="https://cars.mclaren.com/es-es">MCLAREN</a></li>
          </ul>
        </div>

        <div class="footer-div-links">
          <h4>Ayuda</h4>
          <ul>
            <li><a href="consulta.php">Preguntas</a></li>
            <li><a href="https://www.instagram.com/thiagoml43">Contactanos</a></li>
          </ul>
        </div>

        <div class="footer-div-links">
          <h4>Modelos</h4>
          <ul>
            <li><a href="VolkswagenGTI.php">Volkswagen gti 2024</a></li>
            <li><a href="bmwm1.php">BMW 1m 2012</a></li>
            <li><a href="LamborghiniHuracan.php">Lamborghini Huracan 2020</a></li>
            <li><a href="audir8.php">Audi R8 2022</a></li>
            <li><a href="Porsche911.php">Porsche 911 2015</a></li>
            <li><a href="TeslaModel3.php">Tesla model 3 2021</a></li>
            <li><a href="supra.php">Toyota Supra MK5</a></li>
            <li><a href="nissan.php">Nissan GTR R35</a></li>
            <li><a href="ferrariSF90.php">Ferrari SF90 2020</a></li>
            <li><a href="lamborghinirevuelto.php">Lamborghini Revuelto 2024</a></li>
            <li><a href="ageraone.php">Koenniseg Agera one 2021</a></li>
            <li><a href="MercedesAMG.php">Mercedes AMG One 2021</a></li>
            <li><a href="bugatti.php">Bugatti Chiron 2019</a></li>
            <li><a href="Mclaren.php">Mclaren Senna 2020</a></li>
        </ul>
        </div>

        <div class="footer-div-links siguenos">
          <h4>Síguenos</h4>
          <div class="footer-social-link">
            <a href="https://www.ecured.cu/images/2/28/Benjaminlira.jpg" TARGET="_BLANK"><i class="fab fa-facebook-f"></i></a>
            <a href="https://www.instagram.com/thiagoml43" TARGET="_BLANK"><i class="fab fa-instagram"></i></a>
            <a href="https://twitter.com/?lang=es" TARGET="_BLANK"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/santiicantale/?hl=es-la" TARGET="_BLANK"><i class="fab fa-linkedin"></i></a>
          </div>
        </div>

      </div>
    </div>
  </footer>
  <script src="loading.js"></script>
</body>
</html>