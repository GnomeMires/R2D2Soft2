@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Compra Index</h1>
            <form class = 'col s3' method = 'get' action = '{{url("compra")}}/create'>
                <button class = 'btn btn-primary' type = 'submit'>Nueva Compra</button>
            </form>
            <br>
            
            <br>
            <table class = "table table-striped table-bordered">
                <thead>
                    <th>Repuesto</th>

                    <th>Codigo</th>

                    <th>Cantidad</th>
                    
                    <th>Tipo Compra</th>
                    
                    <th>Costo Total</th>
                    
                    <th>Costo Unitario</th>
                    
                    <th>Fecha Compra</th>
                    
                    <th>Observaciones</th>

                    <th>Proovedor</th>

                    <th>Acciones</th>
                </thead>
                <tbody>
                    @foreach($compras as $Compra)
                    <tr>
                        <td>{{$Compra->repuestosmoto->nombreRepuesto}}</td>

                        <td>{{$Compra->repuestosmoto->codigoRepuesto}}</td>
                        
                        <td>{{$Compra->cantidad}}</td>
                        
                        <td>{{$Compra->tipoCompra}}</td>
                        
                        <td>{{$Compra->costoTotal}}</td>
                        
                        <td>{{$Compra->costoUnitario}}</td>
                        
                        <td>{{$Compra->fechaCompra}}</td>
                        
                        <td>{{$Compra->Observaciones}}</td>

                        <td>{{$Compra->proovedor->nombreProovedor}}</td>

                        <td>
                                <a data-toggle="modal" data-target="#myModal" class = 'delete btn btn-danger btn-xs' data-link = "/compra/{{$Compra->id}}/deleteMsg" ><i class = 'material-icons'>delete</i></a>
                                <a href = '#' class = 'viewEdit btn btn-primary btn-xs' data-link = '/compra/{{$Compra->id}}/edit'><i class = 'material-icons'>edit</i></a>
                                <a href = '#' class = 'viewShow btn btn-warning btn-xs' data-link = '/compra/{{$Compra->id}}'><i class = 'material-icons'>zoom_in</i></a>
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