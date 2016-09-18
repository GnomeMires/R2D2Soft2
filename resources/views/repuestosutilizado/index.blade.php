@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Repuestosutilizado Index</h1>
            <form class = 'col s3' method = 'get' action = '{{url("repuestosutilizado")}}/create'>
                <button class = 'btn btn-primary' type = 'submit'>Create New Repuestosutilizado</button>
            </form>
            <br>
            
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Associate
                <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    
                    <li><a href="http://localhost:8000/trabajomoto">Trabajomoto</a></li>
                    
                    <li><a href="http://localhost:8000/repuestosmoto">Repuestosmoto</a></li>
                    
                </ul>
            </div>
            
            <br>
            <table id="pagination" class = "table table-striped table-bordered">
                <thead>
                    
                    <th>fechaUso</th>
                    
                    <th>cantidad</th>
                    
                    
                    
                    
                    <th>fechaRecepcion</th>
                    
                    <th>fechaEntrega</th>
                    
                    <th>costoTotal</th>
                    
                    <th>estado</th>
                    
                    <th>descripcion</th>
                    
                    
                    
                    <th>nombreRepuesto</th>
                    
                    <th>codigoRepuesto</th>
                    
                    <th>tipoRepuesto</th>
                    
                    <th>precioVenta</th>
                    
                    
                    
                    <th>actions</th>
                </thead>
                <tbody>
                    @foreach($repuestosutilizados as $Repuestosutilizado)
                    <tr>
                        
                        <td>{{$Repuestosutilizado->fechaUso}}</td>
                        
                        <td>{{$Repuestosutilizado->cantidad}}</td>
                        
                        
                        
                                                <td>{{$Repuestosutilizado->trabajomoto->fechaRecepcion}}</td>

                                                <td>{{$Repuestosutilizado->trabajomoto->fechaEntrega}}</td>

                                                <td>{{$Repuestosutilizado->trabajomoto->costoTotal}}</td>

                                                <td>{{$Repuestosutilizado->trabajomoto->estado}}</td>

                                                <td>{{$Repuestosutilizado->trabajomoto->descripcion}}</td>

                        
                        
                                                <td>{{$Repuestosutilizado->repuestosmoto->nombreRepuesto}}</td>

                                                <td>{{$Repuestosutilizado->repuestosmoto->codigoRepuesto}}</td>

                                                <td>{{$Repuestosutilizado->repuestosmoto->tipoRepuesto}}</td>

                                                <td>{{$Repuestosutilizado->repuestosmoto->precioVenta}}</td>

                        
                        
                        
                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/repuestosutilizado/{{$Repuestosutilizado->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/repuestosutilizado/{{$Repuestosutilizado->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/repuestosutilizado/{{$Repuestosutilizado->id}}'><i class = 'material-icons'>info</i></a>
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