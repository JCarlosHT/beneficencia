
@extends('layouts.plantilla')
@section('title','Usuarios')
@section ('content')

<div class="container-fluid p-0">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="card">
				<div class="card-body">
					<div class="d-flex justify-content-between">
						<h4 class="card-title">Usuarios registrados</h4>
						<div>
							<a href="#" class="mr-3"><i class="fa fa-refresh"></i></a>
							<div class="dropdown">
								<a href="#" data-toggle="dropdown" aria-haspopup="true"                                           aria-expanded="false"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
								<div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item">Report</a><a href="#" class="dropdown-item">Download</a><a href="#" class="dropdown-item">Close</a></div>
							</div>
						</div>
					</div>
					<div class="tabla-responsiva">
						<table id="table" class="display table" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>ID</th>
									<th>Nombre</th>
									<th>Usuario</th>
									<th>Tipo de usuario</th>
									<th>Creación</th>
									<th>Activo</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								@foreach($users as $user)
								<tr>
									<td class="text-center">{{$user->id}}</td>
									<td>
										{{$user->nombreCompleto}}</td>
										<td>{{$user->username}}</td>
										<td>
											@if($user->tipo_usuario==1)
											Normal
											@elseif($user->tipo_usuario==2)
											Administrador
											@endif
										</td>
										<td><span class="text-sm">{{$user->created_at->format('d/m/Y')}}</span></td>
										@if($user->iactivo == 1)
										<td><a class="switch" href="{{ route('usuarios.inactivar',$user) }}">
											<div class="custom-control custom-switch custom-checkbox-secondary"><input type="checkbox" class="custom-control-input" checked><label class="custom-control-label"></label></div>
											<span class="slider round"></span>
										</a></td>
										@else
										<td><a class="switch" href="{{ route('usuarios.activar',$user) }}">
											<div class="custom-control custom-switch custom-checkbox-secondary"><input type="checkbox" class="custom-control-input"><label class="custom-control-label"></label></div>
											<span class="slider round"></span>
										</a></td>
										@endif
										<td>
											<a href="#" onclick="openiframe('Editar usuario','{{ route('usuarios.show',$user) }}')" class="btn btn-link text-secondary p-0 mb-0"><i data-feather="edit" class="mr-1 text-md"></i></a>
										</td>
									</tr>
									@endforeach    
								</tbody>
							</table>
						</div>
					</div>
				</div>
			</div>    
		</div>
	</div>

	<script type="text/javascript" src="{{ URL::asset('js/table.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>

	@endsection