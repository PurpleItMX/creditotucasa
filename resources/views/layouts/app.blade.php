<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>{{ config('app.name', 'Laravel') }} | Dashboard</title>
    <!-------------------------- Styles ---------------------------------------------------->
    <link href="{{ URL::asset('css/font-awesome.min.css') }}" rel="stylesheet"  type="text/css">
    <link href="{{ URL::asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    
    <link rel="stylesheet" href="{{ URL::asset('jsfileupload/css/jquery.fileupload.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('jsfileupload/css/jquery.fileupload-ui.css') }}">
    <noscript><link rel="stylesheet" href="{{ URL::asset('jsfileupload/css/jquery.fileupload-noscript.css') }}"></noscript>
    <noscript><link rel="stylesheet" href="{{ URL::asset('jsfileupload/css/jquery.fileupload-ui-noscript.css') }}"></noscript>

    <!--<link href="{{ URL::asset('css/datatables.css') }}" rel="stylesheet">
    <link href="{{ URL::asset('css/tableStyle.css') }}" rel="stylesheet" type="text/css">-->
    <!-- style dasboard-->
    <link rel="stylesheet" href="{{ URL::asset('css/estilos-admin.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/adminlte.css') }}">
    <!-- style app-->
    <link rel="stylesheet" href="{{ URL::asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/boxStyle.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('jsfileupload/css/style.css') }}">
    
    <script id="template-upload" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-upload fade">
        <td>
            <span class="preview"></span>
        </td>
        <td>
            <p class="name">{%=file.name%}</p>
            <strong class="error text-danger"></strong>
        </td>
        <td>
            <p class="size">Processing...</p>
            <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100" aria-valuenow="0"><div class="progress-bar progress-bar-success" style="width:0%;"></div></div>
        </td>
        <td>
            {% if (!i && !o.options.autoUpload) { %}
                <button class="btn btn-primary start" disabled>
                    <i class="glyphicon glyphicon-upload"></i>
                    <span>Start</span>
                </button>
            {% } %}
            {% if (!i) { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
<!-- The template to display files available for download -->
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) { %}
    <tr class="template-download fade">
        <td>
            <span class="preview">
                {% if (file.thumbnailUrl) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" data-gallery><img src="{%=file.thumbnailUrl%}"></a>
                {% } %}
            </span>
        </td>
        <td>
            <p class="name">
                {% if (file.url) { %}
                    <a href="{%=file.url%}" title="{%=file.name%}" download="{%=file.name%}" {%=file.thumbnailUrl?'data-gallery':''%}>{%=file.name%}</a>
                {% } else { %}
                    <span>{%=file.name%}</span>
                {% } %}
            </p>
            {% if (file.error) { %}
                <div><span class="label label-danger">Error</span> {%=file.error%}</div>
            {% } %}
        </td>
        <td>
            <span class="size">{%=o.formatFileSize(file.size)%}</span>
        </td>
        <td>
            {% if (file.deleteUrl) { %}
                <button class="btn btn-danger delete" data-type="{%=file.deleteType%}" data-url="{%=file.deleteUrl%}"{% if (file.deleteWithCredentials) { %} data-xhr-fields='{"withCredentials":true}'{% } %}>
                    <i class="glyphicon glyphicon-trash"></i>
                    <span>Eliminar</span>
                </button>
            {% } else { %}
                <button class="btn btn-warning cancel">
                    <i class="glyphicon glyphicon-ban-circle"></i>
                    <span>Cancel</span>
                </button>
            {% } %}
        </td>
    </tr>
{% } %}
</script>
    <script src="{{ URL::asset('js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.validate.min.js') }}"></script>
    <script src="{{ URL::asset('js/additional-methods.min.js') }}"></script>
    <script src="{{ URL::asset('js/popper.min.js') }}"></script>

    <script src="{{ URL::asset('jsfileupload/js/vendor/jquery.ui.widget.js') }}"></script>
    <script src="{{ URL::asset('jsfileupload/tmpl.min.js') }}"></script>
    <script src="{{ URL::asset('jsfileupload/load-image.all.min.js') }}"></script>
    
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('jsfileupload/canvas-to-blob.min.js') }}"></script>
    <script src="{{ URL::asset('jsfileupload/js/jquery.iframe-transport.js') }}"></script>
    <script src="{{ URL::asset('jsfileupload/js/jquery.fileupload.js') }}"></script>
    <script src="{{ URL::asset('jsfileupload/js/jquery.fileupload-process.js') }}"></script>
    <script src="{{ URL::asset('jsfileupload/js/jquery.fileupload-image.js') }}"></script>
    <script src="{{ URL::asset('jsfileupload/js/jquery.fileupload-audio.js') }}"></script>
    <script src="{{ URL::asset('jsfileupload/js/jquery.fileupload-video.js') }}"></script>
    <script src="{{ URL::asset('jsfileupload/js/jquery.fileupload-validate.js') }}"></script>
    <script src="{{ URL::asset('jsfileupload/js/jquery.fileupload-ui.js') }}"></script>
    <script src="{{ URL::asset('jsfileupload/js/main.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.mask.min.js') }}"></script>
    <script src="{{ URL::asset('js/datatables.min.js') }}"></script>

    <!-- style de menu -->
    <script src="{{ URL::asset('js/adminlte.js') }}"></script>
    <!--  propios del proyecto-->
    <script src="{{ URL::asset('js/app.js') }}"></script>
