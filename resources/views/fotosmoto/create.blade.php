@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Agregar Foto</h1>
            <form method = 'get' action = '{!! URL::previous() !!}'>
                <button class = 'btn btn-danger'>Atras</button>
            </form>
            <br>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method = 'POST' action = '{{url("fotosmoto")}}' enctype="multipart/form-data">
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

                <div class="form-group">
                    <label for="direccionFoto">Ubicar Foto*</label>
                    <input id="direccionFoto" name = "direccionFoto" type="file" class="form-control" accept="image/*;capture:camera">

                </div>

                <div class="form-group">
                    <label for="descripcionEstado">Descripcion</label>
                    <input id="descripcionEstado" name = "descripcionEstado" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="fechaFoto">Fecha </label>
                    <input id="fechaFoto" name = "fechaFoto" type="date" class="form-control">
                </div>

                
                
                <div class="form-group">
                    <input type="hidden" name = 'moto_id' class = 'form-control' value="{{$id}}">
                </div>
                
                <button class = 'btn btn-primary' type ='submit'>Agregar Foto</button>
            </form>
        </div>
@endsection