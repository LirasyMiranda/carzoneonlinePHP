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
<link rel="stylesheet" href="nissan.css"><!---CNombre del archivo-->
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
        <i class='bx bx-search' style="color: #000000dd;"></i>
        <div class="menu-icon" onclick="toggleMenu()">
            <i class='bx bx-menu' id="menu-icon" style='color:#000000dd'></i>
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
                <a style="color:#000000;" href="https://www.google.com/maps/place/Car+Zone/@40.6436943,-74.257946,3a,75y,134.12h,88.81t/data=!3m7!1e1!3m5!1sKJKV2VZfLyFN7lZlggF8iw!2e0!6shttps:%2F%2Fstreetviewpixels-pa.googleapis.com%2Fv1%2Fthumbnail%3Fcb_client%3Dmaps_sv.tactile%26w%3D900%26h%3D600%26pitch%3D1.193780210206242%26panoid%3DKJKV2VZfLyFN7lZlggF8iw%26yaw%3D134.12484631776755!7i16384!8i8192!4m14!1m7!3m6!1s0x89c3b3806ed6c07d:0xdd0b3929d55856e5!2sCar+Zone!8m2!3d40.6434571!4d-74.2577234!16s%2Fg%2F11qpwr7tlq!3m5!1s0x89c3b3806ed6c07d:0xdd0b3929d55856e5!8m2!3d40.6434571!4d-74.2577234!16s%2Fg%2F11qpwr7tlq?coh=205410&entry=ttu&g_ep=EgoyMDI0MDgyOC4wIKXMDSoASAFQAw%3D%3D"><i class='bx bx-map'></i></a>
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

              <img src="R35/logo.webp" alt="">
              <h3 class="nombre">Nissan GTR R35</h3> <!---CNombre del modelo-->
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
        
        <iframe id="opcion1" title="Nissan GTR R35 2017 3D model - Sketchfab" class="c-viewer__iframe" src="https://sketchfab.com/models/7efdcbd09374459a983ad99be5b1dd38/embed?autostart=1&amp;internal=1&amp;tracking=0&amp;ui_infos=0&amp;ui_snapshots=1&amp;ui_stop=0&amp;ui_theatre=1&amp;ui_watermark=0" id="api-frame" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking="true" execution-while-out-of-viewport="true" execution-while-not-rendered="true" web-share="true" allowfullscreen=""></iframe>
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
          <img class="img-deportivos-escritorio" src="R35/motorizacion1.webp">
            <span style="color: #b1b1b1;">
              <span style="font-weight: 600; color: #e48a03;">Motorizacion</span>
              <h2 id="opcion2" class="h2-regulares ">La vuelta</h2>
              <h3 class="section-h3 ">
                El Nissan GT-R R35, conocido como "Godzilla", es la continuación de una leyenda que comenzó con el R32 y se consolidó con el R34. Mientras que el R34 GT-R, lanzado en 1999, era venerado por su motor RB26DETT, un seis cilindros en línea biturbo, el R35, introducido en 2007, representó un cambio significativo en la tecnología de motorización.
              </h3> 
          <!-- img mobile -->
          <img class="img-deportivos-mobile" src="R35/motorizacion1.webp" alt="">
        </section>

        <div>
          <section style="margin-bottom: 30px;" class="section-1">  
            <!-- img escritorio -->
            <img class="img-deportivos-escritorio" src="R35/motorizacion2.jpg" alt="">
            <div>
                <span style="color: #e48a03;">Impulso infinito</span>
                <h2 class="h2-regulares ">Motor</h2>
                <h3 class="section-h3 ">
                  El R35 se equipa con el motor VR38DETT, un poderoso seis cilindros en V también biturbo, que ofrece una experiencia de conducción completamente diferente. Este motor, de 3.8 litros, produce una potencia que supera los 480 caballos de fuerza en su versión estándar, y con modificaciones y versiones especiales, puede alcanzar cifras aún más impresionantes. La combinación de este motor con una transmisión de doble embrague de seis velocidades y el sistema de tracción integral ATTESA E-TS Pro garantiza una aceleración y un manejo excepcionales.
                </h3>
            </div>
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="R35/motorizacion2.jpg" alt="">
          </section>

          <section style="margin-bottom: 30px;" class="section-1">  
            <!-- img escritorio -->
            <img class="img-deportivos-escritorio" src="R35/motorizacion3.jpg" alt="">
            <div>
                <span style="color: #e48a03;">Anti aire</span>
                <h2 class="h2-regulares ">Aerodinamica</h2>
                <h3 class="section-h3 ">
                  La aerodinámica del Nissan GT-R R35 es un aspecto fundamental que contribuye a su rendimiento y estabilidad a altas velocidades. Desde su lanzamiento, el diseño del R35 ha sido optimizado para reducir la resistencia al aire y mejorar la carga aerodinámica, elementos clave para un superdeportivo de su categoría.
                  El diseño exterior del R35 presenta líneas agresivas y un perfil bajo que no solo son estéticamente atractivas, sino que también minimizan la turbulencia. La parrilla frontal amplia y los conductos de aire están estratégicamente ubicados para canalizar el flujo de aire de manera efectiva, lo que ayuda a enfriar el motor y los frenos mientras se reduce la resistencia.
                </h3>
            </div>
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="R35/motorizacion3.jpg" alt="">
          </section>

          <section style="margin-bottom: 30px;" class="section-1">  
            <img class="img-deportivos-escritorio" src="R35/motorizacion4.jpg" alt="">
            <!-- img escritorio -->
            <div>
                <span style="color: #e48a03">Traccion</span>
                <h2 class="h2-regulares ">Nuevos diseños</h2>
                <h3 class="section-h3 ">
                  La tracción del Nissan GT-R R35 es uno de sus aspectos más destacados y se considera uno de los pilares de su excepcional rendimiento. Este modelo utiliza un sofisticado sistema de tracción integral conocido como ATTESA E-TS Pro, que brinda una experiencia de conducción altamente dinámica y segura, tanto en pista como en carretera.
                </h3>
            </div>
            
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="R35/motorizacion4.jpg" alt="">
          </section>

        </div>
        
      </div>








      <!-- INTERIOR -->
      <div id="opcion3" class="div-opcion3">
          <h1 id="h1-opcion3">Interior</h1>
          <section class="section-1">  
            <img class="img-deportivos-escritorio" src="R35/interior1.webp" alt=""> <!--CIMAGEN-->
            <div>
                <span style="color: #e48a03;">Moderno</span> <!--COLOR-->
                <h2 class="h2-regulares ">Interior</h2>
                <h3 class="section-h3 ">
                  Nissan GT-R™ Premium 2024. 
                  La forma obedece a la función. Para una lectura rápida, el nivel visual pone toda la información clave que necesitas ver al mismo nivel. El nivel táctil pone todos los interruptores clave al alcance de la mano.
    
                </h3>
            </div>  
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="R35/interior1.webp">
          </section>


        <div>
          <section style="margin-bottom: 30px;" class="section-1">   
            <!-- img escritorio -->
            <div>
                <span style="color: #e48a03;">Comodidad</span> <!--COLOR-->
                <h2 class="h2-regulares ">Asientos</h2>
                <h3 class="section-h3 ">
                    El medidor combinado usa un diseño de engranajes. El tacómetro está ubicado en el centro y el indicador de cambios grande en la parte superior derecha para una lectura inmediata.
    
                </h3>
            </div>
            <img class="img-deportivos-escritorio" src="R35/interior2.webp" alt=""> <!--Cimagen-->
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="R35/interior2.webp" alt=""><!--Cimagen-->
          </section>

          <section style="margin-bottom: 30px;" class="section-1">  
            <!-- img escritorio -->
            <img class="img-deportivos-escritorio" src="R35/interior3.jpg" alt=""> <!--Cimagen-->
            <div>
                <span style="color: #e48a03;">Pantalla led</span> <!--COLOR-->
                <h2 class="h2-regulares ">Apple Car Pl  ay</h2>
                <h3 class="section-h3 ">
                  Apple CarPlay te permite tener a bordo tus contactos, tus apps favoritas de mensajes, listas de Apple Music®, Apple Maps y mucho más. 
                </h3>
            </div>
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="R35/interior3.jpg" alt=""> <!--Cimagen-->
          </section>

          <section style="margin-bottom: 30px;" class="section-1">  
            <!-- img escritorio -->
            <div>
                <span style="color: #e48a03;">Nuevas Tecnologias</span> <!--COLOR-->
                <h2 class="h2-regulares ">Mandos en pantalla</h2>
                <h3 class="section-h3 ">
                    Situado justo detrás de la palanca de cambios, este dial multifunción te permite controlar el sistema de infoentretenimiento sin necesidad de mirar hacia abajo ni tocar la pantalla. 
    
                </h3>
            </div>
            <img class="img-deportivos-escritorio" src="R35/interior4.webp" alt=""> <!--Cimagen-->
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="R35/interior4.webp" alt=""> <!--Cimagen-->
          </section>

          
        </div>

              


        
      </div>







        <!-- Exterior -->
        <div id="opcion4" class="div-opcion3">
            <h1 id="h1-opcion3">Exterior</h1> 
            <section class="section-1">  
              <img class="img-deportivos-escritorio" src="R35/exterior1.webp" alt="">
              <div>
                  <span style="color: #e48a03;">Renacer</span>
                  <h2 class="h2-regulares ">Exterior</h2>
                  <h3 class="section-h3 ">
                    El exterior del Nissan GT-R R35 es una combinación perfecta de agresividad y elegancia, diseñada para atraer miradas y transmitir un sentido de rendimiento. Desde su lanzamiento en 2007, el R35 ha mantenido una estética que refleja su herencia como superdeportivo, mientras incorpora elementos modernos que lo distinguen en la carretera.
                  </h3>
              </div>  
              <!-- img mobile -->
              <img class="img-deportivos-mobile" src="R35/exterior1.webp" alt="">
            </section>
    
    
          <div>
            <section style="margin-bottom: 30px;" class="section-1">  
              <!-- img escritorio -->
              <div>
                  <span style="color: #e48a03;">Agresiva</span>
                  <h2 class="h2-regulares ">Frontal</h2>
                  <h3 class="section-h3 ">
                    El diseño frontal del Nissan GT-R R35 es una declaración de intenciones que combina agresividad, funcionalidad y tecnología avanzada. Desde el primer vistazo, la parrilla amplia y distintiva captura la atención, diseñada no solo para atraer miradas, sino también para optimizar la refrigeración del motor y mejorar la aerodinámica del vehículo.
                  </h3>
              </div>
              <img class="img-deportivos-escritorio" src="R35/exterior2.jpg" alt="">
              <!-- img mobile -->
              <img class="img-deportivos-mobile" src="R35/exterior2.jpg" alt="">
            </section>
    
            <section style="margin-bottom: 30px;" class="section-1">  
              <!-- img escritorio -->
              <img class="img-deportivos-escritorio" src="R35/exterior3.webp" alt="">
              <div>
                  <span style="color: #e48a03;">Perfeccion</span>
                  <h2 class="h2-regulares ">Trasera</h2>
                  <h3 class="section-h3 ">
                    Las luces traseras del GT-R tienen un estatus verdaderamente icónico. Son sinónimo de Nissan GT-R y constituyen la visión final perfecta de un asombroso diseño.
                  </h3>
              </div>
              <!-- img mobile -->
              <img class="img-deportivos-mobile" src="R35/exterior3.webp" alt="">
            </section>
    
            <section style="margin-bottom: 30px;" class="section-1">  
              <!-- img escritorio -->
              <div>
                  <span style="color: #e48a03;">Brillantes</span>
                  <h2 class="h2-regulares ">Faros</h2>
                  <h3 class="section-h3 ">
                    El Nissan GT-R está equipado con luces delanteras multi-LED eficientes y de alta intensidad que crean un distintivo diseño iluminado, generando una personalidad visual exterior icónica.
                  </h3>
              </div>
              <img class="img-deportivos-escritorio" src="R35/exterior4.webp" alt="">
              <!-- img mobile -->
              <img class="img-deportivos-mobile" src="R35/exterior4.webp" alt="">
            </section>
    
            <section class="section-1">  
              <!-- img escritorio -->
              <img class="img-deportivos-escritorio" src="R35/exterior5.webp" alt="">
              <div>
                  <span style="color: #e48a03;">Detalles</span>
                  <h2 class="h2-regulares ">Ruedas</h2>
                  <h3 class="section-h3 ">
                    Los rines forjados de 20" RAYS® tienen un acabado maquinado que les dan un aspecto de alta calidad y alto desempeño. 
                  </h3>
              </div>
              <!-- img mobile -->
              <img class="img-deportivos-mobile" src="R35/exterior5.webp" alt="">
            </section>
    
            <section class="section-galeria">
              <div class="galeria-de-imagenes">
                <div class="fila1">
                  <img class="fto1" src="R35/colage1.avif" alt="">
                  <img class="fto2" src="R35/colage2.jpg" alt="">
                  <img class="fto3" src="R35/colage3.webp" alt="">
                </div>
                <div class="fila2">
                  <div class="div1-fila2">
                    <img class="fto4" src="R35/colage4.webp" alt="">
                    <h1 style="margin-left: 100px;">Potencia</h1>
                  </div>
                  <div class="div2-fila2">
                    <img class="fto5" src="R35/colage5.jpg" alt="">
                  </div>
                </div>
                <h1>"Godzilla", la vuelta de una bestia</h1>
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
            <li><a href="BmwM1.php">BMW 1m 2012</a></li>
            <li><a href="LamborghiniHuracan.php">Lamborghini Huracan 2020</a></li>
            <li><a href="AudiR8.php">Audi R8 2022</a></li>
            <li><a href="Porsche911.php">Porsche 911 2015</a></li>
            <li><a href="nissan.php">Nissan GTR R35</a></li>
            <li><a href="ferrariSF90.php">Ferrari SF90 2020</a></li>
            <li><a href="LamborghiniRevuelto.php">Lamborghini Revuelto 2024</a></li>
            <li><a href="Ageraone.php">Koenniseg Agera one 2021</a></li>
            <li><a href="MercedesAMG.php">Mercedes AMG One 2021</a></li>
            <li><a href="Bugatti.php">Bugatti Chiron 2019</a></li>
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