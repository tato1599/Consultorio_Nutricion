<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Auth\Events\Validated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class patientController extends Controller
{
    public function consultar(){

        $patient = new Patient();

        $consulta = "SELECT * FROM Patients ";

        $guardar = $patient->query($consulta);

        return view('pacientes',['Patients'=>$consulta]);

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
        $new->Apellido_Paterno = $request->input('ApellidoPaterno');
        $new->Apellido_Materno = $request->input('ApellidoMaterno');
        $new->Fecha_de_nacimiento = $request->input('Nacimiento');
        $new->save();

        return to_route('nuevo');
    }

}
