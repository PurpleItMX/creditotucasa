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
    <!-- ma5slider -->
    <link rel="stylesheet" href="{{ URL::asset('ma5slider/css/ma5slider.css') }}">
    <!------------------------------ Scripts ---------------------------------->
    <!-- jQuery -->
    <script src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ URL::asset('js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('lightslider/js/lightslider.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.mask.min.js') }}"></script>
    <!-- ma5slider -->
    <script type="text/javascript" src="{{ URL::asset('ma5slider/js/jquery-ui.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('ma5slider/js/jquery.ui.touch-punch.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('ma5slider/js/ma5slider.min.js') }}"></script>
    <!-- greensock-js -->
    <script type="text/javascript" src="{{ URL::asset('greensock-js/src/minified/TweenMax.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('greensock-js/src/minified/easing/EasePack.min.js') }}"></script>


</head>
  <body>
    <!-- Menú mobil -->
    <div id="menu-mobil" class="layout-menu">
      <ul class="nav-mobil">
        <a href="{{ URL::asset('nosotros')}}"><li>NOSOTROS</li></a>
        <a href="{{ URL::asset('inmuebles')}}"><li>ENCUENTRA EL TU YO</li></a>
        <a href="{{ URL::asset('vivienda')}}" class="menu_activo"><li>TU VIVIENDA</li></a>
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
              <a href="{{ URL::asset('nosotros')}}"><li>NOSOTROS</li></a>
              <a href="{{ URL::asset('inmuebles')}}"><li>ENCUENTRA EL TU YO</li></a>
              <a href="{{ URL::asset('vivienda')}}" class="menu_activo"><li>TU VIVIENDA</li></a>
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
    <div class="img_vivienda">
      <!-- Logo vivienda -->
      <div class="container">
        <div class="row">
          <div class="col-lg-8 col-l-8 offset-lg-2 offset-xl-2">
            <div class="logo_vivineda"></div>
            <h3>Un <strong>patrimonio</strong> a tu alcance</h3>
          </div>
        </div>
      </div>
    </div>
    <!-- Sección 02 -->
    <div class="secc_02_vivienda">
      <div class="container">
        <div class="row">
          <div class="col-md-7 col-lg-5 col-xl-6 offset-md-5 offset-lg-5">
            <p class="text_vivienda">Tu vivienda es un programa que te permite adquirir tu
            patrimonio a través de un crédito sencillo, bajo enganche y una taza de interés mínima.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Sección 03 -->
    <div class="secc_03_vivienda">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-lg-12 col-xl-12">
            <h3>Fácil, estable y seguro</h3>
          </div>
          <div class="col-md-4 col-lg-4 col-xl-4">
            <div class="box color-azul">
              <p>RECIBE TU CASA EN</p>
              <h3>10 MESES</h3>
            </div>
          </div>

          <div class="col-md-4 col-lg-4 col-xl-4">
            <div class="box color-gris">
              <p>ENGANCHE DESDE</p>
              <h3>$50,000</h3>
            </div>
          </div>

          <div class="col-md-4 col-lg-4 col-xl-4">
            <div class="box color-azul">
              <p>MENSUALIDADES</p>
              <h3>$2,219</h3>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Sección 04 -->
    <div class="secc_04_vivienda">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-xl-12">
            <h3>¿Soy Candidato?</h3>
          </div>
          <div class="col-lg-8 col-xl-8 offset-lg-2">
            <p class="text_candidato">Con tan solo llenar tu solicitud, compartirnos tu IFE vigente,
            un comprobante de domicilio actual, acta de nacimiento y un comprobante de ingresos ya
            eres candidato para obtener un crédito con nosotros.</p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6 col-lg-4 col-xl-4 offset-md-3 offset-lg-4 offset-xl-4">
            <a href="{{ URL::asset('faq')}}">
              <div class="btn-faq color-gris">
                <p>PREGUNTAS FRECUENTES</p>
              </div>
            </a>
          </div>
        </div>
      </div>
    </div>
    <!-- Sección 05 -->
    <div class="secc_05_vivienda">
      <!-- Encuentra el tuyo -->
      <div id="secc_encuentra" class="titulo_encuntra">
        <div class="container">
          <div class="row">
            <div class="col-9 col-md-8 col-lg-4 col-lx-4">
              <p>Encuentra el tuyo hoy</p>
            </div>
            <div class="col-3 col-md-2 col-lg-2 col-xl-2  offset-md-1 offset-lg-6 offset-xl-6">
              <div class="icon_encuentra"></div>
            </div>
          </div>
        </div>
      </div>
      <!-- Carousel casas -->
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div id="slider-mobil" class="ma5slider ma5slider anim-horizontal outside-navs outside-dots horizontal-navs horizontal-dots">
             <div class="slides slide_alt">
                     <div class="cardHouse">
                       <div class="imgContent">
                         <div class="img_hover img_house_01"></div>
                       </div>
                       <div class="descHouse">
                         <div class="datHouse">
                           <h3>Fracc.Reforma</h3>
                           <p>3 Recamaras</p>
                         </div>
                         <div  class="buttonMore">+</div>
                       </div>
                     </div>

                     <div class="cardHouse">
                       <div class="imgContent">
                         <div class="img_hover img_house_02"></div>
                       </div>
                       <div class="descHouse">
                         <div class="datHouse">
                           <h3>Fracc.Reforma</h3>
                           <p>3 Recamaras</p>
                         </div>
                         <div class="buttonMore">+</div>
                       </div>
                     </div>

                     <div class="cardHouse">
                       <div class="imgContent">
                         <div class="img_hover img_house_03"></div>
                       </div>
                       <div class="descHouse">
                         <div class="datHouse">
                           <h3>Fracc.Reforma</h3>
                           <p>3 Recamaras</p>
                         </div>
                         <div class="buttonMore">+</div>
                       </div>
                     </div>




                     <div class="cardHouse" data-inmueble="inmueble-04" data-animation="animation-scale">
                       <div class="img_hover img_house_01"></div>
                       <div class="descHouse">
                         <div class="datHouse">
                           <h3>Fracc.Reforma</h3>
                           <p>3 Recamaras</p>
                         </div>
                         <div class="buttonMore">+</div>
                       </div>
                     </div>


                     <div class="cardHouse" data-inmueble="inmueble-05" data-animation="animation-scale">
                       <div class="img_hover img_house_02"></div>
                       <div class="descHouse">
                         <div class="datHouse">
                           <h3>Fracc.Reforma</h3>
                           <p>3 Recamaras</p>
                         </div>
                         <div class="buttonMore">
                           <p>+</p>
                         </div>
                       </div>
                     </div>


                     <div class="cardHouse" data-inmueble="inmueble-06" data-animation="animation-scale">
                       <div class="img_hover img_house_03"></div>
                       <div class="descHouse">
                         <div class="datHouse">
                           <h3>Fracc.Reforma</h3>
                           <p>3 Recamaras</p>
                         </div>
                         <div class="buttonMore">
                           <p>+</p>
                         </div>
                       </div>
                     </div>
            </div>
          </div>

          <div id="slider-desck" class="ma5slider ma5slider anim-horizontal outside-navs outside-dots horizontal-navs horizontal-dots">
           <div class="slides">
             <div class="container">
               <div class="row">
                 <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                   <div class="cardHouse">
                     <div class="imgContent">
                       <div class="img_hover img_house_01"></div>
                     </div>
                     <div class="descHouse">
                       <div class="datHouse">
                         <h3>Fracc.Reforma</h3>
                         <p>3 Recamaras</p>
                       </div>
                       <div  class="buttonMore">+</div>
                     </div>
                   </div>
                 </div>
                 <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                   <div class="cardHouse">
                     <div class="imgContent">
                       <div class="img_hover img_house_02"></div>
                     </div>
                     <div class="descHouse">
                       <div class="datHouse">
                         <h3>Fracc.Reforma</h3>
                         <p>3 Recamaras</p>
                       </div>
                       <div class="buttonMore">+</div>
                     </div>
                   </div>
                 </div>
                 <div class="col-12 col-md-4 col-lg-4 col-xl-4">
                   <div class="cardHouse">
                     <div class="imgContent">
                       <div class="img_hover img_house_03"></div>
                     </div>
                     <div class="descHouse">
                       <div class="datHouse">
                         <h3>Fracc.Reforma</h3>
                         <p>3 Recamaras</p>
                       </div>
                       <div class="buttonMore">+</div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>

             <div class="container">
               <div class="row">
                 <div class="col-md-4 col-lg-4 col-xl-4">
                   <div class="cardHouse" data-inmueble="inmueble-04" data-animation="animation-scale">
                     <div class="img_hover img_house_01"></div>
                     <div class="descHouse">
                       <div class="datHouse">
                         <h3>Fracc.Reforma</h3>
                         <p>3 Recamaras</p>
                       </div>
                       <div class="buttonMore">+</div>
                     </div>
                   </div>
                 </div>
                 <div class="col-md-4 col-lg-4 col-xl-4">
                   <div class="cardHouse" data-inmueble="inmueble-05" data-animation="animation-scale">
                     <div class="img_hover img_house_02"></div>
                     <div class="descHouse">
                       <div class="datHouse">
                         <h3>Fracc.Reforma</h3>
                         <p>3 Recamaras</p>
                       </div>
                       <div class="buttonMore">
                         <p>+</p>
                       </div>
                     </div>
                   </div>
                 </div>
                 <div class="col-md-4 col-lg-4 col-xl-4">
                   <div class="cardHouse" data-inmueble="inmueble-06" data-animation="animation-scale">
                     <div class="img_hover img_house_03"></div>
                     <div class="descHouse">
                       <div class="datHouse">
                         <h3>Fracc.Reforma</h3>
                         <p>3 Recamaras</p>
                       </div>
                       <div class="buttonMore">
                         <p>+</p>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
             </div>
           </div>
          </div>
          </div>
        </div>
      </div>

      <div class="container">
        <div class="row">
          <div class="col-lg-4 co-xl-4 offset-lg-4 offset-xl-4">
            <div class="img_casa"></div>
          </div>
          <div class="col-md-6 col-lg-4 col-xl-4 offset-md-3 offset-lg-4 offset-xl-4">
              <div id="btn-modal" class="btn-contacta color-azul">
                <p>CONTÁCTATE CON NUESTROS ASESORES</p>
              </div>
          </div>
        </div>
      </div>
    </div>


    <!-- Modal   -->
    <div id="modalContacto" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal_datos">
          <div class="modal-header modal_header">
            <h5 class="modal-title" id="exampleModalLabel">Contactanos</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="row">
              <div class="col-lg-12 col-xl-12">
                <form class="form_datos" action="index.html" method="post">
                  <div class="group_button">
                    <input type="text" id="nombre" class="form-control" name="" value="" placeholder="Nombre..." required>
                    <p id="alert_nombre" class="text_alert"></p>
                  </div>
                  <div class="group_button">
                    <input type="text" id="correo" class="form-control" name="" value="" placeholder="Correo..." required>
                    <p id="alert_correo" class="text_alert"></p>
                  </div>
                  <div class="group_button">
                    <input type="text" id="phone" class="form-control" name="" value="" placeholder="Teléfono...">
                  </div>
                  <textarea name="name" class="form-control" rows="4" cols="40" placeholder="Mensaje..."></textarea>
                </form>
              </div>
            </div>
          </div>
          <div class="modal-footer modal_footer">
            <button id="btn_send" type="button" class="btn modal-enviar">ENVIAR INFORMACIÓN</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal   -->
    <div class="modal fade" id="modal-enviar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content modal_datos">
          <div class="modal-body center-modal">
            <h2>TUS DATOS SE ENVIARON CORECTAMENTE</h2>
            <div class="icon_cheked"></div>
          </div>
          <div class="modal-footer modal_footer">
            <button id="btn_send" type="button" class="btn" data-dismiss="modal">ACEPTAR</button>
          </div>
        </div>
      </div>
    </div>

    <!-- Funciones -->
    <script type="text/javascript" src="{{ URL::asset('js/funciones.js') }}"></script>
    <script>
        $(window).on('load', function () {
            $('.ma5slider').ma5slider();
        });
    </script>
  </body>
</html>
