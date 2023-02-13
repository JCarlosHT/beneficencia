 @if (auth::user())
 @if (auth::user()->iactivo !=1 )    
 @php
 header("Location: " . URL::to('/'), true, 302);
 exit();
 @endphp  
 @endif            
 @else
 @php
 header("Location: " . URL::to('/'), true, 302);
 exit();
 @endphp 
 @endif

 @extends('layouts.plantilla')
 @section('content')
 <style type="text/css">
 .select2-selection{
  background-color:#f0f2f5 !important;
}

.table thead th {
  height: 15px;
  line-height: 15px;
}

table.dataTable thead th, table.dataTable thead td {
    padding: 0px 0px 4px 0px;
}

table.dataTable tbody th, table.dataTable tbody td {
    padding: 4px 4px;
}

.abajo{
    position: absolute;
    bottom: 0;
}

#table {
    position: relative;
    overflow: hidden;
    margin-bottom: 2rem;
}

table {
    border-bottom: 1px solid gainsboro;
}

.title-td {
    position: relative;
}

.title-td span {
    position: relative;
    top: 0px;
}

.first-tr {
    background-color: ghostwhite;
}

.button-tb {
    width: 32px;
    height: 32px;
    color: #fff;
    display: flex;
    align-items: center;
    cursor: pointer;
    justify-content: center;
    box-shadow: 0 10px 30px rgba(225, 225, 225, 0.4);
    border: none;
}

.red, .remove {
    background: #e74c3c;
}

.green {
    background: #2ecc71;
}

tr > td {
    position: relative;
}

.static {
    position: static !important;
}
.custom-file-input ~ .custom-file-label::after {
    content: "Abrir";
    /*534063->343a40*/
    background-color:#534063;
    color: #fff;
}
input[type="file"] {

  background-color : #d1d1d1; 

}
.alert {
    position: absolute;
    left: 0;
    top: 0;
    right: 0;
    bottom: 0;
    width: 100%;
    height: 100%;
    display: flex;
    align-items: center;
    justify-content: center;
    flex-direction: column;
    transition: all 400ms ease;
    transform: translateY(-100%);
    background-color:ghostwhite;
}

.alert.active {
    transform: translateY(0);
}

.no-border-left {
    border-radius: 0rem 0.25rem 0.25rem 0px;
}

.no-border-right {
    border-radius: 0.25rem 0rem 0rem 0.25rem;
    border-right: 1px solid lightgrey;
}

.no-border-right:focus{
    border-right: 1px solid lightgrey!important;
}

.no-border {
    border-radius: 0rem 0rem 0rem 0rem;
}

.pl-row{
    padding-left: 1.8rem!important;
}

#msform div .col-1, .col-2, .col-3, .col-4{
    padding-right: 0px;
}

#dat_bene, #dat_sol, #fam, #sit_eco, #alimentaciondiv, #viviendadiv, #saluddiv{
    padding-right: 15px;
}

#constitucion_fam2{
    border: none;
    width: 1px;
    color: white;
}

