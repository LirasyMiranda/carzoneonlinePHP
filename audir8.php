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
<link rel="stylesheet" href="AudiR8.css">   <!---CNombre del archivo-->
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
    <a class="aaa" href="deportivo.php">
      <img class="logo" src="logo-nuevo2.0.png" alt="">
    </a>
    <div style="width: 100%;">
        <i class='bx bx-search' style="color: #ffffff;"></i>
        <div class="menu-icon" onclick="toggleMenu()">
            <i class='bx bx-menu' id="menu-icon" style='color:#ffffff'></i>
        </div>
    </div>
</header>


    <!-- Menu mobile -->
<ul class="menu">
    <li><a href="deportivo.php">INFO</a></li>
    <li><a href="deportivo.php">MODELOS</a></li>
    <li><a href="deportivo.php">ALQUILER</a></li>
    <li style="padding-top: 60px"><a href="https://www.instagram.com/politecnicomodelo/?hl=es-la"><i class='bx bxl-instagram'></i></a></li>
    <li><a href="https://x.com/ipmodelo"><i class='bx bxl-twitter'></i></i></a></li>
    <li><a href="https://www.youtube.com/@politecnicomodelo/featured"><i class='bx bxl-youtube'></i></i></a></li>
</ul>


    <!-- Header escritorio -->
    <header>
        <div class="header-escritorio header-escritorio-modelos">
                <a class="aaa" href="deportivo.php">
                  <img class="logo" src="logo-nuevo2.0.png" alt="LogoXD">
                </a>
                <div class="group">
                    <svg class="icon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
                    <input placeholder="Search" type="search" class="input">
                  </div>
            <div class="header-screen">
                <li>
                    <a href="deportivo.php">MODELOS</a>
                    <a href="deportivo.php">INFO</a>
                    <a href="deportivo.php">ALQUILER</a>
                </li>
            </div>
            <div class="icons">
                <a style="color:#3a3a3a;" href="https://www.google.com/maps/place/Car+Zone/@40.6436943,-74.257946,3a,75y,134.12h,88.81t/data=!3m7!1e1!3m5!1sKJKV2VZfLyFN7lZlggF8iw!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fcb_client%3Dmaps_sv.tactile%26w%3D900%26h%3D600%26pitch%3D1.193780210206242%26panoid%3DKJKV2VZfLyFN7lZlggF8iw%26yaw%3D134.12484631776755!7i16384!8i8192!4m14!1m7!3m6!1s0x89c3b3806ed6c07d:0xdd0b3929d55856e5!2sCar+Zone!8m2!3d40.6434571!4d-74.2577234!16s%2Fg%2F11qpwr7tlq!3m5!1s0x89c3b3806ed6c07d:0xdd0b3929d55856e5!8m2!3d40.6434571!4d-74.2577234!16s%2Fg%2F11qpwr7tlq?coh=205410&entry=ttu&g_ep=EgoyMDI0MDgyOC4wIKXMDSoASAFQAw%3D%3D"><i class='bx bx-map'></i></a>
                <?php 
                    if(!$logueado){ ?>
                        <a style="color:#3a3a3a;" href="tarea_html/index_login.php">
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
                    <a style="color:#3a3a3a;" href=""><i class='bx bx-group'></i></a>
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

              <img src="R8/logo.png" alt="">
              <h3>Audi R8 Coupe 2022</h3> <!---CNombre del modelo-->
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
        <iframe id="opcion1" title="Audi R8 V10 Coupe 2022 3D model - Sketchfab" class="c-viewer__iframe" src="https://sketchfab.com/models/f3cd1254f2454bdfbd5dfc8834ca4fb9/embed?autostart=1&amp;internal=1&amp;tracking=0&amp;ui_infos=0&amp;ui_snapshots=1&amp;ui_stop=0&amp;ui_watermark=0" id="api-frame" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking="true" execution-while-out-of-viewport="true" execution-while-not-rendered="true" web-share="true" allowfullscreen=""></iframe> 
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
    <main class="caracteristicas">



        <!-- MOTORIZACION -->
      <div id="opcion2" class="div-opcion2">
        <section class="section-1">
          
          <!-- img escritorio -->
          <img class="img-deportivos-escritorio" src="R8/audiR8-motorizacion.jpg">
            <span style="color: #bb621d;">
              <span style="font-weight: 600; color: #bd2424;">Motorizacion</span>
              <h2 id="opcion2" class="h2-regulares">Especificaciones técnicas</h2>
              <h3 class="section-h3">
                Potencia: <br>
                419 kW (570 CV) <br>
                Velocidad máxima: <br>
                324 km/h <br>
                Aceleración: <br>
                3.4 segundos de 0 a 100 km/h
              </h3> 
          <!-- img mobile -->
          <img class="img-deportivos-mobile" src="R8/audiR8-motorizacion.jpg" alt="">
        </section>

        <div>
          <section style="margin-bottom: 30px;" class="section-1">  

            <div>
                <span style="color: #dddddd;">Potencia pura</span>
                <h2 class="h2-regulares color2">Motor</h2>
                <h3 class="section-h3 color3">
                  El motor V10 atmosférico, ubicado entre los ejes, es el corazón del Audi R8 Coupé V1 quattro. El motor 5.2 FSI impulsa el carácter del vehículo con su potencia desatada (su par motor máximo de 560 Nm está disponible a 6.300 revoluciones por minuto). Su estrecha relación con los coches de alto rendimiento se hace patente en muchos aspectos.
                </h3>
            </div>
                        <!-- img escritorio -->
                        <img class="img-deportivos-escritorio" src="R8/motor.jpg">
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="R8/motor.jpg" alt="">
          </section>

          <section style="margin-bottom: 30px;" class="section-1">  
            <!-- img escritorio -->
            <img class="img-deportivos-escritorio" src="R8/velocidad.jpg" alt="">
            <div>
                <span style="color: #af2828;">Impulso extraordinario</span>
                <h2 class="h2-regulares color2">Aceleración</h2>
                <h3 class="section-h3 color3">
                  El motor V10 atmosférico tiene una potencia de 456 kW (620 CV) que lo catapultan de 0 a 100 km/h en tan solo 3,1 segundos, llegando hasta los 330 km.
                </h3>
            </div>
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="R8/velocidad.jpg" alt="">
          </section>

          <section style="margin-bottom: 30px;" class="section-1">  
            <!-- img escritorio -->
            <div>
                <span style="color: #ffffff;">Precisión desde todos los ángulos</span>
                <h2 class="h2-regulares color2">Chasis</h2>
                <h3 class="section-h3 color3">
                  El Audi R8 presenta ejes dobles de aluminio que guían las cuatro ruedas. Ofrece el sistema de conducción dinámica Audi drive select con cuatro modos de serie. Y el sistema Audi magnetic ride permite contar amortiguadores que se adaptan a tu estilo de conducción y al perfil de la carretera, realizando modificaciones cada milisegundo para cada rueda por separado.
                </h3>
            </div>
            <img class="img-deportivos-escritorio" src="R8/audiR8-motorizacion2.jpg" alt="">
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="R8/audiR8-motorizacion2.jpg" alt="">
          </section>

          <section class="section-1">  
            <!-- img escritorio -->
            <img class="img-deportivos-escritorio" src="R8/carrera.jpg" alt="">
            <div>
                <span style="color: #911212;">Potencia</span>
                <h2 class="h2-regulares color2">Carreras</h2>
                <h3 class="section-h3 color3">
                  Dominando las pistas con su potencia imparable, diseñado para conquistar las carreras y llevar la excelencia a cada curva.
            </div>
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="R8/carrera.jpg" alt="">
          </section>

          <section style="margin-bottom: 30px;" class="section-1">  
            <!-- img escritorio -->
            <div>
                <span style="color: #8d9ba1;">Organizacion</span>
                <h2 class="h2-regulares color2">Mecanismo</h2>
                <h3 class="section-h3 color3">
                  Como hasta ahora, la fuerza se distribuye a las ruedas traseras a través del cambio S tronic de siete velocidades. El diferencial mecánico de deslizamiento limitado distribuye el par de forma ideal en función de la situación de conducción. Con ello garantiza una tracción óptima incluso cuando el asfalto está mojado y suma la posibilidad de realizar derrapes controlados.
                </h3>
            </div>
            <img class="img-deportivos-escritorio" src="R8/mecanismo.jpg" alt="">
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="R8/mecanismo.jpg" alt="">
          </section>
        </div>
        
      </div>








      <!-- INTERIOR -->
      <div id="opcion3" class="div-opcion3">
          <h1 id="h1-opcion3">Interior</h1>
          <section class="section-1">  
            <img class="img-deportivos-escritorio" src="R8/interior.jpg" alt=""> <!--CIMAGEN-->
            <div>
                <span style="color: #f36f28;">Perfeccionado</span> <!--COLOR-->
                <h2 class="h2-regulares">Interno</h2>
                <h3 style="color: rgb(44, 44, 44);" class="section-h3 color3">
                  El interior del R8 es la fusión perfecta de potencia y elegancia, transformando cada ruta en una experiencia de conducción excepcional."
                </h3>
            </div>  
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="R8/interior.jpg" alt="">
          </section>


        <div>
          <section style="margin-bottom: 30px;" class="section-1">   
            <!-- img escritorio -->
            <div>
                <span style="color: #397715;">Comodidad en estado puro</span> <!--COLOR-->
                <h2 class="h2-regulares color2">Asientos</h2>
                <h3 class="section-h3 color3">
                  Los asientos ofrecen una experiencia de confort supremo, fusionando lujo y ergonomía para crear un "Oasis de Comodidad en Alta Velocidad". Diseñados meticulosamente para brindar soporte durante la conducción deportiva y relajación en los viajes largos, estos asientos son la perfecta combinación de funcionalidad y elegancia, asegurando que cada kilómetro sea tan cómodo como emocionante.
                </h3>
            </div>
            <img class="img-deportivos-escritorio" src="R8/asientos.webp" alt=""> <!--Cimagen-->
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="R8/asientos.webp" alt=""><!--Cimagen-->
          </section>

          <section style="margin-bottom: 30px;" class="section-1">  
            <!-- img escritorio -->
            <img class="img-deportivos-escritorio" src="R8/volante.jpg" alt=""> <!--Cimagen-->
            <div>
                <span style="color: #c21919;">Rapidez al tacto</span> <!--COLOR-->
                <h2 class="h2-regulares color2">Volante</h2>
                <h3 class="section-h3 color3">
                  El volante de cuero de la serie S Line ofrece un agarre excepcional y un diseño elegante, con un toque de lujo que eleva la experiencia de conducción. 
                </h3>
            </div>
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="R8/volante.jpg" alt=""> <!--Cimagen-->
          </section>

          <section style="margin-bottom: 30px;" class="section-1">  
            <!-- img escritorio -->
            <div>
                <span style="color: #a5a5a5;">Confort</span> <!--COLOR-->
                <h2 class="h2-regulares color2">Climatizacion</h2>
                <h3 class="section-h3 color3">
                    El Audi R8 ofrece un "Control Climático de Precisión", donde la tecnología de vanguardia se encuentra con el confort personalizado. Con su sistema de climatización de última generación y una interfaz intuitiva, el R8 te permite ajustar el ambiente interior con la misma precisión con la que dominas la carretera. Experimenta un oasis de comodidad high-tech, donde cada viaje se convierte en una sinfonía de lujo y rendimiento, perfectamente orquestada desde la punta de tus dedos.
                </h3>
            </div>
            <img class="img-deportivos-escritorio" src="R8/control.jpeg" alt=""> <!--Cimagen-->
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="R8/control.jpeg" alt=""> <!--Cimagen-->
          </section>
          <section style="margin-bottom: 30px;" class="section-1">  
            <!-- img escritorio -->
            <img class="img-deportivos-escritorio" src="R8/palanca-manual.jpg" alt=""> <!--Cimagen-->
            <div>
                <span style="color: #b91313;">Manual</span> <!--COLOR-->
                <h2 class="h2-regulares color2">Palanca</h2>
                <h3 class="section-h3 color3">
                  La palanca de cambios manual de seis velocidades ofrece un agarre excepcional y un diseño elegante, con un toque de lujo que eleva la experiencia de conducción. 
                </h3>
            </div>
            <!-- img mobile -->
              <img class="img-deportivos-mobile" src="R8/palanca-manual.jpg" alt=""> <!--Cimagen-->
          </section>
        </div>
        

        
        <section style="flex-direction: column;" class="section-1-carrusel">  
          <h2 style="color: #ffffff;" class="h2-regulares">- Funciones especificas</h2>
          <!-- CARRUSEL -->
          <div id="slider">
            <input type="radio" name="slider" id="slide1" checked>
            <input type="radio" name="slider" id="slide2">
            <input type="radio" name="slider" id="slide3">
            <input type="radio" name="slider" id="slide4">
            <div id="slides">
               <div id="overflow">
                  <div class="inner">
                     <div class="slide slide_1">
                        <div class="slide-img1"></div>
                        <div class="slide-content">
                           <span style="color: #2436d4;">Tablero</span>
                           <h2>Camara trasera</h2>
                           <p>El tablero digital de 12,3 pulgadas ofrece una amplia tecnología, desde una camara para todo tipo de ángulos, hasta una pantalla táctil para una experiencia de conducción inmersiva, con información clara y fácil de leer. Incluye funciones como el sistema de navegación, el sistema de audio y el sistema de comunicación, todo en un solo dispositivo.</p>
                        </div>
                     </div>
                     <div class="slide slide_2">
                        <div class="slide-img2"></div>
                        <div class="slide-content">
                           <span style="color: #000000;">Accesible</span>
                           <h2>Cambios en volante</h2>
                           <p>El volante ofrece un sistema de cambios de marchas manuales que te pueden resultar mas accesibles que un cambio de palanca.</p>
                        </div>
                     </div>
                     <div class="slide slide_3">
                        <div class="slide-img3"></div>
                        <div class="slide-content">
                          <span style="color: #353535;">Control</span> 
                          <h2>Control de radio</h2>
                           <p>El control de radio es una función que te permite controlar la radio de tu vehículo de manera facil y sencilla, con un volante que tiene un botón para subir y bajar la radio.</p>
                        </div>
                     </div>
                     <div class="slide slide_4">
                        <div class="slide-img4"></div>
                        <div class="slide-content">
                          <span style="color: #464646;">A su estilo</span>
                           <h2>2 Puertas</h2>
                           <p>El Audi R8 ofrece un diseño de dos puertas que combina la elegancia con la funcionalidad, con una forma aerodinámica y un diseño moderno que te permite abrir y cerrar las puertas con facilidad.</p>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <div id="controls">
               <label for="slide1"></label>
               <label for="slide2"></label>
               <label for="slide3"></label>
               <label for="slide4"></label>
            </div>
            <div id="bullets">
               <label for="slide1"></label>
               <label for="slide2"></label>
               <label for="slide3"></label>
               <label for="slide4"></label>
            </div>
         </div>
        </section>

        
      </div>







        <!-- Exterior -->
      <div id="opcion4" class="div-opcion3">
        <h1 id="h1-opcion3">Exterior</h1> 
        <section class="section-1">  
          <img class="img-deportivos-escritorio" src="R8/exterior.avif" alt="">
          <div>
              <span style="color: #aa932a;">R8 2022</span>
              <h2 class="h2-regulares">Exterior</h2>
              <h3 class="section-h3">
                El diseño del Audi R8 2022 es una obra maestra de ingeniería y estética, con líneas agresivas y una estética audaz que te invita a dejar huella en cada camino. Desde su frente imponente hasta sus ruedas de gran tamaño, cada detalle está diseñado para expresar un mensaje de velocidad y poder.
              </h3>
          </div>  
          <!-- img mobile -->
          <img class="img-deportivos-mobile" src="R8/exterior.avif" alt="">
        </section>


      <div>
        <section style="margin-bottom: 30px;" class="section-1">  
          <!-- img escritorio -->
          <div>
              <span style="color: #0e11b4;">Agresiva</span>
              <h2 class="h2-regulares color2">Frontal</h2>
              <h3 class="section-h3 color3">
                  La fachada frontal del Audi R8 tiene un diseño agresivo y funcionalidad. La parrilla Singleframe, amplia y baja, se combina con faros LED afilados que evocan la mirada penetrante de un depredador acechando a su presa. Las grandes entradas de aire laterales no solo realzan su aspecto feroz, sino que también optimizan el flujo de aire para un rendimiento superior. Cada línea y curva está meticulosamente diseñada para cortar el viento, prometiendo una experiencia de conducción que es tan emocionante como su apariencia.
              </h3>
          </div>
          <img class="img-deportivos-escritorio" src="R8/frontal.jpg" alt="">
          <!-- img mobile -->
          <img class="img-deportivos-mobile" src="R8/frontal.jpg" alt="">
        </section>

        <section style="margin-bottom: 30px;" class="section-1">  
          <!-- img escritorio -->
          <img class="img-deportivos-escritorio" src="R8/trasera.jpg" alt="">
          <div>
              <span style="color: #0e11b4;">Perfeccion</span>
              <h2 class="h2-regulares color2">Trasero</h2>
              <h3 class="section-h3 color3">
                La parte trasera con sus luces potentes es una perfeccion de la industria de Audi, encarnando la filosofía "Donde la potencia encuentra la elegancia". Con sus líneas afiladas y su perfil aerodinámico, el R8 no solo deja una impresión duradera en quienes lo ven partir, sino que también optimiza el rendimiento y la estabilidad a altas velocidades.
              </h3>
          </div>
          <!-- img mobile -->
          <img class="img-deportivos-mobile" src="R8/trasera.jpg" alt="">
        </section>

        <section style="margin-bottom: 30px;" class="section-1">  
          <!-- img escritorio -->
          <div>
              <span style="color: #be1010;">Brillantes</span>
              <h2 class="h2-regulares color2">Faros</h2>
              <h3 class="section-h3 color3">
              Los faros LED tienen una gran potencia, combinando tecnología de vanguardia con un diseño impresionante. Estos faros no solo iluminan el camino con una claridad excepcional, sino que también definen el carácter audaz y futurista del vehículo. Con su intensidad ajustable y su amplio alcance, estos faros transforman la noche en día.
              </h3>
          </div>
          <img class="img-deportivos-escritorio" src="R8/luces.jpg" alt="">
          <!-- img mobile -->
          <img class="img-deportivos-mobile" src="R8/luces.jpg" alt="">
        </section>

        <section class="section-1">  
          <!-- img escritorio -->
          <img class="img-deportivos-escritorio" src="R8/rueda.jpg" alt="">
          <div>
              <span style="color: #d4a39c;">Detalles</span>
              <h2 class="h2-regulares color2">Ruedas</h2>
              <h3 class="section-h3 color3">
                Con un patrón de radios en Y de 20 pulgadas, estas llantas de aleación forjada no solo son impresionantes visualmente, sino que también optimizan el rendimiento aerodinámico y la disipación del calor de los frenos. El acabado en titanio mate complementa perfectamente los detalles en las puertas del R8, que presentan inserciones de fibra de carbono mate.
              </h3>
          </div>
          <!-- img mobile -->
          <img class="img-deportivos-mobile" src="R8/rueda.jpg" alt="">
        </section>

        <section class="section-galeria">
          <div class="galeria-de-imagenes">
            <div class="fila1">
              <img class="fto1" src="R8/galeria1.jpg" alt="">
              <img class="fto2" src="R8/galeria2.jpg" alt="">
              <img class="fto3" src="R8/galeria3.jpg" alt="">
            </div>
            <div class="fila2">
              <div class="div1-fila2">
                <img class="fto4" src="R8/galeria4.jpg" alt="">
                <h1 style="margin-left: 100px;">Potencia</h1>
              </div>
              <div class="div2-fila2">
                <img class="fto5" src="R8/galeria5.jpg" alt="">
              </div>
            </div>
            <h1>Audi R8 2022, donde la adrenalina con estilo no tiene límites</h1>
          </div>
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