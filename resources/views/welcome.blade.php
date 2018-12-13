<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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

        <!-- ma5slider -->
        <link rel="stylesheet" href="{{ URL::asset('ma5slider/css/ma5slider.css') }}">
        <!-- Estilos -->
        <link rel="stylesheet" href="{{ URL::asset('css/estilos.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/estilos_ph.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/estilos_tb.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/theme.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/theme_ph.css') }}">
        <link rel="stylesheet" href="{{ URL::asset('css/theme_tb.css') }}">
        <!------------------------------ Scripts ---------------------------------->
        <!-- jQuery -->
        <script src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
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
          <a href="{{ URL::asset('inmuebles')}}"><li>ENCUENTRA EL TUYO</li></a>
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
                <a href="{{ URL::asset('nosotros')}}"><li>NOSOTROS</li></a>
                <a href="{{ URL::asset('inmuebles')}}"><li>ENCUENTRA EL TUYO</li></a>
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

        <div id="main-01" class="secc_main">
        <!-- cont menú -->
        <div id="menu_toogle_dsk" class="menu_toggle hide-menu">
          <div class="container">
            <div class="row">
              <!-- Button -->
              <div class="col-lg-3 col-xl-3 offset-lg-1 bg_start">
                <div id="btn_toggle_dsk" class="btn-flecha"></div>
                <div  class="icon_logo_menu"></div>
              </div>
              <div class="col-lg-8 col-xl-8 bg_end">
                <div class="cont_nav-toggle">
                  <div class="line"></div>
                  <ul class="nav_main">
                    <a href="{{ URL::asset('nosotros')}}"><li>NOSOTROS</li></a>
                    <a href="{{ URL::asset('inmuebles')}}"><li> EL TUYO</li></a>
                    <a href="{{ URL::asset('vivienda')}}"><li>TU VIVIENDA</li></a>
                    <a href="{{ URL::asset('invierte')}}"><li>INVIERTE</li></a>
                    <a href="{{ URL::asset('unete')}}"><li>ÚNETE</li></a>
                    <a href="{{ URL::asset('faq')}}"><li>FAQ</li></a>
                    <a href="{{ URL::asset('contacto')}}"><li>CONTACTO</li></a>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
       </div>
        <!-- Encuentra el tuyo -->
        <div id="secc_encuentra" class="titulo_encuntra">
          <div class="container">
            <div class="row">
              <div class="col-9 col-md-8 col-lg-3 col-lx-3">
                <p>Encuentra el tuyo</p>
              </div>
              <div class="col-3 col-md-2 col-lg-2 col-xl-2  offset-md-1 offset-lg-7 offset-xl-7">
                <div class="icon_encuentra"></div>
              </div>
            </div>
          </div>
        </div>
        <!-- Carousel casas -->
        <div class="container">
        <!-- Vista mobil -->
        <div id="slider-mobil" class="ma5slider ma5slider anim-horizontal outside-navs outside-dots horizontal-navs horizontal-dots">
         <div class="slides">

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

        <!-- Remate hipotecario -->
        <div class="secc_02">
            <div class="back_house_01"></div>
            <div class="secc_gris_01">
          <div class="container">
            <div class="row">
              <div class="col-lg-8 col-xl-8 offset-lg-2 offset-xl-2">
                <div class="img_remate"></div>
                <p class="titulo_remate">¿Que es un <strong>remate hipotecario</strong>?</p>
                <p class="text-center">Son propiedades que provienen de un incumplimiento de
                pago, un opción que se refleja en adquirir un inmueble a un mejor costo y con buena ubicación.</p>
              </div>
            </div>
          </div>
          <div class="back_house_02"></div>
          <div class="secc_gris_02">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 col-xl-4">
                  <div class="secc_news">
                    <div class="img_news"></div>
                    <p>SUSCRÍBETE A NUESTRO</p>
                    <h3>NEWSLETTER MENSUAL</h3>
                    <div class="group-row">
                      <input type="text" class="input-text" name="" value="" placeholder="correo@dominio.com">
                      <button type="button" class="btn_news" name="button"></button>
                    </div>
                    <p>Y MANTENTE ACTUALIZADO <br> EN REMATES HIPOTECARIOS DISPONIBLES PARA TI</p>
                  </div>
                </div>
                <div class="col-lg-8 col-xl-8">
                  <div class="secc_form">
                    <div class="row">
                      <div class="col-lg-6 col-xl-6">
                        <h3>CONTÁCTANOS</h3>
                      </div>
                      <div class="col-lg-12 col-xl-12">
                        <input type="text" name="" class="input-text" value="" placeholder="Nombre">
                      </div>
                      <div class="group-input">
                        <div class="col-lg-6 col-xl-6">
                          <input type="text" name="" class="input-text" value="" placeholder="Teléfono">
                        </div>
                        <div class="col-lg-6 col-xl-6">
                          <input type="text" name="" class="input-text" value="" placeholder="Correo">
                        </div>
                      </div>
                      <div class="group-input">
                        <div class="col-lg-12 col-xl-12">
                          <select class="input-text" class="input-text" name="">
                            <option value="">Interesado en</option>
                            <option value="">Remate hipotecario</option>
                            <option value="">Crédito Tu Vivienda</option>
                            <option value="">Invertir</option>
                            <option value="">Otro</option>
                          </select>
                        </div>
                      </div>
                      <div class="group-input">
                        <div class="col-lg-12 col-xl-12">
                          <textarea name="name" rows="3" class="textArea" placeholder="Compártenos tus dudas"></textarea>
                        </div>
                      </div>
                      <div class="group-input">
                        <div class="col-md-4 col-lg-2 col-xl-2 offset-md-4 offset-lg-10 offset-xl-10">
                          <button type="button" name="button" class="btn_send">ENVIAR</button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-lg-6 col-lx-6 offset-lg-3 offset-xl-3">
                  <div class="dat-contacto">
                    <p>TELÉFONOS <strong>(HORARIO DE ATENCÍON: 9AM A 7PM) </strong> <br>
                      130 9092 / 130 9093 / 130 9094</p>
                    <p>Robalo 1125 es. Av. Costa de Oro <br> Fracc.Costa de Oro Boca del Río, Ver. C.P.94299</p>
                    <p>© 2018 Crédito Tu Casa</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
            </div>
        </div>
        <!-- Funciones -->
        <script type="text/javascript" src="{{ URL::asset('js/funciones.js') }}"></script>
        <script type="text/javascript" src="{{ URL::asset('js/scroll_menu.js') }}"></script>
        <script>
            $(window).on('load', function () {
                $('.ma5slider').ma5slider();
            });
        </script>
    </body>
</html>