</style>
<link href="https://raw.githack.com/ttskch/select2-bootstrap4-theme/master/dist/select2-bootstrap4.css" rel="stylesheet" />
<link rel="stylesheet" type="text/css" href="{{ URL::asset('css/form_steps.css') }}">
<div class="row">
  <div class="col-lg-12 col-md-12 col-sm-12">
   <div class="card">
      <div class="card-body">
        <form method="POST" action="{{ route('solicitud.store') }}" enctype="multipart/form-data" >
       @csrf
       <h4 class="mb-4">ESTUDIO SOCIOECONÓMICO PARA PERSONAS FÍSICAS</h4>
       <ul id="progressbar" class="text-center">
         <li id="p1" class="active">BENEFICIARIO</li>
         <li id="p2">SOLICITANTE</li>
         <li id="p3">CONSTITUCIÓN FAMILIAR</li>
         <li id="p4">SITUACIÓN ECONÓMICA</li>
         <li id="p5">ALIMENTACIÓN</li>
         <li id="p6">VIVIENDA</li>
         <li id="p7">SALUD DEL BENEFICIARIO</li>
     </ul>
     <div class="tab" id="dat_bene"><h6 class="my-4">1.-Datos del beneficiario</h6>
       <div class="row">
        <div class="col-3 pr-0">
         <p><input placeholder="Nombre(s)" name="nombe" id="nombre" class="form-control form-gray nombre no-border-right" required></p>   
     </div>
     <div class="col-3 pl-0 pr-0">
         <p><input placeholder="Primer apellido" name="primerape" id="primerape" class="form-control form-gray no-border-right" required></p>
     </div>
     <div class="col-3 pl-0">
         <p><input placeholder="Segundo apellido" name="segundoape" id="segundoape" class="form-control form-gray no-border-left" required></p>
     </div>
     <div class="col-3">
        <p><input placeholder="Teléfono" name="tel" id="tel" class="form-control form-gray" required></p>
    </div>
    <div class="col-2 ">
        <input type="text" name="curp" id="curp" placeholder="CURP" class="form-control form-gray" required>         
    </div>
    <div class="col-3">
        <input type="text" name="correo" id="correo" placeholder="Correo" class="form-control form-gray" required>         
    </div>
    <div class="col-2">
        <input type="text" name="religion" id="religion" placeholder="Religión" class="form-control form-gray" required>         
    </div>
    <div class="col-2">
        <input type="text" name="etnia" id="etnia" placeholder="Etnia" class="form-control form-gray" required>         
    </div>
    <div class="col-3">
        <select name="der_amb" id="der_amb" class="form-control form-gray custom-select" required>
         <option value="" disabled selected>Derechoambiencia</option>
         <option value="1">INSABI</option>
         <option value="1">IMSS</option>
         <option value="2">ISSSTE</option>
     </select>      
 </div>
 <br>
 <div class="col-3 pt-3">
    <p><input placeholder="Calle" id="calle" name="calle" class="form-control form-gray no-border-right" required></p>
</div>
<div class="col-1 pl-0 pt-3">
    <p><input placeholder="No.Int" name="num" id="num" class="form-control form-gray no-border-left" required></p>
</div>
<div class="col-1 pl-0 pt-3">
    <p><input placeholder="No.Ext" name="num_ext" id="num_ext" class="form-control form-gray no-border-left" required></p>
</div>
<div class="col-2 pt-3">
    <p>{{ Form::select('mun', $municipios, '', ['class' => 'form-control form-gray','id'=>'mun','placeholder'=>'Seleccione un municipio', 'required'] )}} </p>
</div>
<div class="col-3 pt-3">
    <input type="text" name="loca" id="loca" placeholder="Colonia" class="form-control form-gray no-border-left" required>
</div>
<div class="col-2 pt-3">
 <p>{{ Form::select('cod_pos', [''], '',['class' => 'form-control form-gray','id'=>'cod_pos','placeholder'=>'Código postal', 'required'] )}} </p>
</div>
<div class="col-1 ml-0 text-xs">
 <p class="p-0 m-0" style="line-height: initial">Fecha nacimiento:</p>
</div>
<div class="col-2 pl-0">
    <p><input type="date" name="fec_nac" id="fec_nac" class="form-control form-gray" required></p>
</div>
<div class="col-3">
    <input type="text" name="lug_fec" id="lug_fec" placeholder="Lugar nacimiento" class="form-control form-gray" required>                     
</div>
<div class="col-2">
 <select name="sexo" id="sexo" class="form-control form-gray custom-select" required>
  <option value="" disabled selected>Sexo</option>
  <option value="F">Femenino</option>
  <option value="M">Masculino</option>
</select>
</div>
<div class="col-2 ">
 <input type="number" name="edad" id="edad" placeholder="Edad" class="form-control form-gray" required>
</div>
<div class="col-2">
 <select name="est_civ" id="est_civ" class="form-control form-gray custom-select" required>
  <option value="" disabled selected>Estado civil</option>
  <option value="casado">Casado</option>
  <option value="soltero">Soltero</option>
</select>
</div>
<div class="col-3">
    <select name="escolaridad" id="escolaridad" class="form-control form-gray custom-select" required>
     <option value="" disabled selected>Nivel de escolaridad</option>
     <option value="sin_esc">Sin escolaridad</option>
     <option value="primaria">Primaria</option>
     <option value="primaria_trun">Primaria trunca</option>
     <option value="secundaria">Secundaria</option>
     <option value="secundaria_trun">Secundaria trunca</option>
     <option value="preparatoria">Preparatoria</option>
     <option value="preparatoria_trun">Preparatoria trunca</option>
     <option value="superior">Superior</option>
     <option value="superior_trun">Superior trunca</option>
 </select>
