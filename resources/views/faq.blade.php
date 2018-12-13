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
        <a href="{{ URL::asset('vivienda')}}"><li>TU VIVIENDA</li></a>
        <a href="{{ URL::asset('invierte')}}"><li>INVIERTE</li></a>
        <a href="{{ URL::asset('unete')}}"><li>ÚNETE</li></a>
        <a href="{{ URL::asset('faq')}}" class="menu_activo"><li>FAQ</li></a>
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
              <a href="{{ URL::asset('unete')}}"><li>ÚNETE</li></a>
              <a href="{{ URL::asset('faq')}}" class="menu_activo"><li>FAQ</li></a>
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
    <!-- Secc main -->
    <div class="espaciador"></div>
    <div id="header-img" class="header_inmuebles img_city_02">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 col-xl-12">
            <h2 class="titulo_header_faq">Resuelve <br> todas tus dudas</h2>
            <p class="sub-text">Da click en el tema de tu interes y despliega las preguntas más frecuentes sobre cada tema</p>
          </div>
        </div>
      </div>
    </div>
    <!-- Sección -->
    <div class="secc_catalogo color-city-02">
      <div class="container">
        <div class="row">
          <!-- Columna -->
          <div class="col-lg-12 col-xl-12">
            <!-- Preguntas frecunetes -->
            <div class="accordion acordion-faq" id="accordionExample">
              <!-- Remates hipotecarios -->
              <div class="card">
                <!-- Header acordion -->
                <div class="card-header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                  <h5 class="mb-0">
                    REMATES HIPOTECARIOS
                  </h5>
                </div>
                <!-- Contneido acordion  -->
                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                  <div class="card-body">
                    <div class="acordion-faq" id="accordionSubpreguntas">
                      <!-- Card 01 -->
                      <div id="subPregunta-01" class="btnSub color-gris texto-blanco">
                        <!-- Header acordion -->
                        <div class="" id="headingSub01" data-toggle="collapse" data-target="#collapseSub01" aria-expanded="true" aria-controls="collapseOne">
                          <h5 class="mb-0">
                            ¿Cómo invertir?
                          </h5>
                        </div>
                        <!-- Contneido acordion  -->
                        <div id="collapseSub01" class="collapse show" aria-labelledby="headingSub01" data-parent="#accordionSubpreguntas">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                            cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on
                            it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                            nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim
                            aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <!-- Card 02 -->
                      <div id="subPregunta-02" class="btnSub">
                        <!-- Header acordion -->
                        <div class="" id="headingSub02" data-toggle="collapse" data-target="#collapseSub02" aria-expanded="true" aria-controls="collapseOne">
                          <h5 class="mb-0">
                            ¿Es rentable?
                          </h5>
                        </div>
                        <!-- Contneido acordion  -->
                        <div id="collapseSub02" class="collapse" aria-labelledby="headingSub02" data-parent="#accordionSubpreguntas">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non
                            cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird
                            on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred
                            nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic
                            synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <!-- Card 03 -->
                      <div id="subPregunta-03" class="btnSub">
                        <!-- Header acordion -->
                        <div class="" id="headingSub03" data-toggle="collapse" data-target="#collapseSub03" aria-expanded="true" aria-controls="collapseOne">
                          <h5 class="mb-0">
                            ¿Donde?
                          </h5>
                        </div>
                        <!-- Contneido acordion  -->
                        <div id="collapseSub03" class="collapse" aria-labelledby="headingSub03" data-parent="#accordionSubpreguntas">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                            skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                            ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                            you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <!-- -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- END Contneido acordion  -->
              <!-- Credito tu vivienda -->
              <div class="card">
                <!-- Header acordion -->
                <div class="card-header" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                  <h5 class="mb-0">
                    CRÉDITO TU VIVIENDA
                  </h5>
                </div>
                <!-- END Header acordion -->
                <!-- Contneido acordion  -->
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                  <div class="card-body">
                    <div class="acordion-faq" id="accordionSubpreguntas02">
                      <!-- Card 04 -->
                      <div id="subPregunta-04" class="btnSub">
                        <!-- Header acordion -->
                        <div class="" id="headingSub04" data-toggle="collapse" data-target="#collapseSub04" aria-expanded="true" aria-controls="collapseTwo">
                          <h5 class="mb-0">
                            ¿Donde?
                          </h5>
                        </div>
                        <!-- Contneido acordion  -->
                        <div id="collapseSub04" class="collapse" aria-labelledby="headingSub04" data-parent="#accordionSubpreguntas02">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                            skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                            excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                            heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <!-- Card 05 -->
                      <div id="subPregunta-05" class="btnSub">
                        <!-- Header acordion -->
                        <div class="" id="headingSub05" data-toggle="collapse" data-target="#collapseSub05" aria-expanded="true" aria-controls="collapseTwo">
                          <h5 class="mb-0">
                            ¿Cómo invertir?
                          </h5>
                        </div>
                        <!-- Contneido acordion  -->
                        <div id="collapseSub05" class="collapse" aria-labelledby="headingSub05" data-parent="#accordionSubpreguntas02">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                            skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                            excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard
                            of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <!-- Card 06 -->
                      <div id="subPregunta-06" class="btnSub">
                        <!-- Header acordion -->
                        <div class="" id="headingSub06" data-toggle="collapse" data-target="#collapseSub06" aria-expanded="true" aria-controls="collapseTwo">
                          <h5 class="mb-0">
                            ¿Plan de ahorro?
                          </h5>
                        </div>
                        <!-- Contneido acordion  -->
                        <div id="collapseSub06" class="collapse" aria-labelledby="headingSub06" data-parent="#accordionSubpreguntas02">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                            skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                            ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt
                            you probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <!-- -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- END Contneido acordion  -->
              <div class="card">
                <!-- Header acordion -->
                <div class="card-header" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                  <h5 class="mb-0">
                    INVERSIONES EN REMATES HIPOTECARIOS
                  </h5>
                </div>
                <!-- END Header acordion -->
                <!-- Contneido acordion  -->
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                  <div class="card-body">
                    <div class="acordion-faq" id="accordionSubpreguntas03">
                      <!-- Card 07 -->
                      <div id="subPregunta-07" class="btnSub">
                        <!-- Header acordion -->
                        <div class="" id="headingSub07" data-toggle="collapse" data-target="#collapseSub07" aria-expanded="true" aria-controls="collapseTree">
                          <h5 class="mb-0">
                            ¿Cómo invertir?
                          </h5>
                        </div>
                        <!-- Contneido acordion  -->
                        <div id="collapseSub07" class="collapse" aria-labelledby="headingSub07" data-parent="#accordionSubpreguntas03">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                            skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan e
                            xcepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                            heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <!-- Card 08 -->
                      <div id="subPregunta-08" class="btnSub">
                        <!-- Header acordion -->
                        <div class="" id="headingSub08" data-toggle="collapse" data-target="#collapseSub08" aria-expanded="true" aria-controls="collapseThree">
                          <h5 class="mb-0">
                            ¿Es rentable?
                          </h5>
                        </div>
                        <!-- Contneido acordion  -->
                        <div id="collapseSub08" class="collapse" aria-labelledby="headingSub08" data-parent="#accordionSubpreguntas03">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                            skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin
                            coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan
                            excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't
                            heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <!-- Card 09 -->
                      <div id="subPregunta-09" class="btnSub">
                        <!-- Header acordion -->
                        <div class="" id="headingSub09" data-toggle="collapse" data-target="#collapseSub09" aria-expanded="true" aria-controls="collapseThree">
                          <h5 class="mb-0">
                            ¿Donde?
                          </h5>
                        </div>
                        <!-- Contneido acordion  -->
                        <div id="collapseSub09" class="collapse" aria-labelledby="headingSub09" data-parent="#accordionSubpreguntas03">
                          <div class="card-body">
                            Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat
                            skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid
                            single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente
                            ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you
                            probably haven't heard of them accusamus labore sustainable VHS.
                          </div>
                        </div>
                      </div>
                      <!-- -->
                    </div>
                  </div>
                </div>
              </div>
              <!-- END Contneido acordion  -->
            </div>
          </div>
          <!-- END Preguntas frecunetes -->
          <div class="secc-contacto">
            <div class="container">
              <div class="row">
                <div class="col-lg-4 col-xl-4">
                  <h2 class="titulo-contacto">PARA CUALQUIER <br> OTRA DUDA ESCRÍBENOS</h2>
                </div>
                <div class="col-lg-8 col-xl-8">
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
                    <div class="col-md-4 col-lg-2 col-xl-2 offset-lg-10 offset-md-4 offset-xl-10">
                      <button type="button" name="button" class="btnContacto">ENVIAR</button>
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
    <!-- Funciones -->
    <script type="text/javascript" src="{{ URL::asset('js/funciones.js') }}"></script>
  </body>
</html>
