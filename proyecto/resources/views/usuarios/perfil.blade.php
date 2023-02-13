@extends('layouts.plantilla')
@section('title','Mi perfil')
@section ('content')
<div class="container-fluid p-4">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-sm-12">
        <div class="card">
          <div class="card-body text-center">
            <figure class="avatar avatar-lg mb-3">
              <span class="avatar-title bg-{{$bg->customcolor}} text-white rounded-circle">{{substr(Auth::user()->username,0,1)}}</span>
            </figure>
             <h5 class="mb-1">{{Auth::user()->username}}</h5>
             <p class="text-muted small">Usuario</p>
             <a onclick="openiframe('Editar perfil','{{ route('usuarios.create')}}')" class="btn btn-outline-{{$bg->customcolor}}"><i data-feather="edit-2" class="mr-2"></i>Editar</a>
          </div>
          <hr class="m-0">
          <div class="card-body">
             <div class="row mb-2">
                <div class="col-6 text-muted">Nombre(s):</div>
                <div class="col-6">{{Auth::user()->nombre}}</div>
             </div>
             <div class="row mb-2">
                <div class="col-6 text-muted">Apellidos:</div>
                <div class="col-6">{{Auth::user()->apepa}} {{Auth::user()->apema}}</div>
             </div>
             <div class="row mb-2">
                <div class="col-6 text-muted">Sexo:</div>
                <div class="col-6">
                  @if(Auth::user()->sexo == '1')
                  Hombre
                  @elseif(Auth::user()->sexo == '2')
                  Mujer
                  @else
                  No asignado
                  @endif
                </div>
             </div>
             <div class="row mb-2">
                <div class="col-6 text-muted">Teléfono:</div>
                <div class="col-6">{{Auth::user()->telefono ?? 'No asignado'}}</div>
             </div>
             <div class="row mb-2">
                <div class="col-6 text-muted">Email:</div>
                <div class="col-6">{{Auth::user()->email ?? 'No asignado'}}</div>
             </div>
          </div>
          <hr class="m-0">
          <div class="card-body">
             <div class="row mb-2">
                <div class="col-6 text-muted">Area de trabajo:</div>
                <div class="col-6">{{$area->nombre ?? 'No asignado'}}</div>
             </div>
             <a onclick="openiframe('Editar perfil','{{ route('usuarios.area')}}')" class="btn btn-outline-light btn-sm float-right mt-2"><i data-feather="edit-2" class="mr-2"></i>Cambiar</a>
           </div>
       </div>
    </div>
</div>
<!-- 
<script type="text/javascript" src="{{ URL::asset('js/table.js') }}"></script>
<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script> -->

<!-- <span class="text-xs text-muted float-right opacity-1">Icons by Icons8</span> -->
 @endsection