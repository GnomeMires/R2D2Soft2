@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Agregar Detalle Trabajo</h1>
            <form method = 'get' action = '{{url("trabajomoto")}}/{{$id}}/show'>
                <button class = 'btn btn-danger'>Atras</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("detalletrabajo")}}'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="detalleTrabajo">Detalle del Trabajo*</label>
                    <input id="detalleTrabajo" name = "detalleTrabajo" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <input id="estado" name = "estado" type="hidden" class="form-control" value="0">
                </div>
                
                <div class="form-group">
                    <label for="precio">Precio*</label>
                    <input id="precio" name = "precio" type="text" class="form-control">
                </div>
                
                
                <div class="form-group">
                    <input type="hidden" name = 'trabajomoto_id' class = 'form-control' value="{{$id}}">
                </div>
                
                <button class = 'btn btn-primary' type ='submit'>Agregar Detalle</button>
            </form>
        </div>
@endsection