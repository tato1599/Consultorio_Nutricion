<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class patientController extends Controller
{
    public function consultar(){

        
        $consultas = Patient::all();

        return view('pacientes',['consulta'=>$consultas]);

    }

    public function crear(){

        return view('nuevoPaciente');
    }

    public function guardar(Request $request){

        $request->validate([
            'Nombre'=>['required'],
            'Apellido_Paterno'=>['required'],
            'Apellido_Materno'=>['required'],
            'Fecha_de_nacimiento'=>['required']
        ]);

        $new = new Patient();

        $new->Nombre = $request->input('Nombre');
        $new->Apellido_Paterno = $request->input('Apellido_Paterno');
        $new->Apellido_Materno = $request->input('Apellido_Materno');
        $new->Edad = $request->input('Edad');
        $new->Fecha_de_nacimiento = $request->input('Fecha_de_nacimiento');
        $new->Peso = $request->input('Peso');
        $new->Estatura = $request->input('Estatura');
        $new->Telefono = $request->input('Telefono');
        $new->Correo_Electronico = $request->input('Correo_Electronico');
        $new->Antecedentes = $request->input('Antecedentes');
        $new->Antecedentes_Familiares = $request->input('Antecedentes_Familiares');
        $new->save();

        return to_route('nuevo');
    }

}
