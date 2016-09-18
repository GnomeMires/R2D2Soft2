@extends('layouts.app')

@section('content')
    <div class = 'container'>
            <h1>Create Persona</h1>
            <form method = 'get' action = '{{url("persona")}}'>
                <button class = 'btn btn-danger'>Persona Index</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("persona")}}'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="nombreCompleto">nombreCompleto</label>
                    <input id="nombreCompleto" name = "nombreCompleto" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="nitCI">nitCI</label>
                    <input id="nitCI" name = "nitCI" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="direccion">direccion</label>
                    <input id="direccion" name = "direccion" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="Telefono">Telefono</label>
                    <input id="Telefono" name = "Telefono" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="Celular">Celular</label>
                    <input id="Celular" name = "Celular" type="text" class="form-control">
                </div>
                
                
                <button class = 'btn btn-primary' type ='submit'>Create</button>
            </form>
        </div>
@endsection
