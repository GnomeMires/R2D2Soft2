@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Crear Informe de Entrega</h1>
            <!--<form method = 'get' action = '{{url("informeentrega")}}'>
                <button class = 'btn btn-danger'>Informeentrega Index</button>
            </form>-->
            <br>
            <form method = 'POST' action = '{{url("informeentrega")}}'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="condicionPago">Condicion de Pago</label>
                    <input id="condicionPago" name = "condicionPago" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="fechaEntrega">Fecha Entrega</label>
                    <input id="fechaEntrega" name = "fechaEntrega" type="date" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="fechaFactura">Fecha de Facturacion</label>
                    <input id="fechaFactura" name = "fechaFactura" type="date" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="noFactura">No. de Factura</label>
                    <input id="noFactura" name = "noFactura" type="text" class="form-control">
                </div>
                
                
                <div class="form-group">
                    <input type="hidden" name = 'persona_id' class = 'form-control' value="{{$personaID}}">
                </div>
                
                <div class="form-group">
                    <input type="hidden" name = 'trabajomoto_id' class = 'form-control' value="{{$trabajomotoID}}">
                </div>
                
                <button class = 'btn btn-primary' type ='submit'>Crear Informe Entrega</button>
            </form>
        </div>
    <br>
@endsection