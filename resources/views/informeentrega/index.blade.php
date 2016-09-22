@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Informeentrega Index</h1>
            <form class = 'col s3' method = 'get' action = '{{url("informeentrega")}}/create'>
                <button class = 'btn btn-primary' type = 'submit'>Create New Informeentrega</button>
            </form>
            <br>
            
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Associate
                <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    
                    <li><a href="http://localhost:8000/persona">Persona</a></li>
                    
                    <li><a href="http://localhost:8000/trabajomoto">Trabajomoto</a></li>
                    
                </ul>
            </div>
            
            <br>
            <table class = "table table-striped table-bordered">
                <thead>
                    
                    <th>condicionPago</th>
                    
                    <th>fechaEntrega</th>
                    
                    <th>fechaFactura</th>
                    
                    <th>noFactura</th>
                    
                    
                    
                    
                    <th>nombreCompleto</th>
                    
                    <th>nitCI</th>
                    
                    <th>direccion</th>
                    
                    <th>Telefono</th>
                    
                    <th>Celular</th>
                    
                    
                    
                    <th>fechaRecepcion</th>
                    
                    <th>fechaEntrega</th>
                    
                    <th>costoTotal</th>
                    
                    <th>estado</th>
                    
                    <th>descripcion</th>
                    
                    
                    
                    <th>actions</th>
                </thead>
                <tbody>
                    @foreach($informeentregas as $Informeentrega)
                    <tr>
                        
                        <td>{{$Informeentrega->condicionPago}}</td>
                        
                        <td>{{$Informeentrega->fechaEntrega}}</td>
                        
                        <td>{{$Informeentrega->fechaFactura}}</td>
                        
                        <td>{{$Informeentrega->noFactura}}</td>
                        
                        
                        
                                                <td>{{$Informeentrega->persona->nombreCompleto}}</td>

                                                <td>{{$Informeentrega->persona->nitCI}}</td>

                                                <td>{{$Informeentrega->persona->direccion}}</td>

                                                <td>{{$Informeentrega->persona->Telefono}}</td>

                                                <td>{{$Informeentrega->persona->Celular}}</td>

                        
                        
                                                <td>{{$Informeentrega->trabajomoto->fechaRecepcion}}</td>

                                                <td>{{$Informeentrega->trabajomoto->fechaEntrega}}</td>

                                                <td>{{$Informeentrega->trabajomoto->costoTotal}}</td>

                                                <td>{{$Informeentrega->trabajomoto->estado}}</td>

                                                <td>{{$Informeentrega->trabajomoto->descripcion}}</td>

                        
                        
                        
                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/informeentrega/{{$Informeentrega->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/informeentrega/{{$Informeentrega->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/informeentrega/{{$Informeentrega->id}}'><i class = 'material-icons'>zoom_in</i></a>

                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class = 'AjaxisModal'>
        </div>
    </div>
@endsection