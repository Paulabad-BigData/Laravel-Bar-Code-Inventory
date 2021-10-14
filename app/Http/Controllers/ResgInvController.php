<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResgInvController extends Controller
{
    public function index(){
        return view('barras.registerInventor');
    }
}
