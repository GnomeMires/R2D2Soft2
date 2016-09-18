@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>EMPRESA</h1>

            <!--<form class = 'col s3' method = 'get' action = '{{url("datosempresa")}}/create'>
                <button class = 'btn btn-primary' type = 'submit'>Create New Datosempresa</button>
            </form>-->
            <br>
            
            <br>
            <table id="pagination" class = "table table-striped table-bordered">
                <thead>
                    
                    <th>Nombre Taller</th>
                    
                    <th>NIT</th>
                    
                    <th>Direccion</th>
                    
                    <th>Telefono</th>
                    
                    <th>Celular</th>
                    
                    
                    <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach($datosempresas as $Datosempresa)
                    <tr>
                        
                        <td>{{$Datosempresa->nombreEmpresa}}</td>
                        
                        <td>{{$Datosempresa->nit}}</td>
                        
                        <td>{{$Datosempresa->direccion}}</td>
                        
                        <td>{{$Datosempresa->telefono}}</td>
                        
                        <td>{{$Datosempresa->celular}}</td>
                        
                        
                        <td>
                                <!--<a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/datosempresa/{{$Datosempresa->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>-->
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/datosempresa/{{$Datosempresa->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/datosempresa/{{$Datosempresa->id}}'><i class = 'material-icons'>info</i></a>
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
