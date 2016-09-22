@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>TRABAJOS REALIZADOS</h1>
            <!--<form class = 'col s3' method = 'get' action = '{{url("trabajomoto")}}/create'>
                <button class = 'btn btn-primary' type = 'submit'>Create New Trabajomoto</button>
            </form>-->

            <br>
            <table id="pagination" class = "table table-striped table-bordered">
                <thead>
                    
                    <th>Fecha Recepcion</th>
                    
                    <th>Fecha Entrega</th>
                    
                    <th>Costo Bs.</th>
                    
                    <th>Term</th>
                    
                    <th>No. Placa</th>
                    
                    <th>Encargado</th>

                    <th>Acciones</th>
                    <th>Informe Rec.</th>
                    <th>Proforma</th>
                    <th>Informe Ent.</th>
                </thead>
                <tbody>
                    @foreach($trabajomotos as $Trabajomoto)
                    <tr>
                        
                        <td>{{$Trabajomoto->fechaRecepcion}}</td>
                        
                        <td>{{$Trabajomoto->fechaEntrega}}</td>
                        
                        <td>{{$Trabajomoto->costoTotal}}</td>
                        
                        <td>@if ($Trabajomoto->estado == 1)
                                <a href = '#' class = 'viewShow btn btn-success btn-xs' data-link = '/trabajomoto/{{$Trabajomoto->id}}/updateEstado'><i class = 'material-icons'>assignment_turned_in</i>Si</a>
                            @else
                                <a href = '#' class = 'viewShow btn btn-danger btn-xs' data-link = '/trabajomoto/{{$Trabajomoto->id}}/updateEstado'><i class = 'material-icons'>assignment_late</i>No</a>
                            @endif
                        </td>

                                                <td>{{$Trabajomoto->placaControl}}</td>

                        
                                                <td>{{$Trabajomoto->name}}</td>

                        
                        
                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/trabajomoto/{{$Trabajomoto->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/trabajomoto/{{$Trabajomoto->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/trabajomoto/{{$Trabajomoto->id}}/show'><i class = 'material-icons'>zoom_in</i></a>
                                @if($Trabajomoto->costoTotal>-0)
                                    <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/trabajomoto/{{$Trabajomoto->id}}/mostrarRecibo'><i class = 'material-icons'>receipt</i></a>
                                @endif
                        </td>
                        <td>
                            @if (count($Trabajomoto->contratoID) >= 1)
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/informecontrato/{{$Trabajomoto->contratoID}}'><i class = 'material-icons'>zoom_in</i></a>
                            @else
                                <a href = '#' class = 'viewShow btn btn-success btn-xs' data-link = '/informecontrato/{{$Trabajomoto->id}}/create'><i class = 'material-icons'>note_add</i></a>
                            @endif
                        </td>
                        <td>
                            @if (count($Trabajomoto->contratoID) >= 1)
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/informecontrato/{{$Trabajomoto->contratoID}}/showProforma'><i class = 'material-icons'>zoom_in</i></a>
                            @else
                                <a href = '#' class = 'viewShow btn btn-success btn-xs' data-link = '/informecontrato/{{$Trabajomoto->id}}/create'><i class = 'material-icons'>note_add</i></a>
                            @endif

                        </td>
                        <td>
                            @if (count($Trabajomoto->entregaID) >= 1)
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/informeentrega/{{$Trabajomoto->entregaID}}'><i class = 'material-icons'>zoom_in</i></a>
                            @else
                                <a href = '#' class = 'viewShow btn btn-success btn-xs' data-link = '/informeentrega/{{$Trabajomoto->id}}/create'><i class = 'material-icons'>note_add</i></a>
                            @endif
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