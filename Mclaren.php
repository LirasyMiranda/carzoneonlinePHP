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
<link rel="stylesheet" href="deportivo.css">
<link rel="stylesheet" href="footer.css">
<link rel="stylesheet" href="alquileres.css">
<link rel="stylesheet" href="LamborghiniHuracan.css"> 
<link rel="stylesheet" href="Mclaren.css"><!---CNombre del archivo-->
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
    <a class="aaa" href="hyperdeportivo.php">
      <img class="logo" src="logo-nuevo2.0.png" alt="">
    </a>
    <div style="width: 100%;">
        <i class='bx bx-search' style="color: #ffffffdd;"></i>
        <div class="menu-icon" onclick="toggleMenu()">
            <i class='bx bx-menu' id="menu-icon" style='color:#ffffffdd'></i>
        </div>
    </div>
</header>


    <!-- Menu mobile -->
<ul class="menu">
    <li><a href="hyperdeportivo.php">INFO</a></li>
    <li><a href="hyperdeportivo.php">MODELOS</a></li>
    <li><a href="hyperdeportivo.php">ALQUILER</a></li>
    <li style="padding-top: 60px"><a href="https://www.instagram.com/politecnicomodelo/?hl=es-la"><i class='bx bxl-instagram'></i></a></li>
    <li><a href="https://x.com/santiicantale"><i class='bx bxl-twitter'></i></i></a></li>
    <li><a href="https://www.youtube.com/@politecnicomodelo/featured"><i class='bx bxl-youtube'></i></i></a></li>
