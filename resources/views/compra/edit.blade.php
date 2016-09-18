@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Edit Compra</h1>
            <form method = 'get' action = '{{url("compra")}}'>
                <button class = 'btn btn-danger'>Compra Index</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("compra")}}/{{$compra->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="cantidad">cantidad</label>
                    <input id="cantidad" name = "cantidad" type="text" class="form-control" value="{{$compra->cantidad}}">
                </div>
                
                <div class="form-group">
                    <label for="tipoCompra">tipoCompra</label>
                    <input id="tipoCompra" name = "tipoCompra" type="text" class="form-control" value="{{$compra->tipoCompra}}">
                </div>
                
                <div class="form-group">
                    <label for="costoTotal">costoTotal</label>
                    <input id="costoTotal" name = "costoTotal" type="text" class="form-control" value="{{$compra->costoTotal}}">
                </div>
                
                <div class="form-group">
                    <label for="costoUnitario">costoUnitario</label>
                    <input id="costoUnitario" name = "costoUnitario" type="text" class="form-control" value="{{$compra->costoUnitario}}">
                </div>
                
                <div class="form-group">
                    <label for="fechaCompra">fechaCompra</label>
                    <input id="fechaCompra" name = "fechaCompra" type="text" class="form-control" value="{{$compra->fechaCompra}}">
                </div>
                
                <div class="form-group">
                    <label for="Observaciones">Observaciones</label>
                    <input id="Observaciones" name = "Observaciones" type="text" class="form-control" value="{{$compra->Observaciones}}">
                </div>
                
                
                <div class="form-group">
                    <label>datosempresas Select</label>
                    <select name = 'datosempresa_id' class = "form-control">
                        @foreach($datosempresas as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label>repuestosmotos Select</label>
                    <select name = 'repuestosmoto_id' class = "form-control">
                        @foreach($repuestosmotos as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label>proovedors Select</label>
                    <select name = 'proovedor_id' class = "form-control">
                        @foreach($proovedors as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                
                <button class = 'btn btn-primary' type ='submit'>Update</button>
            </form>
        </div>
 @endsection