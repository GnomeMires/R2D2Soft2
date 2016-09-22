@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Lista de Repuestos y Productos</h1>
            <form class = 'col s3' method = 'get' action = '{{url("repuestosmoto")}}/create'>
                <button class = 'btn btn-primary' type = 'submit'>Nuevo Repuesto/Producto</button>
            </form>
            <br>
            
            <br>
            <table id="pagination" class = "table table-striped table-bordered">
                <thead>
                    
                    <th>Nombre</th>
                    
                    <th>Codigo</th>
                    
                    <th>Cantidad</th>
                    
                    <th>Unidad</th>
                    
                    <th>Tipo</th>
                    
                    <th>Precio Venta Bs.</th>
                    

                    <th>Proovedor</th>

                    <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach($repuestosmotos as $Repuestosmoto)
                    <tr>
                        
                        <td>{{$Repuestosmoto->nombreRepuesto}}</td>
                        
                        <td>{{$Repuestosmoto->codigoRepuesto}}</td>
                        
                        <td>{{$Repuestosmoto->cantidad}}</td>
                        
                        <td>{{$Repuestosmoto->unidadMedida}}</td>
                        
                        <td>{{$Repuestosmoto->tipoRepuesto}}</td>
                        
                        <td>{{$Repuestosmoto->precioVenta}}</td>

                        <td>{{$Repuestosmoto->datosempresa->nombreEmpresa}}</td>
                        
                        
                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/repuestosmoto/{{$Repuestosmoto->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/repuestosmoto/{{$Repuestosmoto->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/repuestosmoto/{{$Repuestosmoto->id}}'><i class = 'material-icons'>zoom_in</i></a>
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