@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h1>Sistema de Inventario CDITI - Bodegas y Ambientes Internos</h1></div>

                <div class="card-body">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos distinctio rem, enim dolorem dolor libero rerum quod minus, maxime perferendis fugiat qui pariatur ratione veritatis repellat illum quisquam, quidem culpa!</h3>
                    <br>
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos distinctio rem, enim dolorem dolor libero rerum quod minus, maxime perferendis fugiat qui pariatur ratione veritatis repellat illum quisquam, quidem culpa!</h3>

                    <br>
                    <br>


                    
                    <div class="row justify-content-center" style="font-size: 20px; text-decoration: underline;">
                    <ul class="nav navbar-nav navbar-center">
                    <li>
                        <a class="nav-link" href="{{ url ('regist') }}">Crear Usuario</a>
                    </li>       
                    <li>
                        <a class="nav-link" href="{{url ('/generateC')}}">Generar Codigo de Barras</a>
                    </li>


                    </ul>
                    </div>

                   
                </div>
            </div>
            

            </div>
        </div>
    </div>
</div>
@endsection
