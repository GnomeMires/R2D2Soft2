@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Lista de Repuestos Utilizados</h1>
            <br>
            <table id="pagination" class = "table table-striped table-bordered">
                <thead>

                    <th>Repuesto</th>

                    <th>Codigo</th>

                    <th>Fecha de Uso</th>
                    
                    <th>Cantidad</th>

                    <th>Fecha Recepcion</th>

                    <th>Origen</th>

                    <th>Precio U. Bs.</th>

                    <th>Precio T. Bs.</th>

                    <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach($repuestosutilizados as $Repuestosutilizado)
                    <tr>
                        <td>{{$Repuestosutilizado->repuestosmoto->nombreRepuesto}}</td>

                        <td>{{$Repuestosutilizado->repuestosmoto->codigoRepuesto}}</td>
                        
                        <td>{{$Repuestosutilizado->fechaUso}}</td>
                        
                        <td>{{$Repuestosutilizado->cantidad}}</td>
                        
                        <td>{{$Repuestosutilizado->trabajomoto->fechaRecepcion}}</td>

                        <td>{{$Repuestosutilizado->origenRepuesto}}</td>

                        <td>{{$Repuestosutilizado->precioUnitario}}</td>

                        <td>{{$Repuestosutilizado->precioTotal}}</td>

                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/repuestosutilizado/{{$Repuestosutilizado->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/repuestosutilizado/{{$Repuestosutilizado->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/repuestosutilizado/{{$Repuestosutilizado->id}}'><i class = 'material-icons'>zoom_in</i></a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class = 'AjaxisModal'>
            </div>
        </div>
@endsection