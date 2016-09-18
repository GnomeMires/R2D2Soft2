@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Create Moto</h1>
            <form method = 'get' action = '{{url("moto")}}'>
                <button class = 'btn btn-danger'>Moto Index</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("moto")}}'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="noChasis">noChasis</label>
                    <input id="noChasis" name = "noChasis" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="noMotor">noMotor</label>
                    <input id="noMotor" name = "noMotor" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="placaControl">placaControl</label>
                    <input id="placaControl" name = "placaControl" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="color">color</label>
                    <input id="color" name = "color" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="marca">marca</label>
                    <input id="marca" name = "marca" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="detalles">detalles</label>
                    <input id="detalles" name = "detalles" type="text" class="form-control">
                </div>


                <div class="form-group">
                    <label>personas Select</label>
                        <select name = 'persona_id' class = 'form-control'>
                            @foreach($personas as $key => $value)
                            <option value="{{$key}}">{{$value}}</option>
                            @endforeach
                        </select>
                </div>
                
                <button class = 'btn btn-primary' type ='submit'>Create</button>
            </form>
        </div>
@endsection