@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Crear Informe de Entrega</h1>
            <!--<form method = 'get' action = '{{url("informeentrega")}}'>
                <button class = 'btn btn-danger'>Informeentrega Index</button>
            </form>-->
            <br>
            <form method = 'POST' action = '{{url("informeentrega")}}'>
                <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>

                <input type="hidden" id="origenPersona" name="origenPersona" value="B">
                <ul class="nav nav-pills">
                    <li class="active" ><a data-toggle="pill" href="#buscar" onclick="document.getElementById('origenPersona').value ='B'">Buscar Cliente</a></li>
                    <li><a data-toggle="pill" href="#nuevo" onclick="document.getElementById('origenPersona').value ='N'">Nuevo Cliente</a></li>
                </ul>
                <br><br>
                <div class="tab-content">
                    <h3>Persona que Recogio la Moto</h3>
                    <div id="buscar" class="tab-pane fade in active">

                        <div class="form-group">
                            <label>Elija un Persona: </label>
                            <select name = 'persona_id' class = 'form-control'>
                                @foreach($personas as $key => $value)
                                    <option value="{{$key}}">{{$value}}</option>
                                @endforeach
                            </select>
                            <br>
                        </div>

                    </div>
                    <div id="nuevo" class="tab-pane fade">

                        <div class="form-group">
                            <label for="nombreCompleto">Nombre Completo *</label>
                            <input id="nombreCompleto" name = "nombreCompleto" type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="nitCI">NIT/CI *</label>
                            <input id="nitCI" name = "nitCI" type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="direccion">Direccion</label>
                            <input id="direccion" name = "direccion" type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="Telefono">Telefono</label>
                            <input id="Telefono" name = "Telefono" type="text" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="Celular">Celular</label>
                            <input id="Celular" name = "Celular" type="text" class="form-control">
                        </div>

                    </div>

                </div>
                <h3>Datos de Entrega</h3>
                <div class="form-group">
                    <label for="condicionPago">Condicion de Pago</label>
                    <input id="condicionPago" name = "condicionPago" type="text" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="fechaEntrega">Fecha Entrega</label>
                    <input id="fechaEntrega" name = "fechaEntrega" type="date" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="fechaFactura">Fecha de Facturacion</label>
                    <input id="fechaFactura" name = "fechaFactura" type="date" class="form-control">
                </div>
                
                <div class="form-group">
                    <label for="noFactura">No. de Factura</label>
                    <input id="noFactura" name = "noFactura" type="text" class="form-control">
                </div>

                
                <div class="form-group">
                    <input type="hidden" name = 'trabajomoto_id' class = 'form-control' value="{{$trabajomotoID}}">
                </div>
                
                <button class = 'btn btn-primary' type ='submit'>Crear Informe Entrega</button>
            </form>
        </div>
    <br>
@endsection