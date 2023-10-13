<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke()
    {
        $productos = Producto::all();
        return view('welcome')->with(compact('productos'));
    }
}
