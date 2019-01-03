<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $array = array('saludo' => 'hola...');
        return response()->json($array, 201);
    }
}
