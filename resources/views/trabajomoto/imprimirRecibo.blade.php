@extends('layouts.app')

@section('content')
    <div class = 'container'>
        <h3 align="right"><strong>N&deg; RECIBO {{$trabajomoto->id}}</strong></h3>
        <table style="width: 100%;border-collapse: separate;
    border-spacing: 10px;">
            <tr>
                <td style="border: solid 1px;padding: 15px;">
                    <strong>DATOS TALLER</strong><br>
                    <table >
                        <tr>
                            <td colspan="2"><strong>{{$taller->nombreEmpresa}}</strong></td>
                        </tr>
                        <tr>
                            <td><strong>Direccion:</strong></td>
                            <td>{{$taller->direccion}}</td>
                        </tr>
                        <tr>
                            <td><strong>Telefono:</strong></td>
                            <td>{{$taller->telefono}}</td>
                        </tr>
                        <tr>
                            <td><strong>Celular:</strong></td>
                            <td>{{$taller->celular}}</td>
                        </tr>
                        <tr>
                            <td><strong>NIT:</strong></td>
                            <td>{{$taller->nit}}</td>
                        </tr>
                    </table>
                </td>
                <td style="border: solid 1px; padding: 15px;">
                    <strong>DATOS DEL CLIENTE</strong><br>
                    <table>
                        <tr>
                            <td><strong>Nombre:</strong></td>
                            <td>{{$trabajomoto->moto->persona->nombreCompleto}}</td>
                        </tr>
                        <tr>
                            <td><strong>CI:</strong></td>
                            <td>{{$trabajomoto->moto->persona->nitCI}}</td>
                        </tr>
                        <tr>
                            <td><strong>Direccion:</strong></td>
                            <td>{{$trabajomoto->moto->persona->direccion}}</td>
                        </tr>
                        <tr>
                            <td><strong>Telefono:</strong></td>
                            <td>{{$trabajomoto->moto->persona->Telefono}}</td>
                        </tr>
                        <tr>
                            <td><strong>Celular:</strong></td>
                            <td>{{$trabajomoto->moto->persona->Celular}}</td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
        <br>
        <table style="width: 100%">
            <tr><strong>DATOS VEHICULO</strong></tr>
            <tr>
                <table style="width: 100%;border: solid 1px;border-collapse: separate;
    border-spacing: 10px;">
                    <tr>
                        <td><strong>Placa:</strong>{{$trabajomoto->moto->placaControl}}</td>
                        <td><strong>Marca:</strong>{{$trabajomoto->moto->marca}}</td>
                        <td><strong>Chasis:</strong>{{$trabajomoto->moto->noChasis}}</td>
                        <td><strong>Motor:</strong>{{$trabajomoto->moto->noMotor}}</td>
                        <td><strong>Color:</strong>{{$trabajomoto->moto->color}}</td>
                    </tr>
                </table>
            </tr>
        </table>
        <h3>DETALLE DEL TRABAJO</h3>

        <table class = "table table-striped table-bordered">
            <thead>

            <th>Descripcion</th>

            <th>Precio Bs.</th>
            </thead>
            <tbody>
            <?php $totalDT = 0;?>
            @foreach($detalletrabajos as $Detalletrabajo)
                <tr>

                    <td>{{$Detalletrabajo->detalleTrabajo}}</td>

                    <td>{{$Detalletrabajo->precio}}<?php $totalDT+=$Detalletrabajo->precio;?></td>
                </tr>
            @endforeach
            <tr>
                <td><strong>TOTAL Bs.</strong></td>
                <td>{{$totalDT}}</td>
            </tr>
            </tbody>
        </table>
        <H3>REPUESTOS UTILIZADOS</H3>

        <table class = "table table-striped table-bordered">
            <thead>

            <th>Nombre Repuesto</th>

            <th>Cantidad</th>

            <th>Precio U.</th>

            <th>Precio T.</th>
            </thead>
            <tbody>
            <?php $totalRU = 0;?>
            @foreach($repuestosUtilizados as $RepuestosUtilizado)
                <tr>

                    <td>{{$RepuestosUtilizado->repuestosmoto->nombreRepuesto}}</td>

                    <td>{{$RepuestosUtilizado->cantidad}}</td>

                    <td>{{$RepuestosUtilizado->repuestosmoto->precioVenta}}</td>

                    <td>{{$RepuestosUtilizado->cantidad * $RepuestosUtilizado->repuestosmoto->precioVenta}}<?php $totalRU+=$RepuestosUtilizado->cantidad * $RepuestosUtilizado->repuestosmoto->precioVenta;?></td>

                </tr>

            @endforeach
            <tr>
                <td colspan="3"><strong>TOTAL Bs.</strong></td>
                <td>{{$totalRU}}</td>
            </tr>
            </tbody>
        </table>

            <table width="100%">
                <tr>
                    <td align="right">
                        <h4><strong>Total Bs.{{$totalRU+$totalDT}}</strong></h4>
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        <h4><strong>Adelantado Bs. {{$adelantado}}</strong></h4>
                    </td>
                </tr>
                <tr>
                    <td align="right">
                        @if($adelantado>($totalRU+$totalDT))
                            <h4> <strong>Cambio Bs. {{$adelantado-$totalRU-$totalDT}}</strong></h4>
                        @else
                            <h4><strong>Restante Bs. {{$totalRU+$totalDT-$adelantado}}</strong></h4>
                        @endif
                    </td>
                </tr>
            </table>
            <br><br>
    </div>
@endsection