@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Editar Datos Moto</h1>
            <form method = 'get' action = '{{url("moto")}}'>
                <button class = 'btn btn-danger'>Atras</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("moto")}}/{{$moto->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="noChasis">No. Chasis</label>
                    <input id="noChasis" name = "noChasis" type="text" class="form-control" value="{{$moto->noChasis}}">
                </div>
                
                <div class="form-group">
                    <label for="noMotor">No. Motor</label>
                    <input id="noMotor" name = "noMotor" type="text" class="form-control" value="{{$moto->noMotor}}">
                </div>
                
                <div class="form-group">
                    <label for="placaControl">Placa de Control</label>
                    <input id="placaControl" name = "placaControl" type="text" class="form-control" value="{{$moto->placaControl}}">
                </div>
                
                <div class="form-group">
                    <label for="color">Color</label>
                    <input id="color" name = "color" type="text" class="form-control" value="{{$moto->color}}">
                </div>
                
                <div class="form-group">
                    <label for="marca">marca</label>
                    <input id="marca" name = "marca" type="text" class="form-control" value="{{$moto->marca}}">
                </div>
                
                <div class="form-group">
                    <label for="detalles">Detalles</label>
                    <input id="detalles" name = "detalles" type="text" class="form-control" value="{{$moto->detalles}}">
                </div>
                
                
                <div class="form-group">
                    <label>Dueño: </label>
                    <select name = 'persona_id' class = "form-control">
                        @foreach($personas as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                
                <button class = 'btn btn-primary' type ='submit'>Actualizar</button>
            </form>
        </div>
@endsection
