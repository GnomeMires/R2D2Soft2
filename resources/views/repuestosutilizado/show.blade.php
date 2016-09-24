@extends('layouts.app')

@section('content')
        <div class = 'container'>
            <h1>Show Repuestosutilizado</h1>
            <br>
            <form method = 'get' action = '{{url("trabajomoto")}}/{{$repuestosutilizado->trabajomoto_id}}/show'>
                <button class = 'btn btn-primary'>Atras</button>
            </form>
            <br>
            <table class = 'table table-bordered'>
                <thead>
                    <th>Key</th>
                    <th>Value</th>
                </thead>
                <tbody>

                    
                    <tr>
                        <td>
                            <b><i>Fecha de Uso : </i></b>
                        </td>
                        <td>{{$repuestosutilizado->fechaUso}}</td>
                    </tr>
                    
                    <tr>
                        <td>
                            <b><i>Cantidad : </i></b>
                        </td>
                        <td>{{$repuestosutilizado->cantidad}}</td>
                    </tr>
                    

                                                
                        
                        <tr>
                        <td>
                            <b><i>Fecha de Recepcion : </i></b>
                        </td>
                        <td>{{$repuestosutilizado->trabajomoto->fechaRecepcion}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>Fecha de Entrega : </i></b>
                        </td>
                        <td>{{$repuestosutilizado->trabajomoto->fechaEntrega}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>Costo Total : </i></b>
                        </td>
                        <td>{{$repuestosutilizado->trabajomoto->costoTotal}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>Estado : </i></b>
                        </td>
                        <td>{{$repuestosutilizado->trabajomoto->estado}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>Descripcion : </i></b>
                        </td>
                        <td>{{$repuestosutilizado->descripcion}}</td>
                        </tr>
                        
                        
                        
                        <tr>
                        <td>
                            <b><i>Nombre Repuesto : </i></b>
                        </td>
                        <td>{{$repuestosutilizado->repuestosmoto->nombreRepuesto}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>Codigo Repuesto : </i></b>
                        </td>
                        <td>{{$repuestosutilizado->repuestosmoto->codigoRepuesto}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>Tipo de Repuesto : </i></b>
                        </td>
                        <td>{{$repuestosutilizado->repuestosmoto->tipoRepuesto}}</td>
                        </tr>
                        
                        <tr>
                        <td>
                            <b><i>precioVenta : </i></b>
                        </td>
                        <td>{{$repuestosutilizado->repuestosmoto->precioVenta}}</td>
                        </tr>
                        
                        
                        
                </tbody>
            </table>
        </div>
@endsection