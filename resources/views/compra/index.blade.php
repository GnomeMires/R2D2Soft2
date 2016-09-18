@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Compra Index</h1>
            <form class = 'col s3' method = 'get' action = '{{url("compra")}}/create'>
                <button class = 'btn btn-primary' type = 'submit'>Create New Compra</button>
            </form>
            <br>
            
            <div class="dropdown">
                <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Associate
                <span class="caret"></span>
                </button>
                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                    
                    <li><a href="http://localhost:8000/datosempresa">Datosempresa</a></li>
                    
                    <li><a href="http://localhost:8000/repuestosmoto">Repuestosmoto</a></li>
                    
                    <li><a href="http://localhost:8000/proovedor">Proovedor</a></li>
                    
                </ul>
            </div>
            
            <br>
            <table class = "table table-striped table-bordered">
                <thead>
                    
                    <th>cantidad</th>
                    
                    <th>tipoCompra</th>
                    
                    <th>costoTotal</th>
                    
                    <th>costoUnitario</th>
                    
                    <th>fechaCompra</th>
                    
                    <th>Observaciones</th>
                    
                    
                    
                    
                    <th>nombreEmpresa</th>
                    
                    <th>nit</th>
                    
                    <th>direccion</th>
                    
                    <th>telefono</th>
                    
                    <th>celular</th>
                    
                    
                    
                    <th>nombreRepuesto</th>
                    
                    <th>codigoRepuesto</th>
                    
                    <th>tipoRepuesto</th>
                    
                    <th>precioVenta</th>
                    
                    
                    
                    <th>nombreProovedor</th>
                    
                    <th>direccion</th>
                    
                    <th>ubicacion</th>
                    
                    <th>telefono</th>
                    
                    <th>correo</th>
                    
                    
                    
                    <th>actions</th>
                </thead>
                <tbody>
                    @foreach($compras as $Compra)
                    <tr>
                        
                        <td>{{$Compra->cantidad}}</td>
                        
                        <td>{{$Compra->tipoCompra}}</td>
                        
                        <td>{{$Compra->costoTotal}}</td>
                        
                        <td>{{$Compra->costoUnitario}}</td>
                        
                        <td>{{$Compra->fechaCompra}}</td>
                        
                        <td>{{$Compra->Observaciones}}</td>
                        
                        
                        
                                                <td>{{$Compra->datosempresa->nombreEmpresa}}</td>

                                                <td>{{$Compra->datosempresa->nit}}</td>

                                                <td>{{$Compra->datosempresa->direccion}}</td>

                                                <td>{{$Compra->datosempresa->telefono}}</td>

                                                <td>{{$Compra->datosempresa->celular}}</td>

                        
                        
                                                <td>{{$Compra->repuestosmoto->nombreRepuesto}}</td>

                                                <td>{{$Compra->repuestosmoto->codigoRepuesto}}</td>

                                                <td>{{$Compra->repuestosmoto->tipoRepuesto}}</td>

                                                <td>{{$Compra->repuestosmoto->precioVenta}}</td>

                        
                        
                                                <td>{{$Compra->proovedor->nombreProovedor}}</td>

                                                <td>{{$Compra->proovedor->direccion}}</td>

                                                <td>{{$Compra->proovedor->ubicacion}}</td>

                                                <td>{{$Compra->proovedor->telefono}}</td>

                                                <td>{{$Compra->proovedor->correo}}</td>

                        
                        
                        
                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/compra/{{$Compra->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/compra/{{$Compra->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/compra/{{$Compra->id}}'><i class = 'material-icons'>info</i></a>
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