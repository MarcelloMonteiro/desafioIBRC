<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cadastroController extends Controller
{
    public function index(Request $request){
        // $alternative = $request->get('alternative');
        // dd($alternative);
        return view("cadastro");
    }
}