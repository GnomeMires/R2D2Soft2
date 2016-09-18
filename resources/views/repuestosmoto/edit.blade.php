@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Editar Repuestos/Productos</h1>
            <form method = 'get' action = '{{url("repuestosmoto")}}'>
                <button class = 'btn btn-danger'>Atras</button>
            </form>
            <br>
            <form method = 'POST' action = '{{url("repuestosmoto")}}/{{$repuestosmoto->id}}/update'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="nombreRepuesto">nombreRepuesto</label>
                    <input id="nombreRepuesto" name = "nombreRepuesto" type="text" class="form-control" value="{{$repuestosmoto->nombreRepuesto}}">
                </div>
                
                <div class="form-group">
                    <label for="codigoRepuesto">codigoRepuesto</label>
                    <input id="codigoRepuesto" name = "codigoRepuesto" type="text" class="form-control" value="{{$repuestosmoto->codigoRepuesto}}">
                </div>
                
                <div class="form-group">
                    <label for="cantidad">cantidad</label>
                    <input id="cantidad" name = "cantidad" type="text" class="form-control" value="{{$repuestosmoto->cantidad}}">
                </div>
                
                <div class="form-group">
                    <label for="unidadMedida">unidadMedida</label>
                    <input id="unidadMedida" name = "unidadMedida" type="text" class="form-control" value="{{$repuestosmoto->unidadMedida}}">
                </div>
                
                <div class="form-group">
                    <label for="tipoRepuesto">tipoRepuesto</label>
                    <input id="tipoRepuesto" name = "tipoRepuesto" type="text" class="form-control" value="{{$repuestosmoto->tipoRepuesto}}">
                </div>
                
                <div class="form-group">
                    <label for="precioVenta">precioVenta</label>
                    <input id="precioVenta" name = "precioVenta" type="text" class="form-control" value="{{$repuestosmoto->precioVenta}}">
                </div>
                
                
                <div class="form-group">
                    <label>datosempresas Select</label>
                    <select name = 'datosempresa_id' class = "form-control">
                        @foreach($datosempresas as $key => $value)
                        <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
                
                <button class = 'btn btn-primary' type ='submit'>Update</button>
            </form>
        </div>
@endsection