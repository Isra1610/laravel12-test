<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SumaController extends Controller
{
    public function suma(Request $request)
    {
        $num1 = $request->num1;
        $num2 = $request->num2;
        $resultado = $num1 + $num2;
        return view('suma', compact('resultado'));
    }
}
