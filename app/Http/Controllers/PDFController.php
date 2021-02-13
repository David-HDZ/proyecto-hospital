<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PDFController extends Controller
{
    public function PDF(){
        $pdf = \PDF::loadView('registros.index');
        return $pdf->download('reporte.pdf');
    }
}
