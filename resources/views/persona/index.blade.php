@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Lista de Clientes</h1>
            <form class = 'col s3' method = 'get' action = '{{url("persona")}}/create'>
                <button class = 'btn btn-primary' type = 'submit'>Crear Nueva Persona </button>
            </form>
            <br>
            
            <br>
            <table id="pagination" class = "table table-striped table-bordered">
                <thead>
                    
                    <th>Nombres y Apellidos</th>
                    
                    <th>NIT / CI</th>
                    
                    <th>Dirección</th>
                    
                    <th>Telefono</th>
                    
                    <th>Celular</th>
                    
                    
                    <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach($personas as $Persona)
                    <tr>
                        
                        <td>{{$Persona->nombreCompleto}}</td>
                        
                        <td>{{$Persona->nitCI}}</td>
                        
                        <td>{{$Persona->direccion}}</td>
                        
                        <td>{{$Persona->Telefono}}</td>
                        
                        <td>{{$Persona->Celular}}</td>
                        
                        
                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/persona/{{$Persona->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/persona/{{$Persona->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/persona/{{$Persona->id}}'><i class = 'material-icons'>info</i></a>
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