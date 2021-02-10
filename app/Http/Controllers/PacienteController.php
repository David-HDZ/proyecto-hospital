<?php

namespace App\Http\Controllers;

use App\Http\Requests\PacienteFormRequest;
use App\Models\Paciente;
use Illuminate\Http\Request;

function conPun($num)
{
    if ($num == 2) {
        $num = $num - 1;
    } elseif ($num == 3) {
        $num = $num - 2;
    }
    return $num;
}

class PacienteController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('esMedico');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $pacientes = Paciente::orderBy('created_at', 'DESC')
            ->simplePaginate(10);

        return view('pacientes.index', compact('pacientes'))
            ->with('i', (request()->input('page', 1) - 1) * 10);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pacientes.crear');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PacienteFormRequest $request)
    {

        $p1 = $request->get('pregunta1');
        $p2 = $request->get('pregunta2');
        $p3 = $request->get('pregunta3');
        $p4 = $request->get('pregunta4');
        $p5 = $request->get('pregunta5');
        $p6 = $request->get('pregunta6');
        $p7 = $request->get('pregunta7');
        $tipo = "";
        $suma = $p1 + $p2 + $p3 + $p4 + $p5 + $p6 + $p7;
        $sumanaranja = conPun($p1) + conPun($p2) + conPun($p3) + conPun($p4) + conPun($p5) + conPun($p6) + conPun($p7);

        if ($p3 > 1 || $suma >= 10 || $sumanaranja > 4) {
            $tipo = "urgencias";
        } elseif ($suma <= 8 && $suma > 6 || $sumanaranja == 3 || $sumanaranja == 4) {
            $tipo = "consulta externa";
        } elseif ($sumanaranja < 3) {
            $tipo = "adios";
        }

        $paciente = new Paciente;
        $paciente->nombre = $request->get('inputNombre');
        $paciente->sexo = $request->get('inputSexo');
        $paciente->edad = $request->get('inputEdad');
        $paciente->telefono = $request->get('inputTelefono');
        $paciente->direccion = $request->get('inputDireccion');
        $paciente->tipo = $tipo;
        $paciente->save();
        return redirect()->route('pacientes.index')
            ->with('success', 'Se añadió el paciente correctamente');;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function show(Paciente $paciente)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function edit(Paciente $paciente)
    {
        return view('pacientes.editar', compact('paciente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function update(PacienteFormRequest $request, Paciente $paciente)
    {
        $paciente->nombre = $request->get('inputNombre');
        $paciente->sexo = $request->get('inputSexo');
        $paciente->edad = $request->get('inputEdad');
        $paciente->telefono = $request->get('inputTelefono');
        $paciente->direccion = $request->get('inputDireccion');
        $paciente->save();

        return redirect()->route('pacientes.index')
            ->with('success', 'Se actualizaron los datos del paciente correctamente');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Paciente  $paciente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Paciente $paciente)
    {
        $paciente->delete();
        return redirect()->route('pacientes.index')
            ->with('success', 'El paciente se eliminó de la base de datos');
    }
}
