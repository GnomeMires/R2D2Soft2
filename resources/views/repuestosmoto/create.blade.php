@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Crear Repuesto/Producto</h1>
            <form method = 'get' action = '{{url("repuestosmoto")}}'>
                <button class = 'btn btn-danger'>Atras</button>
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
            <form method = 'POST' action = '{{url("repuestosmoto")}}'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
                
                <div class="form-group">
                    <label for="nombreRepuesto">Nombre*</label>
                    <input id="nombreRepuesto" name = "nombreRepuesto" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="codigoRepuesto">Codigo*</label>
                    <input id="codigoRepuesto" name = "codigoRepuesto" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="cantidad">Cantidad</label>
                    <input id="cantidad" name = "cantidad" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="unidadMedida">Unidad</label>
                    <input id="unidadMedida" name = "unidadMedida" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="tipoRepuesto">Tipo</label>
                    <input id="tipoRepuesto" name = "tipoRepuesto" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="precioVenta">Precio Venta Bs. *</label>
                    <input id="precioVenta" name = "precioVenta" type="text" class="form-control">
                </div>
                
                
                <div class="form-group">
                    <input type="hidden" name = 'datosempresa_id' class = 'form-control' value="1">
                </div>
                
                <button class = 'btn btn-primary' type ='submit'>Crear Producto</button>
            </form>
        </div>
@endsection