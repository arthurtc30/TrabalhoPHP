<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class RecadoController extends Controller
{
    public function create() {
        return view('recados.create');
    }

    public function store(Request $request) {
        // dd($request);

        if (empty($request->nome) | empty($request->cidade) | empty($request->recado) || empty($request->email)) {
            return back()->withInput();
        }
    }
}
