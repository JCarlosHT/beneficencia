<!DOCTYPE html>
<html lang="en">

<head>
    <style type="text/css">
        .header-text {
            font-size: 14px;
            font-family: "Calibri, sans-serif";
            color: #807C83;
            widows: 100%;
        }

        .header-text2 {
            font-size: 14px;
            font-family: "Calibri, sans-serif";
            color: #333;
            widows: 100%;
        }

        .titulo {
            font-size: 12px !important;
            font-family: "Calibri, sans-serif";
        }

        .titulo2 {
            font-size: 16px !important;
            font-family: "Calibri, sans-serif";
        }

        .subrayar {
            border-bottom: 1px solid black !important;
        }

        .bordear {
            border-color: black !important;
        }
        .dashed{
            border: #888 2px dashed;
        }
        .checke{
            display: inline-block;
            width: 15px;
            height: 15px;
            line-height: 15px;
            text-align: center;
            border: 1px solid black;
        }
        .foto{
            display: inline-block;
            width: 65px;
            height: 80px;
            line-height: 50px;
            text-align: center;
            border: 1px solid black;
        }

        p {
            margin-bottom: 0.20rem !important;
        }

        table {
            table-layout: fixed;
            width: 100%;
        }

        .table-sm td {
            text-align: left !important;
            padding: 2px 8px 2px 8px !important;
            font-size: 9px;
        }

        th,
        td {
            border: 1px solid lavender;
            width: 100px;
            word-wrap: break-word;
            text-align: center;
        }

        td,
        .text-style {
            padding-top: 5px;
            padding-bottom: 5px;
            font-size: 10px;
            font-family: "Calibri, sans-serif";
        }

        .nota {
            font-family: Verdana, Geneva, sans-serif;
            font-size: 12px;
            text-align: justify;
            text-justify: inter-word;
            font-style: normal;
            font-variant: normal;
        }

        .nota-sm {
            font-family: Verdana, Geneva, sans-serif;
            font-size: 9px;
            text-align: justify;
            text-justify: inter-word;
            font-style: normal;
            font-variant: normal;
        }

        .nota-xs {
            font-family: Verdana, Geneva, sans-serif;
            font-size: 7px;
            text-align: justify;
            text-justify: inter-word;
            font-style: normal;
            font-variant: normal;
        }

        .td-sm {
            font-size: 9px !important;
        }

        .page-break {
            page-break-after: always;
        }

        .text-normal {
            text-transform: none;
        }

        .bottom {
            padding-bottom: 0.6rem;
        }

        footer {
            position: absolute;
            bottom: 0
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ESTUDIO SOCIOECON??MICO</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>

<body>
    <header>
        <table>
            <tbody class="header">
                <tr>
                    <td class="col-7"><img src="{{$bene_logo}}" width="350"></td>
                    <td class="col-5 text-right header-text">
                        <br><span>Direcci??n de Vinculaci??n Social,</span><br><span>Filantrop??a y Evaluaci??n del Impacto</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </header>
    <div class="container mt-3">
        <p class="text-center titulo m-0 p-0"><b>ADMISTRACI??N DEL PATRIMONIO DE LA BENEFICENCIA P??BLICA</b></p>
        <p class="text-center titulo m-0 p-0">
            <b>DIRECCI??N DE VINCULACI??N SOCIAL FILANTROP??A Y EVALUACI??N DEL IMPACTO </b></p>
        <p class="text-center titulo m-0 p-0"><b>SUBDIRECCI??N DE PROGRAMAS ESPECIALES Y VINCULACI??N SOCIAL</b></p>
        <p class="text-center titulo m-0 p-0"><b>DEPARTAMENTO DE CALIDAD Y GESTI??N CIUDADANA</b></p>
        <p class="text-center titulo m-0 p-0"><b>ESTUDIO SOCIOECON??MICO PARA PERSONAS F??SICAS</b></p>
    </div>
    <br>
    <table cellspacing="0" style="border-spacing: 0;">
        <!-- <tr>
        <td>1</td>
        <td>2</td>
        <td>3</td>
        <td>4</td>
        <td>5</td>
        <td>6</td>
        <td>7</td>
        <td>8</td>
        </tr> -->
        <tbody class="text-center text-uppercase">
            <tr>
                <td colspan="8" class="text-left bottom titulo"><b>1.- <u>DATOS DE BENEFICIARIO</u>:</b></td>
            </tr>
            <tr>
                <td colspan="1" class="text-left"><b>NOMBRE:</b></td>
                <td colspan="3" class="subrayar">{{$beneficiario->primer_ape}}</td>
                <td colspan="2" class="subrayar">{{$beneficiario->segundo_ape}}</td>
                <td colspan="2" class="subrayar">{{$beneficiario->nombre}}</td>
            </tr>
            <tr>
                <td colspan="1"></td>
                <td colspan="3">(APELLIDO PATERNO</td>
                <td colspan="2">APELLIDO MATERNO</td>
                <td colspan="2">NOMBRE(S))</td>
            </tr>
            <tr>
                <td colspan="1" class="text-left"><b>DOMICILIO:</b></td>
                <td colspan="3" class="subrayar">{{$domicilio->calle}}</td>
                <td colspan="2" class="subrayar">{{$domicilio->num_int}}</td>
                <td colspan="2" class="subrayar">{{$domicilio->colonia}}</td>
            </tr>
            <tr>
                <td colspan="1"></td>
                <td colspan="3">(CALLE</td>
                <td colspan="2">N??MERO</td>
                <td colspan="2">COLONIA)</td>
            </tr>
            <tr>
                <td colspan="3" class="subrayar">{{$domicilio->municipio}}</td>
                <td colspan="3" class="subrayar">MORELOS</td>
                <td colspan="2" class="subrayar">{{$domicilio->cp}}</td>
            </tr>
            <tr>
                <td colspan="3">(DELEGACI??N O MUNICIPIO</td>
                <td colspan="3">ENTIDAD FEDERATIVA</td>
                <td colspan="2">C??DIGO POSTAL</td>
            </tr>
            <tr>
                <td colspan="1" class="text-left"><b>TEL??FONO):</b></td>
                <td colspan="2" class="subrayar">{{$beneficiario->telefono}}</td>
                <td colspan="5"></td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="3" class="subrayar text-left"><b>FECHA Y LUGAR NACIMIENTO:</b></td>
                <td colspan="3" class="subrayar">{{$beneficiario->fec_nac}}</td>
                <td colspan="2" class="subrayar">AGREGAR CAMPO</td>
            </tr>
            <tr>
                <td colspan="3"></td>
                <td colspan="3">(A??O MES D??A)</td>
                <td colspan="2">(LUGAR)</td>
            </tr>
            <tr>
                <td colspan="8" class="text-left">SEXO
                    <span class="subrayar pl-3 pr-4"> {{$beneficiario->sexo}}</span>EDAD<span class="subrayar pl-3 pr-3">24</span>ESTADO
                    CIVIL<span class="subrayar pl-5 pr-5"> {{$beneficiario->estado_civil}}</span>CANALIZADO
                    POR<span class="subrayar pl-4 pr-4">UNIDAD DE LA BENEFICENCIA P??BLICA </span></td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="1">ESCOLARIDAD:</td>
                <td colspan="2" class="subrayar"> {{$beneficiario->escolaridad}}</td>
                <td colspan="1">OCUPACI??N: </td>
                <td colspan="2" class="subrayar">{{$beneficiario->ocupaci??n}}</td>
                <td colspan="1">INGRESO: </td>
                <td colspan="1" class="subrayar">${{$beneficiario->ingresos}}</td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="2 mr-0 pr-0" class="subrayar text-left"><b>APOYO EN ESPECIE:</b></td>
                <td colspan="6" class="subrayar text-left ">AGREGAR CAMPO</td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="8" class="nota"><b>DECLARATORIO DE NECESIDAD:</b>
                    P<span class="text-lowercase">or medio de la presente corroboro bajo protesta de decir verdad que <b> NO</b> he recibido a poyo en Especie de ______ por lo que en este acto hago la solicitud, que de acuerdo a mis ingresos sin el apoyo de la Beneficencia P??blica no podr?? acceder al mismo.</span>
                </td>
            </tr>
            <tr class="my-2">
            <td colspan="8" class="text-left bottom titulo"><b>2.- <u>DATOS DEL SOLICITANTE</u>:</b></td>
        </tr>
        <tr>
            <td colspan="1" class="text-left"><b>NOMBRE:</b></td>
            <td colspan="3" class="subrayar">{{$beneficiario->primer_ape}}</td>
            <td colspan="2" class="subrayar">{{$beneficiario->segundo_ape}}</td>
            <td colspan="2" class="subrayar">{{$beneficiario->nombre}}</td>
        </tr>
        <tr>
            <td colspan="1"></td>
            <td colspan="3">(APELLIDO PATERNO</td>
            <td colspan="2">APELLIDO MATERNO</td>
            <td colspan="2">NOMBRE(S)</td>
        </tr>
        <tr>
            <td colspan="1" class="text-left"><b>TEL??FONO):</b></td>
            <td colspan="2" class="subrayar">{{$beneficiario->telefono}}</td>
            <td colspan="5"></td>
        </tr>
        <tr>
            <td colspan="8"></td>
        </tr>
        </tbody>
    </table>
    <br><br><br><br>
    <div class="titulo text-center">
        1
    </div>
    <footer>
        <img src="{{$bene_fot}}" width="100%">
    </footer>
    <div class="page-break"></div>
    <header>
        <table>
            <tbody class="header">
                <tr>
                    <td colspan="4"><img src="{{$bene_logo}}" width="350"></td>
                    <td colspan="4" class="text-right header-text">
                        <br><span>Direcci??n de Vinculaci??n Social,</span><br><span>Filantrop??a y Evaluaci??n del Impacto</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </header>
    <table cellspacing="0" style="border-spacing: 0;">
        <tbody class="text-center">
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr class="my-2">
                <td colspan="8" class="text-left titulo"><b>3.- <u>CONSTITUCI??N FAMILIAR</u>:</b> (PERSONAS QUE HABITAN EN EL MISMO DOMICILIO)</td>
            </tr>
        </tbody>
    </table>

    <table cellspacing="0" style="border-spacing: 0;" class="table table-bordered text-uppercase">
        <tbody class="text-center">
            <tr class="table-active titulo">
                <th scope="col">NOMBRE</th>
                <th scope="col">EDAD</th>
                <th scope="col">PARENTESCO</th>
                <th scope="col">OCUPACI??N</th>
                <th scope="col">INGRESO</th>
            </tr>
            <tr>
                <td scope="col">{{$beneficiario->nombrecompleto}}</td>
                <td scope="col">22</td>
                <td scope="col">BENEFICIARIO</td>
                <td scope="col">{{$beneficiario->ocupaci??n}}</td>
                <td scope="col">{{$beneficiario->ingresos}}</td>
            </tr>
            @foreach($familias as $familia)
            <tr>
                <td scope="col">{{$familia->nombre}}</td>
                <td scope="col">{{$familia->edad}}</td>
                <td scope="col">{{$familia->parentesco}}</td>
                <td scope="col">{{$familia->ocupacion}}</td>
                <td scope="col">{{$familia->ingreso}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>

    <table cellspacing="0" style="border-spacing: 0;" class="text-uppercase">
        <tbody class="text-center">
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="4" class="text-left"><b>N??MERO TOTAL DE MIEMBROS:</b>
                    <span class="subrayar px-3 mx-2"> {{$beneficiario->id}}</span>
                </td>
                <td colspan="4" class="text-left"><b>INGRESO TOTAL MENSUAL FAMILIAR: $</b>
                    <span class="subrayar px-3 mx-2"> {{$beneficiario->id}}</span>
                </td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr class="my-2">
                <td colspan="8" class="text-left titulo"><b>4.- <u>SITUACI??N ECON??MICA</u>:</b></td>
            </tr>
            <tr>
                <td colspan="8" class="text-left titulo"><small><b>GASTO MENSUAL FAMILIAR.</b></small></td>
            </tr>
            <tr>
                <td colspan="2" class="text-left">ALIMENTACI??N </td>
                <td colspan="2" class="subrayar">$ {{$economia->alimentacion}}</td>
                <td colspan="2" class="text-left">SALUD </td>
                <td colspan="2" class=" subrayar" style="width: 100%">$ {{$economia->salud}}</td>
            </tr>
            <tr>
                <td colspan="2" class="text-left">VIVIENDA(MANTENIMIENTO) </td>
                <td colspan="2" class="subrayar">$ {{$economia->vivienda}}</td>
                <td colspan="2" class="text-left">EDUCACI??N </td>
                <td colspan="2" class=" subrayar" style="width: 100%">$ {{$economia->educacion}}</td>
            </tr>
            <tr>
                <td colspan="2" class="text-left">SERVICIOS P??BLICOS </td>
                <td colspan="2" class="subrayar">$ {{$economia->servicios}}</td>
                <td colspan="2" class="text-left">OTROS </td>
                <td colspan="2" class=" subrayar" style="width: 100%">$ {{$economia->otro}}</td>
            </tr>
            <tr>
                <td colspan="2" class="text-left">TRANSPORTE</td>
                <td colspan="2" class="subrayar">$ {{$economia->transporte}}</td>
                <td colspan="2" class="text-left">VIVIENDA (RENTA) </td>
                <td colspan="2" class="subrayar" style="width: 100%">$ {{$economia->renta}}</td>
            </tr>
            <tr>
                <td colspan="6" class="text-left"><b>TOTAL DE EGRESOS MENSUALES FAMILIARES</b></td>
                <td colspan="2" class="subrayar"><b>$ {{$economia->transporte}}</b></td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr class="my-2">
                <td colspan="8" class="text-left titulo"><b>5.- <u>ALIMENTACI??N</u>:</b></td>
            </tr>
            <tr>
                <td colspan="1" class="text-left"><b>DESAYUNO:</b></td>
                <td colspan="7" class="subrayar text-left ">AGREGAR CAMPO</td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="1" class="text-left"><b>COMIDA:</b></td>
                <td colspan="7" class="subrayar text-left ">AGREGAR CAMPO</td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="1" class="text-left"><b>CENA:</b></td>
                <td colspan="7" class="subrayar text-left ">AGREGAR CAMPO</td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="8" class="text-left titulo"><b>6.- <u>VIVIENDA</u>:</b></td>
            </tr>
            <tr>
                <td colspan="1"><b>ZONA</b></td>
                <td colspan="1" class="subrayar">{{$domicilio->zona}}</td>
                <td colspan="1"><b>TIPO DE VIVIENDA</b></td>
                <td colspan="2" class="subrayar">{{$domicilio->tipo_viv}}</td>
                <td colspan="1"><b>R??GIMEN DE PROPIEDAD</b></td>
                <td colspan="2" class="subrayar">{{$domicilio->regimen}}</td>
            </tr>
        </tbody>
    </table>
    <br><br><br>
    <div class="titulo text-center">
        2
    </div>
    <footer>
        <img src="{{$bene_fot}}" width="100%">
    </footer>
    <div class="page-break"></div>
    <header>
        <table>
            <tbody class="header">
                <tr>
                    <td colspan="4"><img src="{{$bene_logo}}" width="350"></td>
                    <td colspan="4" class="text-right header-text">
                        <br><span>Direcci??n de Vinculaci??n Social,</span><br><span>Filantrop??a y Evaluaci??n del Impacto</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </header>
    <br>
    <table style="border-spacing: 0;" class="text-uppercase">
        <tbody>
            <tr>
                <td colspan="2" class="text-left"><b>SERVICIOS P??BLICOS:</b></td>
                <td colspan="1">LUZ ( )</td>
                <td colspan="1">AGUA ( )</td>
                <td colspan="1">PAVIMENTO ( )</td>
                <td colspan="1">DRENAJE ( )</td>
                <td colspan="1">TEL??FONO ( )</td>
                <td colspan="1">TRANSPORTE ( )</td>
            </tr>
            <tr>
                <td colspan="3" class="text-left"><b>SERVICIOS CON LOS QUE CUENTA:</b></td>
                <td colspan="1">LUZ ( )</td>
                <td colspan="1">AGUA ( )</td>
                <td colspan="1">GAS ( )</td>
                <td colspan="1">DRENAJE ( )</td>
                <td colspan="1">TEL??FONO ( )</td>
            </tr>
            <tr>
                <td colspan="1">OTROS:</td>
                <td colspan="7" class="subrayar"></td>
            </tr>
            <tr>
                <td colspan="2" class="text-left"><b>N??MERO DE ESPACIOS:</b></td>
                <td colspan="2" class="subrayar"></td>
                <td colspan="1">SALA ( )</td>
                <td colspan="1">COMEDOR ( )</td>
                <td colspan="1">R??CAMARA ( )</td>
                <td colspan="1">COCINA ( )</td>
            </tr>
            <tr>
                <td colspan="1">BA??OS:</td>
                <td colspan="3" class="subrayar"></td>
                <td colspan="1">OTROS:</td>
                <td colspan="3" class="subrayar"></td>
            </tr>
            <tr>
                <td colspan="2" class="text-left"><b>TIPO DE CONSTRUCCI??N:</b></td>
                <td colspan="1">PAREDES: </td>
                <td colspan="1" class="subrayar"></td>
                <td colspan="1">TECHO: </td>
                <td colspan="1" class="subrayar"></td>
                <td colspan="1">PISO: </td>
                <td colspan="1" class="subrayar"></td>
            </tr>
            <tr>
                <td colspan="8" class="text-left titulo"><b>7.- <u>SALUD DEL BENEFICIARIO</u>:</b></td>
            </tr>
            <tr>
                <td colspan="1" class="text-left"><b>PADECIMIENTO ACTUAL</b></td>
                <td colspan="3" class="subrayar">{{$domicilio->zona}}</td>
                <td colspan="1" class="text-left"><b>CAUSA</b></td>
                <td colspan="3" class="subrayar">{{$domicilio->tipo_viv}}</td>
            </tr>
            <tr>
                <td colspan="2" class="text-left"><b>NOMBRE DE LA TRABAJADORA SOCIAL:</b></td>
                <td colspan="6" class="subrayar text-left ">AGREGAR CAMPO</td>
            </tr>
            <tr>
                <td colspan="2" class="text-left"><b>DEPENDENCIA CANALIZADORA:</b></td>
                <td colspan="6" class="subrayar text-left ">AGREGAR CAMPO</td>
            </tr>
            <tr>
                <td colspan="2" class="text-left"><b>DIRECCI??N Y TEL??FONO:</b></td>
                <td colspan="6" class="subrayar text-left ">AGREGAR CAMPO</td>
            </tr>
            <tr>
                <td colspan="2" class="subrayar text-left"><b>FECHA Y LUGAR DE APLICACI??N:</b></td>
                <td colspan="3" class="subrayar">{{$beneficiario->fec_nac}}</td>
                <td colspan="3" class="subrayar">AGREGAR CAMPO</td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="3">(A??O MES D??A)</td>
                <td colspan="3">(LUGAR)</td>
            </tr>
            <tr>
                <td colspan="8" class="text-left"><b>EVALUACI??N GENERAL DEL TRABAJO SOCIAL:</b></td>
            </tr>
            <tr>
                <td colspan="8" class="subrayar text-left">{{$domicilio->tipo_viv}}</td>
            </tr>
            <tr>
                <td colspan="8" class="nota text-normal">"Yo el Solicitante y/o beneficiario manifiesto que los datos
                    asentados que proporciono bajo protesta de decir la verdad son fidedignos, responsabiliz??ndome de la
                    veracidad de los mismos, aceptando que su falsedad me har?? sujeto de las sanciones administrativas,
                    civiles y penales correspondientes; autorizando para confirmar la veracidad de los mismos la
                    inspecci??n f??sica por parte del Patrimonio de la Beneficencia P??blica en la direcci??n del
                    beneficiario o en su defecto por v??a telef??nica.???
                </td>
            </tr>
            <tr>
                <td colspan="8" height="30"></td>
            </tr>
            <tr>
                <td colspan="3" class="subrayar mx-4 px-2">{{$beneficiario->nombre}} {{$beneficiario->primer_ape}}</td>
                <td colspan="2"></td>
                <td colspan="3" class="subrayar mx-4 px-2">{{$beneficiario->nombre}} {{$beneficiario->primer_ape}}</td>
            </tr>
            <tr>
                <td colspan="3" class="mx-4 px-2"><b>NOMBRE Y FIRMA DEL ENTREVISTADO</b></td>
                <td colspan="2"></td>
                <td colspan="3" class="mx-4 px-2"><b>NOMBRE COMPLETO, C??DULA PROFESIONAL Y FIRMA DE LA TRABAJADORA SOCIAL</b></td>
            </tr>
            <tr>
                <td colspan="8" height="40"></td>
            </tr>
            <tr>
                <td colspan="8" class="nota-sm">EL PROGRAMA QUE GENERA ESTE APOYO GRATUITO ES DE CAR??CTER P??BLICO,
                    SUJETO A LA REGLAS DE OPERACI??N DEL PROPIO PROGRAMA, NO ES PATROCINADO NI PROMOVIDO POR PARTIDO
                    POL??TICO ALGUNO, EST?? PROHIBIDO EL USO DE ESTE PROGRAMA CON FINES POL??TICOS, ELECTORALES, DE LUCRO Y
                    OTROS DISTINTOS A LOS ESTABLECIDOS., QUIEN HAGA USO INDEBIDO DE LOS RECURSOS DE ESTE PROGRAMA DEBER??
                    SER DENUNCIADO Y SANCIONADO DE ACUERDO CON LA LEY APLICABLE Y ANTE LA AUTORIDAD COMPETENTE</td>
            </tr>
        </tbody>
    </table>
    <br>
    <div class="titulo text-center">
        3
    </div>
    <footer>
        <img src="{{$bene_fot}}" width="100%">
    </footer>
    <div class="page-break"></div>
    <header>
        <table>
            <tbody class="header">
                <tr>
                    <td colspan="4"><img src="{{$bene_logo}}" width="350"></td>
                    <td colspan="4" class="text-right header-text">
                        <br><span>Direcci??n de Vinculaci??n Social,</span><br><span>Filantrop??a y Evaluaci??n del Impacto</span>
                    </td>
                </tr>
            </tbody>
        </table>
    </header>
    </tbody>
    </table>
    <br>
    <table style="border-spacing: 0;" class="text-uppercase">
        <tbody>
            <tr>
                <td colspan="8"><b>AVISO DE PRIVACIDAD</b></td>
            </tr>
            <tr>
                <td colspan="8" class="nota-sm">
                    <p class="text-normal">Mediante el presente documento, la Administraci??n del Patrimonio de la
                        Beneficencia P??blica, informa a Usted los t??rminos en que ser??n tratados los Datos Personales que recabe, por lo cual, le recomendamos que lea atentamente la siguiente informaci??n:<br>La Administraci??n del Patrimonio de la Beneficencia P??blica, ??rgano Desconcentrado de la Secretar??a de Salud, con domicilio en calle Aniceto Ortega 1321, Colonia Del Valle, Ciudad de M??xico, Demarcaci??n Territorial Benito Ju??rez, C.P. 03100, y portal de internet http://www.apbp.salud.gob.mx/, es el responsable del uso y protecci??n de sus Datos Personales, y al respecto le informamos lo siguiente:
                    </p>
                    <p class="text-normal"><b>??Para qu?? fines utilizaremos sus Datos Personales?</b><br>Los Datos Personales que recabamos de usted, los utilizaremos para las siguientes finalidades que son necesarias para el tr??mite que solicita:
                    </p>
                    <ul class="mb-1">
                        <li>APOYOS EN ESPECIE A LAS PERSONAS F??SICAS DE ESCASOS RECURSOS SIN COBERTURA DE SEGURIDAD
                            SOCIAL.</li>
                    </ul>
                    <p class="text-normal"><b>??Qu?? Datos Personales utilizaremos para estos fines?</b><br>    Para llevar a cabo las finalidades descritas en el presente AVISO DE PRIVACIDAD, podremos solicitarle entre otros, los siguientes Datos Personales:
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
    <div class="mx-2 mb-1">
        <table cellspacing="0" style="border-spacing: 0;" class="table table-bordered table-sm mb-1">
            <tbody>
                <tr>
                    <td scope="col">??? Nacionalidad</td>
                    <td scope="col">??? Estado Civil</td>
                    <td scope="col">??? Correo electr??nico</td>
                    <td scope="col">??? Tel??fono celular</td>
                </tr>
                <tr>
                    <td scope="col">??? Fecha de nacimiento</td>
                    <td scope="col">??? Nombre</td>
                    <td scope="col">??? Firma aut??grafa</td>
                    <td scope="col">??? Huella Digital</td>
                </tr>
                <tr>
                    <td scope="col">??? Lugar de nacimiento</td>
                    <td scope="col">??? Domicilio</td>
                    <td scope="col">??? Edad</td>
                    <td scope="col">??? Fotograf??a</td>
                </tr>
                <tr>
                    <td scope="col">??? Clave ??nica de Registro de Poblaci??n (CURP)</td>
                    <td scope="col">??? Tel??fono particular</td>
                    <td scope="col">??? Registro Federal deContribuyentes (RFC)</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <p class="text-normal text-style m-0">Adem??s de los Datos Personales mencionados anteriormente, para las finalidades informadas en el presente AVISO DE PRIVACIDAD podremos requerirle los siguientes Datos Personales considerados como sensibles, mismos que requieren de especial protecci??n:
    </p>
    <div class="mx-4">
        <table cellspacing="0" style="border-spacing: 0;" class="table table-bordered table-sm mn-1">
            <tbody>
                <tr>
                    <td scope="col">??? Dictamen M??dico</td>
                    <td scope="col">??? Dictamen postOperatorio</td>
                    <td scope="col">??? Constancia deColocaci??n</td>
                </tr>
                <tr>
                    <td scope="col">??? Estudio Socioecon??mico</td>
                    <td scope="col">??? Constancia de entrega del Insumo</td>
                    <td></td>
                </tr>
            </tbody>
        </table>
    </div>
    <table style="border-spacing: 0;" class="text-uppercase my-0 py-0">
        <tbody>
            <tr>
                <td colspan="8" class="nota-sm">
                    <p class="text-normal">Con relaci??n a esta ??ltima categor??a, le informamos que los Datos Personales Sensibles que se recaben del Titular ser??n obtenidos ??nicamente en forma directa; es decir en forma personal, en el entendido de que los Datos Personales Sensibles recabados, se tratar??n con la finalidad exclusiva de realizar y dar seguimiento al proceso del apoyo otorgado.<br>Cabe aclarar que respecto de los Datos Personales que proporcione referentes a terceras personas, se presume que usted ha obtenido el consentimiento del Titular de que se trate para efectuar dicha entrega, por tanto es responsable de dicha situaci??n.<br>Trat??ndose de Datos Personales de menores de edad y personas en estado de interdicci??n o incapacidad declarada, se presume que usted cuenta con la representaci??n legal prevista en la Legislaci??n Civil que le resulte aplicable, siendo esto de igual forma su responsabilidad.
                    </p>
                    <p class="text-normal"><b>??Con qui??n compartimos su informaci??n personal y para qu?? fines?</b><br>Le informamos que sus Datos Personales podr??n ser tratados para los siguientes fines:</p>
                    <ul class="text-normal mb-1">
                        <li>a) Apoyos en Especie a las Personas F??sicas de escasos recursos sin cobertura de Seguridad
                            Social;</li>
                        <li>b) Los datos requeridos para dar cumplimiento con la informaci??n publicada en el Portal de
                            Transparencia. Solo ser?? publicados el nombre completo, apellidos, sexo y el Monto (en
                            pesos), del recurso, beneficio o apoyo otorgado.</li>
                        <li>c) Informes de Labores, Programas de Trabajo y Rendici??n de Cuentas</li>
                    </ul>
                    <p class="text-normal">As?? mismo ser??n compartidos dentro del Territorio Nacional con los
                        proveedores con los que est?? Instituci??n lleve a cabo el proceso de adquisici??n del insumo
                        solicitado.<br> Se le informa que al otorgar su consentimiento para el tratamiento de sus Datos Personales, Usted autoriza a la Administraci??n del Patrimonio de la Beneficencia P??blica a utilizarlos para la transferencia de su uso, al proveedor responsable de proporcionar el insumo solicitado. Como parte del cumplimiento a la normatividad referente a la Transparencia, Acceso a la Informaci??n y Protecci??n de Datos Personales, podr??n llevarse a cabo eventos donde ser??n tomadas fotograf??as, con la posibilidad de ser publicadas o difundidas por cualquier medio de comunicaci??n, ya sea electr??nica o impresa.<br>
                        <span class="mt-1"><b>Otorgo mi consentimiento para la transferencia y uso de mis Datos Personales:</b></span>
                    </p>
                </td>
            </tr>
            <tr class="mt-1">
                <td colspan="1"></td>
                <td colspan="6" class="subrayar mx-2 px-2 td-sm">{{$beneficiario->nombre}} {{$beneficiario->primer_ape}}
                    {{$beneficiario->segundo_ape}}</td>
                <td colspan="1"></td>
            </tr>
            <tr>
                <td colspan="1"></td>
                <td colspan="6" class="mx-2 px-2 td-sm">
                    <b>1.- Nombre Completo<br>2.- Firma y/o Huella Digital del beneficiario, (en caso de ser menor de edad padre o tutor)</b>
                </td>
                <td colspan="1"></td>
            </tr>
            <tr>
                <td colspan="8" class="nota-sm">
                    <p class="text-normal">
                        <b>Mecanismo para ejercer sus derechos de acceso, rectificaci??n, cancelaci??n u oposici??n de sus datos personales (ARCO).</b><br> Usted podr?? ejercer sus derechos ARCO directamente ante la Administraci??n del Patrimonio de la Beneficencia P??blica, ??rgano Desconcentrado de la Secretar??a de Salud, con domicilio en calle Aniceto Ortega 1321, colonia del Valle, Ciudad de M??xico, Demarcaci??n Territorial Benito Ju??rez, C.P. 03100 y/o al correo electr??nico avisodeprivacidadapbp@salud.gob,mx.
                    </p>
                    <p class="text-normal"><b>Cambios al aviso de privacidad</b><br>En caso de que exista un cambio de este aviso de privacidad, ser??n dados a conocer mediante una publicaci??n en la p??gina http://apbp.salud.gob.mx/
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
    <footer>
        <img src="{{$bene_fot}}" width="100%">
    </footer>
    <div class="page-break"></div>
    <header>
        <table>
            <tbody class="header">
                <tr>
                    <td colspan="4"><img src="{{$bene_logo}}" width="350"></td>
                    <td colspan="4" class="text-right header-text"></td>
                </tr>
            </tbody>
        </table>
    </header>
    </tbody>
    </table>
    <br>
    <table style="border-spacing: 0;" class="text-uppercase">
        <tbody>
            <tr>
                <td colspan="8" class="text-center bottom titulo2"><b>CARTA COMPROMISO</b></td>
            </tr>
            <tr>
                <td colspan="5"></td>
                <td colspan="1">Lugar:</td>
                <td colspan="2" class="subrayar"></td>
            </tr>
            <tr>
                <td colspan="5"></td>
                <td colspan="1">Fecha:</td>
                <td colspan="2" class="subrayar"></td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="5" class="text-left titulo text-normal"><b>Dr. Leonardo Alfonso Verduzco D??vila<br>
                    Director General<br>
                    Administraci??n del Patrimonio de la<br>
                    Beneficencia P??blica</b>
                </td>
                <td colspan="3"></td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="8" class="titulo text-normal text-justify">
                    El que suscribe, C. _______________________________________, quien solicita del apoyo de este
                    ??rgano Desconcentrado para recibir _______________________________________ necesario (a) para el mejoramiento de mi salud y calidad de vida, permiti??ndome la reincorporaci??n a mis
                    actividades cotidianas.<br><br>Por este medio, una vez recibido el apoyo, me comprometo a utilizar de manera adecuada el material otorgado por la Administraci??n del Patrimonio de la Beneficencia P??blica, de acuerdo a las recomendaciones que me fueron dadas por mi m??dico tratante para su mayor aprovechamiento.<br><br>As?? mismo asistir a las terapias de rehabilitaci??n no hospitalarias, o bien, cualquier otra que sea requerida para el mejoramiento de mi calidad de vida.
                </td>
            </tr>
            <tr>
                <td colspan="8" height="60"></td>
            </tr>
            <tr>
                <td colspan="8" class="text-center titulo">ATENTAMENTE</td>
            </tr>
            <tr>
                <td colspan="8" height="40"></td>
            </tr>
            <tr class="mt-1">
                <td colspan="2"></td>
                <td colspan="4" class="subrayar titulo">{{$beneficiario->nombre}} {{$beneficiario->primer_ape}}
                    {{$beneficiario->segundo_ape}}</td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="4" class="titulo"><b>Firma y huella del beneficiario</b></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="8" class="nota-sm">
                    <p class="text-normal">(En caso de ser menor de edad nombre completo y firma del padre ?? tutor; y
                        del responsable del beneficiario en caso de que este ??ltimo tenga vulnerabilidad mental).
                </td>
            </tr>
        </tbody>
    </table>
    <footer>
        <img src="{{$bene_fot}}" width="100%">
    </footer>
    <div class="page-break"></div>
    <header>
        <table>
            <tbody class="header">
                <tr>
                    <td colspan="4"><img src="{{$bene_logo}}" width="350"></td>
                    <td colspan="4" class="text-right header-text"></td>
                </tr>
            </tbody>
        </table>
    </header>
    </tbody>
    </table>
    <br>
    <table style="border-spacing: 0;" class="text-uppercase">
        <tbody>
            <tr>
                <td colspan="8" class="text-center bottom titulo2">
                    <b>FORMULARIO DE CONSENTIMIENTO DE GRABACI??N DE ENTREGA DE INSUMO</b>
                </td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="8" class="titulo text-normal text-justify">
                    El que suscribe el presente, _________________________________________, Por mi propio
                    derecho, con plena capacidad para la celebraci??n de este acto, otorgo autorizaci??n expresa a la
                    Administraci??n del Patrimonio de la Beneficencia P??blica, para llevar a cabo la filmaci??n
                    relacionada
                    con la entrega del insumo _________________________________________, para el uso, edici??n y
                    transmisi??n en vivo de cualquier de las im??genes, a trav??s de los medios de comunicaci??n.
                    Manifiesto desde ahora, para todos los efectos legales a que haya lugar, que autorizo de manera
                    expresa e irrevocable a la Administraci??n del Patrimonio de la Beneficencia P??blica, para llevar a
                    cabo la difusi??n a trav??s de cualquier medio de difusi??n, incluyendo, televisi??n y radio abierta o
                    restringida, circuito cerrado de televisi??n, sistemas de transmisi??n restringido en medios de
                    transporte, hilo cinematogr??fico, cable, fibra ??ptica, microondas, sistema de difusi??n v??a sat??lite
                    punto a punto o Directa al Hogar (???DHT???), redes inform??ticas, cintas, videocasetes, discos
                    vers??tiles
                    digitales (???DVD???), medios impresos, incluyendo sin limitar, tarjetas postales, posters e inserciones
                    en
                    peri??dicos y revistas, o cualquier otra clase de formato o soporte material que se use en el
                    presente
                    o se invente en el futuro, ya sea en lo individual o a trav??s de compilaciones o colecciones de los
                    diversos comerciales publicitarios obtenidos de las sesiones de filmaci??n antes descritas, en los
                    cuales pueden contenerse im??genes fijas o en movimiento del (la) suscrito (a). Tambi??n se incluye la
                    conversi??n a formato digital y el almacenamiento y publicaci??n en Internet.
                    Yo, el abajo firmante, estoy de acuerdo en la filmaci??n de la entrega del insumo para mi uso
                    personal
                    a la Administraci??n del Patrimonio de la Beneficencia P??blica. As?? mismo, consiento el uso de mis
                    datos personales en relaci??n con todos los usos para garantizar la transparencia de los recursos y
                    autorizo la grabaci??n de mi imagen y voz, en un medio fotogr??fico, de video, audio, digital,
                    electr??nico o cualquier otro de los mencionados previamente.
                </td>
            </tr>
            <tr>
                <td colspan="8" height="40"></td>
            </tr>
            <tr>
                <td colspan="8" class="text-left titulo">ATENTAMENTE</td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr class="mt-1">
                <td colspan="1" class="text-left text-normal">Nombre</td>
                <td colspan="3" class="subrayar titulo"></td>
                <td colspan="4"></td>
            </tr>
            <tr class="mt-1">
                <td colspan="1" class="text-left text-normal">Firma</td>
                <td colspan="3" class="subrayar titulo"></td>
                <td colspan="4"></td>
            </tr>
            <tr class="mt-1">
                <td colspan="1" class="text-left text-normal">Correo</td>
                <td colspan="3" class="subrayar titulo"></td>
                <td colspan="4"></td>
            </tr>
            <tr class="mt-1">
                <td colspan="1" class="text-left text-normal">Tel??fono</td>
                <td colspan="3" class="subrayar titulo"></td>
                <td colspan="4"></td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="1" class="subrayar"></td>
                <td colspan="1" class="titulo text-normal"> Morelos, a</td>
                <td colspan="1" class="subrayar"></td>
                <td colspan="1" class="titulo text-normal"> del mes de</td>
                <td colspan="1" class="subrayar"></td>
                <td colspan="1" class="titulo text-normal"> del 2022.</td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="8" height="40"></td>
            </tr>
            <tr>
                <td colspan="8" class="nota-sm">
                    <p class="text-normal">
                        <b>Este formulario debe ser firmado por la persona que ha aceptado ser grabada y filmada como parte principal en la entrega de un insumo para el mejoramiento de su calidad de vida o salud.<br>El prop??sito de este formulario es obtener el consentimiento para la filmaci??n y/o grabaci??n de la entrega de insumos a personas f??sicas para mejorar su calidad de vida o salud, que se utilizara en varios medios. La Administraci??n del Patrimonio de la Beneficencia P??blica garantiza que el uso de las grabaciones se utilice para fines de garantizar la entrega del insumo solicitado, transparentando la entrega gratuita del mismo por parte del benefactor/ o instituci??n intermediaria.</b>
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
    <footer>
        <img src="{{$bene_fot}}" width="100%">
    </footer>
    <div class="page-break"></div>
    <header>
        <table>
            <tbody class="header">
                <tr>
                    <td colspan="2"><img src="{{$bene_logo2}}" width="160"></td>
                    <td colspan="4" class="text-center header-text2"><span><b>SECRETAR??A DE SALUD<br>
                        SERVICIOS DE SALUD DE MORELOS<br>
                        UNIDAD DE LA BENEFICENCIA P??BLICA</b></span>
                    </td>
                    <td colspan="2" class="text-center"><br><span>FO-SUBP-DSS-04<br>Recibo de Entrega Car??tula</span><br>
                    </td>
                </tr>
            </tbody>
        </table>
    </header>
    <table cellspacing="0" style="border-spacing: 0;">
        <tbody class="text-center">
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr class="my-2">
                <td colspan="8" class="titulo bottom">
                    <b><u>RECIBO DE APOYO A PERSONAS F??SICAS DE ESCASOS RECURSOS</u></b></td>
            </tr>
            <tr>
                <td colspan="2" class="text-left"><b>NOMBRE DEL BENEFICIARIO:</b></td>
                <td colspan="6" class="subrayar">AGREGAR CAMPO</td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="6" class="text-normal td-sm pt-0 pb-2 text-muted">Nombre(s), Apellido Paterno, Apellido
                    Materno</td>
            </tr>
            <tr>
                <td colspan="2" class="text-left"><b>TUTOR O PERSONA QUE RECIBE:</b></td>
                <td colspan="6" class="subrayar">AGREGAR CAMPO</td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="6" class="text-normal td-sm pt-0 pb-2 text-muted">Nombre(s), Apellido Paterno, Apellido
                    Materno</td>
            </tr>
            <tr>
                <td colspan="2" class="text-left"><b>N??MERO DE EXPEDIENTE:</b></td>
                <td colspan="6" class="subrayar">AGREGAR CAMPO</td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="6" class="text-normal td-sm pt-0 pb-2 text-muted">Asignado por la UBPE</td>
            </tr>
            <tr>
                <td colspan="2" class="text-left"><b>AYUDA OTORGADA:</b></td>
                <td colspan="6" class="subrayar">AGREGAR CAMPO</td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="6" class="text-normal td-sm pt-0 pb-2 text-muted">Asignado por la UBP</td>
            </tr>
            <tr>
                <td colspan="2" class="text-left"><b>TIPO DE FINANCIAMIENTO:</b></td>
                <td colspan="1" class="text-right"><span class="checke">X</span></td>
                <td colspan="2" class="text-left px-2">DONADO</td>
                <td colspan="1" class="text-right"><span class="checke"></span></td>
                <td colspan="2" class="text-left px-2">PAGADO</td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="2" class="text-left"><b>FECHA DE EVENTO:</b></td>
                <td colspan="2" class="subrayar"></td>
                <td colspan="2" class="text-left"><b>FECHA DE ENTREGA:</b></td>
                <td colspan="2" class="subrayar"></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="2" class="text-normal td-sm pt-0 pb-2 text-muted">Indicado por UBP</td>
                <td colspan="2"></td>
                <td colspan="2" class="text-normal td-sm pt-0 pb-2 text-muted">Indicado por UBP</td>
            </tr>
            <tr>
                <td colspan="2" class="text-left"><b>CANALIZADO POR:</b></td>
                <td colspan="6" class="subrayar">AGREGAR CAMPO</td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr class="my-2">
                <td colspan="8" class="titulo"><b><u>ESPECIFICACIONES DEL APOYO FUNCIONAL</u></b></td>
            </tr>
            <tr>
                <td colspan="8" class="text-left">
                    <b><u>AUXILIAR AUDITIVO</u></b><span class="text-right text-normal td-sm pt-0 pb-2 text-muted"> ??rea para ser utilizadas solo por la Beneficencia P??blica</span>
                </td>
            </tr>
            <tr>
                <td colspan="8" class="subrayar"></td>
            </tr>
            <tr>
                <td colspan="1" class="bordear py-0">Oido Derecho</td>
                <td colspan="1" class="bordear py-0">P??rdida Oido Derecho</td>
                <td colspan="2" class="bordear py-0">Tipo de Auxiliar Auditivo</td>
                <td colspan="2" class="bordear py-0">Marca</td>
                <td colspan="2" class="bordear py-0">Serie No</td>
            </tr>
            <tr>
                <td colspan="1" class="bordear">x</td>
                <td colspan="1" class="bordear">x</td>
                <td colspan="2" class="bordear">x</td>
                <td colspan="2" class="bordear">x</td>
                <td colspan="2" class="bordear">x</td>
            </tr>
            <tr>
                <td colspan="8" class="subrayar"></td>
            </tr>
            <tr>
                <td colspan="1" class="bordear py-0">Oido Izquierdo</td>
                <td colspan="1" class="bordear py-0">P??rdida Oido Izquierdo</td>
                <td colspan="2" class="bordear py-0">Tipo de Auxiliar Auditivo</td>
                <td colspan="2" class="bordear py-0">Marca</td>
                <td colspan="2" class="bordear py-0">Serie No</td>
            </tr>
            <tr>
                <td colspan="1" class="bordear">x</td>
                <td colspan="1" class="bordear">x</td>
                <td colspan="2" class="bordear">x</td>
                <td colspan="2" class="bordear">x</td>
                <td colspan="2" class="bordear">x</td>
            </tr>
            <tr>
                <td colspan="8" class="text-left">
                    <b><u>LENTES GRADUADOS</u></b><span class="text-right text-normal td-sm pt-0 pb-2 text-muted"> ??rea para ser utilizadas solo por la Beneficencia P??blica</span>
                </td>
            </tr>
            <tr>
                <td colspan="8" class="subrayar"></td>
            </tr>
            <tr>
                <td colspan="1" class="bordear py-0">Adquisici??n</td>
                <td colspan="1" class="bordear py-0">Bifocal</td>
                <td colspan="1" class="bordear py-0">Cercana</td>
                <td colspan="1" class="bordear py-0">Lejana</td>
                <td colspan="2" class="bordear py-0">Graduaci??n</td>
                <td colspan="2" class="bordear py-0">Modelo de Armaz??n</td>
            </tr>
            <tr>
                <td colspan="1" rowspan="2" class="bordear">x</td>
                <td colspan="1" rowspan="2" class="bordear">x</td>
                <td colspan="1" rowspan="2" class="bordear">x</td>
                <td colspan="1" rowspan="2" class="bordear">x</td>
                <td colspan="1" class="bordear py-0">O.D</td>
                <td colspan="1" class="bordear py-0">O.I</td>
                <td colspan="2" rowspan="2" class="bordear">x</td>
            </tr>
            <tr>
                <td class="bordear">x</td>
                <td class="bordear">x</td>
            </tr>
            <tr>
                <td colspan="8" class="subrayar"></td>
            </tr>
            <tr>
                <td colspan="4" class="bordear"><b>RECIBIDO Y APROBACI??N *</b></td>
                <td colspan="4" class="bordear"><b>M??DICO O ESPECIALISTA TRATANTE</b></td>
            </tr>
            <tr>
                <td colspan="1" class="bordear py-0">Huella</td>
                <td colspan="3" class="bordear py-0">Firma</td>
                <td colspan="1" class="bordear py-0">Huella</td>
                <td colspan="3" class="bordear py-0">Firma</td>
            </tr>
            <tr>
                <td colspan="1" height="30" class="bordear"><b></b></td>
                <td colspan="3" height="30" class="bordear"><b></b></td>
                <td colspan="1" height="30" class="bordear"><b></b></td>
                <td colspan="3" height="30" class="bordear"><b></b></td>
            </tr>
            <tr>
                <td colspan="8" class="nota-xs">
                    <p class="text-normal">* El apoyo funcional es puesto a disposici??n del beneficiario final para su
                        uso y/o consumo pero que, por circunstancias ajenas y/o cuestiones t??cnicas y/o resultados del
                        manejo y/o tratamiento quir??rgico o terap??utico el usuario final no lo llega a necesitar para el
                        fin del que fue objeto, la Unidad de Beneficencia podr?? disponer del mismo bien realizando su
                        recuperaci??n y considerar ser canalizado a otro beneficiado ya sea que contenga las mismas
                        caracter??sticas o, incluso, estar en posibilidades de realizar el cambio que resultar??a
                        necesario para adecuarlo y/o adaptarlo a las caracter??sticas t??cnicas y/o funcionales del
                        beneficiario nuevo. En todo momento, las caracter??sticas
                        y/o especificaciones t??cnicas del apoyo funcional estar??n fundamentadas por escrito seg??n la
                        valoraci??n m??dica (dictamen m??dico) que expida el m??dico tratante seg??n los linemientos. La
                        Beneficencia P??blica por el solo hecho de poner a disposici??n de la ayuda funcional No tendr??
                        obligaci??n alguna con el Beneficiado y/o a sus familiares y/o tutores de entregar el apoyo
                        funcional en f??sico ni su equivalente en moneda nacional si ??ste ya no se utiliza para los fines
                        que fue destinado. La Beneficencia P??blica se reserva el derecho de brindar el manejo
                        administrativo pertinente para realizar las gestiones correspondientes a fin de documentar el
                        proceso de recuperaci??n y
                        recanalizaci??n del apoyo funcional a otorgar.
                </td>
            </tr>
            <tr>
                <td colspan="8" class="text-center py-0"><b>AUTORIZACI??N</b></td>
            </tr>
            <tr class="mt-1">
                <td colspan="2"></td>
                <td colspan="4" class="subrayar">{{$beneficiario->nombre}} {{$beneficiario->primer_ape}}
                    {{$beneficiario->segundo_ape}}</td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="4" class="py-0"><span class="nota-sm"><b>DRA YDANELLY GALICIA LUGO</b></span></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="4" class="py-0">
                    <span class="nota-sm">SUBDIRECTORA DE LA UNIDAD DE LA BENEFICENCIA P??BLICA</span></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="8" class="p-0">
                    <span class="nota-sm">Calle G??mez Azc??rate No. 205. Colonia Lomas de la Selva. C.P. 62270 Cuernavaca, Morelos Tel.: 777 310 0284 / 314-5581</span>
                </td>
            </tr>
        </tbody>
    </table>
    <footer>
        <img src="{{$bene_logo2}}" width="100">
    </footer>
    <div class="page-break"></div>
    <header>
        <table>
            <tbody class="header">
                <tr>
                    <td colspan="4"><img src="{{$bene_logo}}" width="350"></td>
                    <td colspan="4" class="text-right header-text"></td>
                </tr>
            </tbody>
        </table>
    </header>
    <br>
    <table cellspacing="0" style="border-spacing: 0;">
        <tbody class="text-center">
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr class="my-2">
                <td colspan="8" class="titulo2 bottom"><b><u>RECIBO DE APOYO</u></b></td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="2" class="text-left"><b>NOMBRE DEL BENEFICIARIO (A):</b></td>
                <td colspan="6" class="subrayar">AGREGAR CAMPO</td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="2" class="text-left"><b>AYUDA OTORGADA POR ??NICA VEZ DE MANERA GRATUITA:</b></td>
                <td colspan="6" class="subrayar">AGREGAR CAMPO</td>
            <tr>
                <td colspan="8"></td>
            </tr>
            </tr>
            <tr>
                <td colspan="2" class="text-left"><b>CANALIZADO POR:</b></td>
                <td colspan="6" class="subrayar">AGREGAR CAMPO</td>
            <tr>
                <td colspan="8"></td>
            </tr>
            </tr>
            <tr>
                <td colspan="2" class="text-left"><b>DONADO POR:</b></td>
                <td colspan="6" class="subrayar">ADMINISTRACI??N DEL PATRIMONIO DE LA BENEFICENCIA P??BLICA</td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="2" class="text-left"><b>FECHA DE ENTREGA DE LA AYUDA:</b></td>
                <td colspan="6" class="subrayar">AGREGAR CAMPO</td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="2" class="text-left"><b>RECIBE: *</b></td>
                <td colspan="6" class="subrayar">AGREGAR CAMPO</td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="2" class="text-left"><b>RELACI??N O PARENTESCO CON EL BENEFICIARIO:</b></td>
                <td colspan="6" class="subrayar">AGREGAR CAMPO</td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="8" height="40"></td>
            </tr>
            <tr>
                <td colspan="8" class="nota">
                    <p class="text-normal"><b>DECLARATORIA RECEPCI??N DE APOYO POR PRIMERA VEZ:</b> Por medio de la
                        presente corroboro bajo protesta de decir verdad que es la primera vez que recibo este apoyo en
                        materia de salud, por lo que antes de este acto <b>NO</b> hab??a recibido el apoyo antes
                        mencionado de la Beneficencia P??blica ni de ninguna otra instancia p??blica
                </td>
            </tr>
            <tr>
                <td colspan="8" height="40"></td>
            </tr>
            <tr class="mt-1">
                <td colspan="2"></td>
                <td colspan="4" class="subrayar"></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="4" class="py-0"><b>Firma y/o huella</b></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="8" class="nota">
                    <p class="text-normal">Expreso mi consentimiento para que la Beneficencia P??blica por conducto de la
                        Administraci??n de Patrimonio de la Beneficencia P??blica, haga uso de los datos personales
                        proporcionados, para difundirlos y distribuirlos por razones estad??sticas, cient??ficas o de inter??s general.<br>*Anexar copia de identificaci??n del beneficiario o del familiar que recibe el donativo. En caso de ser representante, presentar documento que lo acredite.
                    </p>
                </td>
            </tr>
        </tbody>
    </table>
    <footer>
        <img src="{{$bene_fot}}" width="100%">
    </footer>
    <div class="page-break"></div>
    <header>
        <table>
            <tbody class="header">
                <tr>
                    <td colspan="8"></td>
                </tr>
            </tbody>
        </table>
    </header>
    <br>
    <table style="border-spacing: 0;" class="text-uppercase">
        <tbody>
            <tr>
                <td colspan="8" class="text-center bottom titulo2"><b>SOLICITUD DE APOYO FUNCIONAL</b></td>
            </tr>
            <tr>
                <td colspan="8" height="20"></td>
            </tr>
            <tr>
                <td colspan="5"></td>
                <td colspan="1">Fecha:</td>
                <td colspan="2" class="subrayar"></td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="8" height="20"></td>
            </tr>
            <tr>
                <td colspan="6" class="text-left titulo text-normal"><b>DRA YDANELLY GALICIA LUGO<b><br>
                    SUBDIRECTORA DE LA UNIDAD DE LA BENEFICENCIA P??BLICA EN SSM<br>
                    CALLE G??MEZ AZC??RATE NO. 205 COLONIA LOMAS DE LA SELVA C.P. 62270<br>
                    MUNICIPIO DE CUERNAVACA MORELOS.<br><br>
                    <b>PRESENTE:</b>
                </td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="8" height="20"></td>
            </tr>
            <tr>
                <td colspan="8" class="titulo text-normal text-justify">
                    EL QUE SUSCRIBE LA (EL) C._____________________________________________________________
                    POR ESTE CONDUCTO ME DIRIJO A USTED ATENTAMENTE PARA SOLICITAR SU VALIOSA AYUDA A FIN
                    DE QUE SE ME PUEDA OTORGAR UN APOYO FUNCIONAL CONSISTENTE EN:
                    ____________________________________________________________________________________
                    ____________________________________________________________________________________
                    YA QUE MI SITUACI??N ECON??MICA ES DIFICIL, NO OMITO MANIFESTAR QUE NO CUENTO CON LOS
                    RECURSOS NECESARIOS PARA OBTENER DICHO APOYO, POR LO QUE ME VEO EN LA NECESIDAD DE
                    SOLICITARLE DE LA MANERA MAS ATENTA Y RESPETUOSA SU VALIOSA AYUDA.
                    CONOCIENDO DE SU GRAN CALIDAD HUMANA ME DESPIDO DE USTED EN ESPERA DE UNA RESPUESTA
                    FAVORABLE A MI PETICI??N, AGRADECIENDOLE DE ANTEMANO SU ATENCI??N.
                </td>
            </tr>
            <tr>
                <td colspan="8" height="60"></td>
            </tr>
            <tr>
                <td colspan="8" class="text-center titulo">ATENTAMENTE</td>
            </tr>
            <tr>
                <td colspan="8" height="40"></td>
            </tr>
            <tr class="mt-1">
                <td colspan="2"></td>
                <td colspan="4" class="subrayar titulo"></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="4" class="titulo">
                    <b>C. {{$beneficiario->nombre}} {{$beneficiario->primer_ape}} {{$beneficiario->segundo_ape}}</b>
                </td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
        </tbody>
    </table>
    <div class="page-break"></div>
    <header>
        <table>
            <tbody class="header">
                <tr>
                    <td colspan="2"><img src="{{$bene_logo2}}" width="160"></td>
                    <td colspan="4" class="text-center header-text2"><span><b><br>
                        C??DULA RESUMEN</b><br>
                        APOYO A PERSONAS F??SICAS</span>
                    </td>
                    <td colspan="2" class="text-center"><br><span>FO-SUBP-DDS-01 <br>C??dula Resumen</span><br></td>
                </tr>
            </tbody>
        </table>
    </header>
    <br>
    <table style="border-spacing: 0;" class="text-uppercase">
        <tbody>
            <tr>
                <td colspan="8" class="text-left"><b>1.- FUE INGRESADA LA SOLICITUD DE APOYO FUCIONAL POR EL (LA):</b></td>
            </tr>
            <tr>
                <td colspan="8" class="subrayar text-left">x</td>
            </tr>
            <tr>
                <td colspan="8" class="text-left"><b>A QUIEN LE DIAGNOSTICARON:</b></td>
            </tr>
            <tr>
                <td colspan="8" class="subrayar text-left">x</td>
            </tr>
            <tr>
                <td colspan="8" class="text-left"><b>POR LO QUE REQUIERE DE:</b></td>
            </tr>
            <tr>
                <td colspan="8" class="subrayar text-left">x</td>
            </tr>
            <tr>
                <td colspan="8" height="10"></td>
            </tr>
            <tr>
                <td colspan="8" class="text-left"><b>2.- SE REALIZ?? LA REVISI??N DE LA SOLICITUD DE AYUDA, INFORMANDO QUE EL SOLICITANTE CUBRI?? LOS REQUISITOS DE DOCUMENTACION ESTABLECIDOS EN EL MANUAL DE PROCEDIMIENTOS (CLAVE LI-SUBP-DDS-01):</b></td>
            </tr>
            <tr>
                <td colspan="8" class="subrayar text-left"></td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="1" class="subrayar text-normal mx-2 text-left">a) </td>
                <td colspan="7" class="text-left">CARTA SOLICITUD.</td>
            </tr>
            <tr>
                <td colspan="1" class="subrayar text-normal mx-2 text-left">b) </td>
                <td colspan="7" class="text-left">VALORACI??N M??DICA ACTUALIZADA DE INSTITUCI??N DE SALUD P??BLICA.</td>
            </tr>
            <tr>
                <td colspan="1" class="subrayar text-normal mx-2 text-left">c) </td>
                <td colspan="7" class="text-left">COPIA DE IDENTIFICACI??N DEL SOLICITANTE.</td>
            </tr>
            <tr>
                <td colspan="1" class="subrayar text-normal mx-2 text-left">d) </td>
                <td colspan="7" class="text-left">FOTOGRAF??A DEL BENEFICIARIO Y/O DEL SOLICITANTE.</td>
            </tr>
            <tr>
                <td colspan="1" class="subrayar text-normal mx-2 text-left">e) </td>
                <td colspan="7" class="text-left">P??LIZA DEL SEGURO POPULAR ACTUALIZADA (PREFERENTEMENTE).</td>
            </tr>
            <tr>
                <td colspan="1" class="subrayar text-normal mx-2 text-left">f) </td>
                <td colspan="7" class="text-left">ESTUDIO SOCIOECON??MICO CON FOTOGRAF??A.</td>
            </tr>
            <tr>
                <td colspan="1" class="subrayar text-normal mx-2 text-left">g) </td>
                <td colspan="2" class="text-left">OTROS (ESPECIFICAR):</td>
                <td colspan="5" class="subrayar"></td>
            </tr>
            <tr>
                <td colspan="8" height="10"></td>
            </tr>
            <tr>
                <td colspan="8" class="text-left"><b>3.- POR LO ANTERIOR, GIRE USTED INDICACI??N SI EL APOYO ACREDITA O NO ACREDITA:</b></td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="1"></td>
                <td colspan="1" class="text-right"><span class="checke">X</span></td>
                <td colspan="2" class="text-left px-2">ACREDITA</td>
                <td colspan="1" class="text-right"><span class="checke"></span></td>
                <td colspan="2" class="text-left px-2">NO ACREDITA</td>
                <td colspan="1"></td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="8" class="text-center titulo"><b>ELABOR??</b></td>
            </tr>
            <tr>
                <td colspan="8" height="40"></td>
            </tr>
            <tr class="mt-1">
                <td colspan="2"></td>
                <td colspan="4" class="subrayar"></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td colspan="4" class="titulo">
                    <b>NOMBRE Y FIRMA</b><br>
                    CARGO
                </td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="8" height="20"></td>
            </tr>
            <tr>
                <td colspan="8" class="text-left titulo"><b>OBSERVACIONES:</b></td>
            </tr>
            <tr>
                <td colspan="8" class="subrayar text-left" height="40">ujidshnfgvurdihgujlfbhgurdifnguif??nhjburwglnzuhfr</td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="8" class="p-0">
                    <span class="nota-sm text-normal text-right">Calle G??mez Azc??rate No. 205. Colonia Lomas de la Selva. C.P. 62270 Cuernavaca, Morelos Tel.: 777 310 0284 / 314-5581</span>
                </td>
            </tr>
        </tbody>
    </table>
    <footer>
        <img src="{{$bene_logo2}}" width="100">
    </footer>
    <div class="page-break"></div>
    <header>
        <table>
            <tbody class="header">
                <tr>
                    <td colspan="2"><img src="{{$bene_logo2}}" width="160"></td>
                    <td colspan="4" class="text-center header-text2"><span><b>SECRETAR??A DE SALUD<br>
                        SERVICIOS DE SALUD DE MORELOS<br>
                        SUBDIRECCION DE LA UNIDAD DE LA BENEFICENCIA P??BLICA</b></span>
                    </td>
                    <td colspan="2" class="text-center"><br><span class="foto">Foto<br></span><br>
                    </td>
                </tr>
            </tbody>
        </table>
    </header>
    <br>
    <table cellspacing="0" style="border-spacing: 0;">
        <tbody class="text-center">
            <tr class="my-2">
                <td colspan="8" class="titulo2 bottom"><b><u>ESTUDIO SOCIOECON??MICO</u></b></td>
            </tr>
            <tr>
                <td colspan="1" class=""><b>Fecha:</b></td>
                <td colspan="1" class="subrayar"></td>
                <td colspan="2" class=""><b>N??mero de Expediente:</b></td>
                <td colspan="1" class="subrayar"></td>
                <td colspan="2" class=""><b>Nivel Socioecon??mico:</b></td>
                <td colspan="1" class="subrayar"></td>
            </tr>
            <tr>
                <td colspan="8" height="10"></td>
            </tr>
            <tr class="my-2">
                <td colspan="8" class="titulo bottom"><b><u>DATOS GENERALES DEL PACIENTE.</u></b></td>
            </tr>
            <tr>
                <td colspan="1" class="text-left"><b>Nombre paciente:</b></td>
                <td colspan="3" class="subrayar">{{$beneficiario->primer_ape}}</td>
                <td colspan="2" class="subrayar">{{$beneficiario->segundo_ape}}</td>
                <td colspan="2" class="subrayar">{{$beneficiario->nombre}}</td>
            </tr>
            <tr>
                <td colspan="2" class="text-left"><span class="mr-1"><b>Sexo:</b></span>
                    <span class="mx-2">M</span><span class="mr-1">(X)</span>
                    <span class="mx-2">F</span><span class="mr-1">( )</span>
                </td>
                <td colspan="1"><b>Edad</b></td>
                <td colspan="1" class="subrayar">24</td>
                <td colspan="2"><b>Fecha de Nacimiento</b></td>
                <td colspan="2" class="subrayar">{{$beneficiario->fec_nac}}</td>
            </tr>
            <tr>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="1"></td>
                <td colspan="2"></td>
                <td colspan="2" class="text-sm py-0">D??a Mes A??o</td>
            </tr>
            <tr>
                <td colspan="1" class="text-left"><b>Lugar de nacimiento:</b></td>
                <td colspan="2" class="subrayar"></td>
                <td colspan="1"><b>Nacionalidad:</b></td>
                <td colspan="1" class="subrayar"></td>
                <td colspan="1"><b>Estado civil:</b></td>
                <td colspan="2" class="subrayar"></td>
            </tr>
            <tr>
                <td colspan="1" class="text-left"><b>Religi??n:</b></td>
                <td colspan="2" class="subrayar"></td>
                <td colspan="1"><b>Grupo ??tnico:</b></td>
                <td colspan="1" class="subrayar"></td>
                <td colspan="1"><b>Lengua:</b></td>
                <td colspan="2" class="subrayar"></td>
            </tr>
            <tr>
                <td colspan="1" class="text-left"><b>Escolaridad:</b></td>
                <td colspan="4" class="subrayar"></td>
                <td colspan="1"><b>Ocupaci??n:</b></td>
                <td colspan="2" class="subrayar"></td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="1" class="text-left"><b>Domicilio:</b></td>
                <td colspan="3" class="subrayar">{{$domicilio->calle}}</td>
                <td colspan="2" class="subrayar">{{$domicilio->num_int}}</td>
                <td colspan="2" class="subrayar">{{$domicilio->colonia}}</td>
            </tr>
            <tr>
                <td colspan="1" class="py-0"></td>
                <td colspan="3" class="py-0">Calle   </td>
                <td colspan="2" class="py-0">No ext. No. int</td>
                <td colspan="2" class="py-0">Colonia</td>
            </tr>
            <tr>
                <td colspan="2" class="subrayar">{{$domicilio->municipio}}</td>
                <td colspan="2" class="subrayar">MORELOS</td>
                <td colspan="2" class="subrayar">{{$domicilio->cp}}</td>
                <td colspan="2" class="subrayar">{{$domicilio->telefono}}</td>
            </tr>
            <tr>
                <td colspan="2" class="py-0">Municipio</td>
                <td colspan="2" class="py-0">Entidad Federativa</td>
                <td colspan="2" class="py-0">C??digo Postal</td>
                <td colspan="2" class="py-0">Tel??fono</td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="2" class="text-left"><b>Referencias para llegar a su domicilio:</b></td>
                <td colspan="6" class="subrayar">xxx</td>
            </tr>
             <tr>
                <td colspan="2" class="text-left"><b>Dejar recado en:</b></td>
                <td colspan="6" class="subrayar">xxx</td>
            </tr>
            <tr class="my-2">
                <td colspan="8" class="bottom text-left"><b><u>Derechohabiencia:</u></b></td>
            </tr>
            <tr>
                <td colspan="2">IMSS ( )</td>
                <td colspan="2">ISSSTE ( )</td>
                <td colspan="2">Seguro Popular ( )</td>
                <td colspan="2">Otros: __________________</td>
            </tr>
            <tr>
                <td colspan="2" class="text-left"><b>Nombre del familiar o responsable:</b></td>
                <td colspan="3" class="subrayar">xxx</td>
                <td colspan="1"><b>Parenteso:</b></td>
                <td colspan="2" class="subrayar">xxx</td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="1" class="text-left"><b>Domicilio:</b></td>
                <td colspan="3" class="subrayar">{{$domicilio->calle}}</td>
                <td colspan="2" class="subrayar">{{$domicilio->num_int}}</td>
                <td colspan="2" class="subrayar">{{$domicilio->colonia}}</td>
            </tr>
            <tr>
                <td colspan="1" class="py-0"></td>
                <td colspan="3" class="py-0">Calle   </td>
                <td colspan="2" class="py-0">No ext. No. int</td>
                <td colspan="2" class="py-0">Colonia</td>
            </tr>
             <tr>
                <td colspan="2" class="subrayar">{{$domicilio->municipio}}</td>
                <td colspan="2" class="subrayar">MORELOS</td>
                <td colspan="2" class="subrayar">{{$domicilio->cp}}</td>
                <td colspan="2" class="subrayar">{{$domicilio->telefono}}</td>
            </tr>
            <tr>
                <td colspan="2" class="py-0">Municipio</td>
                <td colspan="2" class="py-0">Entidad Federativa</td>
                <td colspan="2" class="py-0">C??digo Postal</td>
                <td colspan="2" class="py-0">Tel??fono</td>
            </tr>
            <tr>
                <td colspan="2" class="text-left"><b>Referencias para llegar a su domicilio:</b></td>
                <td colspan="6" class="subrayar">xxx</td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="8" class="text-left bottom titulo"><b>I.- <u>INGRESO FAMILIAR MENSUAL</u>:</b>  (par??metro a evaluar)</td>
            </tr>
            <tr>
                <td colspan="1" class="text-left"><b>Paciente:</b></td>
                <td colspan="2" class="subrayar text-left">$</td>
                <td colspan="1" class="text-left"><b>Padre:</b></td>
                <td colspan="1" class="subrayar text-left">$</td>
                <td colspan="1" class="text-left"><b>Madre:</b></td>
                <td colspan="2" class="subrayar text-left">$</td>
            </tr>
            <tr>
                <td colspan="1" class="text-left"><b>Esposo (a) :</b></td>
                <td colspan="2" class="subrayar text-left">$</td>
                <td colspan="1" class="text-left"><b>Hijos:</b></td>
                <td colspan="1" class="subrayar text-left">$</td>
                <td colspan="1" class="text-left"><b>Otros:</b></td>
                <td colspan="2" class="subrayar text-left">$</td>
            </tr>
            <tr>
                <td colspan="3" class="text-left"><b>N??mero de dependientes econ??micos:</b></td>
                <td colspan="2" class="subrayar text-left"></td>
                <td colspan="1" class="text-left"><b>Total:</b></td>
                <td colspan="2" class="subrayar text-left">$</td>
            </tr>
            <tr>
                <td colspan="8" height="10"></td>
            </tr>
            <tr>
                <td colspan="6" class="text-left"></td>
                <td colspan="1" class="text-left"><b>Puntuaci??n:</b></td>
                <td colspan="1" class="subrayar text-left">100</td>
            </tr>
            <tr>
                <td colspan="8">1</td>
            </tr>
            </tbody>
        </table>
        <div class="page-break"></div>
        <table>
            <tbody>
            <tr>
                <td colspan="8" class="text-left bottom titulo"><b>II.- <u>OCUPACI??N</u>:</b>  (par??metro a evaluar)</td>
            </tr>
            <tr>
                <td colspan="2" class="text-left"><b>Nombre del proveedor econ??mico:</b></td>
                <td colspan="6" class="subrayar">xxx</td>
            </tr>
            <tr>
                <td colspan="2" class="text-left"><b>Parentesco:</b></td>
                <td colspan="2" class="subrayar">xxx</td>
                <td colspan="4"></td>
            </tr>
            <tr>
                <td colspan="8" class="subrayar"></td>
            </tr>
            <tr>
                <td colspan="8" class="bordear"><b>Grupo Ocupacional:</b></td>
            </tr>
            <tr>
                <td colspan="7" class="bordear py-0 text-left">Sin ocupaci??n</td>
                <td colspan="1" class="bordear py-0"></td>
            </tr>
            <tr>
                <td colspan="7" class="bordear py-0 text-left">Trabajadores no calificados</td>
                <td colspan="1" class="bordear py-0"></td>
            </tr>
            <tr>
                <td colspan="7" class="bordear py-0 text-left">Jubilados y Pensionados</td>
                <td colspan="1" class="bordear py-0"></td>
            </tr>
            <tr>
                <td colspan="7" class="bordear py-0 text-left">Becarios, as?? como trabajadores de los servicios y vendedores de comercios y mercados</td>
                <td colspan="1" class="bordear py-0"></td>
            </tr>
            <tr>
                <td colspan="7" class="bordear py-0 text-left">Oficiales, Operarios y Artesanos de Artes mec??nicas y otros oficios</td>
                <td colspan="1" class="bordear py-0"></td>
            </tr>
            <tr>
                <td colspan="7" class="bordear py-0 text-left">Operadores de instalaciones, maquinas y montadores</td>
                <td colspan="1" class="bordear py-0"></td>
            </tr>
            <tr>
                <td colspan="7" class="bordear py-0 text-left">Agricultores y trabajadores calificados agropecuarios y pesqueros</td>
                <td colspan="1" class="bordear py-0"></td>
            </tr>
            <tr>
                <td colspan="7" class="bordear py-0 text-left">Empleados de oficina</td>
                <td colspan="1" class="bordear py-0"></td>
            </tr>
            <tr>
                <td colspan="7" class="bordear py-0 text-left">T??cnicos Profesionistas de nivel medio</td>
                <td colspan="1" class="bordear py-0"></td>
            </tr>
            <tr>
                <td colspan="7" class="bordear py-0 text-left">Profesionistas, cient??ficos e intelectuales</td>
                <td colspan="1" class="bordear py-0"></td>
            </tr>
            <tr>
                <td colspan="7" class="bordear py-0 text-left">Fuerzas armadas y ejecutivos e inversionistas</td>
                <td colspan="1" class="bordear py-0"></td>
            </tr>
            <tr>
                <td colspan="2" class="text-left"><b>Especifique ocupaci??n:</b></td>
                <td colspan="2" class="subrayar">xxx</td>
                <td colspan="2">Tipo de Trabajo:</td>
                <td colspan="2"><span class="mx-2">Eventual</span><span class="mr-1">(X)</span>
                    <span class="mx-2">Fijo</span><span class="mr-1">( )</span></td>
            </tr>
            <tr>
                <td colspan="6" class="text-left"></td>
                <td colspan="1" class="text-left"><b>Puntuaci??n:</b></td>
                <td colspan="1" class="subrayar text-left">100</td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="8" class="text-left bottom titulo"><b>III.- <u>EGRESO FAMILIAR MENSUAL</u>:</b>  (par??metro a evaluar)</td>
            </tr>
            <tr>
                <td colspan="8" class="subrayar"></td>
            </tr>
            <tr>
                <td colspan="2" class="bordear"><b>Concepto</b></td>
                <td colspan="2" class="bordear"><b>Monto</b></td>
                <td colspan="2" class="bordear"><b>Concepto</b></td>
                <td colspan="2" class="bordear"><b>Monto</b></td>
            </tr>
            <tr>
                <td colspan="2" class="bordear py-0 text-left">Alimentaci??n:</td>
                <td colspan="2" class="bordear py-0">$</td>
                <td colspan="2" class="bordear py-0 text-left">Transporte:</td>
                <td colspan="2" class="bordear py-0">$</td>
            </tr>
            <tr>
                <td colspan="2" class="bordear py-0 text-left">Renta:</td>
                <td colspan="2" class="bordear py-0">$</td>
                <td colspan="2" class="bordear py-0 text-left">Gasolina:</td>
                <td colspan="2" class="bordear py-0">$</td>
            </tr>
            <tr>
                <td colspan="2" class="bordear py-0 text-left">Luz:</td>
                <td colspan="2" class="bordear py-0">$</td>
                <td colspan="2" class="bordear py-0 text-left">Vestuario:</td>
                <td colspan="2" class="bordear py-0">$</td>
            </tr>
            <tr>
                <td colspan="2" class="bordear py-0 text-left">Agua:</td>
                <td colspan="2" class="bordear py-0">$</td>
                <td colspan="2" class="bordear py-0 text-left">Medicamentos:</td>
                <td colspan="2" class="bordear py-0">$</td>
            </tr>
            <tr>
                <td colspan="2" class="bordear py-0 text-left">Tel??fono:</td>
                <td colspan="2" class="bordear py-0">$</td>
                <td colspan="2" class="bordear py-0 text-left">Colegiaturas:</td>
                <td colspan="2" class="bordear py-0">$</td>
            </tr>
            <tr>
                <td colspan="2" class="bordear py-0 text-left">Gas:</td>
                <td colspan="2" class="bordear py-0">$</td>
                <td colspan="2" class="bordear py-0 text-left">Otros:</td>
                <td colspan="2" class="bordear py-0">$</td>
            </tr>
            <tr>
                <td colspan="2" class="bordear py-0 text-left"></td>
                <td colspan="2" class="bordear py-0"></td>
                <td colspan="2" class="bordear py-0 text-left"><b>Total</b></td>
                <td colspan="2" class="bordear py-0">$</td>
            </tr>
            <tr>
                <td colspan="6" class="text-left"></td>
                <td colspan="1" class="text-left"><b>Puntuaci??n:</b></td>
                <td colspan="1" class="subrayar text-left">100</td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="8" class="text-left bottom titulo"><b>IV.- <u>VIVIENDA</u>:</b>  (par??metro a evaluar)</td>
            </tr>
            <tr>
                <td colspan="8" class="text-left"><b>Tipo de tenencia:</b></td>
            </tr>
            <tr>
                <td colspan="2">Bajo protecci??n Institucional ( )</td>
                <td colspan="2">Rentada, Hipotecada ( )</td>
                <td colspan="2">Prestada ( )</td>
                <td colspan="2">Propia pagada ()</td>
            </tr>
            <tr>
                <td colspan="6" class="text-left"></td>
                <td colspan="1" class="text-left"><b>Puntuaci??n:</b></td>
                <td colspan="1" class="subrayar text-left">100</td>
            </tr>
            <tr>
                <td colspan="8" class="text-left"><b>Tipo de vivienda:</b></td>
            </tr>
            <tr>
                <td colspan="4" class="text-left">Vivienda m??vil, casa rural, refugio, cuarto redondo sin vivienda, local no construido para habitaci??n ( )</td>
                <td colspan="4" class="text-left">Vecindad o cuarto de servicio, azotea ( )</td>
            </tr>
            <tr>
                <td colspan="4" class="text-left">Departamento a casa popular en unidades habitacionales (inter??s social).  ( )</td>
                <td colspan="4" class="text-left">Departamento a casa clase media con financiamiento propio o hipoteca ( )</td>
            </tr>
            <tr>
                <td colspan="4" class="text-left">Departamento a casa residencial. ( )</td>
                <td colspan="4"></td>
            </tr>
            <tr>
                <td colspan="6" class="text-left"></td>
                <td colspan="1" class="text-left"><b>Puntuaci??n:</b></td>
                <td colspan="1" class="subrayar text-left">100</td>
            </tr>
            <tr>
                <td colspan="8" class="text-left"><b>Servicios P??blicos:</b></td>
            </tr>
            <tr>
                <td colspan="2">Agua ( )</td>
                <td colspan="2">Drenaje ( )</td>
                <td colspan="2">Alumbrado P??blico ( )</td>
                <td colspan="2">Pavimentaci??n ()</td>
            </tr>
            <tr>
                <td colspan="2">Recolecci??n de basura ( )</td>
                <td colspan="2">Tel??fono P??blico  ( )</td>
                <td colspan="4"></td>
            </tr>
            <tr>
                <td colspan="6" class="text-left"></td>
                <td colspan="1" class="text-left"><b>Puntuaci??n:</b></td>
                <td colspan="1" class="subrayar text-left">100</td>
            </tr>
             <tr>
                <td colspan="8" height="10"></td>
            </tr>
            <tr>
                <td colspan="8">2</td>
            </tr>
            </tbody>
        </table>
        <div class="page-break"></div>
        <table>
            <tbody>
            <tr>
                <td colspan="8" class="text-left"><b>Servicios Intradomiciliarios:</b></td>
            </tr>
            <tr>
                <td colspan="1">Agua ( )</td>
                <td colspan="1">Luz ( )</td>
                <td colspan="1">Drenaje ( )</td>
                <td colspan="1">Tel??fono ()</td>
                <td colspan="1">Otros: </td>
                <td colspan="3" class="subrayar"></td>
            </tr>
            <tr>
                <td colspan="6" class="text-left"></td>
                <td colspan="1" class="text-left"><b>Puntuaci??n:</b></td>
                <td colspan="1" class="subrayar text-left">100</td>
            </tr>
            <tr>
                <td colspan="8" class="text-left"><b>Material de construcci??n de la vivienda: </b></td>
            </tr>
            <tr>
                <td colspan="3">Lamina, Madera, material de la regi??n ( )</td>
                <td colspan="2">Mixta ( )</td>
                <td colspan="2">Mamposter??a ( )</td>
                <td colspan="1"></td>
            </tr>
            <tr>
                <td colspan="6" class="text-left"></td>
                <td colspan="1" class="text-left"><b>Puntuaci??n:</b></td>
                <td colspan="1" class="subrayar text-left">100</td>
            </tr>
            <tr>
                <td colspan="8" class="text-left"><b>N??mero de dormitorios: </b></td>
            </tr>
            <tr>
                <td colspan="2">De 1 a 2 ( )</td>
                <td colspan="2">De 3 a 4 ( )</td>
                <td colspan="2">De 5 o m??s ( )</td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="6" class="text-left"></td>
                <td colspan="1" class="text-left"><b>Puntuaci??n:</b></td>
                <td colspan="1" class="subrayar text-left">100</td>
            </tr>
            <tr>
                <td colspan="8" class="text-left"><b>N??mero de personas por dormitorio: </b></td>
            </tr>
            <tr>
                <td colspan="2">4 ?? m??s personas ( )</td>
                <td colspan="2">3 personas ( )</td>
                <td colspan="2">1-2 personas ( )</td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="6" class="text-left"></td>
                <td colspan="1" class="text-left"><b>Puntuaci??n:</b></td>
                <td colspan="1" class="subrayar text-left">100</td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="8" class="text-left bottom titulo"><b>V.- <u>ESTRUCTURA FAMILIAR</u>:</b></td>
            </tr>
            <tr>
                <td colspan="8" class="subrayar"></td>
            </tr>
            <tr>
                <td colspan="2" class="bordear"><b>Nombre</b></td>
                <td colspan="1" class="bordear"><b>Parentesco</b></td>
                <td colspan="1" class="bordear"><b>Edad</b></td>
                <td colspan="2" class="bordear"><b>Escolaridad</b></td>
                <td colspan="2" class="bordear"><b>Ocupaci??n</b></td>
            </tr>
            <tr>
                <td colspan="2" class="bordear py-0 text-left">x</td>
                <td colspan="1" class="bordear py-0 text-left">x</td>
                <td colspan="1" class="bordear py-0 text-left">x</td>
                <td colspan="2" class="bordear py-0 text-left">x</td>
                <td colspan="2" class="bordear py-0 text-left">x</td>
            </tr>
            <tr>
                <td colspan="2" class="bordear py-0 text-left">x</td>
                <td colspan="1" class="bordear py-0 text-left">x</td>
                <td colspan="1" class="bordear py-0 text-left">x</td>
                <td colspan="2" class="bordear py-0 text-left">x</td>
                <td colspan="2" class="bordear py-0 text-left">x</td>
            </tr>
            <tr>
                <td colspan="2" class="bordear py-0 text-left">x</td>
                <td colspan="1" class="bordear py-0 text-left">x</td>
                <td colspan="1" class="bordear py-0 text-left">x</td>
                <td colspan="2" class="bordear py-0 text-left">x</td>
                <td colspan="2" class="bordear py-0 text-left">x</td>
            </tr>
            <tr>
                <td colspan="2" class="bordear py-0 text-left">x</td>
                <td colspan="1" class="bordear py-0 text-left">x</td>
                <td colspan="1" class="bordear py-0 text-left">x</td>
                <td colspan="2" class="bordear py-0 text-left">x</td>
                <td colspan="2" class="bordear py-0 text-left">x</td>
            </tr>
            <tr>
                <td colspan="2" class="bordear py-0 text-left">x</td>
                <td colspan="1" class="bordear py-0 text-left">x</td>
                <td colspan="1" class="bordear py-0 text-left">x</td>
                <td colspan="2" class="bordear py-0 text-left">x</td>
                <td colspan="2" class="bordear py-0 text-left">x</td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="8" class="text-left bottom titulo"><b>VI.- <u>SALUD FAMILIAR</u>:</b> (par??metro a evaluar)</td>
            </tr>
            <tr>
                <td colspan="2" class="text-left"><b>Diagn??stico m??dico del paciente:</b></td>
                <td colspan="6" class="text-left subrayar"><b></b>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="8" class="text-left"><b>Tiempo de tratamiento de la enfermedad del paciente: </b></td>
            </tr>
            <tr>
                <td colspan="2">M??s de 6 meses ( )</td>
                <td colspan="2">De 3 a 6 meses ( )</td>
                <td colspan="3">Menos de 3 meses o sin comorbilidad ( )</td>
                <td colspan="1"></td>
            </tr>
            <tr>
                <td colspan="6" class="text-left"></td>
                <td colspan="1" class="text-left"><b>Puntuaci??n:</b></td>
                <td colspan="1" class="subrayar text-left">100</td>
            </tr>
            <tr>
                <td colspan="8" class="text-left"><b>Otros problemas de salud del paciente, que se atienden en otra instituci??n: </b></td>
            </tr>
            <tr>
                <td colspan="1">Si ( )</td>
                <td colspan="1">No ( )</td>
                <td colspan="2">Nombre de la Instituci??n</td>
                <td colspan="4" class="subrayar"></td>
            </tr>
            <tr>
                <td colspan="6" class="text-left"></td>
                <td colspan="1" class="text-left"><b>Puntuaci??n:</b></td>
                <td colspan="1" class="subrayar text-left">100</td>
            </tr>
            <tr>
                <td colspan="8" class="text-left"><b>N??mero de enfermos o con discapacidad en el n??cleo familiar: </b></td>
            </tr>
            <tr>
                <td colspan="2">2 o principal proveedor econ??mico ( )</td>
                <td colspan="2">1 enfermo ( )</td>
                <td colspan="2">0 enfermo ()</td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="6" class="text-left"></td>
                <td colspan="1" class="text-left"><b>Puntuaci??n:</b></td>
                <td colspan="1" class="subrayar text-left">100</td>
            </tr>
            <tr>
                <td colspan="8" height="120"></td>
            </tr>
            <tr>
                <td colspan="8">3</td>
            </tr>
        </tbody>
    </table>
    <div class="page-break"></div>
    <table>
        <tbody>
            <tr>
                <td colspan="8" class="text-left bottom titulo"><b>VII.- <u>DIAGN??STICO SOCIAL</u>:</b></td>
            </tr>
            <tr>
                <td colspan="8" class="subrayar" height="130">En esta lecci??n y en la lecci??n CSS Bordes (2) se comentan las propiedades CSS definidas en la futura recomendaci??n CSS Backgrounds and Borders Module Level 3. Aunque actualmente (octubre de 2022) esta recomendaci??n no est?? formalmente aprobada, se considera parte de la definici??n oficial de CSS en CSS Snapshot 2021.<br>Estas propiedades permiten a??adir un borde a cualquier elemento elemento de una p??gina web.En esta lecci??n se comentan principalmente las propiedades "cl??sicas", que ya estaban incluidas en CSS 2, publicada en mayo de 1998.</td>
            </tr>
            <tr>
                <td colspan="8" class="text-left bottom titulo"><b>VIII.- <u>PLAN DE ACCI??N</u>:</b></td>
            </tr>
            <tr>
                <td colspan="8" class="subrayar" height="130"></td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="8">Firmo bajo protesta de decir la verdad y acepto que los datos contenidos en el estudio socioecon??mico fueron aportados bajo mi responsabilidad y pueden ser verificados si se considera necesario.</td>
            </tr>
            <tr>
                <td colspan="8" height="40"></td>
            </tr>
            <tr>
                <td colspan="3" class="subrayar mx-4 px-2">{{$beneficiario->nombre}} {{$beneficiario->primer_ape}}</td>
                <td colspan="2"></td>
                <td colspan="3" class="subrayar mx-4 px-2">{{$beneficiario->nombre}} {{$beneficiario->primer_ape}}</td>
            </tr>
            <tr>
                <td colspan="3" class="mx-4 px-2"><b>NOMBRE Y FIRMA DEL ENTREVISTADO</b></td>
                <td colspan="2"></td>
                <td colspan="3" class="mx-4 px-2"><b>NOMBRE Y FIRMA DEL TRABAJADOR SOCIAL</b></td>
            </tr>
            <tr>
                <td colspan="5" class="py-0"></td>
                <td colspan="3" class="py-0">C??dula profesional _________________</td>
            </tr>
            <tr>
                <td colspan="8" height="10"></td>
            </tr>
            <tr>
                <td colspan="5" class="py-0"></td>
                <td colspan="3" class="py-0 dashed" height="80" style="line-height: 80px;">Sello de Trabajo Social.</td>
            </tr>
            <tr>
                <td colspan="8" height="120"></td>
            </tr>
            <tr>
                <td colspan="8">4</td>
            </tr>
        </tbody>
    </table>
    <footer>
        <img src="{{$bene_logo2}}" width="140">
    </footer>
    <div class="page-break"></div>
    <header>
        <table>
            <tbody class="header">
                <tr>
                    <td colspan="2"><img src="{{$bene_logo2}}" width="160"></td>
                    <td colspan="6" class="text-center header-text2"><span><b>SERVICIOS DE SALUD DE MORELOS<br>
                        AVISO DE PRIVACIDAD</b></span>
                    </td>
                </tr>
            </tbody>
        </table>
    </header>
    <br>
    <table>
        <tbody>
            <tr>
                <td colspan="8" class="text-left">El Organismo P??blico Descentralizado denominado Servicios de Salud de Morelos con domicilio en Callej??n Borda No. 3, Col. Centro, Cuernavaca, Morelos, C.P. 62000, es el responsable del uso y protecci??n de sus datos personales, y al respecto le informamos lo siguiente:<br><b>??Para qu?? fines utilizaremos sus datos personales?</b><br>De manera adicional, utilizaremos su informaci??n personal para las siguientes finalidades secundarias que no son necesarias para el servicio solicitado, pero que nos permiten y facilitan brindarle una mejor atenci??n:<br>??? Para establecer contacto con el solicitante del servicio. La negativa para el uso de sus datos personales para estas finalidades no podr?? ser un motivo para que le neguemos los servicios y productos que solicita o contrata con nosotros.<br><b>??Qu?? datos personales utilizaremos para estos fines?</b><br>Para llevar a cabo las finalidades descritas en el presente aviso de privacidad, utilizaremos los siguientes datos personales:</td>
            </tr>
            <tr>
                <td colspan="2" class="text-left py-0">??? Nombre</td>
                <td colspan="2" class="text-left py-0">??? Edad</td>
                <td colspan="2" class="text-left py-0">??? Trayectoria educativa</td>
                <td colspan="2" class="text-left py-0">??? Estado Civil</td>
            </tr>
            <tr>
                <td colspan="2" class="text-left py-0">??? Fotograf??a</td>
                <td colspan="2" class="text-left py-0">??? T??tulos</td>
                <td colspan="2" class="text-left py-0">??? Clave ??nica de Registro de Poblaci??n (CURP)</td>
                <td colspan="2" class="text-left py-0">??? Se??as particulares</td>
            </tr>
            <tr>
                <td colspan="2" class="text-left py-0">??? C??dula profesional</td>
                <td colspan="2" class="text-left py-0">??? Lugar de nacimiento</td>
                <td colspan="2" class="text-left py-0">??? Estatura</td>
                <td colspan="2" class="text-left py-0">??? Certificados</td>
            </tr>
            <tr>
                <td colspan="2" class="text-left py-0">??? Fecha de nacimiento</td>
                <td colspan="2" class="text-left py-0">??? Peso</td>
                <td colspan="2" class="text-left py-0">??? Pasatiempos</td>
                <td colspan="2" class="text-left py-0">??? Domicilio</td>
            </tr>
            <tr>
                <td colspan="2" class="text-left py-0">??? Tipo de sangre</td>
                <td colspan="2" class="text-left py-0">??? Deportes que practica</td>
                <td colspan="2" class="text-left py-0">??? Tel??fono particular</td>
                <td colspan="2" class="text-left py-0">??? Domicilio de trabajo</td>
            </tr>
            <tr>
                <td colspan="2" class="text-left py-0">??? Datos de identificaci??n</td>
                <td colspan="2" class="text-left py-0">??? Tel??fono celular</td>
                <td colspan="2" class="text-left py-0">??? Tel??fono institucional</td>
                <td colspan="2" class="text-left py-0">??? Datos de contacto</td>
            </tr>
            <tr>
                <td colspan="2" class="text-left py-0">??? Correo electr??nico</td>
                <td colspan="2" class="text-left py-0">??? Referencias laborales</td>
                <td colspan="2" class="text-left py-0">??? Datos laborales</td>
                <td colspan="2" class="text-left py-0">??? Capacitaci??n laboral</td>
            </tr>
            <tr>
                <td colspan="8" class="text-left">Adem??s de los datos personales mencionados anteriormente, para las finalidades informadas en el presente aviso de privacidad utilizaremos los siguientes datos personales considerados como sensibles, que requieren de especial protecci??n: </td>
            </tr>
            <tr>
                <td colspan="3" class="text-left py-0">??? Estado de salud f??sico presente, pasado o futuro</td>
                <td colspan="3" class="text-left py-0">??? Preferencias sexuales</td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="3" class="text-left py-0">??? Estado de salud mental presente, pasado o futuro</td>
                <td colspan="3" class="text-left py-0">??? Pr??cticas o h??bitos sexuales</td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="3" class="text-left py-0">??? Informaci??n gen??tica.</td>
                <td colspan="3" class="text-left py-0">??? Huella dactilar</td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="8" class="text-left"><b>??Con qui??n compartimos su informaci??n personal y para qu?? fines?</b><br>Le informamos que sus datos personales son compartidos dentro del pa??s con las siguientes personas, empresas, organizaciones o autoridades distintas a nosotros, para los siguientes fines:</td>
            </tr>
            <tr>
                <td colspan="8" class="subrayar"></td>
            </tr>
            <tr>
                <td colspan="3" class="bordear"><b>Destinatario de los datos personales</b></td>
                <td colspan="3" class="bordear"><b>Finalidad</b></td>
                <td colspan="2" class="bordear"><b>Requiere del consentimiento</b></td>
            </tr>
            <tr>
                <td colspan="3" class="text-left py-0 bordear">Direcci??n de Atenci??n M??dica</td>
                <td colspan="3" class="text-left py-0 bordear">Revisi??n de Expedientes cl??nicos.</td>
                <td colspan="2" class="text-left py-0 bordear">Si</td>
            </tr>
            <tr>
                <td colspan="3" class="text-left py-0 bordear">Direcci??n de Administraci??n</td>
                <td colspan="3" class="text-left py-0 bordear">Revisi??n de expedientes del personal, contratos y convenios. </td>
                <td colspan="2" class="text-left py-0 bordear">Si</td>
            </tr>
            <tr>
                <td colspan="3" class="text-left py-0 bordear">Direcci??n de Planeaci??n y Evaluaci??n</td>
                <td colspan="3" class="text-left py-0 bordear">Revisi??n de certificados de natalidad y mortalidad, as?? como, revisi??n de los ingresos y egresos hospitalaria. </td>
                <td colspan="2" class="text-left py-0 bordear">Si</td>
            </tr>
            <tr>
                <td colspan="3" class="text-left py-0 bordear">Comisi??n para la Protecci??n contra Riesgos Sanitarios</td>
                <td colspan="3" class="text-left py-0 bordear">Revisi??n y regulaci??n de Licencias Sanitarias.</td>
                <td colspan="2" class="text-left py-0 bordear">Si</td>
            </tr>
            <tr>
                <td colspan="3" class="text-left py-0 bordear">Unidad de la Beneficencia P??blica Estatal</td>
                <td colspan="3" class="text-left py-0 bordear">Revisi??n de apoyos directos a la sociedad.</td>
                <td colspan="2" class="text-left py-0 bordear">Si</td>
            </tr>
            <tr>
                <td colspan="3" class="text-left py-0 bordear">Subdirecci??n Jur??dica</td>
                <td colspan="3" class="text-left py-0 bordear">Demandas y denuncias.</td>
                <td colspan="2" class="text-left py-0 bordear">Si</td>
            </tr>
            <tr>
                <td colspan="3" class="text-left py-0 bordear">Instituto de Salud P??blica</td>
                <td colspan="3" class="text-left py-0 bordear">Investigaciones.</td>
                <td colspan="2" class="text-left py-0 bordear">Si</td>
            </tr>
            <tr>
                <td colspan="3" class="text-left py-0 bordear">Secretar??a de Salud</td>
                <td colspan="3" class="text-left py-0 bordear">Revisi??n de planes y programas institucionales. </td>
                <td colspan="2" class="text-left py-0 bordear">Si</td>
            </tr>
            <tr>
                <td colspan="8" class="text-left">Con relaci??n a las transferencias que requieren de su consentimiento, si usted a continuaci??n no manifiesta su negativa para que ??stas ocurran, entenderemos que nos lo ha otorgado:<br>No autorizo que se lleven a cabo las siguientes transferencias de mis datos personales:</td>
            </tr>
            <tr>
                <td colspan="8" class="subrayar"></td>
            </tr>
            <tr>
                <td colspan="3" class="bordear"><b>Destinatario de los datos personales</b></td>
                <td colspan="3" class="bordear"><b>Finalidad</b></td>
                <td colspan="2" class="bordear"><b>Selecciona</b></td>
            </tr>
            <tr>
                <td colspan="3" class="text-left py-0 bordear">Direcci??n de Atenci??n M??dica</td>
                <td colspan="3" class="text-left py-0 bordear">Revisi??n de Expedientes cl??nicos.</td>
                <td colspan="2" class="text-left py-0 bordear"></td>
            </tr>
            <tr>
                <td colspan="3" class="text-left py-0 bordear">Direcci??n de Administraci??n</td>
                <td colspan="3" class="text-left py-0 bordear">Revisi??n de expedientes del personal, contratos y convenios. </td>
                <td colspan="2" class="text-left py-0 bordear"></td>
            </tr>
            <tr>
                <td colspan="3" class="text-left py-0 bordear">Direcci??n de Planeaci??n y Evaluaci??n</td>
                <td colspan="3" class="text-left py-0 bordear">Revisi??n de certificados de natalidad y mortalidad, as?? como, revisi??n de los ingresos y egresos hospitalaria. </td>
                <td colspan="2" class="text-left py-0 bordear"></td>
            </tr>
            <tr>
                <td colspan="3" class="text-left py-0 bordear">Comisi??n para la Protecci??n contra Riesgos Sanitarios</td>
                <td colspan="3" class="text-left py-0 bordear">Revisi??n y regulaci??n de Licencias Sanitarias.</td>
                <td colspan="2" class="text-left py-0 bordear"></td>
            </tr>
            <tr>
                <td colspan="3" class="text-left py-0 bordear">Unidad de la Beneficencia P??blica Estatal</td>
                <td colspan="3" class="text-left py-0 bordear">Revisi??n de apoyos directos a la sociedad.</td>
                <td colspan="2" class="text-left py-0 bordear"></td>
            </tr>
        </tbody>
    </table>
    <footer>
        <img src="{{$bene_logo2}}" width="140">
        <span class="nota-sm ml-5 pb-2">Callej??n Borda No. 3 Colonia Centro C.P. 62000 Tel??fonos: 01 777 314-3336 y 312-4207</span>
    </footer>
    <div class="page-break"></div>
        <header>
        <table>
            <tbody class="header">
                <tr>
                    <td colspan="2"><img src="{{$bene_logo2}}" width="160"></td>
                    <td colspan="6" class="text-center header-text2"><span><b>SERVICIOS DE SALUD DE MORELOS<br>
                        AVISO DE PRIVACIDAD</b></span>
                    </td>
                </tr>
            </tbody>
        </table>
    </header>
    <br>
    <table>
        <tbody>
            <tr>
                <td colspan="3" class="text-left py-0 bordear">Subdirecci??n Jur??dica</td>
                <td colspan="3" class="text-left py-0 bordear">Demandas y denuncias.</td>
                <td colspan="2" class="text-left py-0 bordear"></td>
            </tr>
            <tr>
                <td colspan="3" class="text-left py-0 bordear">Instituto de Salud P??blica</td>
                <td colspan="3" class="text-left py-0 bordear">Investigaciones.</td>
                <td colspan="2" class="text-left py-0 bordear"></td>
            </tr>
            <tr>
                <td colspan="3" class="text-left py-0 bordear">Secretar??a de Salud</td>
                <td colspan="3" class="text-left py-0 bordear">Revisi??n de planes y programas institucionales. </td>
                <td colspan="2" class="text-left py-0 bordear"></td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="8" class="text-left"><b>??C??mo puede Acceder, Rectificar o Cancelar sus datos personales, u Oponerse a su uso? (ARCO)</b><br>
                Usted tiene derecho a conocer qu?? datos personales tenemos de usted, para qu?? los utilizamos y las condiciones del uso que les damos (Acceso). Asimismo, es su derecho solicitar la correcci??n de su informaci??n personal en caso de que est?? desactualizada, sea inexacta o incompleta (Rectificaci??n); que la eliminemos de nuestros registros o bases de datos cuando considere que la misma no est?? siendo utilizada adecuadamente (Cancelaci??n); as?? como oponerse al uso de sus datos personales para fines espec??ficos (Oposici??n). Estos derechos se conocen como derechos ARCO.<br>
                Para el ejercicio de cualquiera de los derechos ARCO, usted deber?? presentar la solicitud a trav??s del siguiente medio:<br><br>
                Directamente al tel??fono (777) 3124207 o por escrito en la oficinas de la Direcci??n de Planeaci??n y Evaluaci??n ubicadas en Callej??n Borda No. 3, Col. Centro, Cuernavaca, Morelos, C.P. 62000.<br><br>
                Para conocer el procedimiento y requisitos para el ejercicio de los derechos ARCO, ponemos a su disposici??n el siguiente medio: Acudiendo personalmente a la Unidad de Transparencia ubicada en Callej??n Borda No. 3, Col. Centro, Cuernavaca, Morelos, o bien, enviar un correo electr??nico a la direcci??n ut@ssm.gob.mx.<br>
                <b>Usted puede revocar su consentimiento para el uso de sus datos personales</b><br>
                Usted puede revocar el consentimiento que, en su caso, nos haya otorgado para el tratamiento de sus datos personales. Sin embargo, es importante que tenga en cuenta que no en todos los casos podremos atender su solicitud o concluir el uso de forma inmediata, ya que es posible que por alguna obligaci??n legal requiramos seguir tratando sus datos personales. Asimismo, usted deber?? considerar que para ciertos fines, la revocaci??n de su consentimiento implicar?? que no le podamos seguir prestando el servicio que nos solicit??, o la conclusi??n de su relaci??n con nosotros.<br><br>
                Para revocar su consentimiento deber?? presentar su solicitud a trav??s del siguiente medio: Llamando al tel??fono (777) 3124207 o enviando un correo a la direcci??n ut@ssm.gob.mx.<br>
                Para conocer el procedimiento y requisitos para la revocaci??n del consentimiento, ponemos a su disposici??n el siguiente medio: Acudir a las oficinas de la Unidad de Transparencia, ubicada en Callej??n Borda No. 3, Col. Centro, Cuernavaca, Morelos, o bien, enviando un correo a la direcci??n ut@ssm.gob.mx<br>
                <b>??C??mo puede limitar el uso o divulgaci??n de su informaci??n personal?</b><br>
                Con objeto de que usted pueda limitar el uso y divulgaci??n de su informaci??n personal, le ofrecemos los siguientes medios: Enviando un correo electr??nico a la direcci??n ut@ssm.gob.mx<br>
                <b>??C??mo puede conocer los cambios en este aviso de privacidad?</b><br>
                El presente aviso de privacidad puede sufrir modificaciones, cambios o actualizaciones derivadas de nuevos requerimientos legales; de nuestras propias necesidades por los productos o servicios que ofrecemos; de nuestras pr??cticas de privacidad; de cambios en nuestro modelo de negocio, o por otras causas.<br>
                Nos comprometemos a mantenerlo informado sobre los cambios que pueda sufrir el presente aviso de privacidad, a trav??s de: www.ssm.gob.mx<br>
                El procedimiento a trav??s del cual se llevar??n a cabo las notificaciones sobre cambios o actualizaciones al presente aviso de privacidad es el siguiente a trav??s de la p??gina del Organismo denominado Servicios de Salud de Morelos</td>
            </tr>
            <tr>
                <td colspan="8" height="10"></td>
            </tr>
            <tr>
                <td colspan="8" class="text-left"><b>Otorgo mi consentimiento para la transferencia y uso de mis Datos Personales</b></td>
            </tr>
            <tr>
                <td colspan="8" height="40"></td>
            </tr>
            <tr>
                <td colspan="4" class="mx-4 px-2"><b>Nombre, Firma y/o Huella Digital del Titular, Padre, Madre o Tutor</b></td>
                <td colspan="2"></td>
                <td colspan="2" class="mx-4 px-2"><b>Fecha</b></td>
            </tr>
            <tr>
                <td colspan="4" class="subrayar mx-4 px-2">{{$beneficiario->nombre}} {{$beneficiario->primer_ape}}</td>
                <td colspan="2"></td>
                <td colspan="2" class="subrayar mx-4 px-2">18-10-2022</td>
            </tr>
        </tbody>
    </table>
    <footer>
        <img src="{{$bene_logo2}}" width="140">
        <span class="nota-sm ml-5 pb-2">Callej??n Borda No. 3 Colonia Centro C.P. 62000 Tel??fonos: 01 777 314-3336 y 312-4207</span>
    </footer>
    <div class="page-break"></div>
        <header>
        <table>
            <tbody class="header">
                <tr>
                    <td colspan="2"><img src="{{$bene_logo2}}" width="160"></td>
                    <td colspan="4" class="text-center header-text2"><span><b>SERVICIOS DE SALUD DE MORELOS<br>
                        UNIDAD DE LA BENEFICENCIA P??BLICA<br>
                        FORMATO DE ATENCI??N A PETICIONES</b></span>
                    <td colspan="2" class="text-center"><br><span>FO-DBP-DDS-03 <br>Atenci??n a Peticiones</span><br></td>
                    </td>
                </tr>
            </tbody>
        </table>
    </header>
    <br>
    <table>
        <tbody>
            <tr>
                <td colspan="8" class="text-right">CUERNAVACA, MORELOS A _____ DE ____________________ DE ________</td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="8" class="text-right titulo bottom"><b>ASUNTO:</b> NOTIFICACI??N</td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="8" class="text-left subrayar">C.</td>
            </tr>
            <tr>
                <td colspan="8" class="py-0">(nombre completo, apellido paterno y materno)</td>
            </tr>
             <tr>
                <td colspan="8" height="10"></td>
            </tr>
             <tr>
                <td colspan="8" class="text-left titulo"><b>P R E S E N T E.</b></td>
            </tr>
            <tr>
                <td colspan="8"></td>
            </tr>
            <tr>
                <td colspan="8" class="titulo text-normal text-justify">En respuesta a su petici??n recibida en esta oficina con folio no. <span class="subrayar">545</span> de fecha <span class="subrayar">01-10-2022</span>, me permito comunicarle lo siguiente:
                ________________________________________________________________________________________________________
                ________________________________________________________________________________________________________
                ________________________________________________________________________________________________________
                ________________________________________________________________________________________________________
                ________________________________________________________________________________________________________
                </td>
            </tr>
            <tr>
                <td colspan="8" height="10"></td>
            </tr>
            <tr>
                <td colspan="8" class="text-left"><b>LA PETICION NO TUVO UNA RESPUESTA POSITIVA POR LA(S) SIGUIENTE(S) CAUSA(S):</b></td>
            </tr>
             <tr>
                <td colspan="1" class="text-right"><span class="checke">X</span></td>
                <td colspan="3" class="text-left px-2">No re??ne los requisitos normativos</td>
                <td colspan="1" class="text-right"><span class="checke"></span></td>
                <td colspan="3" class="text-left px-2">La petici??n no es apoyo funcional </td>
            </tr>
            <tr>
                <td colspan="1" class="text-right"><span class="checke">X</span></td>
                <td colspan="3" class="text-left px-2">La partida no est?? presupuestada </td>
                <td colspan="1" class="text-right"><span class="checke"></span></td>
                <td colspan="3" class="text-left px-2">No hay disponibilidad presupuestal </td>
            </tr>
            <tr>
                <td colspan="1" class="text-right"><span class="checke">X</span></td>
                <td colspan="3" class="text-left px-2">La ayuda solicitada la cubre el Seguro Popular</td>
                <td colspan="1" class="text-right"><span class="checke"></span></td>
                <td colspan="3" class="text-left px-2">Otra: _________________________________ </td>
            </tr>
            <tr>
                <td colspan="8" height="10"></td>
            </tr>
            <tr>
                <td colspan="8" class="text-left"><b>ACCION TOMADA:</b></td>
            </tr>
            <tr>
                <td colspan="1" class="text-right"><span class="checke">X</span></td>
                <td colspan="3" class="text-left px-2">Orientaci??n</td>
                <td colspan="1" class="text-right"><span class="checke"></span></td>
                <td colspan="3" class="text-left px-2">Canalizaci??n </td>
            </tr>
            <tr>
                <td colspan="1" class="text-right"><span class="checke">X</span></td>
                <td colspan="3" class="text-left px-2">Otra: _________________________________ </td>
                <td colspan="4"></td>
            </tr>
            <tr>
                <td colspan="8" height="20"></td>
            </tr>
            <tr>
                <td colspan="2" class="mx-4 px-2"><b>ENTERADO</b></td>
                <td colspan="1"></td>
                <td colspan="2" class="mx-4 px-2"><b>ATENDIDO POR:</b></td>
                <td colspan="1"></td>
                <td colspan="2" class="mx-4 px-2"><b>Vo. Bo.</b></td>
            </tr>
            <tr>
                <td colspan="8" height="20"></td>
            </tr>
            <tr>
                <td colspan="2" class="subrayar mx-4">{{$beneficiario->nombre}} {{$beneficiario->primer_ape}}</td>
                <td colspan="1"></td>
                <td colspan="2" class="subrayar mx-4">{{$beneficiario->nombre}} {{$beneficiario->primer_ape}}</td>
                <td colspan="1"></td>
                <td colspan="2" class="subrayar mx-4">{{$beneficiario->nombre}} {{$beneficiario->primer_ape}}</td>
            </tr>
            <tr>
                <td colspan="2" class="mx-4 py-0">Nombre Completo, Firma y Huella del Solicitante.</td>
                <td colspan="1"></td>
                <td colspan="2" class="mx-4 py-0">Nombre Completo y Firma</td>
                <td colspan="1"></td>
                <td colspan="2" class="mx-4 py-0">Subdirectora de la Unidad de la Beneficencia P??blica de SSM</td>
            </tr>
        </tbody>
    </table>
     <footer>
        <img src="{{$bene_logo2}}" width="140">
        <span class="nota-sm ml-1 pb-2">Calle G??mez Azc??rate No. 205 Colonia Lomas de la Selva C.P. 62270 Cuernavaca, Morelos Tel: (777) 310-0284/314-5581 / 102-2093</span>
    </footer>
</body>
</html>