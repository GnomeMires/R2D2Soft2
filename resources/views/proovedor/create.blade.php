@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Create Proovedor</h1>
            <form method = 'get' action = '{{url("proovedor")}}'>
                <button class = 'btn btn-danger'>Proovedor Index</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("proovedor")}}'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="nombreProovedor">nombreProovedor</label>
                    <input id="nombreProovedor" name = "nombreProovedor" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="direccion">direccion</label>
                    <input id="direccion" name = "direccion" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="ubicacion">ubicacion</label>
                    <input id="ubicacion" name = "ubicacion" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="telefono">telefono</label>
                    <input id="telefono" name = "telefono" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="correo">correo</label>
                    <input id="correo" name = "correo" type="text" class="form-control">
                </div>
                
                
                <button class = 'btn btn-primary' type ='submit'>Create</button>
            </form>
        </div>
@endsection