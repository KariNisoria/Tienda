<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HorarioController extends Controller
{
    public function show($dia = null){
        if ($dia) {
            return ("Horarios del consultorio del dia $dia");
        } else {
            return ("Horarios del consultorio de todos los días");
        }
        
        
    }
}
