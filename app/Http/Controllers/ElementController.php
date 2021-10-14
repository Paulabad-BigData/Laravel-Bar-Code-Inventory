<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Element;
use Illuminate\Support\Facades\DB;


class ElementController extends Controller
{
    public function index(){
        return view('barras.createElement');
    }

    public function store(Request $request){

        $fields = [
            'name' =>'required|string|max:70',
            'code' =>'required',
            'observation' =>'required|string',
        ];
        $message=[
            'name.required'=>'El nombre es requerido',
            'code.required'=>'El codigo es requerido',
            'observation.required'=>'Las observaciones son requeridas',
        
        ];
 
        $this->validate($request,$fields,$message);

        $Elementdata = request()->except('_token');
        Element::insert($Elementdata);
        return redirect('/barras')->with('message','Elemento agregado con exito');
     
    }

    public function update_element_post(Request $request){
        //        $element = Element::where('code', $request->input('code'))->first();
        
        //        $element->amount++;
        //        $element->save();
        
                Element::where('code', $request->input('code'))->increment('amount', 1);
        
                return redirect('/barras')->with('message','Elemento agregado con exito');;
             
            }
        
           // public function update2(Request $request){
              //  $Elementdata = request()->except('_token');
        
              //  Element::insert($Elementdata);
        //        Element::update('update elements set amount = amount + 1 where id = ?', $request[id]);
            //}

    
}