</div>
<div class="col-3">
    <input type="text" name="ocupacion" id="ocupacion" placeholder="Ocupación" class="form-control form-gray" required>                     
</div>
<div class="col-2">
    <input type="number" name="ingreso" id="ingreso" placeholder="Total de ingreso" class="form-control form-gray" required>         
</div>
<div class="col-2">
 <p>{{ Form::select('nacionalidades', $nacionalidades, '73',['class' => 'form-control form-gray','id'=>'nacionalidades','placeholder'=>'Nacionalidad', 'required'] )}} </p>
</div>

<div class="col-2">
    <select name="grup_ocu" id="grup_ocu" class="form-control form-gray custom-select" required>
     <option value="" disabled selected>Grupo ocupacional</option>
     <option value="1">Sin ocupacion</option>
     <option value="2">Trabajadores no calificados</option>
     <option value="3">Jubilados y Pensionados</option>
     <option value="4">Becarios, así como trabajadores de los servicios y vendedores de comercios y mercados</option>
     <option value="5">Operadores de instalaciones, maquinas y montadores</option>
     <option value="6">Agricultores y trabajadores calificados agropecuarios y pesqueros</option>
     <option value="7">Empleados de oficina</option>
     <option value="8">Técnicos Profesionistas de nivel medio</option>
     <option value="9">Profesionistas, científicos e intelectuales</option>
     <option value="10">Fuerzas armadas y ejecutivos e inversionistas</option>
 </select>
</div>
 <div class="row mt-2 ml-1"><br>
            <div class="col-12">
                
            <h6 class="my-4">1.1-Documentación</h6>
            </div>
            <div class="col-6">
                <label class="ml-1">DICTAMEN O VALORACIÓN MÉDICA ORIGINAL.</label>
              <div class="custom-file">
                  <input type="file" class="custom-file-input form-gray pt-2" id="dictamen" name="dictamen" value=""  accept="image/*,.doc,.docx,.pds,.csv,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,text/plain,.pdf" required>
                  <label class="custom-file-label border-0 h-auto form-control form-gray" id="label-dictamen" for="dictamen">Seleccione un archivo</label>
               </div>
            </div>
            <div class="col-6">
                <label class="ml-1">CURP.</label>
               <div class="custom-file">
                  <input type="file" class="custom-file-input form-gray pt-2" id="curp_doc" name="curp_doc" value=""  accept="image/*,.doc,.docx,.pds,.csv,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,text/plain,.pdf" required>
                  <label class="custom-file-label border-0 h-auto form-control form-gray" id="label-curp" for="curp_doc">Seleccione un archivo</label>
               </div>
            </div>     
             <div class="col-6">
                 <label class="ml-1">COPIA DE CREDENCIAL DE ELECTOR VIGENTE.</label>
               <div class="custom-file">
                  <input type="file" class="custom-file-input form-gray pt-2" id="credencial" name="credencial" value=""  accept="image/*,.doc,.docx,.pds,.csv,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,text/plain,.pdf" required>
                  <label class="custom-file-label border-0 h-auto form-control form-gray" id="label-credencial" for="poliza">Seleccione un archivo</label>
               </div>
             </div>   
             <div class="col-6">
                 <label class="ml-1">COMPROBANTE DE DOMICILIO (NO MAYOR A 3 MESES).</label>
               <div class="custom-file">
                  <input type="file" class="custom-file-input form-gray pt-2" id="comprobante" name="comprobante" value=""  accept="image/*,.doc,.docx,.pds,.csv,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,text/plain,.pdf" required>
                  <label class="custom-file-label border-0 h-auto form-control form-gray" id="label-comporobante" for="dictamen">Seleccione un archivo</label>
               </div>
             </div>  
             <div class="col-6">
                <label class="ml-1">PÓLIZA DEL INSTITUTO DE SALUD PARA EL BIENESTAR VIGENTE.</label>
               <div class="custom-file">
                  <input type="file" class="custom-file-input form-gray pt-2" id="poliza" name="poliza" value=""  accept="image/*,.doc,.docx,.pds,.csv,application/vnd.ms-excel,application/vnd.openxmlformats-officedocument.spreadsheetml.sheet,text/plain,.pdf" required>
                  <label class="custom-file-label border-0 h-auto form-control form-gray" id="label-poliza" for="dictamen">Seleccione un archivo</label>
               </div>
            </div>  
  </div>
<div class="col-12">
    <p class="text-danger text-center mns_error mt-3 mb-0"></p>
