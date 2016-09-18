@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Fotosmoto Index</h1>
            <form class = 'col s3' method = 'get' action = '{{url("fotosmoto")}}/create'>
                <button class = 'btn btn-primary' type = 'submit'>Create New Fotosmoto</button>
            </form>
            <br>
            
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Associate
                <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    
                    <li><a href="/moto">Moto</a></li>
                    
                </ul>
            </div>
            
            <br>
            <table id="pagination" class = "table table-striped table-bordered">
                <thead>
                    
                    <th>descripcionEstado</th>
                    
                    <th>fechaFoto</th>
                    
                    <th>direccionFoto</th>
                    
                    
                    
                    
                    <th>noChasis</th>
                    
                    <th>noMotor</th>
                    
                    <th>placaControl</th>
                    
                    <th>color</th>
                    
                    <th>marca</th>
                    
                    <th>detalles</th>
                    
                    
                    
                    <th>actions</th>
                </thead>
                <tbody>
                    @foreach($fotosmotos as $Fotosmoto)
                    <tr>
                        
                        <td>{{$Fotosmoto->descripcionEstado}}</td>
                        
                        <td>{{$Fotosmoto->fechaFoto}}</td>
                        
                        <td>{{$Fotosmoto->direccionFoto}}</td>
                        
                        
                        
                                                <td>{{$Fotosmoto->moto->noChasis}}</td>

                                                <td>{{$Fotosmoto->moto->noMotor}}</td>

                                                <td>{{$Fotosmoto->moto->placaControl}}</td>

                                                <td>{{$Fotosmoto->moto->color}}</td>

                                                <td>{{$Fotosmoto->moto->marca}}</td>

                                                <td>{{$Fotosmoto->moto->detalles}}</td>

                        
                        
                        
                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/fotosmoto/{{$Fotosmoto->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/fotosmoto/{{$Fotosmoto->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/fotosmoto/{{$Fotosmoto->id}}'><i class = 'material-icons'>info</i></a>
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