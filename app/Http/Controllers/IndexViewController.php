<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexViewController extends Controller
{
    public function index() {
        return view('trabalho.index', compact('text'));
    }

    public function criarTeste() {
        return view('trabalho.criarTeste', compact('text'));
    }
}
