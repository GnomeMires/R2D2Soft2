@extends('layouts.app')

@section('content')
    <div class = 'container'>
        <h1>PASO 2 - DATOS DE LA MOTO Y RECEPCION</h1>
<div class="form-group">
    <form method = 'POST' action = '{{url("trabajomoto")}}'>

        <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <input type="hidden" id="origenMoto" name="origenMoto" value="B">
        <ul class="nav nav-pills">
            <li class="active"><a data-toggle="pill" href="#buscarMoto" onclick="document.getElementById('origenMoto').value ='B'">Buscar Moto</a></li>
            <li><a data-toggle="pill" href="#nuevaMoto" onclick="document.getElementById('origenMoto').value ='N'">Nueva Moto</a></li>
        </ul>
        <br><br>
        <div class="tab-content">
            <h3>DATOS DE LA MOTO</h3>
            <div id="buscarMoto" class="tab-pane fade in active">
                <div class="form-group">
                    <label for="moto_id">Moto: </label>
                    <select name = 'moto_id' class = 'form-control'>
                        @foreach($motos as $key => $value)
                            <option value="{{$key}}">{{$value}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div id="nuevaMoto" class="tab-pane fade">
                <div class="form-group">
                    <div class="form-group">
                        <label for="placaControl">No. Placa</label>
                        <input id="placaControl" name = "placaControl" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="marca">Marca*</label>
                        <input id="marca" name = "marca" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="noChasis">No. Chasis</label>
                        <input id="noChasis" name = "noChasis" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="noMotor">No. Motor</label>
                        <input id="noMotor" name = "noMotor" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="color">Color</label>
                        <input id="color" name = "color" type="text" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="detalles">Detalles</label>
                        <input id="detalles" name = "detalles" type="text" class="form-control">
                    </div>
                </div>

            </div>
        </div>
        <h3>DATOS DE LA RECEPCION</h3>
        <div class="form-group">
            <label for="fechaRecepcion">Fecha de Recepcion</label>
            <input id="fechaRecepcion" name = "fechaRecepcion" type="date" value="<?php echo date('d/m/Y');?>" class="form-control">
        </div>

        <div class="form-group">
            <label for="fechaEntrega">Fecha de Entrega</label>
            <input id="fechaEntrega" name = "fechaEntrega" type="date" value="<?php echo date('d/m/Y');?>" class="form-control">
        </div>

        <div class="form-group">
            <input id="costoTotal" name = "costoTotal" type="hidden" class="form-control" value="0.00">
        </div>

        <div class="form-group">
            <input id="estado" name = "estado" type="hidden" class="form-control" value="0">
        </div>

        <div class="form-group">
            <label for="descripcion">Descripcion</label>
            <input id="descripcion" name = "descripcion" type="text" class="form-control">
        </div>

        <div class="form-group">
            <input name = 'user_id' class = 'form-control' value="{{ Auth::user()->id }}" type="hidden">
        </div>
            <div class="form-group">
                <input name = 'person_id' class = 'form-control' value="{{$id}}" type="hidden">
            </div>
        <button class = 'btn btn-primary' type ='submit'>CREAR TRABAJO</button>
    </form>

</div>
    </div>
@endsection