</div>
<div class="col-12 pt-3 text-center">
 <input type="submit" name="sig" id="sig" class="next action-button btn btn-secondary" value="Siguiente"/>
</div>
</div>
</div>
<div class="tab" id="dat_sol">
   <h6 class="my-4">2.-Datos del solicitante</h6>
   <div class="row">
    <div class="col-3 pr-0">
     <p><input placeholder="Nombre(s)" name="nombre2" id="nombre2" class="form-control form-gray no-border-right" required></p>   
 </div>
 <div class="col-3 pl-0 pr-0">
     <p><input placeholder="Primer apellido" name="primerape2" id="primerape2" class="form-control form-gray no-border-right" required></p>
 </div>
 <div class="col-3 pl-0">
     <p><input placeholder="Segundo apellido" name="segundoape2" id="segundoape2" class="form-control form-gray no-border-left" required></p>
 </div>
 <div class="col-3">
     <input type="text" name="telefono" id="telefono" class="form-control form-gray" placeholder="Teléfono" required>
 </div>
 <div class="col-12">
    <p class="text-danger text-center mns_error2 mt-3 mb-0"></p>
</div>
<div class="col-3">
    <p><input placeholder="Calle" id="calle_res" name="calle_res" class="form-control form-gray no-border-right" required></p>
</div>
<div class="col-1 pl-0">
    <p><input placeholder="No.Int" name="num_res" id="num_res" class="form-control form-gray no-border-left" required></p>
</div>
<div class="col-1 pl-0">
    <p><input placeholder="No.Ext" name="num_extres" id="num_extres" class="form-control form-gray no-border-left" required></p>
</div>
<div class="col-2">
    <p>{{ Form::select('mun_res', $municipios, '', ['class' => 'form-control form-gray','id'=>'mun_res','placeholder'=>'Seleccione un municipio', 'required'] )}} </p>
</div>
<div class="col-3">
    <input type="text" name="loca_res" id="loca_res" placeholder="Colonia" class="form-control form-gray no-border-left" required>
</div>
<div class="col-2">
 <p>{{ Form::select('cod_posres', [''], '',['class' => 'form-control form-gray','id'=>'cod_posres','placeholder'=>'Código postal', 'required'] )}} </p>
</div>
<div class="col-3">
    <input type="text" name="parentesco_res" id="parentesco_res" placeholder="Parentesco" class="form-control form-gray no-border-left" required>
</div>
<div class="col-9">
    <input type="text" name="ref_res" id="ref_res" placeholder="Referencia domicilio" class="form-control form-gray no-border-left" required>
</div>
</div>
<div class="col-12 pt-3 text-center">
    <button type="button" class="btn btn-secondary" id="ant2" name="ant2">Anterior</button>
    <button type="submit" name="sig2" id="sig2" class=" btn btn-secondary">Siguiente</button>
</div>
</div>
<div class="tab" id="fam" >
   <h6 class="my-4">3.-Constitución familiar (personas que habitan en el mismo domicilio)</h6>
   <div class="row">
    <div  class="col-md-12 table-responsive mt-2">
        <main id="table">
            <input type="hidden" name="constitucion_fam[]" id="constitucion_fam" required>
            <table class="display table2 dataTable pb-5">
              <thead>
                <tr>
                  <th></th>
                  <th>Nombre</th>
                  <th>Edad</th>
                  <th>Parentesco</th>
                  <th>Ocupación</th>
                  <th>Ingreso</th>
                  <th>Escolaridad</th>
                  <th>Acción</th>
              </tr>
          </thead>
          <tbody>
            <form class="add-form">
              <tr class="first-tr">
                <td class="title-td"><span>Crear nuevo <input type="text" name="constitucion_fam2" id="constitucion_fam2" ></span></td>
                <td class="static"><input type="text" class="form-control form-gray" name="name"></td>
                <td class="static"><input type="number" class="form-control form-gray" name="age"></td>
                <td class="static">
                    <select name="paren" id="paren" class="form-control form-gray custom-select">
                     <option value="0" disabled selected>Parentesco</option>
                     <option value="1">Padre</option>
                     <option value="2">Madre</option>
                     <option value="3">Esposo (a)</option>
                     <option value="4">Hijo</option>
                     <option value="5">Otro</option>
                 </select></td>
                 <td class="static"><input type="text" class="form-control form-gray" name="job"></td>
                 <td class="static"><input type="number" class="form-control form-gray" name="mon"></td>
                 <td class="static"><input type="text" class="form-control form-gray" name="escolaridad2"></td>
                 <td class="static"><button type="button" class="btn btn-success btn-md green"><i class="fa fa-check"></i></button></td>
             </tr>
         </form>
     </tbody>
 </table>
 <div class="alert pb-3">
  <h4>Error de registro</h4>
  <p>Favor de completar todos los campos.</p>
  <span class="btn btn-danger btn-sm remove"><i data-feather="x"></i></span>
