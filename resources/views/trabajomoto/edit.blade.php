@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Edit Trabajomoto</h1>
            <form method = 'get' action = '{{url("trabajomoto")}}'>
                <button class = 'btn btn-danger'>Atras</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("trabajomoto")}}/{{$trabajomoto->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="fechaRecepcion">Fecha de Recepcion</label>
                    <input id="fechaRecepcion" name = "fechaRecepcion" type="text" class="form-control" value="{{$trabajomoto->fechaRecepcion}}">
                </div>
                
                <div class="form-group">
                    <label for="fechaEntrega">Fecha de Entrega</label>
                    <input id="fechaEntrega" name = "fechaEntrega" type="text" class="form-control" value="{{$trabajomoto->fechaEntrega}}">
                </div>
                
                <div class="form-group">
                    <label for="costoTotal">Costo Total</label>
                    <input id="costoTotal" name = "costoTotal" type="text" class="form-control" value="{{$trabajomoto->costoTotal}}">
                </div>
                
                <div class="form-group">
                    <label for="estado">Estado</label>
                    <input id="estado" name = "estado" type="text" class="form-control" value="{{$trabajomoto->estado}}">
                </div>
                
                <div class="form-group">
                    <label for="descripcion">Descripcion</label>
                    <input id="descripcion" name = "descripcion" type="text" class="form-control" value="{{$trabajomoto->descripcion}}">
                </div>
                
                
                <div class="form-group">
                    <label>Seleccione una Moto</label>
                    <select name = 'moto_id' class = "form-control">
                        @foreach($motos as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label>Seleccione un Usuario</label>
                    <select name = 'user_id' class = "form-control">
                        @foreach($users as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                
                <button class = 'btn btn-primary' type ='submit'>Update</button>
            </form>
        </div>
@endsection