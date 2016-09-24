@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Editar Cliente</h1>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method = 'get' action = '{{url("persona")}}'>
                <button class = 'btn btn-danger'>Atras</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("persona")}}/{{$persona->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="nombreCompleto">Nombre Completo</label>
                    <input id="nombreCompleto" name = "nombreCompleto" type="text" class="form-control" value="{{$persona->nombreCompleto}}">
                </div>
                
                <div class="form-group">
                    <label for="nitCI">NIT/CI</label>
                    <input id="nitCI" name = "nitCI" type="text" class="form-control" value="{{$persona->nitCI}}">
                </div>
                
                <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input id="direccion" name = "direccion" type="text" class="form-control" value="{{$persona->direccion}}">
                </div>
                
                <div class="form-group">
                    <label for="Telefono">Telefono</label>
                    <input id="Telefono" name = "Telefono" type="text" class="form-control" value="{{$persona->Telefono}}">
                </div>
                
                <div class="form-group">
                    <label for="Celular">Celular</label>
                    <input id="Celular" name = "Celular" type="text" class="form-control" value="{{$persona->Celular}}">
                </div>
                
                
                <button class = 'btn btn-primary' type ='submit'>Actualizar</button>
            </form>
        </div>
@endsection
