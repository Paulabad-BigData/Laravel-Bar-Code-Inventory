<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Element;


class RepInvController extends Controller
{
    public function index(){
        return view('barras.reporteinventario');
    }

    public function search(Request $request){
        $code = $request->get('search');

        $Elements = Element::where('code',"$code")->paginate(5);
        
        return view('barras.reporteinventario', compact('Elements'));
    }

    /*
    public function list(){
        $datos['elements']=Element::paginate(5);
        return view('barras.reporteinventario',$datos);
    }
    */
    
}
