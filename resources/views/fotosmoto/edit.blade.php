@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Editar Fotos Moto</h1>
            <form method = 'get' action = '{{url("fotosmoto")}}'>
                <button class = 'btn btn-danger'>Atras</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("fotosmoto")}}/{{$fotosmoto->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="descripcionEstado">Descripcion</label>
                    <input id="descripcionEstado" name = "descripcionEstado" type="text" class="form-control" value="{{$fotosmoto->descripcionEstado}}">
                </div>
                
                <div class="form-group">
                    <label for="fechaFoto">Fecha Foto</label>
                    <input id="fechaFoto" name = "fechaFoto" type="text" class="form-control" value="{{$fotosmoto->fechaFoto}}">
                </div>
                
                <div class="form-group">
                    <label for="direccionFoto">Direccion Fisica</label>
                    <input id="direccionFoto" name = "direccionFoto" type="text" class="form-control" value="{{$fotosmoto->direccionFoto}}">
                </div>
                
                
                <div class="form-group">
                    <label>Selecciona una Moto</label>
                    <select name = 'moto_id' class = "form-control">
                        @foreach($motos as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                
                <button class = 'btn btn-primary' type ='submit'>Actualizar</button>
            </form>
        </div>
@endsection