</div>
</main>
{{--  <table id="table" class="table align-items-center mb-0">
    <thead class="back-black rounded">
      <tr>
         <th class="text-uppercase text-xs font-weight-bolder p-0 rounded-left text-transparent" scope="col"></th>
         <th class="text-uppercase text-xs font-weight-bolder pl-1" scope="col">Nombre</th>
         <th class="text-uppercase text-xs font-weight-bolder pl-1" scope="col">Edad</th>
         <th class="text-uppercase text-xs font-weight-bolder pl-1" scope="col">Parentesco</th>
         <th class="text-uppercase text-xs font-weight-bolder pl-1" scope="col">Ocupación</th>
         <th class="text-uppercase text-xs font-weight-bolder pl-1 rounded-right" scope="col">Ingreso</th>
     </tr>
 </thead>
 <tbody>

 </tbody>
</table>  --}}
</div>
<div class="col-12 pt-3 text-center">
   <button type="button" class="btn btn-secondary" id="ant3" name="ant3">Anterior</button>
   <button type="submit" name="sig3" id="sig3" class=" btn btn-secondary">Siguiente</button>
</div>
</div>
</div>
<div class="tab" id="sit_eco">
    <div class="row">
        <div class="col-6">
            <h6 class="my-4">4.-Situación económica (gasto mensual familiar)</h6>
        </div>
        <div class="col-3 text-right pt-2">
             <h6 class="my-2 text-left text-success">Ingresos: $ <label class="text-success" id="ing_label"></label></h6>
        </div>
        <div class="col-3 text-right pt-2">
            <h6 class="my-2 text-left text-danger">Egresos: $ <label class="text-danger" id="egr_label"></label></h6>
        </div>    
    </div>
 

 <div class="row pt-4">
  <div class="col-3">
   <p><input type="number" name="ali" id="ali" placeholder="Alimentación" class="form-control form-gray suma" required></p>   
</div>

<div class="col-3">
   <p><input type="number" name="salud" id="salud" placeholder="Salud"  class="form-control form-gray suma" required></p>   
</div>
<div class="col-3">
   <p><input type="number" name="vivienda" id="vivienda" placeholder="Vivienda (Mantenimiento)" class="form-control form-gray suma" required></p>   
</div>   
<div class="col-3">
   <p><input type="number" name="educacion" id="educacion" placeholder="Educación"  class="form-control form-gray suma" required></p> 
</div>                  
<div class="col-3">
   <p><input type="number" name="serv_pub" id="serv_pub" placeholder="Servicios" class="form-control form-gray suma" required></p>   
</div>  
<div class="col-3">
   <p><input type="number" name="transporte" id="transporte" placeholder="Transporte" class="form-control form-gray suma" required></p>   
</div>  
<div class="col-3">
   <p><input type="number" name="vivienda2" id="vivienda2" placeholder="Renta (en caso de aplicar)" class="form-control form-gray suma" required></p>   
</div>  
<div class="col-3">
   <p><input type="number" name="luz_gasto" id="luz_gasto" placeholder="Luz" class="form-control form-gray suma" required></p>   
</div>  
<div class="col-3">
   <p><input type="number" name="agua_gasto" id="agua_gasto" placeholder="Agua" class="form-control form-gray suma" required></p>   
</div> 
<div class="col-3">
   <p><input type="number" name="tel_gasto" id="tel_gasto" placeholder="Teléfono" class="form-control form-gray suma" required></p>   
</div>   
<div class="col-3">
   <p><input type="number" name="gas_gasto" id="gas_gasto" placeholder="Gas" class="form-control form-gray suma" required></p>   
</div>   
<div class="col-3">
   <p><input type="number" name="gaso_gasto" id="gaso_gasto" placeholder="Gasolina" class="form-control form-gray suma" required></p>   
</div>
<div class="col-3">
   <p><input type="number" name="vestimenta" id="vestimenta" placeholder="Vestimenta" class="form-control form-gray suma" required></p>   
