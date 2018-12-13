<!DOCTYPE html>
<html lang="es" dir="ltr">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }}</title>

    <!-------------------------- Styles ---------------------------------------------------->
    <!-- Fonts -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.css') }}">
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <!-- style app-->
    <!-- Estilos -->
    <link rel="stylesheet" href="{{ URL::asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/estilos_ph.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/estilos_tb.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/theme_ph.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/theme_tb.css') }}">
    <!------------------------------ Scripts ---------------------------------->
    <!-- jQuery -->
    <script src="{{ URL::asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ URL::asset('js/popper.min.js')}}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('lightslider/js/lightslider.js')}}"></script>
    <script src="{{ URL::asset('boxslider/js/jquery.bxslider.js')}}"></script>
    <script src="{{ URL::asset('js/jquery.mask.min.js') }}"></script>
    <!-- greensock-js -->
    <script type="text/javascript" src="{{ URL::asset('greensock-js/src/minified/TweenMax.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('greensock-js/src/minified/easing/EasePack.min.js') }}"></script>

</head>
  <body>
    <!-- Menú mobil -->
    <div id="menu-mobil" class="layout-menu">
      <ul class="nav-mobil">
        <a href="{{ URL::asset('nosotros')}}" class="menu_activo"><li>NOSOTROS</li></a>
        <a href="{{ URL::asset('inmuebles')}}"><li>ENCUENTRA EL TU YO</li></a>
        <a href="{{ URL::asset('vivienda')}}"><li>TU VIVIENDA</li></a>
        <a href="{{ URL::asset('invierte')}}"><li>INVIERTE</li></a>
        <a href="{{ URL::asset('unete')}}"><li>ÚNETE</li></a>
        <a href="{{ URL::asset('faq')}}"><li>FAQ</li></a>
        <div id="close-toogle" class="close-button">
          <p>X</p>
        </div>
      </ul>
    </div>
    <!-- Header -->
    <header id="header" class="site-header">
      <div class="container">
        <div class="row">
          <!-- Logotipo -->
          <div class="col-1 col-md-1 col-lg-1 col-xl-1">
            <a href="{{ URL::asset('/')}}"><div class="site-logo"></div></a>
          </div>
          <!-- Navegación -->
          <div class="col-12 col-md-6 col-lg-8 col-xl-8 offset-md-5 offset-lg-3 offset-xl-3">
            <ul class="site-nav">
              <a href="{{ URL::asset('nosotros')}}" class="menu_activo"><li>NOSOTROS</li></a>
              <a href="{{ URL::asset('inmuebles')}}"><li>ENCUENTRA EL TU YO</li></a>
              <a href="{{ URL::asset('vivienda')}}"><li>TU VIVIENDA</li></a>
              <a href="{{ URL::asset('invierte')}}"><li>INVIERTE</li></a>
              <a href="{{ URL::asset('unete')}}"><li>ÚNETE</li></a>
              <a href="{{ URL::asset('faq')}}"><li>FAQ</li></a>
            </ul>
          </div>
        </div>
      </div>
    </header>

    <header id="header-mobil" class="site-header">
      <div class="container">
        <div class="row">
          <!-- Logotipo -->
          <div class="col-1 col-md-1">
            <a href="{{ URL::asset('/')}}"><div class="site-logo"></div></a>
          </div>
          <!-- Navegación -->
          <div id="btn-toogle" class="col-2 col-md-1 offset-9 offset-md-10">
            <div class="button">
              <div class="line_button"></div>
              <div class="line_button"></div>
              <div class="line_button"></div>
            </div>
          </div>
        </div>
      </div>
    </header>


    <!-- Sección 01 -->
    <div class="img_main">
      <div class="secc_main_01">
        <p class="title">Para tí</p>
      </div>
      <div class="secc_main_02 img_house">
        <p class="parrafo_main">Somos una empresa con mas de diez años de experiencia
        en el sector inmobiliario enfocado actualmente en el ramo de los Remate Hipotecarios;
        con la finalidad de que nuestros clientes logren consolidar su patrimonio, superando todas sus expectativas.</p>
      </div>
    </div>

    <!-- ¿Que ofrecemos? -->
    <div class="secc_02">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-6 col-xl-6 offset-lg-3 offset-xl-3">
            <h2 class="titulo size-big">Nuestras Garantías</h2>
          </div>
        </div>
        <div class="row">
          <!-- Card 01 -->
          <div class="col-md-4 col-lg-3 col-xl-3 offset-lg-2 offset-xl-2">
            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
              <div class="flipper">
                <div class="front">
                  <!-- Contenido frontal -->
                  <div class="target_front">
                    <div class="img_serv_01"></div>
                  </div>
                </div>
                <div class="back">
                  <!-- Contenido posterior -->
                  <div class="target_back">
                    <h3>SATISFACCIÓN</h3>
                    <p>Entera satisfacción de nuestros clientes o la devolución íntegra de tu dinero.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Card 02 -->
          <div class="col-md-4 col-lg-3 col-xl-3 ">
            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
              <div class="flipper">
                <div class="front">
                  <!-- Contenido frontal -->
                  <div class="target_front">
                    <div class="img_serv_02"></div>
                  </div>
                </div>
                <div class="back">
                  <!-- Contenido posterior -->
                  <div class="target_back">
                    <h3>INMUEBLE</h3>
                    <p>Se garantiza hasta por un año las mejoras a la vivienda.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Card 03 -->
          <div class="col-md-4 col-lg-3 col-xl-3">
            <div class="flip-container" ontouchstart="this.classList.toggle('hover');">
              <div class="flipper">
                <div class="front">
                  <!-- Contenido frontal -->
                  <div class="target_front">
                    <div class="img_serv_03"></div>
                  </div>
                </div>
                <div class="back">
                  <!-- Contenido posterior -->
                  <div class="target_back">
                    <h3>SERVICIO</h3>
                    <p>Nos comprometemos a llevar el proceso del juicio hasta obtener la conclusión del mismo.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Secc garantia -->
    <div class="img_city_03"></div>
    <div class="comp_city_03">
      <div class="container-fluid">
        <div class="row">
          <div class="col-10 col-md-8 col-lg-8 col-xl-8 offset-md-4 offset-2 offset-lg-4 offset-xl-5 cleanPadding group-llave">
            <div class="llave_part_01"></div>
            <div class="llave_part_02"></div>
          </div>
        </div>
      </div>
      <div class="img_city_04"></div>
      <div class="comp_city_04">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-6 col-xl-6 offset-lg-3 offset-xl-3">
              <p class="text_01">Nuestra misión:</p>
              <p class="text_mision">SER LA LLAVE PARA QUE CONSOLIDES TU PATRIMONIO</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Funciones -->
    <script src="{{ URL::asset('js/funciones.js') }}"></script>
  </body>
</html>
