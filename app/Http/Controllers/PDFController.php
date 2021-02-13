<?php

namespace App\Http\Controllers;

use App\Models\Paciente;
use Illuminate\Http\Request;
use PDF;

class PDFController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('esAdmin');
    }

    public function PDF(Request $request)
    {
        set_time_limit(0);
        $pacientes = Paciente::Tipo($request->get('tipo'))
            ->Sexo($request->get('sexo'))
            ->Edad($request->get('edad'))
            ->orderBy('created_at', 'DESC')
            ->get();

        PDF::setOptions(["dpi" => 150, "defaultFont" => "sans-serif"]);

        $pdf = PDF::loadView('pdf', compact('pacientes'))->setPaper('a4', 'landscape');

        return $pdf->download('reporte_' . date('dmY_His') . '.pdf');
    }
}