</div>   
<div class="col-3">
    <p><input type="number" name="otros2" id="otros2" placeholder="Otros" class="form-control form-gray suma" required></p>   
</div>  
 <div class="col-12">
    <p class="text-danger text-center mns_error4 mt-3 mb-0"></p>
</div>

<div class="col-12 pt-3 text-center">
   <button type="button" class="btn btn-secondary" id="ant4" name="ant4">Anterior</button>
   <button type="submit" name="sig4" id="sig4" class=" btn btn-secondary">Siguiente</button>
</div>
</div>
</div>
<div class="tab" id="alimentaciondiv">
    <h6 class="my-4">5.-Alimentación</h6>
    <div class="row">
        <div class="col-4">
            <p><input type="textarea" name="desayuno" placeholder="Desayuno" id="desayuno" class="form-control form-gray" required></p>   
        </div>
        <div class="col-4">
            <p><input type="textarea" name="comida" placeholder="Comida" id="comida" class="form-control form-gray" required></p>   
        </div>
        <div class="col-4">
            <p><input type="textarea" name="cena" id="cena" placeholder="Cena" class="form-control form-gray" required></p>   
        </div> 
    </div>
    <div class="col-12 pt-3 text-center">
      <button type="button" class="btn btn-secondary" id="ant5" name="ant5">Anterior</button>
      <button type="submit" name="sig5" id="sig5" class=" btn btn-secondary">Siguiente</button>
  </div>
</div>
<div class="tab" id="viviendadiv">
    <h6 class="my-4">6.-Vivienda</h6>
    <div class="row">
      <div class="col-4">
        <select class="form-control form-gray custom-select" name="zona" id="zona" required>
        <option value="" disabled selected>Zona</option>
        <option value="Rural">Rural</option>
        <option value="Urbana">Urbana</option>
    </select>
   </div>
   <div class="col-4">
    <select class="form-control form-gray custom-select" placeholder="Tipo de vivienda" name="tipo_vi" id="tipo_vi" required>
        <option value="" disabled selected>Tipo de vivienda</option>
        <option value="1">Vivienda móvil, casa rural, refugio, cuarto redondo sin vivienda, local no construido para habitación.</option>
        <option value="2">Vecindad o cuarto de servicio, azotea.</option>
        <option value="3">Departamento a casa popular en unidades habitacionales (interés social).Departamento a casa residencial. </option>
        <option value="4">Departamento a casa  clase media con financiamiento propio o hipoteca.</option>
    </select>
   </div>
   <div class="col-4">
       <p><input name="regimen" id="regimen" placeholder="Régimen de propiedad" class="form-control form-gray" required></p>
   </div>
   <div class="col-4 pr-0">
       <label>Servicios Públicos (en tu comunidad):</label><br>
       <select multiple placeholder="Selecciona los servicios" data-allow-clear="1" name="servis1[]" id="servis1">
        <option>Alumbrado</option>
        <option>Agua</option>
        <option>Pavimento</option>
        <option>Drenaje</option>
        <option>Teléfono</option>
        <option>Transporte</option>
    </select>
    {{--  <label>luz</label>
    <input type="checkbox" name="luz" id="luz" class="pt-1">
    <label>Agua</label>
    <input type="checkbox" name="agua" id="agua" class="pt-1">
    <label>Pavimento</label>
    <input type="checkbox" name="pavimento" id="pavimento" class="pt-1">
    <label>Drenaje</label>
    <input type="checkbox" name="drenaje" id="drenaje" class="pt-1">
    <label>Teléfono</label>
    <input type="checkbox" name="tel_check" id="tel_check" class="pt-1">
    <label>Transporte</label>
    <input type="checkbox" name="trans" id="trans" class="pt-1">  --}}
</div>
<div class="col-1 pl-1">
    <button type="button" class="btn btn-success btn-md abajo" data-toggle="modal" data-target="#exampleModal" data-whatever="Servicios Publicos"><i class="fa fa-plus" aria-hidden="true"></i></button>
</div>
<div class="col-4 p-0">
   <label>Servicios Intradomiciliarios (en tu hogar):</label>
   <select multiple placeholder="Selecciona los servicios" data-allow-clear="1" class="no-border-right" name="servis2[]" id="servis2">
    <option>Luz</option>
    <option>Agua</option>
    <option>Gas</option>
    <option>Drenaje</option>
    <option>Teléfono</option>
    {{--  <option>Otros</option>  --}}
