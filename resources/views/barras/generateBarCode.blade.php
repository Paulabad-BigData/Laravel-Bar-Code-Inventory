@extends('layouts.app')

@section('content')


  

<div class="container col-5" style="margin-top: 2%; font-family: 'Lato', sans-serif;">
    <form action="{{url ('/generateC/generatec')}}" method="GET">
    @csrf
      <div class="form-row">
        <div class="col">
          <label><b>Ingresa codigo</b></label>
          <input type="text" name="code" class="form-control" style="height: 50px;">
        </div>
      </div>
      <button type="submit" class="btn btn-primary btn-block" style="height: 50px;margin-top:3%;">Generar</button>
    </form>

    <div class="container" style="margin-top: 20%">

      @if(Session::has('code'))

      <center><h5>Codigo Generado</h5></center>

     <center><div class="mt-4" >{!! DNS1D::getBarcodeHTML(Session::get('code'),'C39',2,60) !!}</div></center>
     <center><button class="btn btn-primary mt-3" style="width: 60%; height: 50px;">Imprimir</button></center>
     
      @endif

    </div>
  </div>
    
@endsection