@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Lista de Fotos Moto</h1>
            <form class = 'col s3' method = 'get' action = '{{url("fotosmoto")}}/{{$id}}/create'>
                <button class = 'btn btn-primary' type = 'submit'>Agregar Nuevas Fotos</button>
            </form>
            <br>
            

            
            <br>
            <table id="pagination" class = "table table-striped table-bordered">
                <thead>

                    <th>Foto</th>
                    
                    <th>Descripcion</th>
                    
                    <th>Fecha</th>
                    
                    <th>Direccion Fisica</th>
                    

                    <th>Placa</th>

                    <th>Marca</th>
                    
                    
                    
                    <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach($fotosmotos as $Fotosmoto)
                    <tr>

                        <td><a href="{{URL::asset('images/'.$Fotosmoto->direccionFoto)}}" data-toggle="lightbox"><img src="{{URL::asset('images/'.$Fotosmoto->direccionFoto)}}" class="img-responsive" width="50px" height="50px"></a></td>
                        
                        <td>{{$Fotosmoto->descripcionEstado}}</td>
                        
                        <td>{{$Fotosmoto->fechaFoto}}</td>
                        
                        <td>{{$Fotosmoto->direccionFoto}}</td>
                        
                        


                                                <td>{{$Fotosmoto->moto->placaControl}}</td>

                                                <td>{{$Fotosmoto->moto->marca}}</td>
                        
                        
                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/fotosmoto/{{$Fotosmoto->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/fotosmoto/{{$Fotosmoto->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/fotosmoto/{{$Fotosmoto->id}}'><i class = 'material-icons'>zoom_in</i></a>
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