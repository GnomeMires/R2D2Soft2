@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Create Datosempresa</h1>
            <form method = 'get' action = '{{url("datosempresa")}}'>
                <button class = 'btn btn-danger'>Datosempresa Index</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("datosempresa")}}'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="nombreEmpresa">nombreEmpresa</label>
                    <input id="nombreEmpresa" name = "nombreEmpresa" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="nit">nit</label>
                    <input id="nit" name = "nit" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="direccion">direccion</label>
                    <input id="direccion" name = "direccion" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="telefono">telefono</label>
                    <input id="telefono" name = "telefono" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="celular">celular</label>
                    <input id="celular" name = "celular" type="text" class="form-control">
                </div>
                
                
                <button class = 'btn btn-primary' type ='submit'>Create</button>
            </form>
        </div>
@endsection
