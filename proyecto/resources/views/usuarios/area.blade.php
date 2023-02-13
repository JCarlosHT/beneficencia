@extends('layouts.modal')
@section ('content')

{!! Form::open(array('route' => array('usuarios.update2', Auth::user()->id),'method'=>'post','class'=>'container')) !!}
<div class="row m-4 text-center">
   @if(Auth::user()->area == null)
    <span class="text-dark mb-2"><h5>Bienvenido!</h5>Antes de comenzar, es necesario completar la siguiente información de su área de trabajo</span>
    @endif
<div class="col-12 mt-2">
    {!! Form::label('','Dirección') !!}
    {{ Form::select('direccion', $cat_dir, '', ['class' => 'form-control form-gray','id'=>'cat_dir','placeholder'=>'Seleccione su dirección','required'])}}
</div>
<div class="col-12 mt-2">
    {!! Form::label('','Subdirección') !!}
    {{ Form::select('subdireccion', $cat_sub, '', ['class' => 'form-control form-gray','id'=>'cat_sub','placeholder'=>'Seleccione su subdirección','required','disabled'])}}
</div>
<div class="col-12 mt-2">
    {!! Form::label('','Departamento') !!}<span class="text-xs"> (en caso de pertenecer a uno)</span>
    {{ Form::select('departamento', $cat_dep, '', ['class' => 'form-control form-gray','id'=>'cat_dep','placeholder'=>'Seleccione su departamento','disabled'])}}
</div>

</div>


<div class="card-body text-center p-0">
    <button type="submit"class="btn {{$bg->custom}}">Guardar</button>
</div>
{!! Form::close() !!}

 <script type="text/javascript">

    $("#cat_dir").on('change',function(){ 
     cargar_sub(this.value);
     $("#cat_sub").prop("disabled", false);
   });

    $("#cat_sub").on('change',function(){ 
     cargar_dep(this.value);
     $("#cat_dep").prop("disabled", false);
   });

    function cargar_sub(dir){
      $.ajax({
        url: '/SGPI/detalles/subdireccion',
        method:'POST',
        dataType: "json",
        data: {
          "_token": $("meta[name='csrf-token']").attr("content"),
          "dir":dir
        },
        async: false,
        success: function (respuesta) {                         
          $("#cat_sub").html("");
          $("#cat_sub").select2({ data: respuesta });
        },
      });
    }
    function cargar_dep(sub){
      $.ajax({
        url: '/SGPI/detalles/departamento',
        method:'POST',
        dataType: "json",
        data: {
          "_token": $("meta[name='csrf-token']").attr("content"),
          "sub":sub
        },
        async: false,
        success: function (respuesta) {                         
          $("#cat_dep").html("");
          $("#cat_dep").select2({ data: respuesta });
        },
      });
    }

    localStorage.setItem('res','');
    @if(session('ok'))
    localStorage.setItem('res','ok');
    window.parent.closeModal();
    @elseif(session('nook'))
    localStorage.setItem('res','{{Session::get('nook')}}');
    window.parent.closeModal();
    @endif
  </script>

@endsection