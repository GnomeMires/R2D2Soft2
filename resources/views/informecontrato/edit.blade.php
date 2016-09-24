@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Edit Informecontrato</h1>
            <form method = 'get' action = '{{url("informecontrato")}}'>
                <button class = 'btn btn-danger'>Informecontrato Index</button>
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
            <form method = 'POST' action = '{{url("informecontrato")}}/{{$informecontrato->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                <div class="form-group">
                    <label for="destinatario">Destinatario</label>
                    <input id="destinatario" name = "destinatario" type="text" class="form-control" value="{{$informecontrato->destinatario}}">
                </div>

                <div class="form-group">
                    <label for="cargoDestinatario">Cargo Destinatario</label>
                    <input id="cargoDestinatario" name = "cargoDestinatario" type="text" class="form-control" value="{{$informecontrato->destinatarioCargo}}">
                </div>

                <div class="form-group">
                    <label for="via">Via</label>
                    <input id="via" name = "via" type="text" class="form-control" value="{{$informecontrato->via}}">
                </div>

                <div class="form-group">
                    <label for="cargoVia">Cargo Via</label>
                    <input id="cargoVia" name = "cargoVia" type="text" class="form-control" value="{{$informecontrato->viaCargo}}">
                </div>

                <div class="form-group">
                    <label for="referido">referido</label>
                    <input id="referido" name = "referido" type="text" class="form-control" value="{{$informecontrato->referido}}">
                </div>

                <div class="form-group">
                    <label for="fechaInforme">Fecha</label>
                    <input id="fechaInforme" name = "fechaInforme" type="date" class="form-control" value="{{$informecontrato->fechaInforme}}">
                </div>

                <div class="form-group">
                    <label for="descripcionReparacion">Descripcion de Reparacion</label>
                    <textarea id="descripcionReparacion" name = "descripcionReparacion" class="form-control">{{$informecontrato->descripcionReparacion}}</textarea>
                </div>

                <div class="form-group">
                    <label for="observaciones">Observaciones</label>
                    <textarea id="observaciones" name = "observaciones" class="form-control">{{$informecontrato->observaciones}}</textarea>
                </div>

                <div class="form-group">
                    <label for="sugerencias">Sugerencias</label>
                    <textarea id="sugerencias" name = "sugerencias" class="form-control">{{$informecontrato->sugerencias}}</textarea>
                </div>


                <div class="form-group">
                    <input name = 'trabajomoto_id' class = 'form-control' type="hidden" value="{{$informecontrato->id}}">
                </div>

                <button class = 'btn btn-primary' type ='submit'>Actualizar</button>
            </form>
        </div>
@endsection