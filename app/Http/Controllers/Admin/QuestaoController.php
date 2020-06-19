<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class QuestaoController extends Controller
{
    public function create() {
        return view('questoes.create');
    }

    public function store(Request $request) {
        // 
    }
}
