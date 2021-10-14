@extends('layouts.app')

@section('content')

    <form class="col-5 container mt-4"  method="get" action="{{ url ('reporteI')}}">
    <div class="form-col text-center"  >
    <label for="Code">Codigo de Barras</label>
    <input name="search" class="form-control mr-sm-2" type="search" placeholder="Buscar por codigo" aria-label="Search">
    <small id="passwordHelp" class="text">
    <br>
      
    
    <button type="submit"  name="submit" class="  text-center btn btn-primary btn-block " style = " height:70px; " >Buscar</button>
    </small>
  </div>

  <br>
  <br>
  <br>

  <table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">Item</th>
      <th scope="col">Codigo</th>
      <th scope="col">Descripcion</th>
      <th scope="col">Cantidad</th>
    </tr>
  </thead>
  <tbody>
  @foreach($Elements as $element)


    <tr>
      
      <td>{{ $element->id}}</td>
      <td>{{ $element->code}}</td>
      <td>{{ $element->observation}}</td>
      <td>{{ $element->amount}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

    </form>

   
@endsection