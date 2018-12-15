@extends('layouts.app')

@section('content')
<script src="{{ URL::asset('js/state/form.js') }}"></script>
	<div class="container">
    <div class="box">
      <div class="box-header">
				<div class="row">
					<div class="col-lg-4 col-xl-4">
						<h3 class="box-title">{{ __('Catálogo de municipios') }}</h3>
					</div>
					<div class="col-lg-2 col-xl-2 offset-lg-4 offset-xl-4">
					<button type="button" class="button button-color-add" id="newState">
							<i class="fa fa-file-o" aria-hidden="true"></i> {{ __('Crear') }}
					</button>
				</div>
				<div class="col-lg-2 col-lx-2">
					<button type="button" class="button button-color-secondary disabled" id="">
									<i class="fa fa-print" aria-hidden="true"></i> {{ __('Imprimir') }}
					</button>
				</div>
				</div>
      </div>
      <div class="box-body">
      	<table id="listTable" class="table table-striped table-bordered" width="100%">
      		<thead>
      			<tr>
      				<th width="40%">{{ __('Nombre:') }}</th>
      				<th width="10%">{{ __('Acciones:') }}</th>
      			</tr>
      		</thead>
      		<tbody>
      			@foreach ($states as $state)
      				<tr>
      					<td>{{ $state->name }}</td>
      					<td class="group-buttons">
      						<button type="button" class="btn-icon btn-edit searchState" data-id="{{$state->id_state}}">
										<div class="icon_edit"></div>
      						</button>
      						<a  class="btn-icon btn-border border-alert"" href="{{ url('/state/delete/'.$state->id_state)}}">
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


<div id="myModalState" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h5 class="modal-title">{{ __('Crear municipió') }}</h5></center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="saveState" method="POST" action="{{ url('/state/save') }}">
          @csrf
          <input id="id_state" name="id_state" type="hidden" value="">
          <input id="redirect" name="id_state_redirect" type="hidden" value="true">
          <div class="form-row">
            <div class="form-group col-md-8 col-lg-12 col-xl-12">
              <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fa fa-search"></i></div>
                </div>
                <input id="name" type="text" class="form-control search" data-id="" data-controller ="state" name="name" required autofocus value="">
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button id="saveFormState" type="button" class="button button-color-add"><i class="fa fa-floppy-o"></i> {{ __('Guardar') }}</button>
        <button type="button" class="button button-color-secondary" data-dismiss="modal"><i class="fa fa-close"></i> {{ __('Cancelar') }}</button>
      </div>
    </div>
  </div>
</div>
