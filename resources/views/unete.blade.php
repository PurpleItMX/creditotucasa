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
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ URL::asset('lightslider/css/lightslider.min.css') }}" rel="stylesheet" type="text/css">
    <!-- style app-->

    <!-- Estilos -->
    <link rel="stylesheet" href="{{ URL::asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/estilos_ph.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/estilos_tb.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/theme_ph.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/theme_tb.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('boxslider/css/jquery.bxslider.css') }}">
    <!------------------------------ Scripts ---------------------------------->
    <!-- jQuery -->
    <script src="{{ URL::asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ URL::asset('js/popper.min.js')}}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ URL::asset('js/jquery.mask.min.js') }}"></script>
    <script src="{{ URL::asset('lightslider/js/lightslider.js')}}"></script>
    <script src="{{ URL::asset('boxslider/js/jquery.bxslider.js')}}"></script>
    <!-- greensock-js -->
    <script type="text/javascript" src="{{ URL::asset('greensock-js/src/minified/TweenMax.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('greensock-js/src/minified/easing/EasePack.min.js') }}"></script>


</head>
  <body>
    <!-- Menú mobil -->
    <div id="menu-mobil" class="layout-menu">
      <ul class="nav-mobil">
        <a href="{{ URL::asset('nosotros')}}"><li>NOSOTROS</li></a>
        <a href="{{ URL::asset('inmuebles')}}"><li>ENCUENTRA EL TUYO</li></a>
        <a href="{{ URL::asset('vivienda')}}"><li>TU VIVIENDA</li></a>
        <a href="{{ URL::asset('invierte')}}"><li>INVIERTE</li></a>
        <a href="{{ URL::asset('unete')}}" class="menu_activo"><li>ÚNETE</li></a>
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
              <a href="{{ URL::asset('nosotros')}}"><li>NOSOTROS</li></a>
              <a href="{{ URL::asset('inmuebles')}}"><li>ENCUENTRA EL TU YO</li></a>
              <a href="{{ URL::asset('vivienda')}}"><li>TU VIVIENDA</li></a>
              <a href="{{ URL::asset('invierte')}}"><li>INVIERTE</li></a>
              <a href="{{ URL::asset('unete')}}" class="menu_activo"><li>ÚNETE</li></a>
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
    <div class="img_unete">
      <div class="secc_main_01">
        <p class="title">Únete</p>
      </div>
      <div class="secc_main_02 img_house">
        <p class="parrafo_main">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
        when an unknown printer took a galley of type and scrambled it to make a type
        specimen book. It has survived not only five centuries, but also the leap into
         electronic typesetting, remaining essentially unchanged.</p>
      </div>
    </div>

    <!-- ¿Que ofrecemos? -->
    <div class="secc_02">
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-10 col-xl-10 offset-lg-1 offset-xl-1">
             <div id="gallery" class="slider">
               <div>
                 <iframe width="100%" height="450" src="https://www.youtube.com/embed/yWsR-6yE-iY" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               </div>
               <div>
                 <iframe width="100%" height="450px" src="https://www.youtube.com/embed/jqJrrbozYbM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               </div>
               <div>
                 <iframe width="100%" height="450" src="https://www.youtube.com/embed/pJtZfhV-Seo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
               </div>
             </div>

             <div class="bg_thumbs">
               <div class="cont-thumbs">
                 <div class="gallery-thumbs-container">
                   <ul id="gallery-thumbs" class="gallery-thumbs-list">
                     <li class="thumb-item">
                       <div class="thumb pager-active">
                         <div class="desc-video">1</div>
                       </div>
                     </li>
                     <li class="thumb-item">
                       <div class="thumb ">
                         <div class="desc-video">2</div>
                       </div>
                     </li>
                     <li class="thumb-item">
                       <div class="thumb ">
                         <div class="desc-video">3</div>
                       </div>
                     </li>
                     <li class="thumb-item">
                       <div class="thumb ">
                         <div class="desc-video">4</div>
                       </div>
                     </li>
                   </ul>
                 </div>
               </div>
             </di>

          </div>
        </div>
      </div>
    </div>

    <!-- Secc compromiso-->
    <div class="secc_compromiso">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-xl-12">
            <h3 class="text_unete">Nuestro compromiso es mantener tu satisfacción</h3>
          </div>
        </div>
        <div class="row">
          <!-- img 01 -->
          <div class="col-md-4 col-lg-4 col-xl-4">
            <div class="img_cont_unete">
              <div class="icon_unete_01"></div>
              <p>ESCRITURAS</p>
            </div>
          </div>
          <!-- Img 02 -->
          <div class="col-md-4 col-lg-4 col-xl-4">
            <div class="img_cont_unete">
              <div class="icon_unete_02"></div>
              <p>ÓPTIMAS <br> CONDICIONES</p>
            </div>
          </div>
          <!-- img 03 -->
          <div class="col-md-4 col-lg-4 col-xl-4">
            <div class="img_cont_unete">
              <div class="icon_unete_03"></div>
              <p>ACABADOS</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Funciones -->
    <script src="{{ URL::asset('js/funciones.js') }}"></script>
  </body>
</html>
