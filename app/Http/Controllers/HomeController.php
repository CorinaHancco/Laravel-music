<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __invoke() //Este metodo se va ejecutar solo cuando tenga una sola ruta, como una vista estatica
    {
        return view('home');
    }
}
