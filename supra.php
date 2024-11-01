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
<link rel="stylesheet" href="supra.css"><!---CNombre del archivo-->
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

              <img src="SupraMK5/logo-toyota.svg" alt="">
              <h3 class="nombre">Supra MK5</h3> <!---CNombre del modelo-->
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
        
        <iframe id="opcion1" title="Toyota GR Supra 3D model - Sketchfab" class="c-viewer__iframe" src="https://sketchfab.com/models/9231f2d5e71a43dd87603dc0b339d99d/embed?autostart=1&amp;internal=1&amp;tracking=0&amp;ui_infos=0&amp;ui_snapshots=1&amp;ui_stop=0&amp;ui_watermark=0" id="api-frame" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking="true" execution-while-out-of-viewport="true" execution-while-not-rendered="true" web-share="true" allowfullscreen=""></iframe>
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
          <img class="img-deportivos-escritorio" src="SupraMK5/motorizacion1.jpg">
            <span style="color: #b1b1b1;">
              <span style="font-weight: 600; color: #b8b8b8;">Motorizacion</span>
              <h2 id="opcion2" class="h2-regulares color2">El Renacer</h2>
              <h3 class="section-h3 color3">
                El Toyota Supra MK5, oficialmente conocido como Toyota GR Supra, fue lanzado en 2019 y marca el regreso de este icónico modelo después de un paréntesis de casi dos décadas. Desarrollado en colaboración con BMW, el MK5 comparte muchos componentes con el BMW Z4, lo que le aporta una base sólida en términos de rendimiento y tecnología.
              </h3> 
          <!-- img mobile -->
          <img class="img-deportivos-mobile" src="SupraMK5/motorizacion1.jpg" alt="">
        </section>

        <div>
          <section style="margin-bottom: 30px;" class="section-1">  
            <!-- img escritorio -->
            <img class="img-deportivos-escritorio" src="SupraMK5/motorizacion2.jpg" alt="">
            <div>
                <span style="color: #d34623;">Impulso infinito</span>
                <h2 class="h2-regulares color2">Motor</h2>
                <h3 class="section-h3 color3">
                    Bajo el capó, el Supra MK5 ofrece un motor turboalimentado de seis cilindros en línea, el B58, que produce alrededor de 335 caballos de fuerza. Este motor, conocido por su suavidad y capacidad de respuesta, permite que el Supra acelere de 0 a 100 km/h en solo unos pocos segundos. Además, su sistema de suspensión y su chasis bien equilibrado ofrecen un manejo ágil y emocionante, ideal tanto para la pista como para la conducción diaria.
                </h3>
            </div>
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="SupraMK5/motorizacion2.jpg" alt="">
          </section>

          <section style="margin-bottom: 30px;" class="section-1">  
            <!-- img escritorio -->
            <img class="img-deportivos-escritorio" src="SupraMK5/motorizacion3.avif" alt="">
            <div>
                <span style="color: #f52929;">Caja de cambios</span>
                <h2 class="h2-regulares color2">Transmision Deportiva</h2>
                <h3 class="section-h3 color3">
                    La transmisión cuenta con modos de conducción seleccionables que permiten al conductor adaptar el comportamiento del vehículo según sus preferencias. En modo Sport, por ejemplo, la respuesta del acelerador y los tiempos de cambio se optimizan para ofrecer una conducción más agresiva y emocionante. También hay una opción para realizar cambios manuales mediante las paletas de cambio ubicadas detrás del volante, lo que brinda un mayor control en situaciones de conducción más deportivas.
                </h3>
            </div>
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="SupraMK5/motorizacion3.avif" alt="">
          </section>

          <section style="margin-bottom: 30px;" class="section-1">  
            <img class="img-deportivos-escritorio" src="SupraMK5/motorizacion5.avif" alt="">
            <!-- img escritorio -->
            <div>
                <span style="color: #3d66c5">Potencia</span>
                <h2 class="h2-regulares color2">Una Bestia Libre</h2>
                <h3 class="section-h3 color3">
                    Lo que realmente distingue al GR Supra es la forma en que entrega esa potencia. Gracias a su sistema de inyección directa y un turbocompresor de geometría variable, el motor responde de manera instantánea, proporcionando una aceleración lineal y emocionante. Desde el primer pisotón al acelerador, sientes cómo el Supra se lanza hacia adelante con una fuerza contundente, permitiéndote disfrutar de una experiencia de conducción que es tanto visceral como adictiva.
                </h3>
            </div>
            
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="SupraMK5/motorizacion5.avif" alt="">
          </section>

        </div>
        
      </div>








      <!-- INTERIOR -->
      <div id="opcion3" class="div-opcion3">
          <h1 id="h1-opcion3">Interior</h1>
          <section class="section-1">  
            <img class="img-deportivos-escritorio" src="SupraMK5/interior1.avif" alt=""> <!--CIMAGEN-->
            <div>
                <span style="color: #f52929;">Moderno</span> <!--COLOR-->
                <h2 class="h2-regulares color2">Interior</h2>
                <h3 class="section-h3 color3">
                  El interior del Toyota GR Supra MK5 combina un diseño moderno y funcional con un enfoque en la experiencia del conductor. Desde el momento en que te sientas en el asiento, se nota que se ha priorizado la ergonomía y la calidad de los materiales.
                </h3>
            </div>  
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="SupraMK5/interior1.avif">
          </section>


        <div>
          <section style="margin-bottom: 30px;" class="section-1">   
            <!-- img escritorio -->
            <div>
                <span style="color: #f52929;">Comodidad</span> <!--COLOR-->
                <h2 class="h2-regulares color2">Asientos</h2>
                <h3 class="section-h3 color3">
                    Los asientos son deportivos y están diseñados para proporcionar un excelente soporte, manteniéndote en su lugar durante las maniobras más agresivas. Están revestidos en materiales de alta calidad, como cuero y Alcántara, que no solo son atractivos, sino que también añaden un toque de lujo al ambiente.
                </h3>
            </div>
            <img class="img-deportivos-escritorio" src="SupraMK5/interior2.avif" alt=""> <!--Cimagen-->
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="SupraMK5/interior2.avif" alt=""><!--Cimagen-->
          </section>

          <section style="margin-bottom: 30px;" class="section-1">  
            <!-- img escritorio -->
            <img class="img-deportivos-escritorio" src="SupraMK5/interior3.jpg" alt=""> <!--Cimagen-->
            <div>
                <span style="color: #f52929;">Mas funciones</span> <!--COLOR-->
                <h2 class="h2-regulares color2">Volante</h2>
                <h3 class="section-h3 color3">
                    El volante del Toyota GR Supra MK5 es una de sus características más destacadas, diseñado para ofrecer una conexión directa y emocionante entre el conductor y la máquina. Con un diseño deportivo y ergonómico, el volante está revestido en cuero de alta calidad, lo que proporciona un excelente agarre y una sensación premium.
                </h3>
            </div>
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="SupraMK5/interior3.jpg" alt=""> <!--Cimagen-->
          </section>

          <section style="margin-bottom: 30px;" class="section-1">  
            <!-- img escritorio -->
            <div>
                <span style="color: #b5b5b5;">Minimalista</span> <!--COLOR-->
                <h2 class="h2-regulares color2">Resumen</h2>
                <h3 class="section-h3 color3">
                    En general, el interior del GR Supra MK5 ofrece una experiencia de conducción emocionante y cómoda, equilibrando estilo, tecnología y funcionalidad. Cada elemento está diseñado para maximizar la satisfacción del conductor y los pasajeros, reflejando el espíritu de un verdadero deportivo.
                </h3>
            </div>
            <img class="img-deportivos-escritorio" src="SupraMK5/interior4.webp" alt=""> <!--Cimagen-->
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="SupraMK5/interior4.webp" alt=""> <!--Cimagen-->
          </section>

          
        </div>

              


        
      </div>







        <!-- Exterior -->
        <div id="opcion4" class="div-opcion3">
            <h1 id="h1-opcion3">Exterior</h1> 
            <section class="section-1">  
              <img class="img-deportivos-escritorio" src="SupraMK5/exterior1.avif" alt="">
              <div>
                  <span style="color: #f52929;">Renacer</span>
                  <h2 class="h2-regulares color2">Exterior</h2>
                  <h3 class="section-h3 color3">
                    Diseño Aerodinámico: Las líneas fluidas y curvas del Supra no solo son visualmente atractivas, sino que también están diseñadas para mejorar la aerodinámica. Esto ayuda a reducir la resistencia al aire y optimiza el rendimiento del vehículo.
                  </h3>
              </div>  
              <!-- img mobile -->
              <img class="img-deportivos-mobile" src="SupraMK5/exterior1.avif" alt="">
            </section>
    
    
          <div>
            <section style="margin-bottom: 30px;" class="section-1">  
              <!-- img escritorio -->
              <div>
                  <span style="color: #f52929;">Agresiva</span>
                  <h2 class="h2-regulares color2">Frontal</h2>
                  <h3 class="section-h3 color3">
                    Frente Distintivo: La parrilla frontal es prominente y agresiva, con una forma que recuerda a la herencia del Supra. Los faros LED estilizados aportan un toque moderno y ofrecen una iluminación brillante, mejorando la visibilidad y la seguridad.
                  </h3>
              </div>
              <img class="img-deportivos-escritorio" src="SupraMK5/exterior2.avif" alt="">
              <!-- img mobile -->
              <img class="img-deportivos-mobile" src="SupraMK5/exterior2.avif" alt="">
            </section>
    
            <section style="margin-bottom: 30px;" class="section-1">  
              <!-- img escritorio -->
              <img class="img-deportivos-escritorio" src="SupraMK5/exterior3.jpg" alt="">
              <div>
                  <span style="color: #f52929;">Perfeccion</span>
                  <h2 class="h2-regulares color2">Trasera</h2>
                  <h3 class="section-h3 color3">
                    Detalles en la Parte Trasera: La parte trasera del Supra es igualmente impresionante, con un diseño de luces traseras LED que son distintivas y contemporáneas. El alerón trasero, en algunas versiones, añade un toque adicional de agresividad y mejora la carga aerodinámica.
                  </h3>
              </div>
              <!-- img mobile -->
              <img class="img-deportivos-mobile" src="SupraMK5/exterior3.jpg" alt="">
            </section>
    
            <section style="margin-bottom: 30px;" class="section-1">  
              <!-- img escritorio -->
              <div>
                  <span style="color: #be1010;">Brillantes</span>
                  <h2 class="h2-regulares color2">Faros</h2>
                  <h3 class="section-h3 color3">
                    Tecnología LED: El Supra está equipado con faros LED, que ofrecen una iluminación más brillante y eficiente en comparación con los faros halógenos tradicionales. Esto mejora la visibilidad durante la conducción nocturna y en condiciones de baja luminosidad.
                  </h3>
              </div>
              <img class="img-deportivos-escritorio" src="SupraMK5/exterior4.avif" alt="">
              <!-- img mobile -->
              <img class="img-deportivos-mobile" src="SupraMK5/exterior4.avif" alt="">
            </section>
    
            <section class="section-1">  
              <!-- img escritorio -->
              <img class="img-deportivos-escritorio" src="SupraMK5/exterior5.avif" alt="">
              <div>
                  <span style="color: #f52929;">Detalles</span>
                  <h2 class="h2-regulares color2">Ruedas</h2>
                  <h3 class="section-h3 color3">
                    Rines de Alto Rendimiento: Los rines, que varían en tamaño y diseño dependiendo de la versión, no solo son estéticamente atractivos, sino que también están diseñados para mejorar el rendimiento y la eficiencia del manejo.
                  </h3>
              </div>
              <!-- img mobile -->
              <img class="img-deportivos-mobile" src="SupraMK5/exterior5.avif" alt="">
            </section>
    
            <section class="section-galeria">
              <div class="galeria-de-imagenes">
                <div class="fila1">
                  <img class="fto1" src="SupraMK5/colage1.webp" alt="">
                  <img class="fto2" src="SupraMK5/collage2.jpg" alt="">
                  <img class="fto3" src="SupraMK5/colage3.jpg" alt="">
                </div>
                <div class="fila2">
                  <div class="div1-fila2">
                    <img class="fto4" src="SupraMK5/colage4.jpg" alt="">
                    <h1 style="margin-left: 100px;">Potencia</h1>
                  </div>
                  <div class="div2-fila2">
                    <img class="fto5" src="SupraMK5/colage5.jpg" alt="">
                  </div>
                </div>
                <h1>Supra MK5, el renacer de una leyenda</h1>
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
            <li><a href="TeslaModel3.php">Tesla model 3 2021</a></li>
            <li><a href="supra.php">Toyota Supra MK5</a></li>
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