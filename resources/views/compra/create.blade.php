@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Nueva Compra</h1>
            <form method = 'get' action = '{{url("compra")}}'>
                <button class = 'btn btn-danger'>Atras</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("compra")}}'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

                <div class="form-group">
                    <label>Respuesto*</label>
                    <select name = 'repuestosmoto_id' class = 'form-control'>
                        @foreach($repuestosmotos as $key => $value)
                            <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="form-group">
                    <label for="cantidad">Cantidad*</label>
                    <input id="cantidad" name = "cantidad" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="tipoCompra">Tipo</label>
                    <input id="tipoCompra" name = "tipoCompra" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="costoUnitario">Unitario (Bs.)*</label>
                    <input id="costoUnitario" name = "costoUnitario" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="fechaCompra">Fecha*</label>
                    <input id="fechaCompra" name = "fechaCompra" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="Observaciones">Observaciones</label>
                    <input id="Observaciones" name = "Observaciones" type="text" class="form-control">
                </div>
                
                
                <div class="form-group">
                    <input type="hidden" name = 'datosempresa_id' class = 'form-control' value="1">
                </div>

                
                <div class="form-group">
                    <label>Proovedor*</label>
                    <select name = 'proovedor_id' class = 'form-control'>
                        @foreach($proovedors as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                
                <button class = 'btn btn-primary' type ='submit'>Create</button>
            </form>
        </div>
@endsection