<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\cp;
use App\Models\municipio;
use App\Models\localidade;
use App\Models\beneficiario;
use App\Models\cat_nacionalidade;
use App\Models\domicilio;
use App\Models\economia;
use App\Models\familia;
use App\Models\documentos;
use App\Models\responsable;

class SolicitudesController extends Controller
{
     public function cargar_cp(){
        $cps=cp::where('entidad_id',17)->get();
        $selectubicacions[0] = array(
            'id' => '0',
            'value' => '0',
            'text' => 'Seleccione un código postal',
        );
        $i=1;
        foreach ($cps->unique('cod_postal') as $cp) {
            $selectubicacions[$i] = array(
                'id' => $cp->id,
                'value' => $cp->id,
                'text' => $cp->cod_postal,
            );
            $i++;
        }
        return response()->json($selectubicacions);
    }
    public function cambiar_cp(Request $request){
        $info=$request->all();
        $muni = $info["mun"];
        $municipio = municipio::where('id',$muni)->get()->first();
        $cps = cp::where('entidad_id',17)->where('municipio_id',$municipio->clave)->get();
        $selectubicacions[0] = array(
            'id' => '0',
            'value' => '0',
            'text' => 'Seleccione un código postal',
        );
        $i=1;
        foreach ($cps->unique('cod_postal') as $cp) {
            $selectubicacions[$i] = array(
                'id' => $cp->id,
                'value' => $cp->id,
                'text' => $cp->cod_postal,
            );
            $i++;
        }
        return response()->json($selectubicacions);
    }
    public function cargar_localidad(Request $request){
        $info=$request->all();
        $muni = $info["mun"];
        $municipio = municipio::where('id',$muni)->get()->first();
        $localidades = localidade::where('entidad_id',17)->where('municipio_id',$municipio->clave)->get();
        $selectubicacions[0] = array(
            'id' => '0',
            'value' => '0',
            'text' => 'Selecciona una localidad',
        );
        $i=1;
        foreach ($localidades->unique('nombre') as $localidad) {
            $selectubicacions[$i] = array(
                'id' => $localidad->id,
                'value' => $localidad->id,
                'text' => $localidad->nombre,
            );
            $i++;
        }
        return response()->json($selectubicacions);
    }

