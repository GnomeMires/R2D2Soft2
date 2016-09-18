@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Lista de Motos</h1>
            <form class = 'col s3' method = 'get' action = '{{url("moto")}}/create'>
                <button class = 'btn btn-primary' type = 'submit'>Agregar Moto</button>
            </form>
            <br>
            

            <br>
            <table id="pagination" class = "table table-striped table-bordered">
                <thead>
                    
                    <th>No. Chasis</th>
                    
                    <th>No. Motor</th>
                    
                    <th>Placa Control</th>
                    
                    <th>Color</th>
                    
                    <th>Marca</th>

                    <th>Dueño</th>
                    
                    <th>CI</th>

                    <th>Acciones</th>
                    <th>Fotos</th>
                </thead>
                <tbody>
                    @foreach($motos as $Moto)
                    <tr>
                        
                        <td>{{$Moto->noChasis}}</td>
                        
                        <td>{{$Moto->noMotor}}</td>
                        
                        <td>{{$Moto->placaControl}}</td>
                        
                        <td>{{$Moto->color}}</td>
                        
                        <td>{{$Moto->marca}}</td>

                        
                                                <td>{{$Moto->persona->nombreCompleto}}</td>

                                                <td>{{$Moto->persona->nitCI}}</td>
                        
                        
                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/moto/{{$Moto->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/moto/{{$Moto->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/moto/{{$Moto->id}}'><i class = 'material-icons'>info</i></a>
                        </td>
                        <td>
                            <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/moto/{{$Moto->id}}/edit'><i class = 'material-icons'>add_a_photo</i></a>
                            <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/moto/{{$Moto->id}}'><i class = 'material-icons'>collections</i></a>
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