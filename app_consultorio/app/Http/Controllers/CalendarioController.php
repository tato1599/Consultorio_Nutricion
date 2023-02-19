<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Type\VoidType;

class CalendarioController extends Controller
{
    public function cita(){

        return view('calendario');

    }
}
