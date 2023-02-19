<?php

namespace App\Http\Livewire;

use App\Models\Patient;
use Livewire\Component;

class PatientsTable extends Component
{
    public function render()
    {
        $consultas = Patient::all();

        

        return view('livewire.patients-table',[
            'consulta'=>$consultas
        ]);
    }
}
