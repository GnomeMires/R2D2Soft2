@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Create Detalletrabajo</h1>
            <form method = 'get' action = '{{url("trabajomoto")}}/{{$id}}/show'>
                <button class = 'btn btn-danger'>Atras</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("detalletrabajo")}}'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="detalleTrabajo">detalleTrabajo</label>
                    <input id="detalleTrabajo" name = "detalleTrabajo" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="estado">estado</label>
                    <input id="estado" name = "estado" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="precio">precio</label>
                    <input id="precio" name = "precio" type="text" class="form-control">
                </div>
                
                
                <div class="form-group">
                    <input type="hidden" name = 'trabajomoto_id' class = 'form-control' value="{{$id}}">
                </div>
                
                <button class = 'btn btn-primary' type ='submit'>Create</button>
            </form>
        </div>
@endsection