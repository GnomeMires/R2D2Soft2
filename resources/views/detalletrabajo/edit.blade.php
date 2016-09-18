@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Edit Detalletrabajo</h1>
            <form method = 'get' action = '{{url("trabajomoto")}}/{{$detalletrabajo->trabajomoto_id}}/show'>
                <button class = 'btn btn-danger'>Detalletrabajo Index</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("detalletrabajo")}}/{{$detalletrabajo->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="detalleTrabajo">detalleTrabajo</label>
                    <input id="detalleTrabajo" name = "detalleTrabajo" type="text" class="form-control" value="{{$detalletrabajo->detalleTrabajo}}">
                </div>
                
                <div class="form-group">
                    <label for="estado">estado</label>
                    <input id="estado" name = "estado" type="text" class="form-control" value="{{$detalletrabajo->estado}}">
                </div>
                
                <div class="form-group">
                    <label for="precio">precio</label>
                    <input id="precio" name = "precio" type="text" class="form-control" value="{{$detalletrabajo->precio}}">
                </div>


                <div class="form-group">
                    <input type="hidden" name = 'trabajomoto_id' class = 'form-control' value="{{$detalletrabajo->trabajomoto_id}}">
                </div>
                
                <button class = 'btn btn-primary' type ='submit'>Actualizar</button>
            </form>
        </div>
@endsection