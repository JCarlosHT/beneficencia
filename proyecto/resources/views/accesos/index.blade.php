@extends('layouts.plantilla')
@section('title','Permisos')
@section ('content')

<div class="container-fluid p-0">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12">
			<div class="card">
				<div class="card-body">
					<div class="d-flex justify-content-between">
						<h4 class="card-title">Accesos de usuarios</h4>
						<div>
							<a href="#" class="mr-3"><i class="fa fa-refresh"></i></a>
							<div class="dropdown">
								<a href="#" data-toggle="dropdown" aria-haspopup="true"                                           aria-expanded="false"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></a>
								<div class="dropdown-menu dropdown-menu-right"><a href="#" class="dropdown-item">Report</a><a href="#" class="dropdown-item">Download</a><a href="#" class="dropdown-item">Close</a></div>
							</div>
						</div>
					</div>
					<div class="col-12 mb-2 p-0">
						<button class="btn {{$bg->custom}} btn-sm" onclick="openiframe('Nueva ruta','{{ route('accesos.create')}}')">Crear permiso</button>
					</div>
					<div class="tabla-responsiva">
						<table id="table" class="display table" cellspacing="0" width="100%">
							<thead>
								<tr>
									<th>ID</th>
									<th>Ruta</th>
									<th>Nombre</th>
									<th>Usuarios</th>
									<th>Creación</th>
									<th>Activo</th>
									<th></th>
								</tr>
							</thead>
							<tbody>
								@foreach ($accesos as $acceso)
								<tr>
									<td class="text-center">{{$acceso->id}}</td>
									<td class="td-short">{{$acceso->ruta}}</td>
									<td>{{$acceso->name}}</td>
									<td>@if($acceso->tipo_usuarios_id=='1')
										Normal
										@elseif($acceso->tipo_usuarios_id=='2')
										Master
										@elseif($acceso->tipo_usuarios_id=='1,2')
										Normal, Master
										@elseif($acceso->tipo_usuarios_id=='1,3')
										Normal, Admin
										@elseif($acceso->tipo_usuarios_id=='1,4')
										Normal, Técnico
										@elseif($acceso->tipo_usuarios_id=='2,3')
										Master, Admin
										@elseif($acceso->tipo_usuarios_id=='2,4')
										Master, Técnico
										@elseif($acceso->tipo_usuarios_id=='3,4')
										Admin, Técnico
										@elseif($acceso->tipo_usuarios_id=='1,2,3')
										Normal, Master, Admin
										@elseif($acceso->tipo_usuarios_id=='1,2,4')
										Normal, Master, Técnico
										@elseif($acceso->tipo_usuarios_id=='2,3,4')
										Master, Admin, Técnico
										@elseif($acceso->tipo_usuarios_id=='1,2,3,4')
										Normal, Master, Admin, Técnico
										@endif
									</td>
									<td><span class="text-xs">{{$acceso->created_at->format('d/m/Y')}}</span></td>
									@if($acceso->iactivo == 1)
									<td><a class="switch" href="{{ route('accesos.inactivar',$acceso) }}">
										<div class="custom-control custom-switch custom-checkbox-secondary"><input type="checkbox" class="custom-control-input" checked><label class="custom-control-label"></label></div>
										<span class="slider round"></span>
									</a></td>
									@else
									<td><a class="switch" href="{{ route('accesos.activar',$acceso) }}">
										<div class="custom-control custom-switch custom-checkbox-secondary"><input type="checkbox" class="custom-control-input"><label class="custom-control-label"></label></div>
										<span class="slider round"></span>
									</a></td>
									@endif
									<td>
										<a href="#" onclick="openiframe('Ver ruta','{{ route('accesos.show',$acceso)}}')" class="btn btn-link text-secondary p-0 mb-0"><i data-feather="edit" class="mr-1 text-md"></i></a>
										<!-- <a class="btn btn-link text-danger text-gradient px-3 mb-0" href="javascript:;"><i class="material-icons text-sm me-2">delete</i>Eliminar</a> -->
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