</select>

{{--  <label>luz</label>
<input type="checkbox" name="luz2" id="luz2" class="pt-1">
<label>Agua</label>
<input type="checkbox" name="agua2" id="agua2" class="pt-1">
<label>Gas</label>
<input type="checkbox" name="gas" id="gas" class="pt-1">
<label>Drenaje</label>
<input type="checkbox" name="drenaje2" id="drenaje2" class="pt-1">
<label>Teléfono</label>
<input type="checkbox" name="tel2_check" id="tel2_check" class="pt-1">  --}}
</div>
<div class="col-1 pl-1">
    <button type="button" class="btn btn-success btn-md abajo" data-toggle="modal" data-target="#exampleModal" data-whatever="Servicios Intradomiciliarios"><i class="fa fa-plus" aria-hidden="true"></i></button>
</div>
<div class="col-2 p-0">
   <label>Materiales:</label>
   <select  placeholder="Selecciona los servicios"  name="materiales" id="materiales" class="form-control form-gray">
    <option value="" disabled selected>Seleccione</option>
    <option value="1">Lamina, Madera, material de la región</option>
    <option value="2">Mamposteria</option>
    <option value="3">Mixta</option>
</select>
</div>
<div class="col-12">
    <h6 class="my-3">Número de espacios:</h6>
</div>
<div class="col-2 inline">
   <input type="number" name="sala" placeholder="Sala(s)" class="form-control form-gray" required>
</div>
<div class="col-2 inline">
   <input type="number" name="comedor" placeholder="Comedor(es)" class="form-control form-gray" required>
</div>   
<div class="col-2 inline">
   <input type="number" name="recamara" placeholder="Recámara(s)" class="form-control form-gray" required>         
</div>
<div class="col-2 inline">
   <input type="number" name="cocina" placeholder="Cocina(s)" class="form-control form-gray" required>
</div>   
<div class="col-2 inline">
   <input type="number" name="banio" placeholder="Baño(s)" class="form-control form-gray" required>
</div>   
<div class="col-2 inline">   
   <input type="number" name="otros" placeholder="Otro(s)" class="form-control form-gray" required>
</div> 
<div class="col-1 ml-0 text-xs pt-4">
    <label></label>
    <p class="p-0 m-0" style="line-height: initial">Tipo de construcción:</p>
</div> 
<div class="col-2 inline pt-4">
   <label></label>
   <input type="text" name="paredes" id="paredes" placeholder="Paredes" class="form-control form-gray" required>
</div>
<div class="col-2 inline pt-4">
   <label></label>
   <input type="text" name="techo" id="techo" placeholder="Techo" class="form-control form-gray" required>
</div>
<div class="col-2 inline pt-4">
    <label></label>
    <input type="text" name="piso" id="piso" placeholder="Piso" class="form-control form-gray" required>
</div>
<div class="col-2 inline pt-4">
   <label>Total de dormitorios</label>
   <input type="number" name="tot_dor" id="tot_dor" class="form-control form-gray" required>
</div>
<div class="col-3 inline pt-4">
   <label>Personas por dormitorio</label>
   <input type="number" name="per_dor" id="per_dor" class="form-control form-gray" required>
</div>
<div class="col-1 ml-0 text-xs pt-4">
    <p class="p-0 m-0" style="line-height: initial">Referencia del domicilio:</p>
</div> 
<div class="col-5 inline pt-4">
   <input type="text" name="referencia" id="referencia" placeholder="Referencia" class="form-control form-gray" required>
</div>
<div class="col-1 ml-0 text-xs pt-4">
    <p class="p-0 m-0" style="line-height: initial">Dejar mensaje con:</p>
</div> 
<div class="col-5 inline pt-4">
   <input type="text" name="recado" id="recado" placeholder="Persona" class="form-control form-gray" required>
</div>
<div class="col-12 pt-3 text-center">
   <button type="button" class="btn btn-secondary" id="ant6" name="ant6">Anterior</button>
   <button type="submit" name="sig6" id="sig6" class=" btn btn-secondary">Siguiente</button>
</div>
</div>   
</div>
<div class="tab" id="saluddiv">
 <div class="row">
  <div class="col-4">
   <input type="text" name="pad_act" id="pad_act" placeholder="Padecimiento actual" class="form-control form-gray" required>
