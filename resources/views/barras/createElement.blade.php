@extends('layouts.app')

@section('content')
<div class="container col-6" style="margin-top: 1%; font-family: 'Lato', sans-serif;">

<form method="post" action="{{url ('/barras')}}" enctype="multipart/form-data">
    @csrf

    <div class="form-row">

        <div class="col">
            <label><b>Nombre de Elemento</b></label>
            <input type="text" name="name" style="height: 50px;" class="form-control" value="{{isset($inventory->code)?$inventory->code:old('code')}}" placeholder="Descripción" id="name">
        </div>
        <div class="col">
            <label><b>Tipo de Elemento</b></label>
            <select class="form-control" style="height: 50px;" name="type">

                <option>Devolutivo</option>

                <option>Consumo</option>

            </select>
        </div>

    </div>
    <div class="mt-5 form-row">

        <div class="col-6">
            <label><b>Código de Barras</b></label>
            <input type="text" name="code" style="height: 50px;" class="form-control" placeholder="Descripción">
        </div>

    </div>
    <div class=" mt-5 form-row">

        <div class="col">
            <label><b>Observaciones</b></label>
            <textarea name="observation" style="height: 80px;" class="form-control"></textarea>
        </div>

    </div>

    <button type="submit" class="mt-4 btn btn-primary btn-block" style="height: 50px;">Guardar</button>

</form>

</div>

@if(Session::has('message'))
<div class="container col-6" style="margin-top: 1%; font-family: 'Lato', sans-serif;">

<div class="alert alert-success alert-dismissible" role="alert">

    {{Session::get('message')}}


    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
    </button>
</div>
</div>
@endif

@if(count($errors)>0)
<div class="container col-6" style="margin-top: 1%; font-family: 'Lato', sans-serif;">

<div class="alert alert-danger ml-3 mr-3" role="alert">
    <ul>
        @foreach ($errors->all() as $error)

        <li>{{$error}}</li>

        @endforeach
    </ul>
</div>
</div>
@endif

@endsection