</ul>


    <!-- Header escritorio -->
    <header>
        <div class="header-escritorio header-escritorio-modelos">
                <a class="aaa" href="hyperdeportivo.php">
                  <img class="logo" src="logo-nuevo2.0.png" alt="LogoXD">
                </a>
                <div class="group">
                    <svg class="icon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
                    <input placeholder="Search" type="search" class="input">
                  </div>
            <div class="header-screen">
                <li>
                    <a href="hyperdeportivo.php">MODELOS</a>
                    <a href="hyperdeportivo.php">INFO</a>
                    <a href="hyperdeportivo.php">ALQUILER</a>
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
            </div>
        </div>     
    </header>


    <!-- ESPACIO LIBRE -->
    <div style="height: 4vh; position: relative; z-index: -10;"></div>
    <section style="height: 5vh; position: relative; z-index: -10;">
      <div style="width: 100%;" class="box-para"></div>
    </section>




    <section id="nashee" class="section-menu-modelo-fixed">
      <div id="div-icon-fixed">
        <i style="display: none;" class='bx bx-chevron-right' id="chevron-right" onclick="toggleMenu2()"></i>
        <i style="display: block;" class='bx bx-chevron-left' id="chevron-left" onclick="toggleMenu2()"></i>
      </div>
      <div id="div-opciones-f">
        <div id="div-opciones-f-2" style="width: 100%;">
          <section style="width: 100%;">

              <img src="Mclaren/Logo.webp" alt="">
              <h3 style="font-weight: 900; font-size: 19px;">Senna 2020</h3> <!---CNombre del modelo-->
          </section>
          <div>
              <a onclick="mostrarElemento1()" class="element" href="#opcion1"><p class="par parrafo">Modelo 3d</p></a> <!---CNombre de la opcion-->
          </div>
          <div>
              <a onclick="mostrarElemento2()" class="element" href="#opcion2"><p class="par2 parrafo">Motorización</p></a> <!---CNombre de la opcion-->
          </div>
          <div>
              <a onclick="mostrarElemento3()" class="element" href="#opcion3"><p class="par3 parrafo">Interior</p></a> <!---CNombre de la opcion-->
          </div>
          <div>
              <a onclick="mostrarElemento4()" class="element" href="#opcion4"><p class="par4 parrafo">Exterior</p></a> <!---CNombre de la opcion-->
          </div>
        </div>
      </div>
    </section>

    <main class="main-modelo3d">
      <section class="section-modelo3d">
        <iframe id="opcion1" title="McLaren Senna Free 3D model - Sketchfab" class="c-viewer__iframe" src="https://sketchfab.com/models/ea3e43a6eb004853a87fe9c58422eb96/embed?autostart=1&amp;internal=1&amp;tracking=0&amp;ui_ar=0&amp;ui_infos=0&amp;ui_snapshots=1&amp;ui_stop=0&amp;ui_theatre=1&amp;ui_watermark=0" id="api-frame" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking="true" execution-while-out-of-viewport="true" execution-while-not-rendered="true" web-share="true" allowfullscreen=""></iframe>
          
          <div class="caja-delante-3d">
              <section class="section-abajo">
                  <div class="div-abajo">
      
                  </div>
              </section>
          </div>
      </section>
    </main>



    <!-- Caracteristicas -->
    <div class="espacio-caracteristicas"></div>
    <div class="caja-antes-de-carac"></div>
    <main class="caracteristicas">



        <!-- MOTORIZACION -->
      <div id="opcion2" class="div-opcion2">

        <div>
          <section style="margin-bottom: 30px;" class="section-1 section-11">  
            <!-- img escritorio -->
            <div>
                <span style="color: #d34623;">Potencia infinita</span>
                <h2 class="h2-regulares color2">Motorizacion</h2>
                <h3 class="section-h3 color3">
                  El McLaren Senna 2020 es un superdeportivo diseñado para ofrecer un rendimiento extremo en pista, y su motorización es uno de los aspectos que más destaca. Está equipado con un motor V8 biturbo de 4.0 litros, capaz de generar una potencia impresionante de 800 caballos de fuerza y un torque de 800 Nm. Este motor, conocido internamente como M840TR, combina la ingeniería más avanzada de McLaren con materiales ligeros y resistentes para maximizar la eficiencia y la potencia. <br>
                  Este V8 se conecta a una transmisión automática de doble embrague de siete velocidades que permite cambios de marcha rápidos y precisos. La respuesta del motor es casi inmediata, gracias a la potencia de sus turbocompresores y a la sofisticación de su sistema de admisión de aire, diseñado para maximizar la cantidad de oxígeno que ingresa a los cilindros. Esto, sumado a la construcción ligera del coche, le permite alcanzar los 100 km/h en solo 2.8 segundos y una velocidad máxima de 340 km/h. <br>
                  Además, el motor está diseñado para ofrecer un equilibrio ideal entre potencia y control. El McLaren Senna también cuenta con un avanzado sistema de escape que optimiza el flujo de gases y genera un sonido característico, intensificando la experiencia de conducción. Toda esta ingeniería lo convierte en uno de los autos más rápidos y extremos jamás construidos por McLaren, ofreciendo una conducción tan precisa y emocionante como la de un coche de carreras. <br>
                </h3>
            </div>
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="Mercedes/motor.jpeg" alt="">
          </section>

          
          </section>

        </div>
        
      </div>








      <!-- INTERIOR -->
      <div id="opcion3" class="div-opcion3">
          <h1 id="h1-opcion3">Interior</h1>
          <section class="section-galeria">
            <div class="galeria-de-imagenes">
              <div class="fila1">
                <img class="fto1" src="Mclaren/volante.webp" alt="">
                <img class="fto2" src="Mclaren/interior1.jpg" alt="">
                <img class="fto3" src="Mclaren/interior2.jpg" alt="">
              </div>
              <div class="fila2">
                <div class="div1-fila2">
                  <img class="fto4" src="Mclaren/interior3.jpg" alt="">
                  <h1 style="margin-left: 100px; color: #ffffff;">Estilo</h1>
                </div>
                <div class="div2-fila2">
                  <img class="fto5" src="Mclaren/interior4.jpg" alt="">
                </div>
              </div>
              <h1 style="color: #ffffff;">a lo unico, como él solo.</h1>
            </div>
          </section>
        


        
      </div>







        <!-- Exterior -->
      <div id="opcion4" class="div-opcion3">
        <h1 id="h1-opcion3">Exterior</h1> 
        <section class="section-1">  
          <img class="img-deportivos-escritorio" src="Mclaren/general.webp" alt="">
          <div>
              <span style="color: #0f7080;">Senna</span>
              <h2 class="h2-regulares color2">General</h2>
              <h3 class="section-h3 color3">
                El McLaren Senna 2020 es un superdeportivo de alto rendimiento con un diseño exterior que refleja su enfoque en la velocidad, la aerodinámica y la precisión en el circuito. Inspirado en la leyenda de la Fórmula 1 Ayrton Senna, este automóvil tiene un aspecto agresivo y futurista, lleno de ángulos pronunciados y superficies aerodinámicas.
              </h3>
          </div>  
          <!-- img mobile -->
          <img class="img-deportivos-mobile" src="Mclaren/general.webp" alt="">
        </section>


      <div>
        <section style="margin-bottom: 30px;" class="section-1">  
          <!-- img escritorio -->
          <div>
              <span style="color: #c4c4c4;">Elegante</span>
              <h2 class="h2-regulares color2">Trasero</h2>
              <h3 class="section-h3 color3">
                Debajo del alerón, el Senna exhibe un difusor trasero prominente que maximiza la eficiencia aerodinámica y reduce la turbulencia del aire que pasa por debajo del vehículo. Este difusor también trabaja en conjunto con el alerón para optimizar el flujo de aire y minimizar la resistencia.
              </h3>
          </div>
          <img class="img-deportivos-escritorio" src="Mclaren/trasero.webp" alt="">
          <!-- img mobile -->
          <img class="img-deportivos-mobile" src="Mclaren/trasero.webp" alt="">
        </section>

        <section style="margin-bottom: 30px;" class="section-1">  
          <!-- img escritorio -->
          <img class="img-deportivos-escritorio" src="Mclaren/frontal.webp" alt="">
          <div>
              <span style="color: #8e0505;">Estabilidad</span>
              <h2 class="h2-regulares color2">Frontal</h2>
              <h3 class="section-h3 color3">
                Su capó es bajo y afilado, en línea con los principios aerodinámicos, permitiendo un flujo de aire eficiente que reduce la resistencia. Los faros, estrechos y angulosos, están integrados en la carrocería para mantener una estética limpia y minimizar la resistencia al viento. El frontal también incluye un sistema de conductos de aire que canalizan el flujo hacia los frenos y el motor, ayudando a mantener el sistema de frenado y el motor refrigerados bajo las intensas demandas de velocidad.
              </h3>
          </div>
          <!-- img mobile -->
          <img class="img-deportivos-mobile" src="Mclaren/frontal.webp" alt="">
        </section>

        <section style="margin-bottom: 30px;" class="section-1">  

          <div>
              <span style="color: #9160d1;">Excelente</span>
              <h2 class="h2-regulares color2">Perfil</h2>
              <h3 class="section-h3 color3">
                Las puertas de ala de gaviota, que se abren hacia arriba, no solo facilitan el acceso y ofrecen un toque visual dramático, sino que también contribuyen a mantener la estructura liviana del coche. Estas puertas incorporan ventanas divididas, en las que la sección inferior permite una mejor visión del circuito o de la carretera, un detalle diseñado para el piloto que aumenta la visibilidad y mejora la experiencia de conducción.
              </h3>
          </div>
          <!-- img escritorio -->
          <img class="img-deportivos-escritorio" src="Mclaren/perfil}.webp" alt="">
          <!-- img mobile -->
          <img class="img-deportivos-mobile" src="Mclaren/perfil}.webp" alt="">
        </section>

        <section class="section-1">  
          <!-- img escritorio -->
          <img class="img-deportivos-escritorio" src="Mercedes/1366_ruedas.jpeg" alt="">
          <div>
              <span style="color: #0f7080;">Potencial</span>
              <h2 class="h2-regulares color2">Luces</h2>
              <h3 class="section-h3 color3">
                Las luces son un elemento distintivo que combina tecnología avanzada y un diseño minimalista, diseñado tanto para estética como para funcionalidad aerodinámica.
              </h3>
          </div>
          <!-- img mobile -->
          <img class="img-deportivos-mobile" src="Mercedes/1366_ruedas.jpeg" alt="">
        </section>






        
      </div>
      


      
    </div>

    </main>





      
<!-- Footer -->
   <footer class="footer">
    <div class="footer-div1">
      <div class="footer-div-row">

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
  <script src="MODELOS.js"></script>
  <script src="loading-modelo.js"></script>


  
</body>
</html>