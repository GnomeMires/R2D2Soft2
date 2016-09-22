@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Proovedor Index</h1>
            <form class = 'col s3' method = 'get' action = '{{url("proovedor")}}/create'>
                <button class = 'btn btn-primary' type = 'submit'>Crear Nuevo Proovedor</button>
            </form>
            <br>
            
            <br>
            <table id="pagination" class = "table table-striped table-bordered">
                <thead>
                    
                    <th>Nombre</th>
                    
                    <th>Direccion</th>
                    
                    <th>Ubicacion</th>
                    
                    <th>Telefono</th>
                    
                    <th>Correo</th>
                    
                    
                    <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach($proovedors as $Proovedor)
                    <tr>
                        
                        <td>{{$Proovedor->nombreProovedor}}</td>
                        
                        <td>{{$Proovedor->direccion}}</td>
                        
                        <td>{{$Proovedor->ubicacion}}</td>
                        
                        <td>{{$Proovedor->telefono}}</td>
                        
                        <td>{{$Proovedor->correo}}</td>
                        
                        
                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/proovedor/{{$Proovedor->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/proovedor/{{$Proovedor->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/proovedor/{{$Proovedor->id}}'><i class = 'material-icons'>zoom_in</i></a>
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