</head>
<body class="hold-transition sidebar-mini">
    @guest
    <div class="">
    <section class="">
      <div class="">
        <main class="">
            @if(!empty($success))
                <input id="message" value="{{ $success }}" type="hidden"/>
                <div class="alert alert-success">
                    <p>{{ $success }}</p>
                    <!--<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>-->
                </div>
            @endif
            @if($errors->any())
                <input id="message" value="{{ $errors->first()}}" type="hidden"/>
                <div class="alert alert-danger">
                    <p>{{ $errors->first()}}</p>
                    <!--<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>-->
                </div>
            @endif
            <div id="messageAlert"><p></p></div>
            @yield('content')
        </main>
      </div>
    </section>
</div>
        <!--<script type="text/javascript">
            window.location = "{{ route('login') }}";

        </script>-->
    @else
    <input id="baseUrl" value="{{ url('/') }}" type="hidden" />
    <div class="wrapper">
        @if(Auth::user())
        <nav class="main-header navbar navbar-expand bg-white navbar-light border-bottom">
          <!-- Left navbar links -->
          <div class="col-lg-1 col-xl-1">
            <ul class="navbar-nav">
              <li class="nav-item">
                <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
              </li>
            </ul>
          </div>
          <!-- Right navbar links -->
          <div class="col-lg-1 col-lx-1 offset-lg-9 offset-xl-9">
              <a class="" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <div class="button-logout">
                 <p>{{ __('Salir') }}</p>
                </div>
              </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  @csrf
              </form>
          </div>
        </nav>
        @endif
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
            <a href="{{ url('/') }}" class="brand-link">
                <img src="{{ URL::asset('img/Logo.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
                <span class="brand-text font-weight-light">{{ config('app.name', 'Laravel') }}</span>
            </a>
            <div class="sidebar">
                <div class="user-panel mt-3 pb-3 mb-3 d-flex">
                    <div class="image">
                        <img src="{{ URL::asset('img/user.png') }}" class="img-circle elevation-2" alt="User Image">
                    </div>
                    <div class="info">
                        <a href="#" class="d-block">{{ Auth::user()->name }}</a>
                    </div>
                </div>
                  <nav class="mt-2">
                    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                        @foreach ($menus as $key => $item)
                            @if ($item['id_parent'] != 0)
                                @break
                            @endif
                            @include('menu-item', ['item' => $item])
                        @endforeach
                    </ul>
                  </nav>
            </div>
        </aside>

        <div class="content-wrapper">
            <section class="content">
              <div class="container-fluid">
                <main class="">
                    @if(session("success"))
                        <input id="message" value="{{ session("success") }}" type="hidden"/>
                        <div class="alert alert-success">
                            <p>{{ session("success") }}</p>
                            <!--<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>-->
                        </div>
                    @endif
                    @if(session("error"))
                        <input id="message" value="{{ session("error") }}" type="hidden"/>
                        <div class="alert alert-danger">
                            <p>{{ session("error") }}</p>
                            <!--<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>-->
                        </div>
                    @endif

                    <div id="messageAlert"><p></p></div>
                    @yield('content')
                </main>
              </div>
            </section>
        </div>

    </div>


    <div id="ChangePasswordModal" class="modal" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
      <div class="modal-dialog modal-xs" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <center><h5 class="modal-title">{{ __('Cambio de Contraseña') }}</h5></center>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            <form id="saveChangePasswordForm" name="form-new-password" method="POST" action="">
                @csrf
                <input id="idUser" type="hidden" class="form-control " name="id_user" value="{{ Auth::user()->id }}">
                <div class="form-row">
                    <div class="form-group col-md-6">
                      <label for="new-password">{{ __('Nueva Contraseña:') }}</label>
                      <input id="new-password" type="password" class="form-control" name="new-password" required value="">
                    </div>
                </div>
            </form>
         </div>
          <div class="modal-footer">
            <button id="saveChangePassword" type="button" class="btn btn-primary"><i class="fa fa-floppy-o"></i> {{ __('Guardar') }}</button>
            <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-close"></i> {{ __('Cancelar') }}</button>
          </div>
        </div>

      </div>
    </div>
    @endguest
</body>
</html>
