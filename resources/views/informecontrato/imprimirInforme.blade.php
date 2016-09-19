@extends('layouts.app')

@section('content')
<div id = "container" class = 'container'>
    <h1 align="center">Informe de Recepcion</h1>
    <br>

    <table style="width: 100%">
        <tr>
            <td style="width:10%" valign="top"><strong>A:</strong><br><br></td>
            <td style="width: 90%">{!! $informecontrato->destinatario !!}<br><br></td>
        </tr>
        <tr>
            <td style="width:10%" valign="top"><strong>VIA:</strong><br></td>
            <td style="width: 90%">{!!$informecontrato->via!!}<br><br></td>
        </tr>
        <tr>
            <td style="width:10%" valign="top"><strong>DE:</strong></td>
            <td style="width: 90%">Mauricio Alarcón Chavarría<br><strong>Gerente propietario Taller Mecánico "Moto boxes Alarcón"</strong>
            </td>
        </tr>
    </table>
    <br>
    <p><strong>REF:</strong>{{strtoupper($informecontrato->referido)}}</p>
    <p><strong>Fecha:</strong>{{ date('d/m/Y', strtotime($informecontrato->fechaInforme)) }}</p>
    <br>
    <hr>
    <br>
    <p><strong>1. REFERENCIA</strong></p>
    <p> Se hiso la recepción de la motocicleta {{$trabajomoto->moto->marca}} en fecha {{$trabajomoto->fechaRecepcion}} del presente, para la reparación y acondicionamiento de la misma.</p>
    <p><strong>2. DATOS DE IDENTIFICACION</strong></p>
    <table style="width: 100%;">
        <tr>
            <td><strong>Placa:</strong>{{$trabajomoto->moto->placaControl}}</td></tr>
        <tr><td><strong>Marca:</strong>{{$trabajomoto->moto->marca}}</td></tr>
        <tr><td><strong>Chasis:</strong>{{$trabajomoto->moto->noChasis}}</td></tr>
        <tr><td><strong>Motor:</strong>{{$trabajomoto->moto->noMotor}}</td></tr>
        <tr><td><strong>Color:</strong>{{$trabajomoto->moto->color}}</td></tr>
    </table>
    <br>
    <p><strong>3. DATOS DE REPARACION</strong></p>
    <table width="100%" class = "table table-striped table-bordered">
        <caption>DESCRIPCION DE CAMBIOS DE PIEZAS</caption>
        <thead>

        <th>Nombre Repuesto</th>

        <th>Cantidad</th>

        <th>Descripcion</th>

        </thead>
        <tbody>
        <?php $totalRU = 0;?>
        @foreach($repuestosUtilizados as $RepuestosUtilizado)
            <tr>

                <td>{{$RepuestosUtilizado->repuestosmoto->nombreRepuesto}}</td>

                <td>{{$RepuestosUtilizado->cantidad}}</td>

                <td>{{$RepuestosUtilizado->descripcion}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <p>{{$informecontrato->descripcionReparacion}}</p>
    <p><strong>3. OBSERVACIONES</strong></p>
    <p>{{$informecontrato->observaciones}}</p>
    <p><strong>4. SUGERENCIAS Y/O RECOMENDACIONES</strong></p>
    <p>{{$informecontrato->sugerencias}}</p>
</div>
<p align="center"><a onclick = "imprSelect('container')" class = 'btn btn-primary'>Imprimir</a></p>
@endsection