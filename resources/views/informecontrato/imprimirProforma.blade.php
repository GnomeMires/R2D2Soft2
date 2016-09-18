@extends('layouts.app')

@section('content')
    <div class = 'container' style="width: 100%">
    <p><strong>SE&Ntilde;OR:{{ $trabajomoto->moto->persona->nombreCompleto }}</strong></p>
    <p><strong>MOTOCICLETA: {{$trabajomoto->moto->marca}}</strong></p>
    <p><strong>PLACA:{{$trabajomoto->moto->placaControl}}</strong></p>
    <p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
    <table style="width: 574px;" border="1" cellspacing="0" cellpadding="0">
        <tbody>
        <tr>
            <td style="width: 566px; text-align: center;" colspan="4">
                <p><strong>MOTO BOXES ALARCON</strong></p>
            </td>
        </tr>
        <tr>
            <td style="width: 566px; text-align: center;" colspan="4">
                <p><strong>PROFORMA</strong></p>
            </td>
        </tr>
        <tr>
            <td style="width: 78px;">
                <p><strong>CANTIDAD</strong></p>
            </td>
            <td style="width: 345px;">
                <p><strong>DESCRIPCION</strong></p>
            </td>
            <td style="width: 75px;">
                <p><strong>PRECIO U.</strong></p>
            </td>
            <td style="width: 68px;">
                <p><strong>TOTAL</strong></p>
            </td>
        </tr>
        <?php $totalRU = 0;?>
        @foreach($repuestosUtilizados as $RepuestosUtilizado)
            <tr>

                <td>{{$RepuestosUtilizado->cantidad}}</td>

                <td>{{$RepuestosUtilizado->repuestosmoto->nombreRepuesto}}</td>

                <td>{{$RepuestosUtilizado->descripcion}}</td>

                <td>{{$RepuestosUtilizado->precioUnitario}}</td>

                <td>{{$RepuestosUtilizado->precioTotal}}</td>
            </tr>
        @endforeach


        <tr>
            <td style="width: 498px;" colspan="3">
                <p><strong>TOTAL</strong></p>
            </td>
            <td style="width: 68px;">
                <p><strong>&nbsp;</strong></p>
            </td>
        </tr>
        </tbody>
    </table>
    </div>
    <br>
    <p align="center"><a href = '#' class = 'btn btn-primary'>Imprimir</a></p>
@endsection