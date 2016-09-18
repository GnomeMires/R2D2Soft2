@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Create Fotosmoto</h1>
            <form method = 'get' action = '{{url("fotosmoto")}}'>
                <button class = 'btn btn-danger'>Fotosmoto Index</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("fotosmoto")}}' enctype="multipart/form-data">
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="descripcionEstado">descripcionEstado</label>
                    <input id="descripcionEstado" name = "descripcionEstado" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="fechaFoto">fechaFoto</label>
                    <input id="fechaFoto" name = "fechaFoto" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="direccionFoto">Direccion Foto</label>
                    <input id="direccionFoto" name = "direccionFoto" type="file" class="form-control" accept="image/*;capture:camera">

                </div>
                
                
                <div class="form-group">
                    <label>motos Select</label>
                    <select name = 'moto_id' class = 'form-control'>
                        @foreach($motos as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                
                <button class = 'btn btn-primary' type ='submit'>Create</button>
            </form>
        </div>
@endsection