@extends('layouts.app')

@section('content')
    <div class = 'container'>
        <h1>Generar Reportes</h1>
        <br>
        <form method = 'POST' action = '{{url("repuestosmoto")}}'>
            <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

            <div class="form-group">
                <label for="fechaInicio">Fecha Inicio: </label>
                <input id="fechaInicio" name = "fechaInicio" type="date" class="form-control">
            </div>

            <div class="form-group">
                <label for="fechaFin">Fecha Fin: </label>
                <input id="fechaFin" name = "fechaFin" type="date" class="form-control">
            </div>
            <input type="submit" class = 'btn btn-primary' value="General">
            <input type="submit" class = 'btn btn-primary' value="Especifico">
        </form>
    </div>
@endsection