</div>
<div class="col-4">
   <input type="text" name="causa" id="causa" placeholder="Causa" class="form-control form-gray" required>
</div>
<div class="col-3">
    <select name="aten" id="aten" class="form-control form-gray custom-select" required>
     <option value="" disabled selected>Recibe atención médica</option>
     <option value="si">Si</option>
     <option value="no">No</option>
 </select>
</div>
<div class="col-1 pl-1">
    <button type="button" class="btn btn-success btn-md abajo" data-toggle="modal" data-target="#exampleModal" data-whatever="Atencion Medica"><i class="fa fa-plus" aria-hidden="true"></i></button>
</div>
<div class="col-3 mt-3">
   <input type="text" name="trab_soc" id="trab_soc" placeholder="Nombre de la trabajadora social" class="form-control form-gray" required>
</div>
<div class="col-3 mt-3">
   <input type="text" name="dep_soc" id="dep_soc" placeholder="Dependencia canalizadora" class="form-control form-gray" required>
</div>
<div class="col-4 mt-3">
   <input type="text" name="dir_soc" id="dir_soc" placeholder="Dirección" class="form-control form-gray" required>
</div>
<div class="col-2 mt-3">
    <input type="text" name="tel_soc" id="tel_soc" placeholder="Teléfono" class="form-control form-gray" required>
</div>
<div class="row pl-3 pt-3 w-100">
    <div class="col-2 ml-0 text-xs">
        <p class="p-0 m-0" style="line-height: initial">Fecha de aplicación:</p>
    </div>
    <div class="col-3">
       <input type="date" name="fec_soc" id="fec_soc" class="form-control form-gray" required>
   </div>
   <div class="col-3">
    <input type="text" name="lug_soc" id="lug_soc" placeholder="Lugar de aplicación" class="form-control form-gray" required>
</div>
<div class="col-12 pt-2">
    <label>Evaluación general de trabajo social</label>
    <textarea class="form-control form-gray" id="evaluacion" name="evaluacion" rows="3"></textarea>
</div>
</div>
<div class="col-12">
    <p class="text-danger text-center mns_error3 mt-3 mb-0"></p>
</div>
<div class="col-12 pt-3 text-center">
   <button type="button" class="btn btn-secondary" id="ant7" name="ant7">Anterior</button>
   <button type="submit" name="sig7" id="sig7" class=" btn btn-secondary">Enviar</button>
</div>
</div>
</div>
</div> 

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-hidden="true">  
    <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5>Agregar opción</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="ti-close"></i></button>      </div>    
            <div class="modal-body">
                <form>          
                    <div class="form-group">     
                        <label class="col-form-label">Campo:</label> 
                        <input type="text" class="form-control" id="recipient-name" readonly> 
                    </div>       
                    <div class="form-group">
                        <label class="col-form-label mt-2">Opción:</label> 
                        <textarea class="form-control" rows="1" id="recipient-text"></textarea>
                    </div>   
                </form>       
                <div class="modal-footer">
                    <button type="button" class="btn btn-dark close-opcion" data-dismiss="modal">Cerrar</button>
                    <button type="button" class="btn btn-secondary add-opcion">Agregar</button>
                </div>
            </div>
        </div>
    </div>
</form>
</div>    
</div>
</div>
<script src="{{ URL::asset('js/form_steps.js') }}"></script>
<!-- /.MultiStep Form -->
<script type="text/javascript">
    $(".add-opcion").on('click', function() {
        var campo = $("#recipient-name").val();
        var opcion = $("#recipient-text").val();

        if(campo === "Servicios Publicos") {
            $("#servis1").append($('<option>', {value:opcion, text: opcion}));
            $("#recipient-text").val('');
            $(".close-opcion").click();  
        }
        if(campo === "Servicios Intradomiciliarios") {
            $("#servis2").append($('<option>', {value:opcion, text: opcion}));
            $("#recipient-text").val('');
            $(".close-opcion").click();
        }
        if(campo === "Atencion Medica") {
            $("#aten").append($('<option>', {value:opcion, text: opcion}));
            $("#recipient-text").val('');
            $(".close-opcion").click();
        }
        
    });

    

    $("input:checkbox").on('click', function() {
        var $box = $(this);
        if ($box.is(":checked")) {
          var group = "input:checkbox[name='" + $box.attr("name") + "']";
          $(group).prop("checked", false);
          $box.prop("checked", true);
      } else {
          $box.prop("checked", false);
      }
  });
</script>
@endsection