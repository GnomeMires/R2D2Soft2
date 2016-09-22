@extends('layouts.app')

@section('content')
    <div class = 'container'>
        <h1 align="left">NUEVO TRABAJO</h1>
        <br>
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
        <h1>DETALLE DEL TRABAJO</h1>
            <a href = '{{url("detalletrabajo")}}/{{$trabajomoto->id}}/create' class = 'btn btn-primary' align="center"><span class="fa fa-btn fa-plus-square"></span>Agregar</a>
        <br><br>
        <table class = "table table-striped table-bordered">
            <thead>

            <th>Descripcion</th>

            <th>Precio Bs.</th>

            <th>Acciones</th>
            </thead>
            <tbody>
            <?php $totalDT = 0;?>
            @foreach($detalletrabajos as $Detalletrabajo)
                <tr>

                    <td>{{$Detalletrabajo->detalleTrabajo}}</td>

                    <td>{{$Detalletrabajo->precio}}<?php $totalDT+=$Detalletrabajo->precio;?></td>

                    <td>
                        <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/detalletrabajo/{{$Detalletrabajo->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                        <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/detalletrabajo/{{$Detalletrabajo->id}}/edit'><i class = 'material-icons'>edit</i></a>
                        <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/detalletrabajo/{{$Detalletrabajo->id}}'><i class = 'material-icons'>zoom_in</i></a>
                    </td>
                </tr>
            @endforeach
            <tr>
                <td><strong>TOTAL Bs.</strong></td>
                <td colspan="2">{{$totalDT}}</td>
            </tr>
            </tbody>
        </table>
        <br>
        <H1>REPUESTOS UTILIZADOS</H1>
        <a href = '{{url("repuestosutilizado")}}/{{$trabajomoto->id}}/create' class = 'btn btn-primary'><span class="fa fa-btn fa-plus-square" align="center"></span> Agregar</a>
        <br><br>
        <table class = "table table-striped table-bordered">
            <thead>

            <th>Nombre Repuesto</th>

            <th>Cantidad</th>

            <th>Precio U.</th>

            <th>Precio T.</th>

            <th>actions</th>
            </thead>
            <tbody>
            <?php $totalRU = 0;?>
            @foreach($repuestosUtilizados as $RepuestosUtilizado)
                <tr>

                    <td>{{$RepuestosUtilizado->repuestosmoto->nombreRepuesto}}</td>

                    <td>{{$RepuestosUtilizado->cantidad}}</td>

                    <td>{{$RepuestosUtilizado->repuestosmoto->precioVenta}}</td>

                    <td>{{$RepuestosUtilizado->cantidad * $RepuestosUtilizado->repuestosmoto->precioVenta}}<?php $totalRU+=$RepuestosUtilizado->cantidad * $RepuestosUtilizado->repuestosmoto->precioVenta;?></td>

                    <td>
                        <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/repuestosutilizado/{{$RepuestosUtilizado->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                        <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/repuestosutilizado/{{$RepuestosUtilizado->id}}/edit'><i class = 'material-icons'>edit</i></a>
                        <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/repuestosutilizado/{{$RepuestosUtilizado->id}}'><i class = 'material-icons'>zoom_in</i></a>
                    </td>
                </tr>

            @endforeach
            <tr>
                <td colspan="3"><strong>TOTAL Bs.</strong></td>
                <td colspan="2">{{$totalRU}}</td>
            </tr>
            </tbody>
        </table>
        <form method = 'POST' action = '{{url("trabajomoto")}}/{{$trabajomoto->id}}/imprimirRecibo'>
            <input type = 'hidden' name = '_token' value = '{{Session::token()}}'>
        <table width="100%">
            <tr>
                <td align="right">
                  <atrong>Total Bs.{{$totalRU+$totalDT}}</atrong>
                </td>
            </tr>
            <tr>
                <td align="right">
                    <table>
                        <tr>
                            <td><atrong>Adelantado Bs.</atrong></td>
                            @if($trabajomoto->costoTotal==-1)
                                <td><input id="adelantado" name = "adelantado" type="number" class="form-control" value="0.00"></td>
                            @else
                                <td><input readonly id="adelantado" name = "adelantado" type="number" class="form-control" value="{{$trabajomoto->costoTotal}}"></td>
                            @endif

                        </tr>
                    </table>

                </td>
            </tr>
        </table>
        <br><br>
            <div align="right">
                @if($trabajomoto->costoTotal==-1)
                    <button class = 'btn btn-danger' type="submit" >Imprimir Recibo</button>
                @endif

            </div>
        <br><br>
        </form>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class = 'AjaxisModal'>
            </div>
        </div>
    </div>
@endsection