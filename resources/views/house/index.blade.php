@extends('layouts.app')

@section('content')
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
<script id="template-download" type="text/x-tmpl">
{% for (var i=0, file; file=o.files[i]; i++) {%}
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

<script src="{{ URL::asset('js/house/form.js') }}"></script>

	<div class="container">
    <div class="box">
      <div class="box-header">
            <div class="row">
						<div class="col-lg-6 col-lx-6">
							<h3 class="box-title">{{ __('Lista Casas') }}</h3>
						</div>
            <div class="col-lg-2 col-lx-2 offset-lg-2">
							<button type="button" class="button button-color-add" id="newHouse">
	                    <i class="fa fa-file-o" aria-hidden="true"></i> {{ __('Crear') }}
	            </button>
            </div>
						<div class="col-lg-2 col-lx-2">
							<button type="button" class="button button-color-secondary" id="">
	                    <i class="fa fa-print" aria-hidden="true"></i> {{ __('Imprimir') }}
	            </button>
						</div>
          </div>
      </div>
      <div class="box-body">
      	<table id="listTable" class="table table-striped table-bordered" width="100%">
      		<thead>
      			<tr>
      				<th>{{ __('Nombre:') }}</th>
              <th width="30%">{{ __('Municipio:') }}</th>
              <th width="30%">{{ __('Colonia/Fraccionamiento:') }}</th>
      				<th width="30%">{{ __('Descripción:') }}</th>
              <th width="30%">{{ __('Especicaciones') }}</th>
      				<th>{{ __('Estatus:') }}</th>
      				<th width="10%">{{ __('Acciones:') }}</th>
      			</tr>
      		</thead>
      		<tbody>
      			@foreach ($houses as $house)
      				<tr>
      					<td>{{ $house->clave }}</td>
                <td>
                  @foreach($states as $state)
                   @if($house->municipality == $state->id_state)
                      {{ $state->name }}
                   @endif
                  @endforeach
                </td>
                <td>{{ $house->colony }}</td>
      					<td>{{ str_limit($house->description, $limit = 30, $end = '...') }}</td>
                <td>{{ str_limit($house->specification, $limit = 30, $end = '...') }}</td>
      					<td> @if($house->estatus == 1) Activo @else Inactivo @endif</td>
      					<td class="group-buttons">
      						<button type="button" class="btn-icon btn-edit searchHouse" data-id="{{$house->id_house}}">
      							<div class="icon_edit"></div>
      						</button>
      						<a  class="btn-icon btn-border border-alert" href="{{ url('/house/delete/'.$house->id_house)}}">
										<div class="icon_delete"></div>
      						</a>
      					</td>
      				</tr>
      			@endforeach
      		</tbody>
      	</table>
      </div>
    </div>
	</div>

@endsection

<div id="myModalHouse" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h5 class="modal-title">{{ __('Agregar una casa') }}</h5></center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="saveHouse" method="POST" action="{{ url('/house/save') }}">
          @csrf
          <input id="id_house" name="id_house" type="hidden" value="">
          <input id="redirect" name="id_house_redirect" type="hidden" value="true">
          <div class="form-row">
            <div class="form-group col-md-5">
              <label for="clave">{{ __('Clave:') }}</label>
              <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fa fa-search"></i></div>
                </div>
                <input id="clave" type="text" class="form-control search" data-id="" data-controller ="house" name="clave" required autofocus value="" maxlength="10">
              </div>
            </div>
            <div class="form-group col-md-5">
              <label for="price">{{ __('Precio:') }}</label>
              <input id="price" type="text" class="form-control price" name="price" required autofocus value="">
            </div>
            <div class="form-group col-md-2">
              <div class="form-group">
                <label class="" for="estatus">{{ __('Activo:') }}</label>
                <label class="switch">
                  <input type="checkbox" id="estatus" name="estatus" >
                  <span class="slider round"></span>
                </label>
              </div>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-md-6 col-lg-4 col-xl-4">
              <label for="colony">{{ __('Colonia:') }}</label>
              <input id="colony" type="text" class="form-control " name="colony" required autofocus value="">
            </div>
            <div class="form-group col-md-6 col-lg-4 col-xl-4">
              <label for="">{{ __('Municipio:') }}</label>
							<select id="municipality" class="form-control" name="municipality"  required autofocus>
                <option value="">Selecióna</option>
                @foreach ($states as $state)
									<option value="{{ $state->id_state }}">{{ $state->name }}</option>
                @endforeach
							</select>
            </div>
						<div class="form-group col-md-6 col-lg-2 col-xl-2">
              <label for="municipality">{{ __('Num Baños') }}</label>
							<select id="n_bathroom"  class="form-control" name="n_bathroom"  required autofocus>
									<option value="1">1</option>
									<option value="2">1 a 2</option>
									<option value="3">Más de 2</option>
							</select>
            </div>
						<div class="form-group col-md-6 col-lg-2 col-xl-2">
              <label for="">{{ __('Num Recamaras') }}</label>
							<select id="n_room" class="form-control" name="n_room"  required autofocus>
								<option value="1">1 a 2</option>
								<option value="2">1 a 2</option>
								<option value="3">2 a 3</option>
								<option value="4">Más de 3</option>
							</select>
            </div>
          </div>
          <div class="form-row">
            <div class="form-group col-lg-6 col-xl-6">
              <label for="">{{ __('Descripción') }}</label>
              <textarea id="description" name="description" class="form-control" rows="4" cols="80"></textarea>
            </div>
            <div class="form-group col-lg-6 col-xl-6">
              <label for="">{{ __('Especificaciónes') }}</label>
              <textarea id="specification" name="specification" class="form-control" rows="4" cols="80"></textarea>
            </div>
          </div>
					<div class="form-row">
						<div class="col-lg-3 col-xl-3">
							<div class="dropdown">
							  <button class="btn btn-secondary dropdown-toggle" type="button" id="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									Tipo de credito
							  </button>
							  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
									<div class="form-group form-check">
		 							 <input type="checkbox" class="form-check-input" id="creditoChck01">
		 							 <label class="form-check-label" for="creditoChck01">Credito 01</label>
		 						 	</div>

									<div class="form-group form-check">
		 							 <input type="checkbox" class="form-check-input" id="creditoChck02">
		 							 <label class="form-check-label" for="creditoChck02">Credito 02</label>
		 						 	</div>

									<div class="form-group form-check">
		 							 <input type="checkbox" class="form-check-input" id="creditoChck03">
		 							 <label class="form-check-label" for="creditoChck03">Credito 03</label>
		 						 	</div>
							  </div>
							</div>
						</div>
						<div class="col-lg-4 col-xl-4">
						 <div class="form-group form-check">
							 <input type="checkbox" class="form-check-input" id="credit_house" name="credit_house" value="1">
							 <label class="form-check-label" for="credit_house">Credito tu vivienda</label>
						 </div>
						</div>
						<div class="col-lg-12 col-xl-12">

						</div>
					</div>
				</form>

        <div class="container">
          <form id="fileupload" action="" method="POST" enctype="multipart/form-data">
              <div class="row fileupload-buttonbar">
                  <div class="col-lg-7">
                      <span class="btn btn-success fileinput-button">
                          <i class="glyphicon glyphicon-plus"></i>
                          <span>Add files...</span>
                          <input type="file" name="files[]" multiple directory webkitdirectory>
                      </span>
                      <!--<button type="submit" class="btn btn-primary start">
                          <i class="glyphicon glyphicon-upload"></i>
                          <span>Start upload</span>
                      </button>
                      <button type="reset" class="btn btn-warning cancel">
                          <i class="glyphicon glyphicon-ban-circle"></i>
                          <span>Cancel upload</span>
                      </button>
                      <button type="button" class="btn btn-danger delete">
                          <i class="glyphicon glyphicon-trash"></i>
                          <span>Delete</span>
                      </button>
                      <input type="checkbox" class="toggle">
                      <span class="fileupload-process"></span>-->
                  </div>
                  <div class="col-lg-5 fileupload-progress fade">
                      <div class="progress progress-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100">
                          <div class="progress-bar progress-bar-success" style="width:0%;"></div>
                      </div>
                      <div class="progress-extended">&nbsp;</div>
                  </div>
              </div>
              <table role="presentation" class="table table-striped"><tbody class="files"></tbody></table>
          </form>
      </div>
      <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-filter=":even">
          <div class="slides"></div>
          <h3 class="title"></h3>
          <a class="prev">‹</a>
          <a class="next">›</a>
          <a class="close">×</a>
          <a class="play-pause"></a>
          <ol class="indicator"></ol>
      </div>


			</div>
      <div class="modal-footer">
				<div class="col-lg-3 col-xl-3">
					<button id="saveFormHouse" type="button" class="button button-color-add">
						<i class="fa fa-floppy-o"></i> {{ __('Guardar') }}
					</button>
				</div>
				<div class="col-lg-3 col-lx-3">
					<button type="button" class="button button-color-secondary" data-dismiss="modal">
						<i class="fa fa-close"></i> {{ __('Cancelar') }}
					</button>
				</div>
      </div>
    </div>
  </div>
</div>

<div id="myModalImage" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h5 class="modal-title">{{ __('Editar imágenes') }}</h5></center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
				<!-- Vistas de imágenes -->
				<div class="container">
					<div class="row">
						<div class="col-lg-4 col-xl-4">
							<div class="card-img">

							</div>
						</div>
					</div>
				</div>
			</div>
      <div class="modal-footer">
				<div class="col-lg-3 col-xl-3">
					<button id="saveFormHouse" type="button" class="button button-color-add">
						<i class="fa fa-floppy-o"></i> {{ __('Guardar') }}
					</button>
				</div>
				<div class="col-lg-3 col-lx-3">
					<button type="button" class="button button-color-secondary" data-dismiss="modal">
						<i class="fa fa-close"></i> {{ __('Cancelar') }}
					</button>
				</div>
      </div>
    </div>
  </div>
</div>
