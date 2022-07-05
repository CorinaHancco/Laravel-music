<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimalController extends Controller
{
    public function index(){
        return 'Lista de Animales';
    }
    public function create(){
        return 'Crear animal';
    }
    public function show($animal){
        return "El animal es: $animal";
    }
}
