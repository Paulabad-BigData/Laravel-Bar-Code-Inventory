<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Element;
//use App\Models\GenBar;
//use \Milon\Barcode\DNS1D;


class GenBarController extends Controller
{
    public function index(){
        return view('barras.generateBarCode');
    }

    public function show(Request $request){
        $code = request()->except('_token');
        return redirect('/generateC')->with($code);

    }

    /*
    public function generateBarcode()
    {
        $barcode = GenBar::where('code', '=', Request::get('code'))->first();
        if($barcode === null){
    return redirect()->back();
        }
        else {
            return view('generateshow',compact('generateBarCode'));
        }
    }
    */



}