    public function create(){
        $municipios = municipio::where('entidad_id',17)->pluck('nombre','id');
        $localidades  = localidade::where('entidad_id',17)->pluck('nombre','id');
        $nacionalidades = cat_nacionalidade::all()->pluck('nacionalidad','id');
        return view('solicitudes.create',compact('municipios','localidades','nacionalidades'));
    }
    public function store(Request $request){
        $beneficiario = new beneficiario();
        $domicilio = new domicilio();
        $economia = new economia();
        $familia = new familia();

        $beneficiario->nombre =ucfirst(strtolower($request->nombe));
        $beneficiario->primer_ape = ucfirst(strtolower($request->primerape));
        $beneficiario->segundo_ape = ucfirst(strtolower($request->segundoape));
        $beneficiario->telefono = $request->tel;
        $beneficiario->calle = $request->calle;
        $beneficiario->sexo = $request->sexo;
        $beneficiario->fec_nac = $request->fec_nac;
        $beneficiario->curp = $request->curp;
        $beneficiario->estado_civil = $request->est_civ;
        $beneficiario->escolaridad = $request->escolaridad;
        $beneficiario->ocupación = $request->ocupacion;
        $beneficiario->ingresos = $request->ingreso;
        $beneficiario->correo = $request->correo;
        $beneficiario->id_nacionalidad = $request->nacionalidades;
        $beneficiario->religion = $request->religion;
        $beneficiario->etnia = $request->etnia;
        $beneficiario->derechoambiencia  = $request->der_amb;
        $beneficiario->id_ocupacion = $request->grup_ocu;
        $beneficiario->save();

        $serv1 = implode(',', $request->servis1);
        $serv2 = implode(',', $request->servis2);
        $fam = explode('|', $request->constitucion_fam[0]);
        array_pop($fam);

        $domicilio->cp = $request->cod_pos;
        $domicilio->municipio = $request->mun;
        $domicilio->colonia = $request->loca;
        $domicilio->num_int = $request->num;
        $domicilio->calle = $request->calle;
        $domicilio->num_ext = $request->num_ext;
        $domicilio->zona = $request->zona;
        $domicilio->tipo_viv = $request->tipo_vi;
        $domicilio->regimen = $request->regimen;
        $domicilio->serv_pub = $serv1;
        $domicilio->serv_viv = $serv2;
        $domicilio->total_espa = ($request->sala + $request ->comedor + $request->recamara + $request->cocina + $request->banio + $request->otros);
        $domicilio->sala = $request->sala;
        $domicilio->comedor = $request ->comedor;
        $domicilio->recamara = $request->recamara;
        $domicilio->cocina = $request->cocina;
        $domicilio->banio = $request->banio;
        $domicilio->otro_espa = $request->otros;
        $domicilio->paredes = $request->paredes;
        $domicilio->techo = $request->techo;
        $domicilio->piso = $request->piso;
        $domicilio->referencia = $request->referencia;
        $domicilio->recado = $request->recado;
        $domicilio->material = $request->materiales;
        $domicilio->num_dormitorio = $request->tot_dor;
        $domicilio->per_dormitorio = $request->per_dor;
        $domicilio->id_beneficiario = $beneficiario->id;
        $domicilio->save();

        $economia->alimentacion = $request->ali;
        $economia->salud = $request->salud;
        $economia->luz = $request->luz_gasto;
        $economia->agua = $request->agua_gasto;
        $economia->telefono = $request->tel_gasto;
        $economia->gas = $request->gas_gasto;
        $economia->gasolina = $request->gaso_gasto;
        $economia->ropa = $request->vestimenta;
        $economia->vivienda = $request->vivienda;
        $economia->educacion = $request->educacion;
        $economia->servicios = $request->serv_pub;
        $economia->transporte = $request->transporte;
        $economia->renta = $request->vivienda2;
        $economia->otro = $request->vivienda;
        $economia->ingresos = '100';
        $economia->id_beneficiario = $beneficiario->id;
        $economia->save();

        foreach ($fam as $key => $value) {
            $fam_array = explode(',', $value);
            $familiar = explode(',', $value);
            $familia->nombre = $fam_array[0];
            $familia->edad = $fam_array[1];
            $familia->parentesco = $fam_array[2];
            $familia->ocupacion = $fam_array[3];
            $familia->ingreso = $fam_array[4];
            $familia->escolaridad = $fam_array[5];
            $familia->id_beneficiario = $beneficiario->id;
            $familia->save();
        }
        $documento = new documentos();
        $extensioncurp = $request->curp_doc->getClientOriginalExtension();
        $documento->nombre = 'curp_'.$beneficiario->id.'.'.$extensioncurp;
        $documento->id_beneficiario = $beneficiario->id;
        $documento->url = '/beneficencia/CURP/archivos';
        $documento->url_edit = '/CURP/archivos';
        $documento->tipo = 1;
        $documento->save();
        $request->curp_doc->move('archivos/CURP', $documento->nombre);

        $documento = new documentos();
        $extensiondictamen = $request->curp_doc->getClientOriginalExtension();
        $documento->nombre = 'dictamen'.$beneficiario->id.'.'.$extensiondictamen;
        $documento->id_beneficiario = $beneficiario->id;
        $documento->url = '/beneficencia/dictamen/archivos';
        $documento->url_edit = '/dictamen/archivos';
        $documento->tipo = 1;
        $documento->save();
        $request->dictamen->move('archivos/dictamen', $documento->nombre);

        $documento = new documentos();
        $extensioncredencial = $request->credencial->getClientOriginalExtension();
        $documento->nombre = 'credencial'.$beneficiario->id.'.'.$extensioncredencial;
        $documento->id_beneficiario = $beneficiario->id;
        $documento->url = '/beneficencia/credencial/archivos';
        $documento->url_edit = '/credencial/archivos';
        $documento->tipo = 1;
        $documento->save();
        $request->credencial->move('archivos/credencial', $documento->nombre);

        $documento = new documentos();
        $extensioncomprobante = $request->comprobante->getClientOriginalExtension();
        $documento->nombre = 'comprobante'.$beneficiario->id.'.'.$extensioncomprobante;
        $documento->id_beneficiario = $beneficiario->id;
        $documento->url = '/beneficencia/comprobante/archivos';
        $documento->url_edit = '/comprobante/archivos';
        $documento->tipo = 1;
        $documento->save();
        $request->comprobante->move('archivos/comprobante', $documento->nombre);

        $documento = new documentos();
        $extensionpoliza = $request->poliza->getClientOriginalExtension();
        $documento->nombre = 'poliza'.$beneficiario->id.'.'.$extensionpoliza;
        $documento->id_beneficiario = $beneficiario->id;
        $documento->url = '/beneficencia/poliza/archivos';
        $documento->url_edit = '/poliza/archivos';
        $documento->tipo = 1;
        $documento->save();
        $request->poliza->move('archivos/poliza', $documento->nombre);

        if($request->nombre2!=null){
            $responsable = new responsable();
        $responsable->nombre = $request->nombre2;
        $responsable->primer_ape = $request->primerape2;
        $responsable->segundo_ape = $request->segundoape2;
        $responsable->parentesco = $request->parentesco_res;
        $responsable->cp = $request->cod_posres;
        $responsable->num_int = $request->num_res;
        $responsable->num_ext = $request->num_extres;
        $responsable->referencias = $request->ref_res;
        $responsable->calle = $request->calle_res;
        $responsable->col = $request->loca_res;
        $responsable->mun = $request->mun_res;
        $responsable->telefono = $request->telefono;
        $responsable->id_beneficiario = $beneficiario->id;
        $responsable->save(); 
        }
        
        return back()->with('ok', 'ok');
    }
}
