@extends('layouts.app')

@section('content')
	<div class="container">
		<div class="box">
	       <div class="box-header">
						<div class="row">
							<div class="col-lg-6 col-lx-6">
								<h3 class="box-title">{{ __('Lista Usuarios') }}</h3>
							</div>
							<div class="col-lg-2 col-xl-2 offset-lg-2 offset-xl-2">
								<a  class="" href="{{ url('/user')}}" data-toggle="tooltip" data-placement="bottom">
									<div class="button btn-anchor button-color-add">
										<i class="fa fa-file-o" aria-hidden="true"></i> {{ __('Crear') }}
									</div>
								</a>
		          </div>
							<div class="col-lg-2 col-xl-2">
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
							<th>{{ __('Id:') }}</th>
							<th>{{ __('Nombre:') }}</th>
							<th>{{ __('Correo:') }}</th>
							<th>{{ __('Acciones:') }}

							</th>
						</tr>
					</thead>
					<tbody>
						@foreach ($users as $user)
							<tr>
								<td>{{ $user->id }}</td>
								<td>{{ $user->name }}</td>
								<td>{{ $user->email }}</td>
								<td class="group-buttons">
									<a class="button btn-icon btn-border border-edit"  href="{{ url('/user/'.$user->id)}}" data-toggle="tooltip" data-placement="bottom" title="Editar">
										<div class="icon_edit"></div>
									</a>
									<a class="button btn-icon btn-border border-alert" href="{{ url('/user/delete/'.$user->id)}}" data-toggle="tooltip" data-placement="bottom" title="Eliminar">
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
