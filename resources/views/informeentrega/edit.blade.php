@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Edit Informeentrega</h1>
            <form method = 'get' action = '{{url("informeentrega")}}'>
                <button class = 'btn btn-danger'>Informeentrega Index</button>
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
            <form method = 'POST' action = '{{url("informeentrega")}}/{{$informeentrega->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="condicionPago">condicionPago</label>
                    <input id="condicionPago" name = "condicionPago" type="text" class="form-control" value="{{$informeentrega->condicionPago}}">
                </div>
                
                <div class="form-group">
                    <label for="fechaEntrega">fechaEntrega</label>
                    <input id="fechaEntrega" name = "fechaEntrega" type="text" class="form-control" value="{{$informeentrega->fechaEntrega}}">
                </div>
                
                <div class="form-group">
                    <label for="fechaFactura">fechaFactura</label>
                    <input id="fechaFactura" name = "fechaFactura" type="text" class="form-control" value="{{$informeentrega->fechaFactura}}">
                </div>
                
                <div class="form-group">
                    <label for="noFactura">noFactura</label>
                    <input id="noFactura" name = "noFactura" type="text" class="form-control" value="{{$informeentrega->noFactura}}">
                </div>
                
                
                <div class="form-group">
                    <label>personas Select</label>
                    <select name = 'persona_id' class = "form-control">
                        @foreach($personas as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                
                <div class="form-group">
                    <label>trabajomotos Select</label>
                    <select name = 'trabajomoto_id' class = "form-control">
                        @foreach($trabajomotos as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                
                <button class = 'btn btn-primary' type ='submit'>Update</button>
            </form>
        </div>
@endsection