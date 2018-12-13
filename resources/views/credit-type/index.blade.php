@extends('layouts.app')

@section('content')
<script src="{{ URL::asset('js/credit-type/form.js') }}"></script>
	<div class="container">
    <div class="box">
      <div class="box-header">
				<div class="row">
					<div class="col-lg-4 col-xl-4">
						<h3 class="box-title">{{ __('Lista Tipos de Crédito') }}</h3>
					</div>
					<div class="col-lg-2 col-xl-2 offset-lg-4 offset-xl-4">
					<button type="button" class="button button-color-add" id="newCreditType">
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
      				<th>{{ __('Clave:') }}</th>
              <th width="30%">{{ __('Url_img:') }}</th>
              <th width="30%">{{ __('Descripción:') }}</th>
      				<th>{{ __('Estatus:') }}</th>
      				<th width="10%">{{ __('Acciones:') }}</th>
      			</tr>
      		</thead>
      		<tbody>
      			@foreach ($creditTypes as $creditType)
      				<tr>
      					<td>{{ $creditType->name }}</td>
                <td>{{ $creditType->url_img }}</td>
      					<td>{{ str_limit($creditType->description, $limit = 30, $end = '...') }}</td>
      					<td> @if($creditType->estatus == 1) Activo @else Inactivo @endif</td>
      					<td class="group-buttons">
      						<button type="button" class="btn-icon btn-edit searchCreditType" data-id="{{$creditType->id_credit_type}}">
										<div class="icon_edit"></div>
      						</button>
      						<a  class="btn-icon btn-border border-alert"" href="{{ url('/credit-type/delete/'.$creditType->id_credit_type)}}">
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


<div id="myModalCreditType" class="modal fade" tabindex="-1" role="dialog" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <center><h5 class="modal-title">{{ __('Tipo de Crédito') }}</h5></center>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="saveCreditType" method="POST" action="{{ url('/credit-type/save') }}">
          @csrf
          <input id="id_credit_type" name="id_credit_type" type="hidden" value="">
          <input id="redirect" name="id_credit_type_redirect" type="hidden" value="true">
          <div class="form-row">
            <div class="form-group col-md-8">
              <label for="name">{{ __('Nombre:') }}</label>
              <div class="input-group mb-2 mr-sm-2">
                <div class="input-group-prepend">
                  <div class="input-group-text"><i class="fa fa-search"></i></div>
                </div>
                <input id="name" type="text" class="form-control search" data-id="" data-controller ="credit-type" name="name" required autofocus value="" maxlength="10">
              </div>
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
						<div class="form-group col-md-12">
							<label for="url_img">{{ __('Imagen:') }}</label><br>
							<input id="url_img" name="url_img" type="file" class="required"/>
						</div>
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button id="saveFormCreditType" type="button" class="button button-color-add"><i class="fa fa-floppy-o"></i> {{ __('Guardar') }}</button>
        <button type="button" class="button button-color-secondary" data-dismiss="modal"><i class="fa fa-close"></i> {{ __('Cancelar') }}</button>
      </div>
    </div>
  </div>
</div>
