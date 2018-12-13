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
    <link href="{{ URL::asset('jplistMaster/1.2.0/jplist.styles.css') }}" rel="stylesheet" type="text/css">
    <!-- Estilos -->
    <link rel="stylesheet" href="{{ URL::asset('css/estilos.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/estilos_ph.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/estilos_tb.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/theme.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/theme_ph.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/theme_tb.css') }}">
    <!------------------------------- Scripts ---------------------------------->
    <!-- jQuery -->
    <script src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ URL::asset('js/popper.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('jplistMaster/1.2.0/jplist.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.mask.min.js') }}"></script>
    <script src="{{ URL::asset('mask/jquery.mask.min.js') }}"></script>
    <!-- greensock-js -->
    <script type="text/javascript" src="{{ URL::asset('greensock-js/src/minified/TweenMax.min.js') }}"></script>
    <script type="text/javascript" src="{{ URL::asset('greensock-js/src/minified/easing/EasePack.min.js') }}"></script>
    <!-- Mask money -->
</head>
  <body>
    <!-- Menú mobil -->
    <div id="menu-mobil" class="layout-menu">
      <ul class="nav-mobil">
        <a href="{{ URL::asset('nosotros')}}"><li>NOSOTROS</li></a>
        <a href="{{ URL::asset('inmuebles')}}" class="menu_activo"><li>ENCUENTRA EL TU YO</li></a>
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
              <a href="{{ URL::asset('inmuebles')}}" class="menu_activo"><li>ENCUENTRA EL TU YO</li></a>
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

    <!-- Secc main -->
    <div class="espaciador"></div>
    <div id="header-img" class="header_inmuebles img_city_01">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-xl-12">
            <div class="img_buscar"></div>
            <p class="titulo_inmue">Encuentra el tuyo</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Items catálogo -->
    <div id="bg-city" class="secc_catalogo color-city-01">
      <div class="container">
        <div class="row secc_controles">
          <div class="col-12 col-lg-10 col-xl-8 offset-lg-1 offset-xl-2 controls">
            <!-- Control de costos -->
            <div class="dropdown">
              <button class="btn   btn_control" type="button" id="dropdownMenu2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                COSTO
              </button>
              <div id="drop-control" class="dropdown-menu cont-dropdown" aria-labelledby="dropdownMenu2">
                <button
                     id="button0"
                     class=""
                     data-jplist-control="buttons-range-filter"
                     data-path=".precio"
                     data-group="group1"
                     data-name="precio">
                     COSTO
                </button>
                  <button
                       id="button01"
                       class=""
                       data-jplist-control="buttons-range-filter"
                       data-path=".precio"
                       data-group="group1"
                       data-name="precio"
                       data-from="0"
                       data-to="200000">
                       0 - $200,000
                  </button>

                  <button
                       id="button02"
                       class=""
                       data-jplist-control="buttons-range-filter"
                       data-path=".precio"
                       data-group="group1"
                       data-name="precio"
                       data-from="200000"
                       data-to="500000">
                       $200,000 - $500,000
                  </button>

                  <button
                       id="button03"
                       class=""
                       data-jplist-control="buttons-range-filter"
                       data-path=".precio"
                       data-group="group1"
                       data-name="precio"
                       data-from="500000"
                       data-to="700000">
                       $500,000 - $700,000
                  </button>
                  <button
                       id="button04"
                       class=""
                       data-jplist-control="buttons-range-filter"
                       data-path=".precio"
                       data-group="group1"
                       data-name="precio"
                       data-from="700000"
                       data-to="1000000">
                       $700,000 - $1,000,000
                  </button>
                  <button
                       id="button05"
                       class=""
                       data-jplist-control="buttons-range-filter"
                       data-path=".precio"
                       data-group="group1"
                       data-name="precio"
                       data-from="1000"
                       data-to="2000">
                       $1,000,000 - $2,000,000
                  </button>
                  <button
                       id="button06"
                       class=""
                       data-jplist-control="buttons-range-filter"
                       data-path=".precio"
                       data-group="group1"
                       data-name="precio"
                       data-from="2000">
                       $2,000,000 - O más
                  </button>
             </div>
           </div>

          <select
            class="btn_control"
            data-jplist-control="select-filter"
            data-group="group1"
            data-name="municipio">
            <option class="select-opt"
              value="0"
              data-path="default">MUNICIPIO</option>
            <option
              value="1"
              data-path=".boca">Boca del Río</option>
            <option
              value="2"
              data-path=".panuco">Panuco</option>
            <option
                value="3"
                data-path=".veracruz">Veracruz</option>
            <option
                value="3"
                data-path=".pozarica">Poza Rica</option>
          </select>

          <select
            class="btn_control"
            data-jplist-control="select-filter"
            data-group="group1"
            data-name="recamaras">

            <option
              value="0"
              data-path="default">RECAMARAS</option>
            <option
              value="1"
              data-path=".una">1 Recamara</option>
            <option
              value="2"
              data-path=".dos">2 0 más</option>
            <option
              value="3"
              data-path=".tres">3 o más</option>
          </select>
          </div>
          <div class="col-lg-4 col-xl-4 offset-lg-1 offset-xl-2">
            <div id="btn-credito" class="control-checkbox">
              <div class="border-box">
                <button id="btnRadio" type="button"
                 class="btn-radio"
                 data-jplist-control="buttons-text-filter"
                 data-path=".credito"
                 data-group="group1"
                 data-mode="checkbox"
                 data-text="credito"
                 data-name="credito">
               </button>
              </div>
              <p>MOSTRAR SÓLO OPCIONES A CRÉDITO</p>
            </div>

          </div>
        </div>

        <div class="row">
          <div class="col-lg-10 offset-lg-1 col-xl-10">
            <div  data-jplist-group="group1">
              <!-- Item 1 -->
              <div class="item_house"  data-jplist-item>
                <div class="img">
                  <div class=""></div>
                  <div class="inmueble_01 img-house modal-img"></div>
                </div>
                <div class="desc_inmueble color--gris">
                  <h3 class="dat_ubicacion">Fracc.Costa de oro</h3>
                  <p class="casa_oportunidad">CASA DE OPORTUNIDAD</p>
                  <p class="dos">2 Recamara - 2 Baños</p>
                  <p class="panuco">Panuco</p>
                  <p class="precio d-none">350000</p>
                  <div class="dat_precio">
                    <p>Precio: $ </p>
                    <p class="money">3500000</p>
                  </div>
                  <p class="data_credito">DISPONIBLE EN CREDITO TU VIVIENDA</p>
                  <div class="group_buttons">
                  </div>
                  <div class="cont_info">
                    <button class="modal-interes" type="button" name="button">ESTOY INTERESADO</button>
                  </div>
                </div>
              </div>


              <!-- Item 2 -->
              <div class="item_house"  data-jplist-item>
                <div class="img">
                  <div class="sale"></div>
                  <div class="inmueble_01 img-house"></div>
                </div>
                <div class="desc_inmueble color--gris">
                  <h3 class="dat_ubicacion">Fracc.Costa de oro</h3>
                  <p class="casa_oportunidad">CASA DE OPORTUNIDAD</p>
                  <p class="dos">2 Recamara - 2 Baños</p>
                  <p class="panuco">Panuco</p>
                  <p class="precio d-none">350000</p>
                  <div class="dat_precio">
                    <p>Precio: $ </p>
                    <p class="money">3500000</p>
                  </div>
                  <p class="data_credito">DISPONIBLE EN CREDITO TU VIVIENDA</p>
                  <div class="group_buttons">
                  </div>
                  <div class="cont_info">
                    <button class="modal-interes d-none" type="button" name="button">ESTOY INTERESADO</button>
                  </div>
                </div>
              </div>

              <!-- Item 3 -->
              <div class="item_house"  data-jplist-item>
                <div class="img">
                  <div class="inmueble_01 modal-img"></div>
                </div>
                <div class="desc_inmueble color-azul credito">
                  <h3 class="dat_ubicacion">Fracc.Costa de oro</h3>
                  <p class="casa_oportunidad">CASA DE OPORTUNIDAD</p>
                  <p class="dos">2 Recamara - 2 Baños</p>
                  <p class="panuco">Panuco</p>
                  <p class="precio d-none">350000</p>
                  <div class="dat_precio">
                    <p>Precio: $ </p>
                    <p class="money">350000</p>
                  </div>
                  <p class="data_credito">DISPONIBLE EN CREDITO TU VIVIENDA</p>
                  <div class="group_buttons">
                  </div>
                  <div class="cont_info">
                    <button class="modal-interes" type="button" name="button">ESTOY INTERESADO</button>
                    <div class="secc_icon_vivienda icon_vivienda"></div>
                  </div>
                </div>
              </div>

              <!-- Item 4 -->
              <div class="item_house"  data-jplist-item>
                <div class="img">
                  <div class="inmueble_01 modal-img"></div>
                </div>
                <div class="desc_inmueble color--gris">
                  <h3 class="dat_ubicacion">Fracc.Costa de oro</h3>
                  <p class="casa_oportunidad">CASA DE OPORTUNIDAD</p>
                  <p class="dos">2 Recamara - 2 Baños</p>
                  <p class="panuco">Panuco</p>
                  <p class="precio d-none">700000</p>
                  <div class="dat_precio">
                    <p>Precio: $ </p>
                    <p class="money">700000</p>
                  </div>
                  <p class="data_credito">DISPONIBLE EN CREDITO TU VIVIENDA</p>
                  <div class="group_buttons">
                  </div>
                  <div class="cont_info">
                    <button class="modal-interes" type="button" name="button">ESTOY INTERESADO</button>
                  </div>
                </div>
              </div>

              <!-- Item 5 -->
              <div class="item_house"  data-jplist-item>
                <div class="img">
                  <div class="inmueble_01 modal-img"></div>
                </div>
                <div class="desc_inmueble color--gris">
                  <h3 class="dat_ubicacion">Fracc.Costa de oro</h3>
                  <p class="casa_oportunidad">CASA DE OPORTUNIDAD</p>
                  <p class="dos">2 Recamara - 2 Baños</p>
                  <p class="panuco">Panuco</p>
                  <p class="precio d-none">350</p>
                  <div class="dat_precio">
                    <p>Precio: $ </p>
                    <p class="money">35000000</p>
                  </div>
                  <p class="data_credito">DISPONIBLE EN CREDITO TU VIVIENDA</p>
                  <div class="group_buttons">
                  </div>
                  <div class="cont_info">
                    <button class="modal-interes" type="button" name="button">ESTOY INTERESADO</button>
                  </div>
                </div>
              </div>

              <!-- no results control -->
              <div class="view_none" data-jplist-control="no-results" data-group="group1" data-name="no-results">No Hay coincidencias</div>
              <!-- Páginado -->
            </div>
            <div class="col-lg-3 col-xl-3">
              <div
                data-jplist-control="pagination"
                data-group="group1"
                data-name="name1"
                data-items-per-page="3"
                data-current-page="0">
                <div class="control-page">
                  <button class="arrow"  type="button" data-type="prev">‹</button>
                    <div class="jplist-holder" data-type="pages">
                      <button class="page-btn btn_page" type="button" data-type="page">{pageNumber}</button>
                    </div>
                  <button class="arrow" type="button" data-type="next">›</button>
                </div>
              </div>
            </div><!-- Páginado -->
          </div>
        </div>
      </div>
    </div>


<!-- Modal interesado -->
<div id="modal-ineteresado" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content modal_datos">
      <div class="modal-header modal_header">
        <h5 class="modal-title" id="exampleModalLabel">ESTOY INTERESADO</h5>
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


<!-- Modal   -->
<div class="modal fade" id="modal-img" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-body">
        <!-- Carousel img -->
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="assets/webcreditodecasa-39.png" width="100%" alt="First slide">
          </div>
          <div class="carousel-item">
            <img src="assets/webcreditodecasa-39.png" width="100%" alt="Two slide">
          </div>
          <div class="carousel-item">
            <img src="assets/webcreditodecasa-39.png" width="100%" alt="Three slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
      </div>
    </div>
  </div>
</div>
    <!-- Funciones -->

    <script type="text/javascript">
       jplist.init();
       $('.money').mask('000,000,000,000,000.00', {reverse: true});
    </script>
    <script src="{{ URL::asset('js/funciones.js') }}"></script>
    <script src="{{ URL::asset('js/paginado.js') }}"></script>
  </body>
</html>
