@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Create Moto</h1>
            <form method = 'get' action = '{{url("moto")}}'>
                <button class = 'btn btn-danger'>Moto Index</button>
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
            <form method = 'POST' action = '{{url("moto")}}'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="noChasis">No. Chasis</label>
                    <input id="noChasis" name = "noChasis" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="noMotor">No. Motor</label>
                    <input id="noMotor" name = "noMotor" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="placaControl">Placa de Control</label>
                    <input id="placaControl" name = "placaControl" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="color">Color</label>
                    <input id="color" name = "color" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="marca">Marca</label>
                    <input id="marca" name = "marca" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="detalles">Detalles</label>
                    <input id="detalles" name = "detalles" type="text" class="form-control">
                </div>


                <div class="form-group">
                    <label>Selecciona el Propietario</label>
                        <select name = 'persona_id' class = 'form-control'>
                            @foreach($personas as $key => $value)
                            <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select>
                </div>
                
                <button class = 'btn btn-primary' type ='submit'>Crear Moto</button>
            </form>
        </div>
@endsection