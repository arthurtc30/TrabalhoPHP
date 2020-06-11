<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloWorldController extends Controller
{
    public function index($text) {
        return view('hello.index', compact('text'));
    }

    public function digaOi() {
        $text = 'Oi!';

        return view('hello.index', compact('text'));
    }
}
