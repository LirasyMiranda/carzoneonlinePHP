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
<link rel="stylesheet" href="BmwM1.css"> <!---CNombre del archivo-->

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
    <a class="aaa" href="index.php">
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
    <li><a href="index.php">INFO</a></li>
    <li><a href="index.php">MODELOS</a></li>
    <li><a href="index.php">ALQUILER</a></li>
    <li style="padding-top: 60px"><a href="https://www.instagram.com/politecnicomodelo/?hl=es-la"><i class='bx bxl-instagram'></i></a></li>
    <li><a href="https://x.com/ipmodelo"><i class='bx bxl-twitter'></i></i></a></li>
    <li><a href="https://www.youtube.com/@politecnicomodelo/featured"><i class='bx bxl-youtube'></i></i></a></li>
</ul>


    <!-- Header escritorio -->
    <header>
        <div class="header-escritorio header-escritorio-modelos">
              <a class="aaa" href="index.php">
                <img style="width: auto;" class="logo" src="logo-nuevo2.0.png" alt="LogoXD">
              </a>
                <div class="group">
                    <svg class="icon" aria-hidden="true" viewBox="0 0 24 24"><g><path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path></g></svg>
                    <input placeholder="Search" type="search" class="input">
                  </div>
            <div class="header-screen">
                <li>
                    <a href="index.php">MODELOS</a>
                    <a href="index.php">INFO</a>
                    <a href="index.php">ALQUILER</a>
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




    <section class="section-menu-modelo-fixed">
      <div id="div-icon-fixed">
        <i style="display: none;" class='bx bx-chevron-right' id="chevron-right" onclick="toggleMenu2()"></i>
        <i style="display: block;" class='bx bx-chevron-left' id="chevron-left" onclick="toggleMenu2()"></i>
      </div>
      <div id="div-opciones-f">
        <div id="div-opciones-f-2" style="width: 100%;">
          <section style="width: 100%;">

              <img src="BMW/BMW-logo.png" alt="">
              <h3>Bmw M1 2012</h3> <!---CNombre del modelo-->
          </section>
          <div>
              <a onclick="mostrarElemento1()" class="element" href="#opcion1"><p class="par parrafo">Modelo 3d</p></a> <!---CNombre de la opcion-->
          </div>
          <div>
            <a onclick="mostrarElemento2()" class="element" href="#opcion2"><p class="par2 parrafo">Footer</p></a> <!---CNombre de la opcion-->
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
        <iframe id="opcion1" title="AC - Bmw 1m [FREE] 3D model - Sketchfab" class="c-viewer__iframe" src="https://sketchfab.com/models/f0ac8fa9bf1e4d79a03a4a3ea6d24afa/embed?autostart=1&amp;internal=1&amp;tracking=0&amp;ui_infos=0&amp;ui_snapshots=1&amp;ui_stop=0&amp;ui_watermark=0" id="api-frame" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking="true" execution-while-out-of-viewport="true" execution-while-not-rendered="true" web-share="true" allowfullscreen=""></iframe>
          
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

        
      </div>








      <!-- INTERIOR -->
      <div id="opcion3" class="div-opcion3">
          <h1 id="h1-opcion3">Interior</h1>
          <section class="section-1">  
            <img class="img-deportivos-escritorio" src="BMW/Bmw-interior.avif" alt=""> <!--CIMAGEN-->
            <div>
                <span style="color: #0066b5;">Orientado al conductor</span> <!--COLOR-->
                <h2 class="h2-regulares">General</h2>
                <h3 class="section-h3">
                  Interior y puesto de conducción del BMW Serie 1 M Coupé
                  El diseño del interior se complementa perfectamente con el diseño exterior y sitúa al conductor en el centro de la acción en todo momento. Los colores oscuros de estilo deportivo predominan en el interior, mientras que las costuras en contraste de los asientos deportivos fueron diseñadas exclusivamente para el BMW Serie 1 M Coupé.
                </h3>
            </div>  
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="BMW/Bmw-interior.avif" alt="">
          </section>


        <div>
          <section style="margin-bottom: 30px;" class="section-1">   
            <!-- img escritorio -->
            <div>
                <span style="color: #a6351d;">Pruebalos</span> <!--COLOR-->
                <h2 class="h2-regulares">Modo drift activado.</h2>
                <h3 class="section-h3">
                  
BMW 1er M Coupé circulando por la calle
El conductor ambicioso tiene la opción de activar el M Dynamic Mode (MDM) en el salpicadero, que eleva el umbral de intervención del control de estabilidad de conducción DSC y permite un sobreviraje selectivo y deportivo.
                </h3>
            </div>
            <img class="img-deportivos-escritorio" src="BMW/Bmw-drift.avif" alt=""> <!--Cimagen-->
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="BMW/Bmw-drift.avif" alt=""><!--Cimagen-->
          </section>

          <section style="margin-bottom: 30px;" class="section-1">  
            <!-- img escritorio -->
            <img class="img-deportivos-escritorio" src="BMW/Bmw-setup.avif" alt=""> <!--Cimagen-->
            <div>
                <span style="color: #a6351d;">Elegante y espacioso</span> <!--COLOR-->
                <h2 class="h2-regulares">Ajuste individual.</h2>
                <h3 class="section-h3">
