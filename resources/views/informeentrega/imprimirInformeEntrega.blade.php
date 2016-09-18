@extends('layouts.app')

@section('content')
    <div class = 'container'>
<table border="1" width="707" cellspacing="0" cellpadding="0">
    <tbody>
    <tr>
        <td colspan="3" width="707">
            <p><strong>TALLER DE REPARACION MOTO BOXES ALARCON</strong></p>
        </td>
    </tr>
    <tr>
        <td width="302">
            <p><strong><u>CENTRO TECNICO Y PIEZAS</u></strong></p>
        </td>
        <td colspan="2" width="404">
            <p><strong><u>ORDEN DE SERVICIO</u></strong></p>
        </td>
    </tr>
    <tr>
        <td width="302">
            <p><strong>Direcci&oacute;n</strong>: M&eacute;xico # 131 Esquina Av. De las Am&eacute;ricas</p>
            <p>&nbsp;</p>
            <p><strong>Celular</strong>: 68620333</p>
            <p>&nbsp;</p>
        </td>
        <td colspan="2" width="404">
            <p><strong>&nbsp;</strong></p>
            <p><strong>Cliente:</strong>{{$informeentrega->trabajomoto->moto->persona->nombreCompleto}}</p>
            <p><strong>Condici&oacute;n de pago:</strong>{{$informeentrega->condicionPago}}</p>
            <p><strong>Fecha de ingreso:</strong>{{$informeentrega->trabajomoto->fechaRecepcion}}</p>
            <p><strong>Fecha de entrega:</strong>{{$informeentrega->fechaEntrega}}</p>
            <p><strong>Fecha de emisi&oacute;n de Factura:</strong>{{$informeentrega->fechaFactura}}</p>
            <p><strong>N&deg; de Factura:</strong>{{$informeentrega->noFactura}}</p>
            <p>&nbsp;</p>
        </td>
    </tr>
    <tr>
        <td colspan="3" width="707">
            <p><strong><u>DATOS DEL MOTORIZADO</u></strong></p>
        </td>
    </tr>
    <tr>
        <td colspan="3" width="707">
            <p><strong>Modelo:</strong>{{$informeentrega->trabajomoto->moto->marca}}</p>
            <p><strong>N&deg; de Chasis:</strong>{{$informeentrega->trabajomoto->moto->noChasis}}</p>
            <p><strong>N&deg; de Motor:</strong>{{$informeentrega->trabajomoto->moto->noMotor}}</p>
            <p><strong>Placa: </strong>{{$informeentrega->trabajomoto->moto->placaControl}}</p>
            <p><strong>Color:</strong>{{$informeentrega->trabajomoto->moto->color}}</p>
        </td>
    </tr>
    <tr>
        <td colspan="2" width="565">
            <p><strong><u>SERVICIOS EJECUTADOS Y REQUERIMIENTO DE PIEZAS</u></strong></p>
        </td>
        <td width="142">
            <p><strong><u>COSTO</u></strong></p>
        </td>
    </tr>
    <tr>
        <td colspan="2" width="565">
            <p>&nbsp;</p>
        </td>
        <td width="142">
            <p>&nbsp;</p>
        </td>
    </tr>
    <tr>
        <td colspan="2" width="565">
            <p>TOTAL</p>
        </td>
        <td width="142">
            <p>&nbsp;</p>
        </td>
    </tr>
    <tr>
        <td colspan="2" width="565">
            <p><strong><u>Datos del cliente que recoge la Motocicleta</u></strong><strong><u>:</u></strong></p>
            <p><strong>Nombre y Apellido: </strong></p>
            <p><strong>Direcci&oacute;n:</strong></p>
            <p><strong>Celular:</strong></p>
            <p><strong>C.I.</strong></p>
            <p>&nbsp;</p>
            <p><strong>FIRMA</strong></p>
        </td>
        <td width="142">
            <p><strong><u>TOTAL A PAGAR</u></strong></p>
            <p><strong><u>&nbsp;</u></strong></p>
            <p><strong>&nbsp;Bs.-</strong></p>
        </td>
    </tr>
    </tbody>
</table>
    </div>
@endsection