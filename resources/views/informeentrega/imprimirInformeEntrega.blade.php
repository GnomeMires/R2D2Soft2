@extends('layouts.app')

@section('content')
    <div class = 'container'>
<table border="1" width="707" cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
        <td colspan="3" width="707">
            <p align="center"><strong><h4 align="center">TALLER DE REPARACION MOTO BOXES ALARCON</h4></strong></p>
        </td>
    </tr>
    <tr>
        <td width="302">
            <p  align="center"><strong><u>CENTRO TECNICO Y PIEZAS</u></strong></p>
        </td>
        <td colspan="2" width="404">
            <p  align="center"><strong><u>ORDEN DE SERVICIO</u></strong></p>
        </td>
    </tr>
    <tr>
        <td style="padding-left: 15px" width="302">
            <p><strong>Direcci&oacute;n</strong>: M&eacute;xico # 131 Esquina Av. De las Am&eacute;ricas</p>
            <br>
            <p><strong>Celular</strong>: 68620333</p>

        </td>
        <td style="padding-left: 15px" colspan="2" width="404">
            <p><strong>Cliente:</strong>{{$informeentrega->trabajomoto->moto->persona->nombreCompleto}}</p>
            <p><strong>Condici&oacute;n de pago:</strong>{{$informeentrega->condicionPago}}</p>
            <p><strong>Fecha de ingreso:</strong>{{$informeentrega->trabajomoto->fechaRecepcion}}</p>
            <p><strong>Fecha de entrega:</strong>{{$informeentrega->fechaEntrega}}</p>
            <p><strong>Fecha de emisi&oacute;n de Factura:</strong>{{$informeentrega->fechaFactura}}</p>
            <p><strong>N&deg; de Factura:</strong>{{$informeentrega->noFactura}}</p>
        </td>
    </tr>
    <tr>
        <td colspan="3" width="707">
            <p  align="center"><strong><u>DATOS DEL MOTORIZADO</u></strong></p>
        </td>
    </tr>
    <tr>
        <td style="padding-left: 15px" colspan="3" width="707">
            <p><strong>Modelo:</strong>{{$informeentrega->trabajomoto->moto->marca}}</p>
            <p><strong>N&deg; de Chasis:</strong>{{$informeentrega->trabajomoto->moto->noChasis}}</p>
            <p><strong>N&deg; de Motor:</strong>{{$informeentrega->trabajomoto->moto->noMotor}}</p>
            <p><strong>Placa: </strong>{{$informeentrega->trabajomoto->moto->placaControl}}</p>
            <p><strong>Color:</strong>{{$informeentrega->trabajomoto->moto->color}}</p>
        </td>
    </tr>
    <tr>
        <td style="padding-left: 15px" colspan="2" width="565">
            <p  align="center"><strong><u>SERVICIOS EJECUTADOS Y REQUERIMIENTO DE PIEZAS</u></strong></p>
        </td>
        <td style="padding-left: 15px" width="142">
            <p><strong><u>COSTO</u></strong></p>
        </td>
    </tr>
    <?php $totalDT = 0;?>
    @foreach($repuestosUtilizados as $RepuestosUtilizado)
        <tr>

            <td style="padding-left: 15px" colspan="2">{{$RepuestosUtilizado->repuestosmoto->nombreRepuesto}}</td>

            <td style="padding-left: 15px">{{$RepuestosUtilizado->cantidad * $RepuestosUtilizado->repuestosmoto->precioVenta}}<?php $totalDT+=$RepuestosUtilizado->cantidad * $RepuestosUtilizado->repuestosmoto->precioVenta;?></td>
        </tr>
    @endforeach

    @foreach($detalletrabajos as $Detalletrabajo)
        <tr>

            <td style="padding-left: 15px" colspan="2">{{$Detalletrabajo->detalleTrabajo}}</td>

            <td style="padding-left: 15px">{{$Detalletrabajo->precio}}<?php $totalDT+=$Detalletrabajo->precio;?></td>
        </tr>
    @endforeach

    <tr>
        <td style="padding-left: 15px" colspan="2" width="565">
            <p><strong>TOTAL</strong></p>
        </td>
        <td style="padding-left: 15px" width="142">
            <p>{{$totalDT}}</p>
        </td>
    </tr>
    <tr>
        <td style="padding-left: 15px" colspan="2" width="565">
            <p><strong><u>Datos del cliente que recoge la Motocicleta</u></strong><strong><u>:</u></strong></p>
            <p><strong>Nombre y Apellido: {{$informeentrega->persona->nombreCompleto}}</strong></p>
            <p><strong>Direcci&oacute;n:{{$informeentrega->persona->direccion}}</strong></p>
            <p><strong>Celular:{{$informeentrega->persona->Celular}}</strong></p>
            <p><strong>C.I. {{$informeentrega->persona->nitCI}}</strong></p>
            <p>&nbsp;</p>
            <p style="margin-right: 50px" align="right"><strong>FIRMA</strong></p>
        </td>
        <td style="padding-left: 15px" valign="top" width="142">
            <p><strong><u>TOTAL A PAGAR</u> {{$totalDT}} Bs.</strong></p>
        </td>
    </tr>
    </tbody>
</table>
    </div>
@endsection