Brazo de dirección y consola central del BMW 1er M Coupé
El volante de cuero M de serie incluye el botón M en el radio derecho para seleccionar un ajuste claramente deportivo del vehículo. La característica del motor se ajusta de forma más espontánea y los comandos del acelerador se ejecutan de forma aún más instintiva.
                </h3>
            </div>
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="BMW/Bmw-setup.avif" alt=""> <!--Cimagen-->
          </section>

          <section style="margin-bottom: 30px;" class="section-1">  
            <!-- img escritorio -->
            <div>
                <span style="color: #a6351d;">Sin compromisos</span> <!--COLOR-->
                <h2 class="h2-regulares">Un sistema de suspensión</h2>
                <h3 class="section-h3">
                Apto para el uso diario y al mismo tiempo para el circuito: en el desarrollo del BMW Serie 1 M Coupé ha sido de gran importancia crear un sistema de suspensión que pudiera dominar este delicado equilibrio en todo momento. Para lograrlo, BMW M ha utilizado numerosos componentes de su hermano mayor, el BMW M3, una transferencia de tecnología que se ha optimizado y adaptado al M Coupé en varias vueltas de prueba en Nürburgring. Tanto el eje delantero de doble articulación como el eje trasero de cinco brazos del BMW Serie 1 M Coupé están fabricados casi íntegramente en aluminio. Todo se ha realizado teniendo en cuenta la construcción ligera, ya que el peso relativamente bajo del coche, de 1.495 kilogramos, junto con su potente sistema de propulsión, era (y sigue siendo) la garantía de un rendimiento sobresaliente.
                </h3>
            </div>
            <img class="img-deportivos-escritorio" src="BMW/Bmw-suspension.jpeg" alt=""> <!--Cimagen-->
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="BMW/Bmw-suspension.jpeg" alt=""> <!--Cimagen-->
          </section>

          <section class="section-1">  
            <!-- img escritorio -->
            <img class="img-deportivos-escritorio" src="BMW/Bmw-noe.avif" alt=""> <!--Cimagen-->
            <div>
                <span style="color: #444444;">Comodidad</span> <!--COLOR-->
                <h2 class="h2-regulares">Asientos</h2>
                <h3 class="section-h3">
                Los asientos deportivos M del BMW 1M ofrecen un "Ajuste Perfecto en Movimiento". Con su sistema de ajuste eléctrico multidireccional, estos asientos te permiten encontrar la posición ideal para una conducción deportiva o un viaje relajado. La combinación de soporte lateral ajustable y extensión para los muslos asegura que estés cómodo y seguro en cada curva, mientras que la memoria de posición te permite volver a tu configuración preferida con solo tocar un botón. Experimenta la fusión perfecta entre comodidad y rendimiento con los asientos que se adaptan a tu estilo de conducción.
                </h3>
            </div>
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="BMW/Bmw-noe.avif" alt=""> <!--Cimagen-->
          </section>
        </div>


        


        
      </div>







        <!-- Exterior -->
      <div id="opcion4" class="div-opcion3">
        <h1 id="h1-opcion3">Exterior</h1> 
        <section class="section-1">  
          <img class="img-deportivos-escritorio" src="BMW/Bmw-exterior.avif" alt="">
          <div>
              <span style="color: #0066b5;">BMW M1</span>
              <h2 class="h2-regulares">General</h2>
              <h3 class="section-h3">
              El BMW M1 es la encarnación perfecta de la filosofía de diseño "forma sigue a la función". Su exterior no es solo una obra de arte visual, sino una declaración de ingeniería de precisión. Cada línea, cada curva y cada ángulo han sido meticulosamente diseñados para optimizar la aerodinámica y el rendimiento. Desde su característica parrilla doble hasta los pronunciados pasos de rueda, el M1 exuda potencia y agilidad. Los detalles en fibra de carbono y las tomas de aire funcionales no solo mejoran su apariencia agresiva, sino que también contribuyen a su excepcional rendimiento en carretera. El BMW M1 no es simplemente un automóvil; es una obra maestra de diseño en movimiento que fusiona perfectamente estética y funcionalidad.
              </h3>
          </div>  
          <!-- img mobile -->
          <img class="img-deportivos-mobile" src="BMW/Bmw-exterior.avif" alt="">
        </section>


      <div>
        <section style="margin-bottom: 30px;" class="section-1">  
          <!-- img escritorio -->
          <div>
              <span style="color: #c4482c;">Compacto</span>
              <h2 class="h2-regulares">Diseño</h2>
              <h3 class="section-h3">
              Potencia concentrada en un diseño compacto y ágil. Su carrocería musculosa y líneas aerodinámicas no solo capturan miradas, sino que también optimizan su rendimiento. Con un perfil bajo y una postura ancha, el 1M domina la carretera con una presencia imponente que belmente contradice su tamaño compacto. Cada curva y ángulo ha sido meticulosamente diseñado para maximizar la eficiencia aerodinámica, permitiendo que este coupé deportivo se deslice por el aire con mínima resistencia. El 1M es la prueba viviente de que la grandeza no siempre viene en paquetes grandes - es un titán de rendimiento envuelto en un chasis compacto y elegante.
              </h3>
          </div>
          <img class="img-deportivos-escritorio" src="BMW/Bmw-diseño.avif" alt="">
          <!-- img mobile -->
          <img class="img-deportivos-mobile" src="BMW/Bmw-diseño.avif" alt="">
        </section>

        <section style="margin-bottom: 30px;" class="section-1">  
          <!-- img escritorio -->
          <img class="img-deportivos-escritorio" src="BMW/Bmw-ruedas.avif" alt="">
          <div>
              <span style="color: #be4226;">Elegante</span>
              <h2 class="h2-regulares">Ruedas</h2>
              <h3 class="section-h3">
              Las ruedas del BMW 1M son una obra maestra de ingeniería y diseño. Equipado con llantas de aleación M de 19 pulgadas, estas ruedas no son solo un complemento visual, sino una parte integral del rendimiento del vehículo. Su diseño ligero contribuye a reducir el peso no suspendido, mejorando la agilidad y la respuesta del coche. Los radios distintivos no solo aportan un toque de elegancia deportiva, sino que también optimizan el flujo de aire para una mejor refrigeración de los frenos. Con su combinación perfecta de estilo y funcionalidad, estas ruedas son el punto de contacto ideal entre el asfalto y la bestia que es el BMW 1M. Son, en esencia, donde la potencia se encuentra con la carretera.
              </h3>
          </div>
          <!-- img mobile -->
          <img class="img-deportivos-mobile" src="BMW/Bmw-ruedas.avif" alt="">
        </section>

        <section style="margin-bottom: 30px;" class="section-1">  
          <!-- img escritorio -->
          <div>
              <span style="color: #b93d21;">La fachada</span>
              <h2 class="h2-regulares">Frontal</h2>
              <h3 class="section-h3">
              Dominado por la icónica parrilla doble de BMW, el frente del 1M irradia agresividad y deportividad. Las amplias tomas de aire no solo aportan un aspecto amenazador, sino que también son funcionales, alimentando el potente motor que late bajo el capó. Los faros afilados, con su característica tecnología LED, cortan la oscuridad con la misma precisión con la que el coche corta el aire. Cada línea y curva del frontal ha sido diseñada no solo para impresionar visualmente, sino también para optimizar la aerodinámica. El splitter delantero, un elemento clave del paquete aerodinámico, mejora la estabilidad a altas velocidades.
              </h3>
          </div>
          <img class="img-deportivos-escritorio" src="BMW/Bmw-fachada.avif" alt="">
          <!-- img mobile -->
          <img class="img-deportivos-mobile" src="BMW/Bmw-fachada.avif" alt="">
        </section>

        <section class="section-1">  
          <!-- img escritorio -->
          <img class="img-deportivos-escritorio" src="BMW/Bmw-led.avif" alt="">
          <div>
              <span style="color: #ce2014;">Luminocidad plena</span>
              <h2 class="h2-regulares">Luces</h2>
              <h3 class="section-h3">
              Las luces del BMW M1 son una mezcla de tecnología y diseño. Las luces LED, con su brillante y eficiente iluminación, proporcionan una visibilidad excepcional, incluso en las condiciones más difíciles. Además, las luces de xenón, con su intensa luz blanca, ofrecen una visibilidad clara y nítida, incluso en las noches más oscuras.
              </h3>
          </div>
          <!-- img mobile -->
          <img class="img-deportivos-mobile" src="BMW/Bmw-led.avif" alt="">
        </section>

        <section class="section-galeria">
          <div class="galeria-de-imagenes">
            <div class="fila1">
              <img class="fto1" src="BMW/Bmw-galeria1.avif" alt="">
              <img class="fto2" src="BMW/Bmw-galeria2.avif" alt="">
              <img class="fto3" src="BMW/Bmw-galeria3.avif" alt="">
            </div>
            <div class="fila2">
              <div class="div1-fila2">
                <img class="fto4" src="BMW/Bmw-galeria4.avif" alt="">
                <h1 style="margin-left: 100px;">Compacto</h1>
              </div>
              <div class="div2-fila2">
                <img class="fto5" src="BMW/Bmw-galeria5.webp" alt="">
              </div>
            </div>
            <h1>pero con un diseño aerodinámico que te deja loco</h1>
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