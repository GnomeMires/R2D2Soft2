@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Editar Proovedor</h1>
            <form method = 'get' action = '{{url("proovedor")}}'>
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
            <form method = 'POST' action = '{{url("proovedor")}}/{{$proovedor->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="nombreProovedor">Nombre Proovedor</label>
                    <input id="nombreProovedor" name = "nombreProovedor" type="text" class="form-control" value="{{$proovedor->nombreProovedor}}">
                </div>
                
                <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input id="direccion" name = "direccion" type="text" class="form-control" value="{{$proovedor->direccion}}">
                </div>
                
                <div class="form-group">
                    <label for="ubicacion">Ubicacion</label>
                    <input id="ubicacion" name = "ubicacion" type="text" class="form-control" value="{{$proovedor->ubicacion}}">
                </div>
                
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input id="telefono" name = "telefono" type="text" class="form-control" value="{{$proovedor->telefono}}">
                </div>
                
                <div class="form-group">
                    <label for="correo">Correo</label>
                    <input id="correo" name = "correo" type="text" class="form-control" value="{{$proovedor->correo}}">
                </div>
                
                
                <button class = 'btn btn-primary' type ='submit'>Actualizar</button>
            </form>
        </div>
@endsection