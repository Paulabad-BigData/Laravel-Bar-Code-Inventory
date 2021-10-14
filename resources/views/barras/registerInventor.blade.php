@extends('layouts.app')

@section('content')

<form action="{{url ('/update_element_post')}} " method="POST">
    @csrf
      <div class=" form-row" style = "align-items: center; justify-content: center;">
        <div class="ml-5   alert alert-success" role="alert" style = "width: 800px;  height:70px;">
          <i class="fas fa-bell"></i>  Success register!
        </div>
        
        <div class="ml-5  alert alert-danger" role="alert" style = " width: 800px; height:70px; "  >
          <i class="fas fa-bell-slash"></i>  Error!
        </div>
      </div>

      <div class="form-col">
        <label for="Code">Codigo De Barras</label>
        <input type="text" name="code" id="code" class="form-control" style = "height:50px;" >
        <small id="pass" class="text">
        <br>
        <br>
        <br>
        
        <input type="submit"  class="  text-center btn btn-primary btn-block " style = " height:70px; " value="Register" >
        </small>
      </div>
    </form>

@endsection