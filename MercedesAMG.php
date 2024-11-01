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
<link rel="stylesheet" href="MercedesAMG.css"><!---CNombre del archivo-->
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
    <li><a href="https://x.com/ipmodelo"><i class='bx bxl-twitter'></i></i></a></li>
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

              <img src="Mercedes/logo.png" alt="">
              <h3>Mercedes AMG One 2021</h3> <!---CNombre del modelo-->
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
        <iframe id="opcion1" title="Mercedes AMG One 3D model - Sketchfab" class="c-viewer__iframe" src="https://sketchfab.com/models/b3c8d776bab740a79e68c360c463fe40/embed?autostart=1&amp;internal=1&amp;tracking=0&amp;ui_ar=0&amp;ui_infos=0&amp;ui_snapshots=1&amp;ui_stop=0&amp;ui_theatre=1&amp;ui_watermark=0" id="api-frame" allow="autoplay; fullscreen; xr-spatial-tracking" xr-spatial-tracking="true" execution-while-out-of-viewport="true" execution-while-not-rendered="true" web-share="true" allowfullscreen=""></iframe>
          
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
        <section class="section-1">
          
          <!-- img escritorio -->
          <img class="img-deportivos-escritorio" src="Mercedes/general.avif">
            <span style="color: #b1b1b1;">
              <span style="font-weight: 600; color: #b8b8b8;">Motorizacion</span>
              <h2 id="opcion2" class="h2-regulares color2">Especificaciones técnicas</h2>
              <h3 class="section-h3 color3">
                Rendimiento increíble, llevado directamente a la carretera. El Mercedes-AMG ONE es conducción deportiva en estado puro. Con una aceleración de 0 a 200 km/h en 7,0 segundos o de 0 a 300 km/h en 15,6 segundos, este hipercoche marca el rumbo: la velocidad máxima regulada electrónicamente de 352 km/h. Cifras impresionantes que se hacen aún más potentes gracias a los programas de piloto para el circuito extraídos de la Fórmula 1. En el programa Strat 2, la aerodinámica activa, el ajuste más preciso del chasis, la reducción de la altura del vehículo y el rendimiento completo de todos sus motores funcionan igual que en la clasificación de Fórmula 1. Nunca ha habido nada igual. Pero ahora siempre estará ahí. 
              </h3> 
          <!-- img mobile -->
          <img class="img-deportivos-mobile" src="Mercedes/general.avif" alt="">
        </section>

        <div>
          <section style="margin-bottom: 30px;" class="section-1">  
            <!-- img escritorio -->
            <img class="img-deportivos-escritorio" src="Mercedes/motor.jpeg" alt="">
            <div>
                <span style="color: #d34623;">Potencia infinita</span>
                <h2 class="h2-regulares color2">Motor</h2>
                <h3 class="section-h3 color3">
                  El AMG One es una bestia de carreras que desarrolla 1.063 CV gracias a sus cinco motores. Sí, equipa cinco motores: cuatro eléctricos y uno gasolina. Es más, es un híbrido enchufable. El sistema híbrido del AMG One está formado por un V6 de 1.6 litros de cilindrada y sobrealimentado por un turbo. Desarrolla 574 CV a 9.000 rpm y es capaz de subir hasta 11.000 vueltas.
                </h3>
            </div>
            <video width="1302" height="636" playsinline="" webkit-playsinline="" loop="true" src="https://www.lamborghini.com/bf6b8792-4579-4351-9bf4-d55744244262" preload="metadata" style="width: 100%; height: 100%; object-fit: cover;" muted="muted"></video>
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="Mercedes/motor.jpeg" alt="">
          </section>

          <section style="margin-bottom: 30px;" class="section-1">  
            <!-- img escritorio -->
            <img class="img-deportivos-escritorio" src="Mercedes/suspension.jpeg" alt="">
            <div>
                <span style="color: #c0a21b;">Amg 2022</span>
                <h2 class="h2-regulares color2">Suspensiones</h2>
                <h3 class="section-h3 color3">
                  La suspensión activa cuenta con un esquema de cinco brazos con dos tirantes ajustables, tanto en la parte delantera como trasera, mientras que los frenos lucen discos cerámicos de 398 mm de diámetro con pinzas de seis pistones delante. Si bien su motor es derivado del bloque de F1 de 2017, por suerte, las ruedas del Mercedes-AMG One no lo son. Calza llantas de 10x19 con Michelin Pilot Sport Cup 2R M01 de 285/35 ZR 19, desarrollados en exclusiva para este modelo, y llantas de 12x20 con los mismos Michelin en 335/30 ZR 20.
                </h3>
            </div>
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="Mercedes/suspension.jpeg" alt="">
          </section>

          <section style="margin-bottom: 30px;" class="section-1">  
            <img class="img-deportivos-escritorio" src="Mercedes/cambios.jpg" alt="">
            <!-- img escritorio -->
            <div>
                <span style="color: #b3b3b3;">A tu gusto</span>
                <h2 class="h2-regulares color2">6 modos de conduccion</h2>
                <h3 class="section-h3 color3">
                  El cambio es manual y automatizado de siete marchas. Incluye seis modos de conducción: <br>
                  Race Plus: programa estándar con circulación híbrida y arrancada en modo eléctrico. El motor de combustión entra en acción si se requiere más potencia. <br>
                  Race: circulación híbrida con carga activa de la batería. <br>
                  EV: circulación en modo eléctrico. <br>
                  Race Plus: pensado para circuito, entran en acción la aerodinámica activa y la reducción de la altura libre al suelo para buscar más rendimiento. La suspensión se endurece y la gestión de la potencia también se agudiza. <br>
                  Strat 2: pensado para circuito, es el modo equivalente a una clasificación de Fórmula 1. <br>
                  Individual: ajustes personalizados.
                </h3>
            </div>
            
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="Mercedes/cambios.jpg" alt="">
          </section>

        </div>
        
      </div>








      <!-- INTERIOR -->
      <div id="opcion3" class="div-opcion3">
          <h1 id="h1-opcion3">Interior</h1>
          <section class="section-1">  
            <img class="img-deportivos-escritorio" src="Mercedes/interior.jpg" alt=""> <!--CIMAGEN-->
            <div>
                <span style="color: #0f7080;">Lo mejor que vivirás</span> <!--COLOR-->
                <h2 class="h2-regulares color2">Interno</h2>
                <h3 class="section-h3 color3">
                  El interior está inspirado en el mundo de la Fórmula 1. El habitáculo es minimalista pero cómodo, con una clara orientación hacia la funcionalidad y la
                </h3>
            </div>  
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="Mercedes/interior.jpg" alt="">
          </section>


        <div>
          <section style="margin-bottom: 30px;" class="section-1">   
            <!-- img escritorio -->
            <div>
                <span style="color: #0f7080;">Aire confort</span> <!--COLOR-->
                <h2 class="h2-regulares color2">Pantalla y air acondicionado.</h2>
                <h3 class="section-h3 color3">
                  es el cerebro que conecta al conductor con la potencia extrema de este hiperdeportivo. Con un diseño intuitivo y de alta tecnología, esta pantalla permite controlar y monitorear cada aspecto del vehículo, desde los modos de conducción hasta las prestaciones aerodinámicas y el estado del motor. Todo está al alcance de tus dedos, brindándote una experiencia de conducción sensacional. Contiene 4 salidas de aire acondicionado y como puedes ver en la imagen, tiene un medidor de temperatura para cada parte del AMG.
                </h3>
            </div>
            <img class="img-deportivos-escritorio" src="Mercedes/pantalla.jpg" alt=""> <!--Cimagen-->
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="Mercedes/pantalla.jpg" alt=""><!--Cimagen-->
          </section>

          <section style="margin-bottom: 30px;" class="section-1">  
            <!-- img escritorio -->
            <img class="img-deportivos-escritorio" src="Mercedes/asientos.jpeg" alt=""> <!--Cimagen-->
            <div>
                <span style="color: #0f7080;">De primera</span> <!--COLOR-->
                <h2 class="h2-regulares color2">Asientos</h2>
                <h3 class="section-h3 color3">
                  Los asientos tipo cubo están revestidos en materiales de alta calidad como cuero y Alcántara, brindando un soporte ergonómico ideal para resistir las fuerzas G en curvas y aceleraciones extremas. Estos asientos, de perfil bajo, están integrados en la cabina como parte del chasis, ofreciendo una postura de conducción baja y centrada, que potencia la sensación de estar en un coche de carreras.
                </h3>
            </div>
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="Mercedes/asientos.jpeg" alt=""> <!--Cimagen-->
          </section>

          <section style="margin-bottom: 30px;" class="section-1">  
            <!-- img escritorio -->
            <div>
                <span style="color: #316206;">Formula 1</span> <!--COLOR-->
                <h2 class="h2-regulares color2">Volante</h2>
                <h3 class="section-h3 color3">
                  El volante, inspirado directamente en la F1, presenta controles integrados que permiten ajustar los modos de conducción y diversas configuraciones del vehículo sin quitar las manos del mismo. Los paneles laterales y el tablero, con acabados en fibra de carbono expuesta, subrayan el enfoque en la reducción de peso y el rendimiento puro.
                </h3>
            </div>
            <img class="img-deportivos-escritorio" src="Mercedes/volante.jpeg" alt=""> <!--Cimagen-->
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="Mercedes/volante.jpeg" alt=""> <!--Cimagen-->
          </section>

          <section style="margin-bottom: 30px;" class="section-1">  
            <!-- img escritorio -->
            <img class="img-deportivos-escritorio" src="Mercedes/tablero.jpg" alt=""> <!--Cimagen-->
            <div>
                <span style="color: #0285cd;">Consola mágica</span> <!--COLOR-->
                <h2 class="h2-regulares color2">Tablero</h2>
                <h3 class="section-h3 color3">
                  Detrás del volante, las pantallas digitales de alta resolución ofrecen toda la información esencial, desde la telemetría del motor hasta el estado de los sistemas del coche, presentados de manera clara y precisa. La consola central es esbelta y minimalista, eliminando cualquier distracción innecesaria y enfocándose en lo esencial para el piloto.
                </h3>
            </div>
            <!-- img mobile -->
            <img class="img-deportivos-mobile" src="Mercedes/tablero.jpg" alt=""> <!--Cimagen-->
          </section>
        </div>

        <section style="flex-direction: column;" class="section-1-carrusel">  
          <h2 style="color: #ffffff;" class="h2-regulares">- Detalles</h2>
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
                           <span style="color: #0f7080;">Sin perder Lujo</span>
                           <h2>Material</h2>
                           <p>El AMG One no sacrifica el lujo: detalles en aluminio pulido y acabados meticulosamente trabajados añaden un toque de sofisticación.</p>
                        </div>
                     </div>
                     <div class="slide slide_2">
                        <div class="slide-img2"></div>
                        <div class="slide-content">
                           <span style="color: #991818;">Con matafuegos</span>
                           <h2>Seguridad</h2>
                           <p>La seguridad del Mercedes AMG one es la máxima, detras del asiento hay matafuegos faciles de quitar.</p>
                        </div>
                     </div>
                     <div class="slide slide_3">
                        <div class="slide-img3"></div>
                        <div class="slide-content">
                          <span style="color: #353535;">Accesorios</span> 
                          <h2>Detalles en todos lados</h2>
                           <p>El Mercedes AMG one 2021 tiene detalles y tecnologías en todos lados.</p>
                        </div>
                     </div>
                     <div class="slide slide_4">
                        <div class="slide-img4"></div>
                        <div class="slide-content">
                          <span style="color: #c4c4c4;">Detalles de lujo</span>
                           <h2>Cinturon de seguris</h2>
                           <p>El AMG como te fuiste dando cuenta tiene detalles en todos lados, en la imagen puedes ver la calidad de solamente el cinturon de seguridad.</p>
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
          <img class="img-deportivos-escritorio" src="Mercedes/exterior.jpg" alt="">
          <div>
              <span style="color: #0f7080;">F1</span>
              <h2 class="h2-regulares color2">General</h2>
              <h3 class="section-h3 color3">
                El exterior del Mercedes AMG One 2021 es una obra maestra de la aerodinámica y el diseño de alto rendimiento, inspirado directamente en la tecnología de Fórmula 1. Cada línea, cada curva del vehículo ha sido esculpida con un propósito claro: maximizar la eficiencia aerodinámica y optimizar el rendimiento en la pista.
              </h3>
          </div>  
          <!-- img mobile -->
          <img class="img-deportivos-mobile" src="Mercedes/exterior.jpg" alt="">
        </section>


      <div>
        <section style="margin-bottom: 30px;" class="section-1">  
          <!-- img escritorio -->
          <div>
              <span style="color: #c4c4c4;">Rapidez</span>
              <h2 class="h2-regulares color2">Estructura</h2>
              <h3 class="section-h3 color3">
                La silueta del coche es fluida y compacta, con una carrocería fabricada en fibra de carbono ultraligera que reduce el peso y mejora la rigidez estructural. Los guardabarros pronunciados y las llantas de aleación ligera de gran tamaño resaltan la postura ancha y atlética del vehículo. Los detalles en fibra de carbono visibles y los acentos aerodinámicos, como las aletas laterales y los faldones bajos, subrayan su enfoque en la velocidad y el control.
              </h3>
          </div>
          <img class="img-deportivos-escritorio" src="Mercedes/estructura.jpg" alt="">
          <!-- img mobile -->
          <img class="img-deportivos-mobile" src="Mercedes/estructura.jpg" alt="">
        </section>

        <section style="margin-bottom: 30px;" class="section-1">  
          <!-- img escritorio -->
          <img class="img-deportivos-escritorio" src="Mercedes/trasero.jpg" alt="">
          <div>
              <span style="color: #8e0505;">Aerodinamico</span>
              <h2 class="h2-regulares color2">Trasero</h2>
              <h3 class="section-h3 color3">
                En la parte trasera, el diseño se hace aún más radical. El alerón ajustable y el difusor masivo ayudan a generar una enorme carga aerodinámica, pegando el coche al asfalto a altas velocidades. Las luces traseras, en forma de barras LED delgadas, continúan el lenguaje de diseño moderno y afilado. En el centro, una toma de aire de estilo F1 se extiende desde el techo hasta el motor V6 híbrido, mejorando la refrigeración y dándole al AMG One un aspecto de coche de carreras puro.
              </h3>
          </div>
          <!-- img mobile -->
          <img class="img-deportivos-mobile" src="Mercedes/trasero.jpg" alt="">
        </section>

        <section style="margin-bottom: 30px;" class="section-1">  

          <div>
              <span style="color: #9160d1;">Aerodinamico</span>
              <h2 class="h2-regulares color2">Race Plus</h2>
              <h3 class="section-h3 color3">
                Race Plus, por su parte, activa una función aerodinámica que despliega el alerón trasero en un ángulo predeterminado para aumentar la carga aerodinámica, baja la suspensión y proporciona lo que AMG describe como una "gestión especial del rendimiento" de la cadena cinemática.
              </h3>
          </div>
          <!-- img escritorio -->
          <img class="img-deportivos-escritorio" src="Mercedes/racePlus.jpeg" alt="">
          <!-- img mobile -->
          <img class="img-deportivos-mobile" src="Mercedes/racePlus.jpeg" alt="">
        </section>

        <section class="section-1">  
          <!-- img escritorio -->
          <img class="img-deportivos-escritorio" src="Mercedes/1366_ruedas.jpeg" alt="">
          <div>
              <span style="color: #0f7080;">Equilibrio perfecto</span>
              <h2 class="h2-regulares color2">Ruedas</h2>
              <h3 class="section-h3 color3">
                Cada rueda está equipada con llantas de aleación forjadas, ultraligeras, que combinan resistencia y ligereza, ayudando a reducir el peso no suspendido y mejorando la agilidad del vehículo. Estas llantas de gran tamaño, de 19 pulgadas en la parte delantera y 20 pulgadas en la parte trasera, están equipadas con un diseño de radios finos que optimizan el flujo de aire, ayudando a la refrigeración de los frenos de alto rendimiento.
              </h3>
          </div>
          <!-- img mobile -->
          <img class="img-deportivos-mobile" src="Mercedes/1366_ruedas.jpeg" alt="">
        </section>

        <section class="section-galeria">
          <div class="galeria-de-imagenes">
            <div class="fila1">
              <img class="fto1" src="Mercedes/material.jpeg" alt="">
              <img class="fto2" src="Mercedes/galeria2.jpeg" alt="">
              <img class="fto3" src="Mercedes/galeria3.jpeg" alt="">
            </div>
            <div class="fila2">
              <div class="div1-fila2">
                <img class="fto4" src="Mercedes/galeria3.jpg" alt="">
                <h1 style="margin-left: 100px; color: #ffffff;">Potencia</h1>
              </div>
              <div class="div2-fila2">
                <img class="fto5" src="Mercedes/galeria4.jpg" alt="">
              </div>
            </div>
            <h1 style="color: #ffffff;">sin límites, precisión sin compromisos.</h1>
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