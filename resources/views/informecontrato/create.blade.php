@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>CREAR INFORME</h1>
            <form method = 'get' action = '{{url("trabajomoto")}}/{{$id}}/show'>
                <button class = 'btn btn-danger'>Atras</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("informecontrato")}}'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="destinatario">Destinatario</label>
                    <input id="destinatario" name = "destinatario" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="cargoDestinatario">Cargo Destinatario</label>
                    <input id="cargoDestinatario" name = "cargoDestinatario" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="via">Via</label>
                    <input id="via" name = "via" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="cargoVia">Cargo Via</label>
                    <input id="cargoVia" name = "cargoVia" type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="referido">referido</label>
                    <input id="referido" name = "referido" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="fechaInforme">fechaInforme</label>
                    <input id="fechaInforme" name = "fechaInforme" type="date" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="descripcionReparacion">descripcionReparacion</label>
                    <textarea id="descripcionReparacion" name = "descripcionReparacion" class="form-control"></textarea>
                </div>
                
                <div class="form-group">
                    <label for="sugerencias">sugerencias</label>
                    <textarea id="sugerencias" name = "sugerencias" class="form-control"></textarea>
                </div>


                <div class="form-group">

                    <input name = 'trabajomoto_id' class = 'form-control' type="hidden" value="{{$id}}">
                </div>
                
                <button class = 'btn btn-primary' type ='submit'>Crear Informe</button>
            </form>
        </div>
@endsection