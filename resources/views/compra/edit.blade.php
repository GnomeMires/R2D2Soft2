@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Editar Compra</h1>
            <form method = 'get' action = '{{url("compra")}}'>
                <button class = 'btn btn-danger'>Atrar</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("compra")}}/{{$compra->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

                <div class="form-group">
                    <label>Selecciona un repuesto*</label>
                    <select name = 'repuestosmoto_id' class = "form-control">
                        @foreach($repuestosmotos as $key => $value)
                            <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="cantidad">Cantidad*</label>
                    <input id="cantidad" name = "cantidad" type="text" class="form-control" value="{{$compra->cantidad}}">
                </div>

                <div class="form-group">
                    <label for="tipoCompra">Tipo Compra</label>
                    <input id="tipoCompra" name = "tipoCompra" type="text" class="form-control" value="{{$compra->tipoCompra}}">
                </div>
                
                <div class="form-group">
                    <label for="costoUnitario">Costo Unitario*</label>
                    <input id="costoUnitario" name = "costoUnitario" type="text" class="form-control" value="{{$compra->costoUnitario}}">
                </div>
                
                <div class="form-group">
                    <label for="fechaCompra">Fecha Compra</label>
                    <input id="fechaCompra" name = "fechaCompra" type="text" class="form-control" value="{{$compra->fechaCompra}}">
                </div>
                
                <div class="form-group">
                    <label for="Observaciones">Observaciones</label>
                    <input id="Observaciones" name = "Observaciones" type="text" class="form-control" value="{{$compra->Observaciones}}">
                </div>
                
                
                <div class="form-group">
                    <input type="hidden" name = 'datosempresa_id' class = "form-control" value="1">
                </div>

                
                <div class="form-group">
                    <label>Selecciona un Proovedor*</label>
                    <select name = 'proovedor_id' class = "form-control">
                        @foreach($proovedors as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                
                <button class = 'btn btn-primary' type ='submit'>Actualizar</button>
            </form>
        </div>
 @endsection