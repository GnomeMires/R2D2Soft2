@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Editar Datos Taller</h1>
            <form method = 'get' action = '{{url("datosempresa")}}'>
                <button class = 'btn btn-danger'>Lista Datos Taller</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("datosempresa")}}/{{$datosempresa->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="nombreEmpresa">Nombre Taller</label>
                    <input id="nombreEmpresa" name = "nombreEmpresa" type="text" class="form-control" value="{{$datosempresa->nombreEmpresa}}">
                </div>
                
                <div class="form-group">
                    <label for="nit">NIT</label>
                    <input id="nit" name = "nit" type="text" class="form-control" value="{{$datosempresa->nit}}">
                </div>
                
                <div class="form-group">
                    <label for="direccion">Direccion</label>
                    <input id="direccion" name = "direccion" type="text" class="form-control" value="{{$datosempresa->direccion}}">
                </div>
                
                <div class="form-group">
                    <label for="telefono">Telefono</label>
                    <input id="telefono" name = "telefono" type="text" class="form-control" value="{{$datosempresa->telefono}}">
                </div>
                
                <div class="form-group">
                    <label for="celular">Celular</label>
                    <input id="celular" name = "celular" type="text" class="form-control" value="{{$datosempresa->celular}}">
                </div>
                
                
                <button class = 'btn btn-primary' type ='submit'>Actualizar</button>
            </form>
        </div>
    @endsection
