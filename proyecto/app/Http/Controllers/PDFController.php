<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\beneficiario;
use App\Models\domicilio;
use App\Models\solicitudes;
use App\Models\familia;
use App\Models\economia;
use PDF;

class PDFController extends Controller
{
    public function createPDF(beneficiario $beneficiario){
        $path = 'image/banner.jpg';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $bene_logo = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $path = 'image/banner-sria.png';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $bene_logo2 = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $path = 'image/fotter.jpg';
        $type = pathinfo($path, PATHINFO_EXTENSION);
        $data = file_get_contents($path);
        $bene_fot = 'data:image/' . $type . ';base64,' . base64_encode($data);
        $domicilio = domicilio::Where('id_beneficiario',$beneficiario->id)->get()->last();
        $familias = familia::Where('id_beneficiario',$beneficiario->id)->get();
        $economia = economia::Where('id_beneficiario',$beneficiario->id)->get()->last();
        $pdf = PDF::loadView('documentos/expediete_federal', compact('bene_logo','bene_logo2','domicilio','beneficiario','bene_fot','familias','economia'));
        return $pdf->stream('pdf_file.pdf');
    }
    
}
