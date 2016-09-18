@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Detalletrabajo Index</h1>
            <form class = 'col s3' method = 'get' action = '{{url("detalletrabajo")}}/create'>
                <button class = 'btn btn-primary' type = 'submit'>Create New Detalletrabajo</button>
            </form>
            <br>
            
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Associate
                <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    
                    <li><a href="http://localhost:8000/trabajomoto">Trabajomoto</a></li>
                    
                </ul>
            </div>
            
            <br>
            <table class = "table table-striped table-bordered">
                <thead>
                    
                    <th>detalleTrabajo</th>
                    
                    <th>estado</th>
                    
                    <th>precio</th>
                    
                    
                    
                    
                    <th>fechaRecepcion</th>
                    
                    <th>fechaEntrega</th>
                    
                    <th>costoTotal</th>
                    
                    <th>estado</th>
                    
                    <th>descripcion</th>
                    
                    
                    
                    <th>actions</th>
                </thead>
                <tbody>
                    @foreach($detalletrabajos as $Detalletrabajo)
                    <tr>
                        
                        <td>{{$Detalletrabajo->detalleTrabajo}}</td>
                        
                        <td>{{$Detalletrabajo->estado}}</td>
                        
                        <td>{{$Detalletrabajo->precio}}</td>
                        
                        
                        
                                                <td>{{$Detalletrabajo->trabajomoto->fechaRecepcion}}</td>

                                                <td>{{$Detalletrabajo->trabajomoto->fechaEntrega}}</td>

                                                <td>{{$Detalletrabajo->trabajomoto->costoTotal}}</td>

                                                <td>{{$Detalletrabajo->trabajomoto->estado}}</td>

                                                <td>{{$Detalletrabajo->trabajomoto->descripcion}}</td>

                        
                        
                        
                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/detalletrabajo/{{$Detalletrabajo->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/detalletrabajo/{{$Detalletrabajo->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/detalletrabajo/{{$Detalletrabajo->id}}'><i class = 'material-icons'>info</i></a>
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